@include('header')
    {{-- produk --}}
<div class="container-fluid p-2 d-flex justify-content-center align-items-center " style=" height:100vh">
    <div class="row mt-5 ms-3" style="height:100% ">
        <h1 style="margin-top: 100px">Toko Wayang Ramayana</h1>
        <hr>
        @foreach ($products as $p)
        <div class="col-3 d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-img">
                    <img src="uploads/{{ $p->gambar }}" alt="gambar Product"  class="img-fluid" />
                </div>
                <div class="card-info">
                    <h5>{{ $p->nama }}</h5>
                    <p>Rp {{ number_format($p-> harga, 0 ,'.','.') }}</p>
                    <a href="/detailProduct/{{ $p ->id }}">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@include('footer')