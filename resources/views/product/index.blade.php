@extends('layout')

@section('content')
    <h1>Products</h1>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <button class="btn btn-default"><a href={{ url('/product/create') }}>Create</a></button>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{$product->id}}</th>
                <td><a href="product/{{$product->id}}">{{$product->name}}</a></td>
                <td><a href="{{URL::to('product/'.$product->id.'/edit')}}"><button class="btn btn-warning" type="submit">Edit</button></a></td>
                <td><a href="{{URL::to('product/'.$product->id.'/delete')}}"><button class="btn btn-danger" type="submit">Delete</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection