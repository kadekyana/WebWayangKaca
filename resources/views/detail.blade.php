@include('header')
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box ">
                <div class="featured-image">
                    <img src="/uploads/{{ $product->gambar }}" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 right-box mt-5">
                <div class="row">
                    <div class="header-text text-center mb-4">
                        <h3>{{$product->nama}}</h3>
                    </div>
                    <div  class="detail-produk">
                        <p>{{ $product->deskripsi }}</p>
                    </div>
                    <div class="detail-produk">
                        <p>Harga : Rp.{{ $product->harga }}</p>
                    </div>
                    <div class="input-group mb-3 mt-3 justify-content-center ">
                        <form action="/tambahkeranjang/{{ $product->id }}" method="POST">
                            @csrf
                            <div class="quantity d-flex justify-content-center p-1">
                                <h5>Jumlah <input type="number" name="quantity" min="1" class="chart-quantity"></h5> 
                            </div>
                            {{-- <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" value="1" min="1"> --}}
                            <button type="submit" class="btn btn-primary w-80">Masukkan Keranjang</button>
                        </form>
                        {{-- <a href="/tambahkeranjang/{{ $product->id }}" class="btn btn-primary w-80">Masukkan Keranjang</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('footer')