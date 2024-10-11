<h1>Menu de Pizzas</h1>
@foreach ($pizzas as $pizza)
    <form action="{{route("menu")}}" method="post">
    @csrf
    <h2>{{$pizza->name}}</h2>
    <h3>{{$pizza->ingredients}}</h3>
    <h3>{{$pizza->price}}</h3>
    <input type="text" name="name" value="{{$pizza->name}}" hidden>
    <input type="number" name="pizza" >
    <button type="submit">Order</button>
</form>
@endforeach


@if ($request)    
<h4>
       {{$request}}
       {{$name}}
       
</h4>

@endif

