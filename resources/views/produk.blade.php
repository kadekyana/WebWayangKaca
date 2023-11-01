@include('header')
    {{-- produk --}}
<div class="container p-5 d-flex justify-content-center align-items-center">
    <div class="row p-5">
        <h2 class="mt-5 text-start">Toko Wayang Ramayana</h2>
        <hr>
        @foreach ($products as $p)
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-img">
                    <img src="uploads/{{ $p->gambar }}" alt="gambar Product" class="img-fluid" style="max-width: 100%; height: auto;" />
                </div>
                <div class="card-info">
                    <h5>{{ $p->nama }}</h5>
                    <p>Rp.{{ $p->harga }}</p>
                    <a href="/detail">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('footer')