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
                <h2>Register Page</h2>
            </div>
            <div class="col-8">
               <form action="{{ route('registerNew') }}" method="POST">
                @csrf
                <label class=" form-label mt-3">Name :</label>
                <input type="text" name="name"  class="form-control">

                <label  class=" form-label mt-3">Email :</label>
                <input type="email" name="email" class="form-control">
                
                <label  class=" form-label mt-3">Age :</label>
                <input type="text" name="age" class="form-control">

                <label class=" form-label mt-3">Role :</label>
                <input type="text" name="role" class="form-control">

                <label for class=" form-label mt-3">Passowrd :</label>
                <input type="password" name="password" class="form-control">

                <label class=" form-label mt-3">Confirm Password :</label>
                <input type="passowrd" name="password_confirmation" class="form-control">

                <input type="submit" name~="register" value="Register" class="btn btn-primary mt-3">
               </form>
               @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
            </div>
        </div>
    </div>
    <script src="/bootstrap/css/bootstrap.js"></script>
</body>
</html>