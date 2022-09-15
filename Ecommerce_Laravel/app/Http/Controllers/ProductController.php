<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::select('select * from products');
        return view('product-list', ['products' => $products]);
    }

    public function show($id)
    {
        $product = DB::select('select * from products where id = ?', [$id])[0];
        return view('product-details', ['product' => $product]);
    }
}
