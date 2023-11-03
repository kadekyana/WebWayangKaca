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
        <form action="/checkout" method="POST"> <!-- Ganti route sesuai dengan route checkout Anda -->
            @csrf
            <!-- Input hidden untuk setiap ID produk -->
            @foreach ($cartItems as $c)
                <input type="hidden" name="product_ids[]" value="{{ $c->product->id }}">
                <input type="hidden" name="sub_total" value="{{ $subtotal }}">
            @endforeach
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $user->name }}" id="nama" readonly>
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total</label>
                <input type="text" class="form-control" name="total" value="{{$total}}" id="total" readonly>
            </div>
            <div class="mb-3">
                <label for="alamat" class a="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat">
            </div>

            <button type="submit" class="btn btn-primary">Checkout</button>
        </form>
    </div>
</div>

@include('footer')