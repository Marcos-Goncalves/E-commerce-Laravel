<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <title>Login - Marcos Trainning</title>
</head>
<body>
  <div class="teste">
    <div class="flex-left">
      <span class="title-shop text-center">$tylelife Shop</span>
      <img height="500px" src="{{ asset('images/teste.png') }}" alt="">
    </div>
    <div>
      <form action="{{route('auth')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Email: </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="yourname@mail.com">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password: </label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*******">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <div class="signup">
          <a href="{{ route('register') }}">Register</a>
          <a href="{{ route('about') }}">| About Us</a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>