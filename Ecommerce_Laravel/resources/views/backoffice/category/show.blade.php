@extends("backoffice.layout")
@section("content")
    <h1>{{$category->name}}</h1>
    <table class="table" style="vertical-align: middle">
        <tr>
            <td>image</td>
            <td>id</td>
            <td>name</td>
            <td>price</td>
            <td>weight</td>
            <td>category</td>
            <td>available</td>
            <td>quantity</td>
            <td>discount</td>
        </tr>
        @foreach($category->product as $product)
            <tr>
                <td><img  style="height: 100px;" src="{{asset($product->image)}}" alt=""></td>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->weight}}</td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->available}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->discount}}</td>
            </tr>

        @endforeach
    </table>
@endsection
