<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>

        body{
            background: #ececec;
        }

        .box-area{
            width: 930px;
        }

        .left-box{
            padding: 40px 30px 40px 40px
        }

        .right-box{
            padding: 40px 30px 40px 40px
        }

        .featured-image img-fluid{
            height: auto;
            width: 100%;


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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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
                        <a class="nav-link" style="font-weight:700"  href="/login">Login</a>
                    </li>
                    <li class="shopping">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bag-heart-fill" ></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    {{-- detail --}}
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">

            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box ">
                <div class="featured-image">
                    <img src="{{ asset('image/hd.png') }}" class="img-fluid">
                </div>
            </div>

            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h3>Wayang Ramayana</h3>
                    </div>
                    <div class="detail-produk">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat eius aut ipsa voluptatum ad laborum incidunt esse corrupti accusamus? Distinctio est ad fuga dicta ipsam laudantium, consequatur fugiat perferendis soluta!</p>
                        
                    </div>

                    <div class="quantity d-flex justify-content-center p-1">
                        <h5>kuantitas  <input type="number" value="1" class="chart-quantity"></h5> 
                    </div>

                    <div class="input-group mb-3 mt-3 justify-content-center ">
                        <a href="" class="btn btn-primary w-80">Masukkan Keranjang</a>
                    </div>

                </div>
            </div>
            


        </div>
    </div>



    
</body>
</html>