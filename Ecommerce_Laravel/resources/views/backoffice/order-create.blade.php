@extends("backoffice.layout")
@section("content")
    <h1>Add an order to the datatbase</h1>
    <form class="row g-3" method="post" action="{{route('backofficeOrderStore')}}">
        {{csrf_field()}}
        <div class="col-md-6">
            <label for="customer" class="form-label">customer</label>
            <select name="customer" id="customer" class="form-select">
                @foreach($customers as $customer)
                    <option>{{$customer->first_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="date" value="{{date("Y-m-d")}}">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
