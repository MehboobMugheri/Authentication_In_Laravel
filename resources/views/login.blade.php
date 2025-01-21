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
                <h2>Login Form</h2>
            </div>
            <div class="col-8">
               <form action="{{ route('loginSame') }}" method="POST">
                @csrf   
                <label for="" class="mt-3">Email :</label>
                <input type="email" name="email" class="form form-control">
                <label for="" class="mt-3">Passowrd :</label>
                <input type="passoword" name="password" class="form form-control">
                <input type="submit" name="login" value="login" class="btn btn-primary mt-3">
               </form>
            </div>
        </div>
    </div>
    <script src="/bootstrap/css/bootstrap.js"></script>
</body>
</html>