<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function __construct()
    {
        View::share('categories', Category::query()->whereNull('category_id')->get());
    }

    public function index()
    {
        return view('shop.index', [
            'products' => Product::all()
        ]);
    }

    public function overview(Product $product)
    {
        return view('shop.product', [
            'product' => $product
        ]);
    }
}
