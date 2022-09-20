@extends('backoffice.layout')
@section('content')
    <h1 class="mb-3">Liste des produits dans la base de données</h1>
    <table class="table" style="vertical-align: middle">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
            <td>image</td>
            <td>weight</td>
            <td>category_id</td>
            <td>available</td>
            <td>quantity</td>
            <td>discount</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td><img  style="height: 100px;" src="{{asset($product->image)}}" alt=""></td>
                <td>{{$product->weight}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->available}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->discount}}</td>
                <td>
                    <a href="{{route("backofficeProductEdit", ['product' => $product])}}" class="btn btn-outline-dark">edit</a>
                </td>
                <td>
                    <form style="margin: 0;" action="{{route("backofficeProductDelete", ['product' => $product])}}" method="post">
                        @method('DELETE')
                        {{csrf_field()}}
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <a href="{{route("backofficeProductCreate")}}" class="btn btn-outline-success mb-5">add a product</a>
@endsection
