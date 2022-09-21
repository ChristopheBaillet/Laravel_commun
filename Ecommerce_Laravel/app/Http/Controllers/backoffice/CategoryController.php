<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{

    public function index(): View
    {
        $categories = Category::all();
        return view("backoffice.category.index", ["categories" => $categories]);
    }

    public function create(): View
    {
        return view("backoffice.category.create");
    }



    public function store(Request $request) : RedirectResponse
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->route("categories.index");
    }


    public function show(Category $category)
    {
        return view("backoffice.category.show", ["category" => $category]);
    }

    public function edit(Category $category):View
    {
        return view("backoffice.category.edit", ["category" => $category]);
    }


    public function update(Request $request, Category $category): RedirectResponse
    {
        $category->name = $request->name;
        $category->save();
        return redirect()->route("categories.index");
    }

    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route("categories.index");
    }
}
