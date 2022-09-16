@extends('layout')
@section('content')
    <h1>Liste des produits</h1>
    <a href="{{route('product', ['order' => 'price'])}}" class="btn btn-primary">Order by Price</a>
    <a href="{{route('product', ['order' => 'name'])}}" class="btn btn-primary">Order by name</a>
    <a href="{{route('product')}}" class="btn btn-primary">Normal</a>
    <div class='container-fluid d-flex flex-wrap' style='background-color: #d5d5d5'>
        @foreach($products as $product)
            <div class="card col-4 me-3 ms-3 mb-3 mt-3" style="width: 15rem;">
                <a href="{{ route('productID', ['product' => $product])}}">
                    <img src="{{asset($product->image)}}"
                         style="height: 200px; border-bottom: darkgrey 1px dotted;">
                </a>
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="container">
                        <h5 class="card-title"></h5>
                        <p>
                            <span style="text-decoration: line-through red;">{{$product->name}}</span>
                            € TTC <strong>-{{$product->discount}}%</strong></p>
                        <p>Prix :
                            <strong>{{$product->price}}</strong>€
                        </p>
                    </div>
                    <div class="container">
                        <form method="get" action="{{route('cart')}}">
                            <div class="container mb-3 ps-0 pe-0">
                                <label class="mb-1" for="quantity_purchased">Quantité : </label>
                                <input class="mb-3" type="number" name="quantity_purchased" min="0" value="0">
                                <input type="hidden" value="{{$product->id}}" name="id">
                                <input type="submit" class="btn btn-primary" value="Ajouter au panier">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
