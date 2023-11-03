@include('header')

<body>
    <div class="container mt-5">
    <h1>Detail Pesanan</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $order->nama }}</td>
                    <td>Rp {{ number_format($order->total, 0, ',', '.') }}</td>
                    <td>{{ $order->alamat }}</td>
                    <td>{{ $order->status }}</td>
                    <td><a href="/checkout/{{ $order->id }}/detail" class="btn btn-primary">Detail</a></td>
                </tr>
            </tbody>
        </table>
        <button id="pay-button" class="btn btn-primary">Bayar Sekarang</button>
    </div>
</div>

  <!-- @TODO: You can add the desired ID as a reference for the embedId parameter. -->
  <div id="snap-container"></div>

  <script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
      // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
      // Also, use the embedId that you defined in the div above, here.
      window.snap.embed('YOUR_SNAP_TOKEN', {
        embedId: 'snap-container'
      });
    });
  </script>
@include('footer')