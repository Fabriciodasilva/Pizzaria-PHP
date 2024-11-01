<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite("resources/css/login.css")
</head>
<body>
    <div class="login">
      <form action="{{route('login')}}" method="post" class="form">
        @csrf
        <h2>Sign In to your Account</h2>
        <label for="email">Email:</label>
        <input type="email" name="email" />
        <label for="password">Password:</label>
        <input type="password" name="password" />
        <button type="submit">SignIn</button>
        <br />
        <h4><a href="{{route('register')}}">Or create an account</a></h4>
      </form>
    </div>
</body>
</html>
