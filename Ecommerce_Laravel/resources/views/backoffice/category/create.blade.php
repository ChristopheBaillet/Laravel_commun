@extends("backoffice.layout")
@section("content")
    <h1>Add a category to the datatbase</h1>
    <form class="row g-3" method="post" action="{{route('categories.store')}}">
        {{csrf_field()}}
        <div class="col-md-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="inputGroupPrepend2"
                   required placeholder="name">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
