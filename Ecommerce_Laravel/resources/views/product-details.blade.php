@extends('layout')
@section('content')
    <h1>Fiche du produit {{$id}}</h1>
    <div class="card col-4 me-3 ms-3 mb-3 mt-3" style="width: 15rem;">
        <img src="https://www.designevo.com/res/templates/thumb_small/red-jar-and-strawberry-jam.webp" style="height: 200px; border-bottom: darkgrey 1px dotted;">
        <div class="card-body d-flex flex-column justify-content-between">
            <div class="container">
                <h5 class="card-title">Produit{{$id}}</h5>
                <p>
                    <span style="text-decoration: line-through red;">100 </span>
                    € TTC <strong>-50%</strong></p>
                <p>Prix :
                    <strong>50 </strong>€
                </p>
            </div>
        </div>
    </div>
@endsection
