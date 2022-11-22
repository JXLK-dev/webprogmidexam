@extends('for-book-loop')
@section('content')
    <div class="position-content sub-header">
        Category
    </div>
    <div class="position-content">
        @foreach ($books as $book)
            <img src="{{ URL::asset($book->image) }}" alt="">
            <h1>{{ $book->title }}</h1>
            <h2><br>by<br>{{ $book->author }}</h2>
            <a href="/book/{{ $book->id }}">details</a>
        @endforeach
    </div>
@endsection
