<?php

namespace App\Http\Controllers;

use App\Models\Bouquet;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class CategoryController extends Controller
{

    public function single($slug)
    {
        $category = Category::where('slug', $slug)
            ->firstOrFail();

        $products = Bouquet::where('category_id', $category->id)->get();

        return view('category.single', compact('category', 'products'));
    }

}
