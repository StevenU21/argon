<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('examples.products.index');
    }

    public function create(): View
    {
        return view('examples.products.create');
    }

    public function edit(Product $product): View
    {
        return view('examples.products.edit', compact('product'));
    }

    public function show(Product $product): View
    {
        return view('examples.products.show', compact('product'));
    }
}
