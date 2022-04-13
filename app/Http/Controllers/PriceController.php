<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Flower;

class PriceController extends Controller
{
    public function index ()
    {
        $prices = Price::where('user_id', \Auth::user()->id)->get();
        return view('price.index', compact('prices'));
    }

    public function addPrice ()
    {
        return view('price.add-price');
    }

    public function addPriceStore (Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'amount' => 'required',
        ]);

        $price = new Price();

        $price->user_id = \Auth::user()->id;
        $price->name = $request->name;
        $price->color = $request->color;
        $price->amount = $request->amount;
        $price->height = $request->height;
        $price->made_in = $request->made_in;
        $price->sort = $request->sort;
        $price->comment = $request->comment;
        $price->save();

        return redirect()->route('price', app()->getLocale());
    }

    public function getFloverName (Request $request)
    {
        $lists = Flower::where('title', 'like', '%'.$request->f.'%')->get();
        $html = view('price.flover-list', compact('lists'))->render();
        return response()->json(['html' => $html], 200);
    }

    public function editPrice ($lang, Price $price)
    {
        if(\Auth::user()->id != $price->user_id) return abort(404);
        return view('price.edit-price', compact('price'));
    }

    public function editPriceStore ($lang, Price $price, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'color' => 'required',
            'amount' => 'required',
        ]);

        $price->name = $request->name;
        $price->color = $request->color;
        $price->amount = $request->amount;
        $price->height = $request->height;
        $price->made_in = $request->made_in;
        $price->sort = $request->sort;
        $price->comment = $request->comment;
        $price->save();

        return redirect()->route('price', app()->getLocale());
    }

    public function deletePrice ($lang, Price $price)
    {
        $price->delete();
        return redirect()->back();
    }
}
