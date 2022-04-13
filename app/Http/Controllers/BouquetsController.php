<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryBouquet;
use App\Models\Price;
use App\Models\Bouquet;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BouquetsController extends Controller
{
    public function index ()
    {
        $lists = Bouquet::where('user_id', \Auth::user()->id)->get();
        return view('bouquets.index', compact('lists'));
    }

    public function create ()
    {
        $categories = CategoryBouquet::get();
        $prices = Price::where('user_id', \Auth::user()->id)->get();
        return view('bouquets.add', compact('categories', 'prices'));
    }

    public function createStore (Request $request)
    {
        $validated = $request->validate([
            'image' => 'required',
            'name' => 'required',
            'packing_time' => 'required',
            'width' => 'required',
            'height' => 'required',
            'category_id' => 'required',
            'color' => 'required',
            'price' => 'required',
        ]);

        $bouquet = new Bouquet();

        $image = $request->file('image')->store('bouquets', 'public');

        $prices = [];

        foreach ($request->price as $price){
            $prices[] = $price;
        }

        $bouquet->user_id = \Auth::user()->id;
        $bouquet->name = $request->name;
        $bouquet->image = 1;
        $bouquet->img = $image;
        $bouquet->packing_time = $request->packing_time;
        $bouquet->width = $request->width;
        $bouquet->height = $request->height;
        $bouquet->category_id = $request->category_id;
        $bouquet->color = $request->color;
        $bouquet->components = json_encode($prices);
        $bouquet->addons = $request->addons;
        $bouquet->leaflets = $request->leaflets;
        $bouquet->toys = $request->toys;
        $bouquet->sweets = $request->sweets;
        $bouquet->save();

        return redirect()->route('bouquets', app()->getLocale());

    }

    public function copy ($lang, $bouquet)
    {
        $bouquet = Bouquet::find($bouquet);
        $newBouquet = $bouquet->replicate();
        $newBouquet->created_at = Carbon::now();
        $newBouquet->save();

        return redirect()->back();
    }

    public function delete ($lang, Bouquet $bouquet)
    {
        $bouquet->delete();
        return redirect()->back();
    }

    public function edit ($lang, Bouquet $bouquet)
    {
        $categories = CategoryBouquet::get();
        $prices = Price::where('user_id', \Auth::user()->id)->get();
        return view('bouquets.edit', compact('categories', 'prices', 'bouquet'));
    }

    public function editSave ($lang, Bouquet $bouquet, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'packing_time' => 'required',
            'width' => 'required',
            'height' => 'required',
            'category_id' => 'required',
            'color' => 'required',
            'price' => 'required',
        ]);

        if($request->image)
            $image = $request->file('image')->store('bouquets', 'public');

        $prices = [];

        foreach ($request->price as $price){
            if(!$price) continue;
            $prices[] = $price;
        }

        $bouquet->name = $request->name;
        $bouquet->image = 1;
        if(isset($image))
            $bouquet->img = $image;
        $bouquet->packing_time = $request->packing_time;
        $bouquet->width = $request->width;
        $bouquet->height = $request->height;
        $bouquet->category_id = $request->category_id;
        $bouquet->color = $request->color;
        $bouquet->components = json_encode($prices);
        $bouquet->addons = $request->addons;
        $bouquet->leaflets = $request->leaflets;
        $bouquet->toys = $request->toys;
        $bouquet->sweets = $request->sweets;
        $bouquet->save();

        return redirect()->route('bouquets', app()->getLocale());
    }

    public function single($id)
    {
        $product = Bouquet::where('id', $id)->firstOrFail();

        return view('bouquets.single', compact('product'));
    }

    public function filter(Request $request)
    {
        if(isset($request->min) && isset($request->max))
        {
            $bouquets = DB::table('bouquets')
                ->where('price', '>=', $request->min)
                ->where('price', '<=', $request->max)
                ->get();
        }

        if($request->ajax())
        {
            return view('ajax.bouquets', compact('bouquets'))->render();
        }
    }

    public function filtercategory(Request $request)
    {
        if(isset($request->min) && isset($request->max) && isset($request->category_id))
        {
            $bouquets = DB::table('bouquets')
                ->where('category_id', $request->category_id)
                ->where('price', '>=', $request->min)
                ->where('price', '<=', $request->max)
                ->get();
        }

        if($request->ajax())
        {
            return view('ajax.bouquets', compact('bouquets'))->render();
        }
    }
}
