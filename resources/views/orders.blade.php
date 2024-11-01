   <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orders</title>
    @vite("resources/css/order.css")
  </head>
  <body>
    <h1>Your Orders</h1>
              <div class="order">
                @foreach($confirmed as $pedido)
                  <div class="order-card">
    
                          <h5 class="order-id">Order id: {{$pedido['confirmed_id']}}</h5>
                          <div class="order-img">img</div>
                          <p class="order-name">{{$pedido['name']}}</p>
                          <h5 class="order-status">Status:</h5>
                          <p class="order-price">price: {{$pedido['price']}}</p>
                          <p class="order-qtd">qtd: {{$pedido['qtd']}}</p>
                          <p class="total">total: {{(float)$pedido['price'] * (float)$pedido['qtd']}}</p>
                          <button class="order-details">See More</button>
    
                  </div>
                @endforeach
              </div>
  </body>