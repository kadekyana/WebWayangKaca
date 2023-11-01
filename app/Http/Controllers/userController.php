<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class userController extends Controller
{

    public function __construct()
    {
        $products = Products::all();
        View::share('products', $products);
    }

    public function index(){
        return view('index');
    }

    public function productPage(){
        return view('produk');
    }

    public function historyPage(){
        return view('history');
    }

    public function detailProduct(){
        return view('detail');
    }
}
