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
        width: 200px;
        height: 200px;
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
      

      /* chart */
      .chart{
        position: fixed;
        top: 60px;
        left: 100%;
        width: 340px;
        height: 80%;
        background-color: rgb(255, 255, 255);
        transition: 0.5s;
        border: 1px solid;
        border-radius: 10px;
    
      }


       .chart-box{
        display: grid;
        grid-template-columns: 32% 50% 18%;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
      }

      .chart-img{
        width: 100px;
        height: 100px;
        object-fit: contain;
        padding: 10px;
      }

      .total{
        display: flex;
        justify-content: flex-end;
        margin-top: 1.5rem;
        border-top: 1px solid;
        margin-left: 0.5rem;
        margin-right: 0.5rem;
      }

      .total-title{
        font-size: 1rem;
        font-weight: 600;
      }

      .total-price{
        margin-left: 0.5rem;
        margin-right: 0.5rem;
      }

      .detail-box{
        display: grid;
        row-gap: 0.5rem;
      }

      .chart .checkout{
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 70px;

      }

      .chart .checkout a {
        padding: 10px 30px;
        border-radius: 10px;

      } 

      .active .chart{
        left: calc(110% - 500px);
      }

      .active .container{
        transform: translateX(-200px);
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
                        <a class="nav-link active" aria-current="page" href="/Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/History">History</a>
                    </li>
                </ul>
            </div>

            <!-- Login and cart icon on the right -->
            <div class="d-flex me-5">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="quote_btn-container">
                          <a class="btn btn-success text-white" href="/login" id="loginButton">
                            <span>
                              Login
                            </span>
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </a>
                          <form id="logoutForm" action="/logout" method="post" class="d-flex">
                            @csrf
                            @method('DELETE')
                            <button id="logoutButton" class="btn btn-danger" type="submit">LOGOUT
                              <i  class="fa fa-user-times" aria-hidden="true"></i>
                            </button>
                          </form>
                      </div>
                    </li>
                    <li class="shopping">
                        <a class="nav-link" href="#cart">
                            <i class="bi bi-bag-heart-fill" ></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        