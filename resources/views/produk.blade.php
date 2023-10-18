<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        .card {
        display: flex;
        justify-content: center;
        flex-direction: column;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
        width: 200px;
        border-radius: 10px;
      }
      .card img {
        width: 100%;
        height: auto;
        border-radius: 10px;
      }
      .card-info {
        margin: 0 10px 30px 10px;
      }
      .card-info a {
        text-decoration: none;
        background-color: blue;
        padding: 10px 30px;
        border-radius: 10px;
        color: white;
      }

      .card-info a:hover {
        background-color: aliceblue;
        color: black;
        border: 1px solid;
      }

    </style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand ms-5" style="font-weight: 700" href="#">
                E-Commerce
            </a>

            <!-- Menu items in the center -->
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
            </div>

            <!-- Login and cart icon on the right -->
            <div class="d-flex me-5">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="font-weight:700"  href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bag-heart-fill" ></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- produk --}}
    <div class="container p-5 d-flex justify-content-center align-items-center">
        <div class="row p-5">
            <h2 class=" mt-5 text-start">Toko Wayang Ramayana</h2>
            <hr>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/hd.png') }}" alt="" />
                <div class="card-info">
                    <h2>Dwi Coders</h2>
                    <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                    <a href="">OTW</a>
                </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/hd.png') }}" alt="" />
                <div class="card-info">
                    <h2>Dwi Coders</h2>
                    <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                    <a href="">OTW</a>
                </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/hd.png') }}" alt="" />
                <div class="card-info">
                    <h2>Dwi Coders</h2>
                    <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                    <a href="">OTW</a>
                </div>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-center align-items-center">
                <div class="card">
                <img src="{{ asset('image/hd.png') }}" alt="" />
                <div class="card-info">
                    <h2>Dwi Coders</h2>
                    <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                    <a href="">OTW</a>
                </div>
                </div>
            </div>

            {{-- jenis produk 2 --}}
            <div class="row">
                <h2 class=" mt-5 text-start">Toko Wayang Ramayana</h2>
                <hr>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card">
                    <img src="{{ asset('image/hd.png') }}" alt="" />
                    <div class="card-info">
                        <h2>Dwi Coders</h2>
                        <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                        <a href="">OTW</a>
                    </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card">
                    <img src="{{ asset('image/hd.png') }}" alt="" />
                    <div class="card-info">
                        <h2>Dwi Coders</h2>
                        <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                        <a href="">OTW</a>
                    </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card">
                    <img src="{{ asset('image/hd.png') }}" alt="" />
                    <div class="card-info">
                        <h2>Dwi Coders</h2>
                        <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                        <a href="">OTW</a>
                    </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <div class="card">
                    <img src="{{ asset('image/hd.png') }}" alt="" />
                    <div class="card-info">
                        <h2>Dwi Coders</h2>
                        <p>Card Sederhana Untuk Menuju Ke Channel DwiCoders</p>
                        <a href="">OTW</a>
                    </div>
                    </div>
                </div>
            </div>

            
        </div>
        
    </div>
    </div>
    
</body>
</html>