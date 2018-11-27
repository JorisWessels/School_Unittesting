@extends('layout')

@section('content')
    <h1>Reviews</h1>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @can('create reviews')
    <button class="btn btn-default"><a href={{ url('/reviews/create') }}>Create</a></button>
    @endcan
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Product</th>
            <th scope="col">Author</th>
            <th scope="col">Rating</th>
            @can('edit reviews')
            <th scope="col">Edit</th>
            @endcan
            @can('delete reviews')
            <th scope="col">Delete</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @foreach($reviews as $review)
        <tr>
            <th scope="row">{{$review->id}}</th>
            <td>{{$review->title}}</td>
            <td>{{$review->product->name}}</td>
            <td>{{$review->user->name}}</td>
            <td>{{$review->rating}}</td>
            @can('edit reviews')
            <td><a href="{{URL::to('reviews/'.$review->id.'/edit')}}"><button class="btn btn-warning" type="submit">Edit</button></a></td>
            @endcan
            @can('delete reviews')
            <td><a href="{{URL::to('reviews/'.$review->id.'/delete')}}"><button class="btn btn-danger" type="submit">Delete</button></a></td>
            @endcan
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection