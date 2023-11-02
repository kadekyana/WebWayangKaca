@include('header')
    {{-- produk --}}
<div class="container-fluid p-2 d-flex justify-content-center align-items-center " style=" height:100vh">
    <div class="row mt-5 ms-3" style="height:100% ">
        <h2 class="mt-5">Toko Wayang Ramayana</h2>
        <hr>
        @foreach ($products as $p)
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-img">
                    <img src="uploads/{{ $p->gambar }}" alt="gambar Product" class="img-fluid" />
                </div>
                <div class="card-info">
                    <h5>{{ $p->nama }}</h5>
                    <p>Rp.{{ $p->harga }}</p>
                    <a href="/detailProduct">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('footer')