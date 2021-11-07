<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $cart = auth()->check() ? auth()->user()->cart()->firstOrCreate(['session_id' => $request->session()->getId()]) : Cart::query()->where('session_id', $request->session()->getId())->firstOrCreate();

        $cart->products()->attach($request->product_id);  

        return response()->json([
            'success' => true,
            'qty' => $cart->products()->count(),
            'total' => $cart->subtotal,
            'items' => view('layouts.cart.items', compact('cart'))->render()
        ]);
    }

    public function remove(Request $request)
    {
        $cart = auth()->check() ? auth()->user()->cart()->firstOrCreate(['session_id' => $request->session()->getId()]) : Cart::query()->where('session_id', $request->session()->getId())->firstOrCreate();

        $cart->products()->detach($request->product_id);

        return response()->json([
            'success' => true,
            'qty' => $cart->products()->count(),
            'total' => $cart->subtotal,
            'items' => view('layouts.cart.items', compact('cart'))->render()
        ]);
    }
}
