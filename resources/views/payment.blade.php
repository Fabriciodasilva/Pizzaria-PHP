<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    @vite("resources/css/payment.css")
</head>
<body>
<h1>Confirm payments</h1>
<div class="payment">
    <div class="pay-list">
        @foreach ($orders as $pedido)
        <form class="pay-card" action="{{route('order')}}"  method="post">
            @csrf
            
                <input type="number" name="user_id" class="user-id" value="user:{{$pedido['user_id']}}" readonly>
                <input type="number" name="id" class="id" value="id: {{$pedido['id']}}" readonly>
                 
                <label class="label-name" for="name">Name:</label>
                <input type="text" class="name" name="name" value="{{$pedido['name']}}" readonly >
                
               
                <label class="label-price" for="price">Price:</label>
                <input type="text" class="price" name="price" value="{{$pedido['price']}}" readonly>
                
                
                <label class="label-qtd" for="qtd">Quantidade:</label>
                <input type="text" class="qtd" name="qtd" value= "{{$pedido['qtd']}}" readonly>
                
                <label for="total" class="label-total">Total: </label>
                <input type="text" class="total" name="total" value="{{(float)$pedido['price'] * (float)$pedido['qtd']}}" readonly>

                <button type="submit" class="submit">Confirm purchase</button>
        </form>
        @endforeach
    </div>
</div>
    
</body>
</html>





