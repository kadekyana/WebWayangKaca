<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(){
        $products = Products::count();
        $users = User::count();
        return view('adminPage.index', compact(['products','users']));
    }

    public function products(){
        $products = Products::all();
        return view('adminPage.products', compact('products'));
    }

    public function tambah_product(){
        return view('adminPage.create');
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

        Products::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $gambarNama,
        ]);
        return redirect('/');
    }

    public function hapus($id){
        $product = Products::find($id);
        $product->delete();
        return redirect('/');
    }

    public function edit($id){
        $product = Products::find($id);
        return view('adminPage.edit', compact('product'));
    }

    public function up($id, Request $request){
        $product = Products::find($id);

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
            return redirect('/');

        }else{
            $product->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $formatharga,
                'stok' => $request->stok,
            ]);
            return redirect('/');
        }
    }
}
