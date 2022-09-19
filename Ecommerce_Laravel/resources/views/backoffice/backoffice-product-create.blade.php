@extends('backoffice.backoffice-layout')
@section('content')
    <h1>Add a product to the datatbase</h1>
    <form class="row g-3">
        <div class="col-md-4">
            <label for="validationDefault01" class="form-label">Name</label>
            <input type="text" class="form-control" id="validationDefault01" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02" class="form-label">Category</label>
            <select class="form-select" id="validationDefault02" required>
                @foreach($categories as $categorie)
                    <option value="">{{$categorie->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername" class="form-label">Image URL</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationDefault03" class="form-label">Price</label>
            <input type="number" class="form-control" id="validationDefault03" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault04" class="form-label">available</label>
            <select class="form-select" id="validationDefault04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Weight</label>
            <input type="number" class="form-control" id="validationDefault05" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault06" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="validationDefault06" required>
        </div>
        <div class="col-md-3">
            <label for="validationDefault07" class="form-label">Discount %</label>
            <input type="number" class="form-control" id="validationDefault07" required>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Agree to terms and conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
