@extends('layout')

@section('content')
    <h1>Review delete</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach()
            </ul>
        </div>
    @endif
    @can('delete reviews')
    {!! Form::open(['url' => 'reviews/'.$review->id, 'method' => 'DELETE']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $review->title, array_merge(['class' => 'form-control', 'id' =>'title', 'disabled']))!!}
    </div>

    <div class="form-group">
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', $review->user->name, array_merge(['class' => 'form-control', 'id' =>'username', 'disabled']))!!}
    </div>

    <div class="form-group">
        {!! Form::label('product', 'Product') !!}
        {!! Form::text('product',  $review->product->name, array_merge(['class' => 'form-control', 'id' =>'username', 'disabled']))!!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::text('body', $review->body, array_merge(['class' => 'form-control', 'id' =>'body', 'disabled']))!!}
    </div>

    <div class="form-group">
        {!! Form::label('rating', 'Rating') !!}
        {!! Form::text('rating', $review->rating, array_merge(['class' => 'form-control', 'id' =>'rating', 'disabled']))!!}
    </div>

    <div class="form-group">
        <button class="btn btn-default"><a href={{ url('/reviews') }}>Back</a></button>
        {!! Form::submit('Delete', array('class' => 'btn btn-danger')); !!}
        {!! Form::close() !!}
    </div>
@endcan
@endsection
