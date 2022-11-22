@extends('navbar-template')
@section('content')
    <div class="position-content sub-header">
        Book Detail
    </div>
    <div class="position-content">
        <img src="{{ asset($book->image) }}" alt="image" class="book-detail-image">
        <h5>Title: {{ $book->title }}</h5>
        <h5>Author: {{ $book->author }}</h5>
        <h5>Publisher: {{ $book->author }}</h5>
        <h5>Year: {{ $book->year }}</h5>
        <h5 class="p-bottom">Synopses: <br>{{ $book->synopsis }}</h5>
    </div>
@endsection
