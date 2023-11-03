@include('header')
<div class="container mt-5">
    <h1>Your Cart</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama Product</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $c)
            @php
                $subtotal = $c->product->harga * $c->quantity;
                $total += $subtotal;
            @endphp
                <tr>
                    <td>{{ $c->product->nama }}</td>
                    <td>Rp {{ number_format($c->product->harga, 0, ',', '.') }}</td>
                    <td>{{ $c->quantity }}</td>
                    <td>Rp {{ number_format($subtotal, 0,'.','.') }}</td>
                    <td>
                        <form action="/hapus_cart/{{ $c ->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn-danger" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-right">
        <p>Total: <strong>Rp {{ number_format($total, 0, ',', '.') }}</strong></p>
        <a href="/checkout" class="btn btn-primary">Proceed to Checkout</a>
    </div>
</div>

@include('footer')