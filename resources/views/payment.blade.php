<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Confirm payment</h1>
     @foreach ($orders as $pedido)
    <form action="{{route("order")}}" method="post">
        @csrf
        <label for="name">Name:</label>   
        <input type="text" name="name" value="{{$pedido['name']}}" readonly >
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{$pedido['price']}}" readonly>
        <label for="qtd">Quantidade:</label>
        <input type="text" name="qtd" value= "{{$pedido['qtd']}}" readonly>
        <label for="total">Total: </label>
        <input type="text" name="total" value="{{(float)$pedido['price'] * (float)$pedido['qtd']}}" readonly>
        <button type="submit">Confirm purchase</button>
    </form>
    <br>
@endforeach



    
</body>
</html>





