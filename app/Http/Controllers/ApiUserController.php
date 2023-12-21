<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Midtrans\Config;
use Midtrans\Snap;

class ApiUserController extends Controller
{
     public function __construct()
    {
        $products = Product::all();
        View::share('products', $products);
    }


    public function detailProduct($id)
    {
        $product = Product::find($id);
        $user = Auth::user();

        return response()->json(['product' => $product, 'user' => $user]);
    }

    public function tambahkeranjang(Request $request, $id)
    {
        $product = Product::find($id);

        $cartItem = Cart::where('user_id', auth()->user()->id)->where('product_id', $product->id)->first();

        if ($cartItem) {
            $cartItem->quantity += $request->input('quantity');
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product->id,
                'quantity' => $request->input('quantity'),
            ]);
        }

        // You can customize the response format as needed
        return response()->json(['message' => 'Item added to cart successfully']);
    }

    public function charts()
    {
        $user = auth()->user();
        $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        $total = 0;

        return response()->json(['cartItems' => $cartItems, 'total' => $total, 'user' => $user]);
    }

    public function hapuscart($id)
    {
        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->delete();
        }

        return response()->json(['message' => 'Item removed from cart successfully']);
    }

    public function checkout(Request $request)
    {
        return response()->json(['message' => 'Checkout successful']);
    }

    public function detailCheck($id)
    {
        $order = Order::find($id);
        $orderDetails = OrderDetail::where('order_id', $id)->get();
        return response()->json(['order' => $order, 'orderDetails' => $orderDetails]);
    }
}
