<!DOCTYPE html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
<h1>Menu de Pizzas</h1>

<a href="{{route('payment')}}"><h2>Payment</h2></a>
@foreach ($pizzas as $pizza)
    <form method="post" action="{{route('menu')}}">
        @csrf
        <input class="id" name="id" type="number" value="{{$id}}" readonly >
        <input type="text" class="name">{{$pizza->name}}</input>
        <input type="text" class="price">{{$pizza->price}}</input>
        <input type="number" class="qtd" name="qtd"   >
        <button type="submit" class="submit">Order</button>
    </form>
@endforeach
@if (session()->has('success'))
     <h3>{{session('success')}}</h3>
@endif
@if (session()->has('error'))
     <h3>{{session('error')}}</h3>
@endif

</body>




{{-- @if($session)
      @foreach ($session as $list)
         @foreach ($list as $pizza)
             <h3>{{$pizza}}</h3>
         @endforeach
     @endforeach
     

@endif --}}
 


