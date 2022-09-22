@extends('layout')
@section('content')
    <h1>Fiche de {{$product->name}}</h1>
    <div class="row">
        <div class="card col-4 me-3 ms-3 mb-3 mt-3" style="width: 15rem;">
            <img src="{{asset($product->image)}}" style="height: 200px; border-bottom: darkgrey 1px dotted;">
            <div class="card-body d-flex flex-column justify-content-between">
                <div class="container">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p>
                        <span style="text-decoration: line-through red;">{{$product->price}}</span>
                        € TTC <strong>-{{$product->discount}}%</strong></p>
                    <p>Prix :
                        <strong> {{$product->price}}</strong>€
                    </p>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex align-items-center">
            <p>Une petite description de l'objet pour pousser les gens à l'acheter</p>
        </div>
    </div>
    <a href="{{route('product')}}" class="btn btn-primary">Return</a>
@endsection
