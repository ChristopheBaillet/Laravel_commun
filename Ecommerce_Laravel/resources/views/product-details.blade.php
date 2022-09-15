@extends('layout')
@section('content')
    <h1>Fiche du produit {{$product->id}}</h1>
    <div class="card col-4 me-3 ms-3 mb-3 mt-3" style="width: 15rem;">
        <img src="{{asset($product->image)}}" style="height: 200px; border-bottom: darkgrey 1px dotted;">
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="container">
                <h5 class="card-title"></h5>
                <p>
                    <span style="text-decoration: line-through red;">{{$product->price}}</span>
                    € TTC <strong>-{{$product->discount}}%</strong></p>
                <p>Prix :
                    <strong> {{$product->price}}</strong>€
                </p>
            </div>
        </div>
    </div>
    <a href="/product" class="btn btn-primary">Return</a>
@endsection
