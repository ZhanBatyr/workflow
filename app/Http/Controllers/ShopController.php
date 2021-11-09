<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShopController extends Controller
{
    public function __construct()
    {
        View::share('categories', Category::query()->whereNull('category_id')->get());
    }

    public function index()
    {
        return view('instashop.index', [
            'products' => Product::all()
        ]);
    }

    public function overview(Product $product)
    {
        return view('instashop.product', [
            'product' => $product
        ]);
    }

    public function category(Category $category)
    {
        return view('shop.category', [
            'category' => $category,
            'products' => $category->products
        ]);
    }

    public function checkout()
    {
        $cart = auth()->check() ? auth()->user()->cart()->firstOrCreate() : Cart::query()->where('session_id', request()->session()->getId())->firstOrCreate();
        return view('instashop.checkout', [
            'cart' => $cart
        ]);
    }

    public function buy(Request $request, Cart $cart)
    {
        $order = Order::create($request->all());

        foreach ($cart->products as $item) {
            $order->products()->attach($item, [
                'qty' => $cart->products()->where('product_id', $item->id)->count()
            ]);
        }

        $cart->delete();

        return redirect()->route('instashop.index')->with('success', 'Ordered successfully!');
    }
}
