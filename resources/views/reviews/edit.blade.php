@extends('layout')

@section('content')
    <h1>Review edit</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach()
            </ul>
        </div>
    @endif
    @can('edit reviews')
    {!! Form::open(['url' => 'reviews/'.$review->id, 'method' => 'PATCH']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $review->title, array_merge(['class' => 'form-control', 'id' =>'title']))!!}
    </div>

    <div class="form-group">
        {!! Form::label('username', 'Username') !!}
        {!! Form::text('username', $review->user->name, array_merge(['class' => 'form-control', 'disabled' =>'disabled']))!!}
    </div>

    <div class="form-group">
    {!! Form::label('product', 'Product') !!}
    {!! Form::select('product_id', $products, $review->product->id, array_merge(['class' => 'form-control', 'placeholder' => 'Pick a product....'])); !!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body') !!}
        {!! Form::text('body', $review->body, array_merge(['class' => 'form-control', 'id' =>'body']))!!}
    </div>

    <div class="form-group">
        {!! Form::label('rating', 'Rating') !!}
        {!! Form::text('rating', $review->rating, array_merge(['class' => 'form-control', 'id' =>'rating']))!!}
    </div>

    <div class="form-group">
        <button class="btn btn-default"><a href={{ url('/reviews') }}>Back</a></button>
        {!! Form::submit('Submit', array('class' => 'btn btn-warning')); !!}
        {!! Form::close() !!}
    </div>
    @endcan
@endsection