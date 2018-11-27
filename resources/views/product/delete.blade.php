@extends('layout')

@section('content')
    <h1>Product delete</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach()
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => 'product/'.$product->id, 'method' => 'DELETE']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', $product->name, array_merge(['class' => 'form-control', 'id' =>'name', 'disabled']))!!}
    </div>

    <div class="form-group">
        <button class="btn btn-default"><a href={{ url('/product') }}>Back</a></button>
        {!! Form::submit('Delete', array('class' => 'btn btn-danger')); !!}
        {!! Form::close() !!}
    </div>

@endsection
