<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function home(): View
    {
        return view('backoffice.home');
    }


    public function index(): View
    {
        $products = Product::all();
        return view('backoffice.product.index', ['products' => $products]);
    }

    public function create(): View
    {
        $categories = Category::select('name')->get();
        return view("backoffice.product.create", ['categories' => $categories]);
    }


    public function store(Request $request): RedirectResponse
    {
        $request = $this->validateRequest($request);
        $request = $this->convert($request);
        $product = new Product;
        $product = $this->addAttributesToProduct($request, $product);
        $product->save();

        return redirect(route('products.index'));

    }


    public function show(Product $product): View
    {
        return view("backoffice.test", ["product" => $product]);
    }


    public function edit(Product $product): View
    {
        if ($product->available === 0) {
            $product->available = "";
        } else {
            $product->available = "checked";
        }
        $product->category = Category::find($product->category_id)->name;
        $categories = Category::select('name')->get();

        return view("backoffice.product.edit", ["product" => $product, "categories" => $categories]);
    }


    public function update(Request $request, Product $product): RedirectResponse
    {
        $request = $this->validateRequest($request);
        $request = $this->convert($request);
        $product = $this->addAttributesToProduct($request, $product);
        $product->save();

        return redirect(route('products.index'));

    }


    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect(route('products.index'));
    }

    public function convert(Request $request): Request
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

    public function addAttributesToProduct(Request $request, Product $product): Product
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

    public function validateRequest(Request $request)
    {
        $request->validate([
            "name" => "required",
            "price" => "required | integer | min:1"
        ]);

        return $request;
    }
}
