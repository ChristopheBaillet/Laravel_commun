<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $orderby = $this->orderby($request);
        if ($orderby === null) {
            $products = Product::all();
        } else {
            $products = Product::orderBy($orderby)->get();
        }
        return view('product-list', ['products' => $products]);
    }

    public function show(Product $product): View
    {
        return view('product-details', ['product' => $product]);
    }


    public function orderby(Request $request): ?string
    {
        $orderby = null;
        if ($request->has('order')) {
            switch ($request->get('order')) {
                case 'name':
                    $orderby = 'name';
                    break;
                case 'price':
                    $orderby = 'price';
                    break;
                default :
                    $orderby = 'id';
            }
        }
        return $orderby;
    }
}
