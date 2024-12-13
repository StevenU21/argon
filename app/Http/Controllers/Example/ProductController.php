<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Example\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();   
        return view('examples.products.index', compact('products'));
    }
}
