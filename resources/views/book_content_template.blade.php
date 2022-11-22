<div class="position-content book-background">
    @foreach ($books as $book)
        <div class="book-content">
            <div class="margin-container">
                <img src="{{ URL::asset($book->image) }}" alt="image" class="book-image">
                <h1>{{ $book->title }}</h1>
                <h2><br>by<br>{{ $book->author }}</h2>
                <a href="/book_detail/{{ $book->id }}"class="btn btn-primary">Details</a>
            </div>
        </div>
    @endforeach
</div>
