@extends('admin.layout')
@section('style')
    <style>
        .categoryDiv{
            text-align: center;
            padding-top: 40px;
        }
        .categoryDiv h2{
            font-size: 40px;
            margin-bottom: 40px;
        }

        .inputCategory{
            color: black;
        }
        
    </style>
@endsection

@section('admin-content')
    @if (Session::has('message'))
        <div class="alert alert-success">
            <button class="close"  data-dismiss="alert" >X</button>
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="categoryDiv">
        <h2>Add Category</h2>

        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <input type="text" name="category" class="inputCategory" class="form-control">
            <input type="submit" class="btn btn-primary" value="Add Category">
        </form>
    </div>

@endsection