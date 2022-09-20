@extends('backoffice.layout')
@section('content')
    <h1>Edit a product</h1>
    <form class="row g-3" method="post" action="{{route('products.update', [$product->id])}}">
        @method('PUT')
        {{csrf_field()}}
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" required>
        </div>
        <div class="col-md-6">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category" required>
                @foreach($categories as $categorie)
                    <option>{{$categorie->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label for="image" class="form-label">Image URL</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" id="image" name="image" value="{{$product->image}}"
                       aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}" required>
        </div>
        <div class="col-md-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="number" class="form-control" id="weight" name="weight" value="{{$product->weight}}" required>
        </div>
        <div class="col-md-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}"
                   required>
        </div>
        <div class="col-md-3">
            <label for="discount" class="form-label">Discount %</label>
            <input type="number" class="form-control" id="discount" name="discount" value="{{$product->discount}}"
                   required>
        </div>
        <div class="col-12">
            <div class="form-check">
                <label for="available" class="form-check-label">available</label>
                <input type="checkbox" name="available" id="available" {{$product->available}}
                class="form-check-input">
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
