@extends('layout')

@section('content')
    <h1>Review create</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach()
            </ul>
        </div>
    @endif
    @can('create reviews')
    {!! Form::open(['url' => '/reviews']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', '', array_merge(['class' => 'form-control', 'id' =>'title']))!!}
        </div>

        <div class="form-group">
            {!! Form::label('username', 'Username') !!}
            {!! Form::text('username', Auth::user()->name , array_merge(['class' => 'form-control', 'id' => 'username', 'disabled' => 'disabled'])) !!}

            {!! Form::hidden('user_id', Auth::user()->id ) !!}
        </div>

        <div class="form-group">
            {!! Form::label('product', 'Product') !!}
            {!! Form::select('product_id', $products, null, array_merge(['class' => 'form-control', 'placeholder' => 'Pick a product....'])); !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body') !!}
            {!! Form::text('body', '', array_merge(['class' => 'form-control', 'id' =>'body']))!!}
        </div>

        <div class="form-group">
            {!! Form::label('rating', 'Rating') !!}
            {!! Form::text('rating', '', array_merge(['class' => 'form-control', 'id' =>'rating']))!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
            {!! Form::close() !!}
        </div>
    @endcan
@endsection