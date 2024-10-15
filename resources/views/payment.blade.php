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
              @foreach ($array as $item)
                  <h3>{{$item}}</h3>
              @endforeach
      @endforeach
    @endforeach
</body>
</html>





