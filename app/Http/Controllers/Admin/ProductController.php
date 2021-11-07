<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index', [
            'models' => Product::with(['category'])->get()
        ]);
    }

    public function create()
    {
        return view('admin.product.form', [
            'action' => route('admin.products.store'),
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('admin.products.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('admin.product.form', [
            'action' => route('admin.products.update', $product),
            'categories' => Category::all(),
            'model' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return redirect()->route('admin.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
