@extends('navbar-template')
@section('content')
    <div class="section">
        @yield('content')
        {{-- @foreach ($book_details as $key->$details)
            <img src="{{ URL::asset($details->image) }}" alt="image">
        @endforeach --}}
    </div>
@endsection
