<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $products = Product::count();
        $users = User::count();
        return view('adminPage.index', compact(['products','users']));
    }

    public function users()
    {
        $users = User::all();
        return view('adminPage.users.user', compact('users'));
    }

    public function products(){
        $products = Product::all();
        return view('adminPage.product.products', compact('products'));
    }

    public function tambah_product(){
        return view('adminPage.product.create');
    }

    
    public function tambah(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'gambar' => 'image|mimes:jpg,png,jpeg|max:2040'
        ]);

        if($request->hasFile('gambar')){
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
        return redirect('/products');
    }
    
    public function hapususer($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }


    public function hapus($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::find($id);
        return view('adminPage.product.edit', compact('product'));
    }

    public function up($id, Request $request){
        $product = Product::find($id);

        $request->validate([
            'gambar' => 'mimes:png,jpg,jpeg|image|max:2040'
        ]);

        $formatharga =number_format($request->harga,0, ',' , '.',);

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $gambarNama = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('uploads'), $gambarNama);

            $product->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $formatharga,
                'stok' => $request->stok,
                'gambar' => $gambarNama,
            ]);
            return redirect('/products');
        }else{
            $product->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $formatharga,
                'stok' => $request->stok,
            ]);
            return redirect('/products');
        }
    }
}
