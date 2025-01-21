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
                <h2>Welcome, {{ Auth::user()->name }}</h2>
            </div>
            <div class="col-8">
             <h2 class="bg-info">New Post</h2>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit assumenda in ullam numquam. Iusto itaque commodi voluptate, ab veniam sequi ut odio, corporis similique accusantium ratione adipisci, doloremque assumenda voluptatibus. Nisi nobis nam sunt?</p>
             <a href="{{ route('dashboard') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <script src="/bootstrap/css/bootstrap.js"></script>
</body>
</html>