@extends('layout');
@section("content")
    <p>{{$product->name}}</p>
    <p>{{$product->category->name}}</p>
@endsection
