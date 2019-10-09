<table>
    <thead>
        <tr>
            <td>Image</td>
            <td>Name</td>
            <td>Price</td>
            <td>Number</td>
            <td>ACtion</td>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $product)
            <tr>
                <td><img src="http://res.cloudinary.com/thaocute2906/image/upload/c_fit,h_100,w_100/{{ $product->image }}.png" alt=""></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td><input id="number{{$product->id}}" type="number" min="1" value="1"></td>
                <td><button onclick="addToCart({{$product->id}})">Add To Cart</button></td>
            </tr>
        @endforeach
    </tbody>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function addToCart(id) {
            number = $('#number'+id).val();
            $.ajax({
                url: "{{url('/addToCart')}}/"+id,
                type: "post",
                data: {
                    'number': number,
                    _token: '{{csrf_token()}}'
                },
                success: function(data) {
                    console.log(data);
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(textStatus);
                }
            });
        }
    </script>
</table>