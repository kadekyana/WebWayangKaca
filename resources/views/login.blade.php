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


    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 left-box">
                <div class="row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h3>login</h3>
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
                        <a href="#">Daftar Sekarang</a>
                    </div>

                </div>
            </div>
            
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column right-box ">
                <div class="featured-image">
                    <img src="{{ asset('image/hd.png') }}" class="img-fluid">
                </div>
            </div>

        </div>
    </div>

    
</body>
</html>