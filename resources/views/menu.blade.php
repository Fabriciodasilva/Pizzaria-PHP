<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
    @vite("resources/css/menu.css")
</head>

<body>
<h1>Pizzas in all flavors!!!</h1>
<a href="{{route('payment')}}"><h2>Payments</h2></a>
<div class="menu">
    @foreach ($pizzas as $pizza)
            <div class="card">
                <div class="pizza-img">
                    <img src="" alt="pizza-img" />
                </div>
                <div class="pizza-info">
                    <form action="{{route('menu')}}" method="POST">
                        @csrf
                        <h5><input class="id" name="id" type="number"  value="{{$id}}" readonly ></h5>
                        <h5><input type="text" class="name" name="name" value="{{$pizza->name}}" readonly></h5>
                        <h6> <input type="text" class="price" name="price" value="{{$pizza->price}}" readonly></h6>
                        <h5><input type="number" class="qtd" name="qtd"></h5>
                        <button type="submit" class="submit">Order</button>
                    </form>
                </div>
            </div>
    
    @endforeach
</div>
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
 


