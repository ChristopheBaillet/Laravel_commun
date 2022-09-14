<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke()
    {
        return "Liste des produits";
    }

    public function __product($id)
    {
        return "Fiche du produit ".$id;
    }
}
