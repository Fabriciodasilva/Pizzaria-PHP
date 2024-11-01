<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    @vite("resources/css/register.css")
</head>
<body>
    <div class="register">
      <form action="{{route('register')}}" method="post" class="form">
        @csrf
        <h2>Create an account</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" />
        <label for="email">Email:</label>
        <input type="email" name="email" />
        <label for="password">Password:</label>
        <input type="password" name="password" />
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation" />
        <button type="submit">SignUp</button>
        <br />
        <h4><a href="{{route('login')}}">Sign in if you have an account</a></h4>
      </form>
    </div>
</body>
</html>
