@extends("backoffice.layout")
@section("content")
    <table class="table">
        <tr>
            <td>id</td>
            <td>name</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td><a href="{{route("categories.show", ["category" => $category->id])}}">{{$category->name}}</a></td>
                <td>
                    <a href="{{route("categories.edit", ['category' => $category])}}"
                       class="btn btn-outline-dark">edit</a>
                </td>
                <td>
                    <form action="{{route("categories.destroy", ['category' => $category])}}" method="post">
                        @method('DELETE')
                        {{csrf_field()}}
                        <input type="submit" value="Delete" class="btn btn-outline-danger">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>
    <a href="{{route("categories.create")}}" class="btn btn-outline-success">add a category</a>
@endsection
