{{-- chart --}}
<section id="cart">
    <nav class="chart">
    <div class="d-flex me-5">
        <ul class=" navbar-nav">
            {{-- produk --}}
            <div class="chart-content">
                <div class="chart-box">
                    <img src="{{ asset('image/hd.png')}}" alt="" class="chart-img">
                    <div class="detail-box">
                        <div class="chart-produk-title">Wayang Ramayana</div>
                        <div class="chart-price">Rp 50.000</div>
                        <input type="number" value="1" class="chart-quantity">
                    </div>
                </div>

            </div>

        </ul>
    </div>

    {{-- total --}}
    <div class="total ">
        <div class="total-title">Total</div>
        <div class="total-price">Rp0</div>
    </div>

    <ul class="listCard"></ul>
    <div class="checkout d-flex justify-content-center align-items-center">
        <a href="#" class="btn btn-primary w-80">Bayar Sekarang</a>
    </div>
</nav>
</section>
</nav>