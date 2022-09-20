@extends("backoffice.layout")
@section("content")
    <h1>Add a customer to the datatbase</h1>
    <form class="row g-3" method="post" action="{{route('customers.store')}}">
        {{csrf_field()}}
        <div class="col-md-6">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="First name">
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Last name</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="Last name">
        </div>
        <div class="col-md-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" aria-describedby="inputGroupPrepend2"
                   required placeholder="Address">
        </div>
        <div class="col-md-6">
            <label for="postal_code" class="form-label">Postal code</label>
            <input type="number" class="form-control" id="postal_code" name="postal_code" required placeholder="Postal code">
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required placeholder="City">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
