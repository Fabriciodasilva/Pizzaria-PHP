<!DOCTYPE html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<h1>Menu de Pizzas</h1>

<a href="{{route("payment")}}"><h2>Payment</h2></a>
@foreach ($pizzas as $pizza)
    <form action="{{route("menu")}}" method="post">
        @csrf
        <h3 class="name">{{$pizza->name}}</h3>
        <h3 class="price">{{$pizza->price}}</h3>
        <input type="number" name="pizza" class="qtd"  >
        <button type="submit" class="submit">Order</button>
    </form>
@endforeach

@vite('resources/js/order.js')
</body>



{{-- @if($session)
      @foreach ($session as $list)
         @foreach ($list as $pizza)
             <h3>{{$pizza}}</h3>
         @endforeach
     @endforeach
     

@endif --}}
 


