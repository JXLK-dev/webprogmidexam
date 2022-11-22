@extends('navbar-template')
@section('content')
    <div class="position-content sub-header">
        Book Detail
    </div>
    <div class="position-content book-detail-content">
        <img src="{{ asset($book->image) }}" alt="image">
        <h1>Title: {{ $book->title }}</h1>
        <h1>Author: {{ $book->author }}</h1>
        <h1>Publisher: {{ $book->author }}</h1>
        <h1>Year: {{ $book->year }}</h1>
        <h1>Synopses: <br>{{ $book->synopsis }}</h1>
    </div>
@endsection
