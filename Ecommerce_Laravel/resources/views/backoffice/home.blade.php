@extends('backoffice.layout')
@section('content')
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 80vh;">
        <h1>Voici mon petit backoffice</h1>
        <p class="fs-5 col-md-8 text-center">Tu vas voir c'est cozy ici. On s'amuse bien à edit la base de données. On
            ajoute des produits, des customers, des orders.</p>

        <div class="mb-2 mt-5">
            <a href="{{route('products.index')}}" class="btn btn-primary btn-lg px-4">Go to Products</a>
        </div>
    </div>
@endsection
