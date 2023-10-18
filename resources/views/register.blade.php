<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
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
                <form method="POST" row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h3>-REGISTER-</h3>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="password">
                    </div>
                    <div class="input-group mb-5">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="repeat password">
                    </div>
                    <div class="input-group mb-3">
                        <a href="#" class="btn btn-primary w-100">Register</a>
                    </div>
                    <div class="text-end mb-3">
                        <a href="/login">Login Sekarang</a>
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