<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Produk;



class AdminController extends Controller
{
    public function view(){
        $produks = Produk::all();
        return view('Admin.view-product',compact('produks'));
    }

    public function edit($pid){
        $produk = Produk::find($pid);
        return view('Admin.edit-product',compact('produk'));
    }

    public function addItem(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        if (session('admin',FALSE) != "TRUE") return redirect()->route('login');
        return view('Admin.add-product');
    }

    public function delete($pid){
        $produk = Produk::find($pid);
        Storage::delete('public/uploaded/produk/'.$produk->foto_produk);
        $produk->delete();
        return redirect()->route('view');
    }

    public function add(Request $request){
        $produk = new Produk;
        $produk->nama_produk = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->kain = $request->kain;
        $produk->sablon = $request->sablon;
        $size['XS'] = $request->sizeXS;
        $size['S'] = $request->sizeS;
        $size['M'] = $request->sizeM;
        $size['L'] = $request->sizeL;
        $size['XL'] = $request->sizeXL;
        $size['XXL'] = $request->sizeXXL;
        $size = json_encode($size);
        $produk->size = $size;
        if($request->hasfile('img')){
            $produkPic = $request->file('img');
            $produkPic->storeAs('public/uploaded/produk/',$produkPic->hashName());
            $produk->foto_produk = $produkPic->hashName();
        }
        $produk->save();
        return redirect()->route('home');
    }

    public function update(Request $request, $pid){
        $produk = Produk::find($pid);
        $produk->nama_produk = $request->nama;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->kain = $request->kain;
        $produk->sablon = $request->sablon;
        $size['XS'] = $request->sizeXS;
        $size['S'] = $request->sizeS;
        $size['M'] = $request->sizeM;
        $size['L'] = $request->sizeL;
        $size['XL'] = $request->sizeXL;
        $size['XXL'] = $request->sizeXXL;
        $size = json_encode($size);
        $produk->size = $size;
        if($request->hasfile('img')){
            Storage::delete('public/uploaded/produk/'.$produk->foto_produk);
            $produkPic = $request->file('img');
            $produkPic->storeAs('public/uploaded/produk/',$produkPic->hashName());
            $produk->foto_produk = $produkPic->hashName();
        }
        $produk->save();
        return redirect()->route('view');
    }
}
