@extends('layout')

@section('content')
    <h1>Product edit</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach()
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'product/'.$product->id, 'method' => 'PATCH']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $product->name, array_merge(['class' => 'form-control', 'id' =>'name']))!!}
    </div>

    <div class="form-group">
        <button class="btn btn-default"><a href={{ url('/product') }}>Back</a></button>
        {!! Form::submit('Submit', array('class' => 'btn btn-warning')); !!}
        {!! Form::close() !!}
    </div>
@endsection