<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($orderby = null)
    {
        if ($orderby !== null){
            return view('product-list', ['products' => Product::orderBy($orderby)->get()]);
        }
        return view('product-list', ['products' => Product::all()]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product-details', ['product' => $product]);
    }

}
