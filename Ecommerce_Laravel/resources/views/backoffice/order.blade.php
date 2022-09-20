@extends("backoffice.layout")
@section("content")
    <h1 class="mb-3">Liste des commandes dans la base de données</h1>
    <table class="table">
        <tr>
            <td>id</td>
            <td>number</td>
            <td>customer id</td>
            <td>customer name</td>
            <td>date</td>
            <td>total</td>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->number}}</td>
                <td>{{$order->customer_id}}</td>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->date}}</td>
                <td>{{$order->total}}</td>
                <td>
                    <a href="{{route("orders.edit", ['order' => $order])}}"
                       class="btn btn-outline-dark">edit</a>
                </td>
                <td>
                    <form action="{{route("orders.destroy", ['order' => $order])}}" method="post">
                        @method('DELETE')
                        {{csrf_field()}}
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <a href="{{route("orders.create")}}" class="btn btn-outline-success mb-5">add an order</a>
@endsection
