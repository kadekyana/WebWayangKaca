<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" style="font-weight: 700" href="#">
                Unik E-Commerce
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">History</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight: 700;" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bag-heart-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
        <div class="row mt-5 ms-3" style="height:90%">
            <h1 class="display-5 text-center">Recommendation</h1>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/jadi.jpeg') }}" alt="" />
                <div class="card-info">
                    <h2>Nama Wayang</h2>
                    <p>Deskripsi / Harga</p>
                    <a href="">Details</a>
                </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/jadi.jpeg') }}" alt="" />
                <div class="card-info">
                    <h2>Nama Wayang</h2>
                    <p>Deskripsi / Harga</p>
                    <a href="">Details</a>
                </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/jadi.jpeg') }}" alt="" />
                <div class="card-info">
                    <h2>Nama Wayang</h2>
                    <p>Deskripsi / Harga</p>
                    <a href="">Details</a>
                </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/jadi.jpeg') }}" alt="" />
                <div class="card-info">
                    <h2>Nama Wayang</h2>
                    <p>Deskripsi / Harga</p>
                    <a href="">Details</a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer py-2" style="background-color: grey">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="flex-direction: column">
                <h5>Wayang Kaca</h5>
                <p>Phone: 123-456-7890</p>
        </div>
    </div>
</footer>

</body>
</html>