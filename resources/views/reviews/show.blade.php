@extends('review.index')

@section('content')
    @foreach ($reviews as $review)
        <tr>
            <td>{{ $review->title }}</td>
            <td>{{ $review->user->name }}</td>
            <td>{{ $review->rating }}</td>
        </tr>
    @endforeach
@endsection