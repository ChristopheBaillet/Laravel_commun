@extends("backoffice.layout")
@section("content")
    <table class="table">
        <tr>
            <td>id</td>
            <td>first name</td>
            <td>last name</td>
            <td>address</td>
            <td>postal code</td>
            <td>city</td>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->first_name}}</td>
                <td>{{$customer->last_name}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->postal_code}}</td>
                <td>{{$customer->city}}</td>
                <td>
                    <a href="{{route("customers.edit", ['customer' => $customer])}}"
                       class="btn btn-outline-dark">edit</a>
                </td>
                <td>
                    <form action="{{route("customers.destroy", ['customer' => $customer])}}" method="post">
                        @method('DELETE')
                        {{csrf_field()}}
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <a href="{{route("customers.create")}}" class="btn btn-outline-success">add a customer</a>
@endsection
