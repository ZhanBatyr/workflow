<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'models' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.category.form', [
            'action' => route('admin.categories.store'),
            'categories' => Category::query()->whereNull('category_id')->get()
        ]);
    }

    public function store(Request $request)
    {
        Category::create($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.category.form', [
            'action' => route('admin.categories.update', $category),
            'model' => $category,
            'categories' => Category::query()->whereNull('category_id')->where('id', '!=', $category->id)->get()
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->categories()->delete();

        $category->delete();

        return back();
    }
}
