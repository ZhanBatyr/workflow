<?php

namespace App\Http\Controllers;

use App\Models\Order;
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

    public function category(Category $category)
    {
        return view('shop.category', [
            'category' => $category,
            'products' => $category->products()->count() ? $category->products : $category->all_products
        ]);
    }

    public function checkout()
    {
        $cart = auth()->check() ? auth()->user()->cart()->firstOrCreate() : Cart::query()->where('session_id', request()->session()->getId())->firstOrCreate();
        return view('shop.checkout', [
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

        return redirect()->route('index')->with('success', 'Ordered successfully!');
    }
}
