<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ApiAdminController extends Controller
{

public function index()
{
    $productsCount = Product::count();
    $usersCount = User::count();

    return response()->json([
        'productsCount' => $productsCount,
        'usersCount' => $usersCount,
    ]);
}

public function getUsers()
{
    $users = User::all();

    return response()->json(['users' => $users]);
}

public function getProducts()
{
    $products = Product::all();

    return response()->json(['products' => $products]);
}

public function createProduct(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
        'deskripsi' => 'required|string',
        'harga' => 'required|integer',
        'stok' => 'required|integer',
        'gambar' => 'image|mimes:jpg,png,jpeg|max:2040',
    ]);

    $gambarNama = null;

    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();
        $gambar->move(public_path('uploads'), $gambarNama);
    }

    Product::create([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'gambar' => $gambarNama,
    ]);

    return response()->json(['message' => 'Product created successfully']);
}

public function deleteUser($id)
{
    $user = User::find($id);

    if ($user) {
        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    } else {
        return response()->json(['message' => 'User not found'], 404);
    }
}

public function deleteProduct($id)
{
    $product = Product::find($id);

    if ($product) {
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    } else {
        return response()->json(['message' => 'Product not found'], 404);
    }
}

// Sisanya dapat diubah sesuai kebutuhan, dengan mengganti 'return view(...)' dengan 'return response()->json(...)'

}
