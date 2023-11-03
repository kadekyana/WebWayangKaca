<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class userController extends Controller
{

    public function __construct()
    {
        $products = Product::all();
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

    public function detailProduct($id){
        $product = Product::find($id);
        $user = Auth::user();
        return view('detail', compact(['product', 'user']));
    }

    public function tambahkeranjang(Request $request, $id)
    {
        $product = Product::find($id);

        // Check if the product is already in the cart for the user
        $cartItem = Cart::where('user_id', auth()->user()->id)->where('product_id',$product->id);

        // if ($cartItem) {
        //     // Update the quantity if the product is already in the cart
        //     $cartItem->quantity += $request->quantity;
        //     $cartItem->save();
        // } else {
            // Add the product to the cart
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'quantity' => $request->input('quantity'),
            ]);
        // }

        return redirect('/charts');
    }

    // app/Http/Controllers/CartController.php

public function charts()
{
    $cartItems = Cart::with('product')
            ->where('user_id', auth()->user()->id)
            ->get();
        $total = 0;
    return view('chart', compact(['cartItems', 'total']));
}

public function hapuscart($id)
{
    $cartItem = Cart::find($id);

    if ($cartItem) {
        $cartItem->delete();
    }

    return redirect('/charts')->with('success', 'Item keranjang berhasil dihapus');
}




}
