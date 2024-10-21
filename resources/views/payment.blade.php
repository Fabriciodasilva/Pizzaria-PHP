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
    @foreach($orders as $order)
      @foreach ($order as $array)             
                <h3>Name: {{$array["name"]}} </h3>
                <h3>Price: {{$array["price"]}} </h3>
                <h3>Qtd: {{$array["qtd"]}}</h3>
                <h3>Total: {{(float)$array["price"] * (float)$array["qtd"]}} </h3>
                <br>
      @endforeach
    @endforeach
    
</body>
</html>





