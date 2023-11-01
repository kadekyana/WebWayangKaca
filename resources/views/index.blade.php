@include('header')

    <div class="container-fluid" style="background-color: #333333; height:100vh">
        <div class="row" style="height:100%">
            <div class="col d-flex justify-content-center align-items-center text-white" style="flex-direction: column">
                <h1>Wayang Kaca</h1>
                <p class="text text-center">Karya Seni Unik Dari Desa NagaSepaha - Kabupaten Buleleng - Provinsi Bali</p>  
                <div class="content" style="display:flex; width:220px;justify-content:space-between">
                    <a class="btn btn-primary btn-lg" href="#" role="button">History</a>
                    <a class="btn btn-primary btn-lg" href="#" role="button">Product</a>
                </div>
            </div>
            <div class="col d-flex justify-content-center align-items-center">
                <video src="{{ asset('video/landing.mp4') }}" style="border-radius:20px" height="350px" controls muted autoplay loop ></video>
            </div>
        </div>
    </div>

    <div class="container-fluid" style=" height:100vh">
        <div class="row mt-5 ms-3">
            <h1 class="display-5 text-center mb-5">Recommendation</h1>
            @foreach ($products as $p)
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="uploads/{{ $p -> gambar }}" alt="" />
                <div class="card-info">
                    <h4>{{ $p -> nama }}</h4>
                    <p>Rp.{{ $p-> harga }}</p>
                    <a href="">Details</a>
                </div>
                </div>    
            </div>
            @endforeach
        </div>
    </div>

@include('footer')