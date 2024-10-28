   @foreach ($confirmed as $pedido)
    <form>
        <input type="number" name="user_id" value="{{$pedido['user_id']}}" readonly>
        <input type="number" name="id" value="{{$pedido['confirmed_id']}}" readonly>
        <label for="name">Name:</label>   
        <input type="text" name="name" value="{{$pedido['name']}}" readonly >
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{$pedido['price']}}" readonly>
        <label for="qtd">Quantidade:</label>
        <input type="text" name="qtd" value= "{{$pedido['qtd']}}" readonly>
        <label for="total">Total: </label>
        <input type="text" name="total" value="{{(float)$pedido['price'] * (float)$pedido['qtd']}}" readonly>
    </form>
    <br>
@endforeach