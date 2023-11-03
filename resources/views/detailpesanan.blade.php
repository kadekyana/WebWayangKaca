@include('header')

<div class="container mt-5">
    <h1>Detail Pesanan</h1>

    <table class="table">
        <thead>
            <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
        </thead>
        <tbody>
                @foreach ($orderDetails as $detail)
                    <tr>
                        <td>{{ $detail->nama }}</td>
                        <td>Rp {{ number_format($detail->harga, 0, ',', '.') }}</td>
                        <td>{{ $detail->jumlah }}</td>
                        <td>Rp {{ number_format($detail->harga * $detail->jumlah, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('footer')
