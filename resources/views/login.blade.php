<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background: #ececec;
        }

        .box-area{
            width: 930px;
        }
    </style>
</head>
<body>


    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row rounded-3 p-5 bg-white shadow box-area d-flex justify-content-center align-items-center ">
        <div class="col-md-6 left-box">
            <form method="POST" action="/loginPost" class="row align-items-center">
                @csrf
                <div class="header-text text-center mb-4">
                    <h3>-LOGIN-</h3>
                    @if (Session::has('success'))
                       <div class="alert alert-success">
                           <h5 class="text text-center">{{ Session::get('success')}}</h5>
                       </div>
                   @endif
                    @if (Session::has('error'))
                       <div class="alert alert-danger">
                           <h5 class="text text-center">{{ Session::get('error')}}</h5>
                       </div>
                   @endif
                @if ($errors->any())
                   <div class="alert alert-danger">
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                   </div>
               @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="password" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="btn btn-primary w-100" value="Login">
                    </div>
                    <div class="text-end mb-3">
                        <span>Belum Punya Akun ?</span>
                        <a href="/register" class="fw-bold">Register Sekarang</a>
                    </div>

                </form>
            </div>
            
            <div class="col-md-6 right-box ">
                <div class="featured-image">
                    <img src="{{ asset('image/wayang1.jpeg') }}" class="img-fluid" style="border-radius: 10px" width="max-content">
                </div>
            </div>

           
        </div>
    </div>

    
</body>
</html>