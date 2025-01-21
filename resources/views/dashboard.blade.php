<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Welcome, {{ Auth::user()->role }}</h2>
            </div>
            <div class="col-8">
                <h2>{{ Auth::user()->role }} Post</h2>
                <p>Lorem ipsum dolor sit. <a href="{{ route('seeMore') }}" class="">See more</a></p>
              {{-- <a href= ></a> --}}
              <a href="{{ route('logout') }}" class="btn btn-danger">LogOut</a>
            </div>
        </div>
    </div>
    <script src="/bootstrap/css/bootstrap.js"></script>
</body>
</html>