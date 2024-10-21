<form action="{{route('register')}}" method="post">
    @csrf
    <label for="name">Name</label>
    <input type="name" name="name" >
    <label for="email">Email</label>
    <input type="email" name="email" >
    <label for="password">password</label>
    <input type="password" name="password" >
    <label for="password_confirmation">confirm password</label>
    <input type="password" name="password_confirmation" >
    <button type="submit">Register</button>
</form>