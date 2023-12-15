<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Midtrans\Config;
use Midtrans\Snap;

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
    $user = auth()->user();
    $cartItems = Cart::with('product')
            ->where('user_id', auth()->user()->id)
            ->get();
        $total = 0;
    return view('chart', compact(['cartItems', 'total', 'user']));
}

public function hapuscart($id)
{
    $cartItem = Cart::find($id);

    if ($cartItem) {
        $cartItem->delete();
    }

    return redirect('/charts')->with('success', 'Item keranjang berhasil dihapus');
}


public function checkout(Request $request)
    {   
        // $request->request->add(['status' => 'Belum Bayar']);
        $productIds = $request->input('product_ids');
        $subtotal = $request->input('subtotal');
        $user = auth()->user();


        $order = Order::create([
            'user_id' => auth()->user()->id,
            'nama' => $request->input('nama'),
            'total' => $request->input('total'),
            'alamat' => $request->input('alamat'),
            'status' => 'Belum Bayar'
        ]);
            
        $cartItems = Cart::whereIn('product_id', $productIds)->get();
        $order_id = $order->id;
        foreach ($cartItems as $cartItem) {
            OrderDetail::create([
                'order_id' => $order_id,
                'product_id' => $cartItem->product_id,
                'jumlah' => $cartItem->quantity,
                'harga' => $cartItem->product->harga,
                'nama' => $cartItem->product->nama,
            ]);
        }

        $order->save();

                // Set your Merchant Server Key
        Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $order->id,
                'gross_amount' => $order->total,
            ),
            'customer_details' => array(
                'nama' => $order->nama,
            ),
        );

        $snapToken = Snap::getSnapToken($params);
        var_dump($snapToken);
        return view('pembayaran', compact(['snapToken','order']));
    }

    public function detailCheck($id)
    {
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        return view('detailpesanan', compact('order', 'orderDetails'));
    }




}
