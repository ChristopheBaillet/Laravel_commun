@extends('backoffice.backoffice-layout')
@section('content')
    <h1>Voici mon petit backoffice</h1>
    <p class="fs-5 col-md-8">Tu vas voir c'est cozy ici. On s'amuse bien à edit la base de données</p>

    <div class="mb-5">
        <a href="{{route('backofficeIndex')}}" class="btn btn-primary btn-lg px-4">Go to Products</a>
    </div>

    <hr class="col-3 col-md-2 mb-5">
@endsection
