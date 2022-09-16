@extends('layout')
@section('content')
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>price</td>
            <td>image</td>
            <td>description</td>
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
                <td>{{$product->image}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->category_id}}</td>
                <td>{{$product->available}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->discount}}</td>
                <td><a href="{{route("backofficeAction", ['product' => $product, 'action' => 'edit'])}}" class="btn btn-outline-dark">edit</a></td>
                <td><a href="{{route("backofficeAction", ['product' => $product, 'action' => 'delete'])}}" class="btn btn-outline-danger">delete</a></td>
            </tr>
        @endforeach

    </table>
    <a href="{{route("backofficeCreate")}}" class="btn btn-outline-success">add a product</a>
@endsection
