<h1>Menu de Pizzas</h1>
@foreach ($pizzas as $pizza)
    <h2>{{$pizza->name}}</h2>
    <h3>{{$pizza->ingredients}}</h3>
    <h3>{{$pizza->price}}</h3>
@endforeach