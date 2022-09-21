<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('backoffice.home');
    }

    public function index()
    {
        $products = Product::all();
        return view('backoffice.product.index', ['products' => $products]);
    }

    public function create()
    {
        $categories = Category::select('name')->get();
        return view("backoffice.product.create", ['categories' => $categories]);
    }


    public function store(Request $request)
    {

        $request = $this->convert($request);
        $product = new Product;
        $product = $this->addAttributesToProduct($request, $product);
        $product->save();
        return redirect(route('products.index'));
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        $product = Product::find($id);
        if ($product->available === 0) {
            $product->available = "";
        } else {
            $product->available = "checked";
        }
        $product->category = Category::find($product->category_id)->name;
        $categories = Category::select('name')->get();
        return view("backoffice.product.edit", ["product" => $product, "categories" => $categories]);
    }


    public function update(Request $request, $id)
    {
        $request = $this->convert($request);
        $product = Product::find($id);
        $product = $this->addAttributesToProduct($request, $product);
        $product->save();
        return redirect(route('products.index'));
    }


    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();
        return redirect(route('products.index'));
    }

    public function convert(Request $request)
    {
        if ($request->available === "on") {
            $request->available = 1;
        } else {
            $request->available = 0;
        }
        $request->category = intval(Category::select('id')->where('name', $request->category)->get()[0]->id);
        $request->price = intval($request->price);
        $request->weight = intval($request->weight);
        $request->discount = intval($request->discount);
        $request->quantity = intval($request->quantity);
        return $request;
    }

    public function addAttributesToProduct(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->weight = $request->weight;
        $product->image = $request->image;
        $product->category_id = $request->category;
        $product->available = $request->available;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        return $product;
    }
}
