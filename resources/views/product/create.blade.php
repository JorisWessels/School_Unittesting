@extends('layout')

@section('content')
    <h1>Product create</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach()
            </ul>
        </div>
    @endif
    {!! Form::open(['url' => '/product']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', '', array_merge(['class' => 'form-control', 'id' =>'name']))!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit', array('class' => 'btn btn-default')); !!}
        {!! Form::close() !!}
    </div>
@endsection