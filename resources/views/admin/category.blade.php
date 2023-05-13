@extends('admin.layout')
@section('style')
    <style>
        .categoryDiv {
            text-align: center;
            padding-top: 40px;
        }

        .categoryDiv h2 {
            font-size: 40px;
            margin-bottom: 40px;
        }

        .inputCategory {
            color: black;
        }

        .center {
            margin: auto;
            margin-top: 30px;
            width: 50%;
            border: 3px solid white;
            text-align: center;
        }
    </style>
@endsection

@section('admin-content')
    @if (Session::has('message'))
        <div class="alert alert-success">
            <button class="close" data-dismiss="alert">X</button>
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="categoryDiv">
        <h2>Add Category</h2>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <input type="text" name="category" class="inputCategory" class="form-control" placeholder="Write Category Name">
            <input type="submit" class="btn btn-primary" value="Add Category">
        </form>
    </div>

    <table class="center">
        <tr>
            <td>Category Name</td>
            <td>Action</td>
        </tr>
        @foreach ($category as $data)
            <tr>
                <td>{{ $data->category_name }}</td>
                <td>
                    <a onclick="return confirm('Are You Sure To Delete This Category?')" href="{{ route('delete.category', $data->id) }}" class="btn btn-danger" >
                        Delete
                    </a>
                </td>
            </tr>
        @endforeach

    </table>
@endsection
