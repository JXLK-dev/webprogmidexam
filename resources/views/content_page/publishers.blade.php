@extends('navbar-template')
@section('content')
    @foreach ($publishers as $publishers)
        <div class="position-content sub-header">
            <img src="{{ asset($publishers->image) }}" alt="publisher logo" class="pub-logo">
            <h2>{{ $publishers->name }}</h2>
            <h2>Address - {{ $publishers->address }}</h2>
            <h2>Phone - {{ $publishers->phone }}</h2>
            <h2>Email - {{ $publishers->email }}</h2>
        </div>
        <div class="position-content book-background">
            @foreach ($publishers->books as $book)
                <div class="book-content">
                    <div class="margin-container">
                        <img src="{{ URL::asset($book->image) }}" alt="image">
                        <h1>{{ $book->title }}</h1>
                        <h2><br>by<br>{{ $book->author }}</h2>
                        <a href="/book_detail/{{ $book->id }}"class="btn btn-primary">Details</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
