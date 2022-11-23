@extends('navbar-template')
@section('content')
    <div class="position-content sub-header">
        {{ $catName->name }}
    </div>
    @include('book_content_template')
@endsection
