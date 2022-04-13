<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        return view('welcome');
    }
    public function product ()
    {
        return view('shop.product');
    }
    public function store ()
    {
        return view('shop.store');
    }
}
