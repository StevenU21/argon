<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::latest()->get();
    }

    public function render()
    {
        return view('livewire.products.product-list');
    }
}
