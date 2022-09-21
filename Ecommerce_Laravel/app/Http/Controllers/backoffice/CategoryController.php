<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    public function edit(int $id):View
    {
        $category = Category::find($id);
        return view("backoffice.category.edit", ["category" => $category]);
    }


    public function update(Request $request, int $id): RedirectResponse
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route("categories.index");
    }

    public function destroy(int $id): RedirectResponse
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route("categories.index");
    }
}
