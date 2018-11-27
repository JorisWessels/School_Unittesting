@extends('layout')

@section('content')
<h1 class="mt-5">403 ERROR</h1>

    <div class="alert alert-danger">
        {{ $exception->getmessage() }}
    </div>
@endsection