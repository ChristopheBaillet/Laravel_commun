@extends("backoffice.layout")
@section("content")
    <h1>Edit an order to the datatbase</h1>
    <form class="row g-3" method="post" action="{{route('backofficeOrderUpdate', [$order->id])}}">
        @method('PUT')
        {{csrf_field()}}
        <div class="col-md-6">
            <label for="customer" class="form-label">customer</label>
            <select name="customer" id="customer" class="form-select">
                <option selected>{{$order->customer}}</option>
                @foreach($customers as $customer)
                    @if($order->customer == $customer->first_name)
                    @else
                        <option>{{$customer->first_name}}</option>
                    @endif

                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">date</label>
            <input type="date" class="form-control" id="date" name="date" placeholder="date" value="{{$order->date}}">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
@endsection
