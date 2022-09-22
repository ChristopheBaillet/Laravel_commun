<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(Request $request)
    {
        $product = Product::find($request->id);
        if($product->quantity < $request->quantity_purchased)
        {
            return redirect()->back()->with('error', 'La quantité demandée est supérieure à celle dans les stocks');
        }
        $cart = $product;
        return view("cart", ["cart" => $cart]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


}
