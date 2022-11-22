<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giant Book Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ URL::asset('fixed.css') }}">
</head>

<body>
    <div class="header-size bg-warning">
        <div class="align-middle row h-100 d-table text-center w-100">
            <h1 class="align-middle title text-white d-table-cell">Giant Book Supplier</h1>
        </div>
    </div>
    <div class="w-100">
        <ul class="nav nav-pills navbar-center">
            <li class="btn navitem" role="presentation"><a href="/">Home</a></li>
            <div role="presentation" class="move-front category">
                <button class="navitem btn dropdown-toggle" type="button" id="category-menu" data-toggle="dropdown">
                    Category
                </button>
                <div class="move-front dropdown-menu">
                    @foreach ($categories as $cat)
                        <a href="/category/{{ $cat->id }}" class="move-front dropdown-item">{{ $cat->name }}</a>
                    @endforeach
                </div>
            </div>
            <li role="presentation" class="btn navitem"><a href="/publishers">Publishers</a></li>
            <li role="presentation" class="btn navitem"><a href="/contact">Contact</a></li>
        </ul>
    </div>
    @yield('content')
    <footer class="text-center fixed-bottom bg-primary text-white">
        &#169 Happy Book Store 2022
    </footer>
</body>

</html>
