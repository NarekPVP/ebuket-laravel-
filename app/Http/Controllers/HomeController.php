<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\City;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteStaff;
use App\Models\Staff;
use App\Models\ShopPoint;
use App\Models\CityPoint;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = City::get();
        return view('home', compact('cities'));
    }

    public function registerShop ()
    {
        $shop = Shop::where('user_id',  \Auth::user()->id)->orderBy('id', 'desc')->first();
        return view('auth.reg-shop', compact('shop'));
    }

    public function registerShopStep($lang, $step, Request $request)
    {
        $shop = Shop::where('user_id', \Auth::user()->id)->first();
        if(!$shop) $shop = new Shop();
        if($step == 1){
            $shop->user_id = \Auth::user()->id;
            // Если указано время с понедельника по пятницу
            if($request->time_all_work_day_start){
                for ($i = 1; $i < 6; $i++){
                    $shop->{'work_shop_'.$i.'_start'} = $request->time_all_work_day_start;
                }

                for ($i = 1; $i < 6; $i++){
                    $shop->{'work_shop_'.$i.'_end'} = $request->time_all_work_day_end;
                }

                $shop->around_the_clock_weekdays = $request->around_the_clock_weekdays;
            }else{
                for ($i = 1; $i < 8; $i++){
                    $shop->{'work_shop_'.$i.'_start'} = $request->{'time_work_day_start_'.$i};
                }

                for ($i = 1; $i < 8; $i++){
                    $shop->{'work_shop_'.$i.'_end'} = $request->{'time_work_day_end_'.$i};
                }
            }
            // Если указаны выходные
            if ($request->time_all_weekend_start){
                $shop->work_shop_6_start = $request->time_all_weekend_start;
                $shop->work_shop_7_start = $request->time_all_weekend_start;

                $shop->work_shop_6_end = $request->time_all_weekend_end;
                $shop->work_shop_7_end = $request->time_all_weekend_end;

                $shop->around_the_clock_weekend = $request->around_the_clock_weekend;
            }

            // Если указано время с понедельника по пятницу для курьера
            if($request->driver_time_all_work_day_start){
                for ($i = 1; $i < 6; $i++){
                    $shop->{'driver_shop_'.$i.'_start'} = $request->driver_time_all_work_day_start;
                }

                for ($i = 1; $i < 6; $i++){
                    $shop->{'driver_shop_'.$i.'_end'} = $request->driver_time_all_work_day_end;
                }

                $shop->driver_around_the_clock_weekdays = $request->driver_around_the_clock_weekdays;
            }else{
                for ($i = 1; $i < 8; $i++){
                    $shop->{'driver_shop_'.$i.'_start'} = $request->{'driver_time_work_day_start_'.$i};
                }

                for ($i = 1; $i < 8; $i++){
                    $shop->{'driver_shop_'.$i.'_end'} = $request->{'driver_time_work_day_end_'.$i};
                }
            }
            // Если указаны выходные
            if ($request->time_all_weekend_start){
                $shop->driver_shop_6_start = $request->driver_time_all_weekend_start;
                $shop->driver_shop_7_start = $request->driver_time_all_weekend_start;

                $shop->driver_shop_6_end = $request->driver_time_all_weekend_end;
                $shop->driver_shop_7_end = $request->driver_time_all_weekend_end;

                $shop->driver_around_the_clock_weekend = $request->driver_around_the_clock_weekend;
            }

            try {
                $shop->save();
                return response()->json(['status' => true], 200);
            }catch (\Exception $ex){
                return response()->json(['status' => false], 500);
            }

        }
        // Второй шаг регистрации магазина
        elseif($step == 2){
            $shop->waiting_for_delivery = $request->waiting_for_delivery;
            $shop->delivery_right_time = $request->delivery_right_time?1:0;
            $shop->cost_of_delivery = $request->cost_of_delivery??$request->cost_of_delivery_day;
            $shop->cost_of_delivery_day = $request->cost_of_delivery_day;
            $shop->cost_of_delivery_evening = $request->cost_of_delivery_evening;
            $shop->cost_of_delivery_night = $request->cost_of_delivery_night;
            $shop->price_max_bouquet = $request->price_max_bouquet;
            $shop->price_max_delivery = $request->price_max_delivery;

            try {
                $shop->save();
                return response()->json(['status' => true], 200);
            }catch (\Exception $ex){
                return response()->json(['status' => false, 'errors' => $ex], 500);
            }
        }
        // Третий шаг регистации магазина
        elseif ($step == 3){
            $shop->payment_by_details = $request->payment_by_details?1:0;
            $shop->prepayment = $request->prepayment?1:0;
            $shop->prepayment_sum = $request->prepayment_sum?1:0.00;
            $shop->payment_courier = $request->payment_courier?1:0;
            $shop->payment_courier_cash = $request->payment_courier_cash?1:0;
            $shop->payment_courier_bank = $request->payment_courier_bank?1:0;
            $shop->cashless_payments = $request->cashless_payments?1:0;
            $shop->payment_by_details_not_my = $request->payment_by_details_not_my?1:0;
            $shop->cashless_payments_not_my = $request->cashless_payments_not_my?1:0;

            try {
                $shop->save();
                return response()->json(['status' => true], 200);
            }catch (\Exception $ex){
                return response()->json(['status' => false, 'errors' => $ex], 500);
            }
        }
        // Четвёртый шаг регистации магазина
        elseif ($step == 4){
            $shop->address = $request->address;

            // Если указано время с понедельника по пятницу
            if($request->export_time_all_work_day_start){
                for ($i = 1; $i < 6; $i++){
                    $shop->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_work_day_start;
                }

                for ($i = 1; $i < 6; $i++){
                    $shop->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_work_day_end;
                }

                $shop->export_around_the_clock = $request->export_around_the_clock?1:0;
            }else{
                for ($i = 1; $i < 8; $i++){
                    $shop->{'export_work_shop_'.$i.'_start'} = $request->{'export_time_work_day_start_'.$i};
                }

                for ($i = 1; $i < 8; $i++){
                    $shop->{'export_work_shop_'.$i.'_end'} = $request->{'export_time_work_day_end_'.$i};
                }
            }
            // Если указаны выходные
            if ($request->time_all_weekend_start){
                $shop->export_work_shop_6_start = $request->export_time_all_weekend_start;
                $shop->export_work_shop_7_start = $request->export_time_all_weekend_start;

                $shop->export_work_shop_6_end = $request->export_time_all_weekend_end;
                $shop->export_work_shop_7_end = $request->export_time_all_weekend_end;

                $shop->around_the_clock_weekend = $request->around_the_clock_weekend;
            }

            $shop->export_pay_cash = $request->export_pay_cash?1:0;
            $shop->export_pay_bank = $request->export_pay_bank?1:0;
            $shop->export_not = $request->export_not?1:0;

            try {
                $shop->save();
                return response()->json(['status' => true], 200);
            }catch (\Exception $ex){
                return response()->json(['status' => false, 'errors' => $ex], 500);
            }
        }
    }

    public function shopsUpdate (Request $request)
    {
        $shop = Shop::where('user_id', \Auth::user()->id)->first();

        $shop->waiting_for_delivery = $request->waiting_for_delivery;
        $shop->delivery_right_time = $request->delivery_right_time?1:0;
        $shop->cost_of_delivery = $request->cost_of_delivery??$request->cost_of_delivery_day;
        $shop->cost_of_delivery_day = $request->cost_of_delivery_day;
        $shop->cost_of_delivery_evening = $request->cost_of_delivery_evening;
        $shop->cost_of_delivery_night = $request->cost_of_delivery_night;
        $shop->price_max_bouquet = $request->price_max_bouquet;
        $shop->price_max_delivery = $request->price_max_delivery;
        $shop->payment_by_details = $request->payment_by_details?1:0;
        $shop->prepayment = $request->prepayment?1:0;
        $shop->prepayment_sum = $request->prepayment_sum?1:0.00;
        $shop->payment_courier = $request->payment_courier?1:0;
        $shop->payment_courier_cash = $request->payment_courier_cash?1:0;
        $shop->payment_courier_bank = $request->payment_courier_bank?1:0;
        $shop->cashless_payments = $request->cashless_payments?1:0;
        $shop->payment_by_details_not_my = $request->payment_by_details_not_my?1:0;
        $shop->cashless_payments_not_my = $request->cashless_payments_not_my?1:0;
        $shop->export_pay_cash = $request->export_pay_cash?1:0;
        $shop->export_pay_bank = $request->export_pay_bank?1:0;
        $shop->export_not = $request->export_not?1:0;
        $shop->desc = $request->desc;
        $shop->name = $request->name;
        $shop->save();

        return back();
    }

    public function profileUpdate (Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
        ]);

        if(\Auth::user()->role_id == 3){
            $this->validate($request, [
                'city_id' => 'required',
            ]);
        }

        if($request->email != \Auth::user()->email) {
            $this->validate($request, [
                'email' => 'required|unique:users',
            ]);
        }

        $user = User::find(\Auth::user()->id);

        $user->shop_name = $request->shop_name??'';
        $user->url = $request->url??'';
        $user->city_id = $request->city_id??null;
        $user->name = $request->name??'';
        $user->phone = $request->phone??'';
        $user->email = $request->email??'';

        if($request->password)
            $user->password = Hash::make($request->password);

        $user->save();

        return back();
    }

    public function staff ()
    {
        $staffs = Staff::where('user_send', \Auth::user()->id)->get();
        return view('profile.staff', compact('staffs'));
    }

    public function staffInvite (Request $request)
    {
        $checkStaff = User::where('email', $request->email)->first();
        if($checkStaff) return back()->with('message', 'Такой email уже занят');

        $staff = new Staff();

        $staff->user_send = \Auth::user()->id;
        $staff->email = $request->email;
        $staff->save();

        Mail::to($request->email)->send(new InviteStaff('Вас приглашает '.\Auth::user()->name.' стать менеджером. '.route('register', app()->getLocale()).'?email='.$request->email.'&register=manager'));

        return back()->with('invite_staff', 'success');
    }

    public function staffDelete($lang, Staff $staff)
    {
        $staff->delete();
        return back();
    }

    public function shops ()
    {
        $shops = Shop::where('user_id', \Auth::user()->id)->get();
        $points = ShopPoint::where('user_id', \Auth::user()->id)->get();
        return view('profile.shops', compact('shops', 'points'));
    }

    public function shopsEdit ()
    {
        $shop = Shop::where('user_id', \Auth::user()->id)->first();
        return view('profile.shop-edit', compact('shop'));
    }

    public function shopPointAdd ()
    {
        $shop = Shop::where('user_id', \Auth::user()->id)->first();
        $managers = Staff::where('user_send', \Auth::user()->id)->get();
        $cities = CityPoint::where('user_id', \Auth::user()->id)->get();
        return view('profile.points.add', compact('shop', 'managers', 'cities'));
    }

    public function shopPointAddStore (Request $request)
    {
        $shopPoint = new ShopPoint();


        $shopPoint->address = $request->address;
        $shopPoint->manager_id = $request->manager_id;
        $shopPoint->user_id = \Auth::user()->id;

        // Если указано время с понедельника по пятницу
        if($request->schedule_work_type == 1){
            for ($i = 1; $i < 6; $i++){
                $shopPoint->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_work_day_start;
            }

            for ($i = 1; $i < 6; $i++){
                $shopPoint->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_work_day_end;
            }

            for ($i = 6; $i < 8; $i++){
                $shopPoint->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_weekend_start;
            }

            for ($i = 6; $i < 8; $i++){
                $shopPoint->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_weekend_end;
            }

            $shopPoint->export_around_the_clock = $request->export_around_the_clock?1:0;
        }else{
            for ($i = 1; $i < 8; $i++){
                $shopPoint->{'export_work_shop_'.$i.'_start'} = $request->{'export_time_work_day_start_'.$i};
            }

            for ($i = 1; $i < 8; $i++){
                $shopPoint->{'export_work_shop_'.$i.'_end'} = $request->{'export_time_work_day_end_'.$i};
            }
        }
        // Если указаны выходные
        if ($request->time_all_weekend_start){
            $shopPoint->export_work_shop_6_start = $request->export_time_all_weekend_start;
            $shopPoint->export_work_shop_7_start = $request->export_time_all_weekend_start;

            $shopPoint->export_work_shop_6_end = $request->export_time_all_weekend_end;
            $shopPoint->export_work_shop_7_end = $request->export_time_all_weekend_end;

            $shopPoint->around_the_clock_weekend = $request->around_the_clock_weekend;
        }

        $shopPoint->export_pay_cash = $request->export_pay_cash?1:0;
        $shopPoint->export_pay_bank = $request->export_pay_bank?1:0;
        $shopPoint->export_not = $request->export_not?1:0;

        $shopPoint->schedule_work_type = $request->schedule_work_type;
        $shopPoint->city_point_id = $request->city_point_id;

        $shopPoint->save();

        return redirect()->route('shops', app()->getLocale());
    }

    public function shopPointEdit ($lang, ShopPoint $point)
    {
        if(\Auth::user()->id != $point->user_id) return abort(404);

        $managers = Staff::where('user_send', \Auth::user()->id)->get();
        $cities = CityPoint::where('user_id', \Auth::user()->id)->get();
        return  view('profile.points.edit', compact('managers', 'point', 'cities'));
    }

    public function shopPointEditUpdate (Request $request, ShopPoint $point)
    {
        if(\Auth::user()->id != $point->user_id) return abort(404);

        $point->address = $request->address;
        $point->manager_id = $request->manager_id;

        // Если указано время с понедельника по пятницу
        if($request->schedule_work_type == 1){
            for ($i = 1; $i < 6; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_work_day_start;
            }

            for ($i = 1; $i < 6; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_work_day_end;
            }

            for ($i = 6; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_weekend_start;
            }

            for ($i = 6; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_weekend_end;
            }

            $point->export_around_the_clock = $request->export_around_the_clock?1:0;
        }else{
            for ($i = 1; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->{'export_time_work_day_start_'.$i};
            }

            for ($i = 1; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->{'export_time_work_day_end_'.$i};
            }
        }
        // Если указаны выходные
        if ($request->time_all_weekend_start){
            $point->export_work_shop_6_start = $request->export_time_all_weekend_start;
            $point->export_work_shop_7_start = $request->export_time_all_weekend_start;

            $point->export_work_shop_6_end = $request->export_time_all_weekend_end;
            $point->export_work_shop_7_end = $request->export_time_all_weekend_end;

            $point->around_the_clock_weekend = $request->around_the_clock_weekend;
        }

        $point->export_pay_cash = $request->export_pay_cash?1:0;
        $point->export_pay_bank = $request->export_pay_bank?1:0;
        $point->export_not = $request->export_not?1:0;

        $point->schedule_work_type = $request->schedule_work_type;
        $point->city_point_id = $request->city_point_id;

        $point->save();

        return redirect()->route('shops', app()->getLocale());
    }

    public function shopCity ()
    {
        $points = CityPoint::where('user_id', \Auth::user()->id)->get();
        return view('profile.cities.index', compact('points'));
    }

    public function shopCityAdd ()
    {
        $cities = City::get();
        $staffs = Staff::where('user_send', \Auth::user()->id)->get();
        return view('profile.cities.add', compact('cities', 'staffs'));
    }

    public function shopCityStore (Request $request)
    {

        $point = new CityPoint();

        $point->city_id = $request->city_id;
        $point->user_id = \Auth::user()->id;

        // Если указано время с понедельника по пятницу
        if($request->schedule_work_type == 1){
            for ($i = 1; $i < 6; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_work_day_start;
            }

            for ($i = 1; $i < 6; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_work_day_end;
            }

            for ($i = 6; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_weekend_start;
            }

            for ($i = 6; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_weekend_end;
            }

            $point->export_around_the_clock = $request->export_around_the_clock?1:0;
        }else{
            for ($i = 1; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->{'export_time_work_day_start_'.$i};
            }

            for ($i = 1; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->{'export_time_work_day_end_'.$i};
            }
        }
        // Если указаны выходные
        if ($request->time_all_weekend_start){
            $point->export_work_shop_6_start = $request->export_time_all_weekend_start;
            $point->export_work_shop_7_start = $request->export_time_all_weekend_start;

            $point->export_work_shop_6_end = $request->export_time_all_weekend_end;
            $point->export_work_shop_7_end = $request->export_time_all_weekend_end;

            $point->around_the_clock_weekend = $request->around_the_clock_weekend;
        }

        $point->cost_of_delivery = $request->cost_of_delivery??0;
        $point->cost_of_delivery_day = $request->cost_of_delivery_day;
        $point->cost_of_delivery_evening = $request->cost_of_delivery_evening;
        $point->cost_of_delivery_night = $request->cost_of_delivery_night;
        $point->price_max_bouquet = $request->price_max_bouquet;
        $point->price_max_delivery = $request->price_max_delivery;

        $point->waiting_for_delivery = $request->waiting_for_delivery;
        $point->delivery_right_time = $request->delivery_right_time?1:0;

        $point->schedule_work_type = $request->schedule_work_type;

        $point->save();

        return redirect()->route('shop.city', app()->getLocale());

    }

    public function shopCityEdit ($lang, CityPoint $point)
    {
        $cities = City::get();
        $staffs = Staff::where('user_send', \Auth::user()->id)->get();
        return view('profile.cities.edit', compact('cities', 'point', 'staffs'));
    }

    public function shopCityUpdate (CityPoint $point, Request $request)
    {
        if($point->user_id != \Auth::user()->id) return abort(404);

        $point->city_id = $request->city_id;

        // Если указано время с понедельника по пятницу
        if($request->schedule_work_type == 1){
            for ($i = 1; $i < 6; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_work_day_start;
            }

            for ($i = 1; $i < 6; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_work_day_end;
            }

            for ($i = 6; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->export_time_all_weekend_start;
            }

            for ($i = 6; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->export_time_all_weekend_end;
            }

            $point->export_around_the_clock = $request->export_around_the_clock?1:0;
        }else{
            for ($i = 1; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_start'} = $request->{'export_time_work_day_start_'.$i};
            }

            for ($i = 1; $i < 8; $i++){
                $point->{'export_work_shop_'.$i.'_end'} = $request->{'export_time_work_day_end_'.$i};
            }
        }
        // Если указаны выходные
        if ($request->time_all_weekend_start){
            $point->export_work_shop_6_start = $request->export_time_all_weekend_start;
            $point->export_work_shop_7_start = $request->export_time_all_weekend_start;

            $point->export_work_shop_6_end = $request->export_time_all_weekend_end;
            $point->export_work_shop_7_end = $request->export_time_all_weekend_end;

            $point->around_the_clock_weekend = $request->around_the_clock_weekend;
        }

        $point->cost_of_delivery = $request->cost_of_delivery??0;
        $point->cost_of_delivery_day = $request->cost_of_delivery_day;
        $point->cost_of_delivery_evening = $request->cost_of_delivery_evening;
        $point->cost_of_delivery_night = $request->cost_of_delivery_night;
        $point->price_max_bouquet = $request->price_max_bouquet;
        $point->price_max_delivery = $request->price_max_delivery;

        $point->waiting_for_delivery = $request->waiting_for_delivery;
        $point->delivery_right_time = $request->delivery_right_time?1:0;

        $point->schedule_work_type = $request->schedule_work_type;

        $point->save();

        return redirect()->route('shop.city', app()->getLocale());
    }

    public function shopCityDelete ($lang, CityPoint $point)
    {
        $point->delete();
        return back();
    }
}
