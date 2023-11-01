<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <form method="POST" action="registerPost" class="row align-items-center" >
                    @csrf
                    <div class="header-text text-center mb-4">
                        <h3>-REGISTER-</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                        </div>
                    @endif
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control form-control-lg bg-light fs-6" placeholder="Name" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" name="password_confirmation" class="form-control form-control-lg bg-light fs-6" placeholder="repeat Password" required>
                    </div>
                    <div class="input-group mb-3">
                        <input value="Registrasi" type="submit" class="btn btn-primary w-100">
                    </div>
                    <div class="text-end mb-3">
                        <span>Sudah Punya Akun ?</span>
                        <a class="fw-bold" href="/login">Login Sekarang</a>
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