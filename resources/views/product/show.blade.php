@extends('layout')

@section('content')
    <button class="btn btn-default"><a href={{ url('/product') }}>Back</a></button>
    <h1>Product viewing: {{$product->name}}</h1>
    <hr>
        @foreach($product->reviews as $review)
            <p>Name: {{$review->user->name}}</p>
            <p>Subject: {{$review->title}}</p>
            <p>Description: {{$review->body}}</p>
            <p>Rating: {{$review->rating}}</p>
            <hr>
        @endforeach
@endsection