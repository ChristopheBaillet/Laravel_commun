<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $orderby = null;
        if ($request->has('order')){
            switch ($request->get('order')){
                case 'name':
                    $orderby = 'name';
                    break;
                case 'price':
                    $orderby = 'price';
                    break;
                default :
                    $orderby = 'id';
            }
            $products = Product::orderBy($orderby)->get();
        }else {
            $products = Product::all();
        }
        return view('product-list', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('product-details', ['product' => $product]);
    }

}
