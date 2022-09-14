<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
    {
        return view('product-list');
    }

    public function __product($id)
    {
        return view('product-details', ['id' => $id]);
    }
}
