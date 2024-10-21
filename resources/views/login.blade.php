<form action="{{route('login')}}" method="post">
    @csrf
    <label for="email">Email</label>
    <input type="email" name="email" >
    <label for="password">password</label>
    <input type="password" name="password" >
    <button type="submit">Login</button>
</form>