<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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

        .featured-image img-fluid{
            height: auto;
            width: 100%;
        }
    </style>
</head>
<body>

 {{-- <h1>data mahasiswa</h1>
 @for ($i = 1; $i < count($data); $i++ )
    <p>{{$i+1}} {{$data($i)}}</p>
@endfor --}}

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 left-box">
                <div class="row align-items-center">
        <div class="row rounded-5 p-5 bg-white shadow box-area d-flex justify-content-center align-items-center ">
        <div class="col-md-6 left-box">
                <form method="#" class="row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h3>-LOGIN-</h3>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="password">
                    </div>
                    <div class="input-group mb-3">
                        <a href="/" class="btn btn-primary w-100">Login</a>
                    </div>
                    <div class="text-end mb-3">
                        <a href="/register">Daftar Sekarang</a>
                    </div>

                </form>
            </div>
            
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column right-box ">
                <div class="featured-image">
                    <img src="{{ asset('image/hd.png') }}" class="img-fluid">
                    <img src="{{ asset('image/wayang2.jpeg') }}" class="img-fluid" style="border-radius: 10px" width="max-content">

                </div>
            </div>

        </div>
    </div>

    
</body>
</html>