<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    public function index(){
        return view('User.homepage');
    }

    public function custom(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.custom-product');
    }

    public function aboutUs(){
        return view('User.tentangkami');
    }

    public function profil(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.profile');
    }

    public function profileEdit(){
        $user = User::find(session('uid'));
        return view('User.edit_profile',compact('user'));
    }

    public function register(){
        if (session('loggedin',FALSE)) return redirect()->route('home')->with('ilegal','Already Logged in');
        return view('User.Registrasi');
    }

    public function keranjang(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.shopping-cart');
    }

    public function orderStatus(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.status-order');
    }

    public function order(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.my-order');
    }

    public function retur1(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.return-1');
    }

    public function checkout(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.checkout-page');
    }

    public function checkoutConfirm(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $total = json_decode($request->cookie('cart',"[]"),true)[session('uid')]['total'];
        return view('User.checkout-confirm',compact('total'));
    }

    public function detailProduk($pid){
        $produk = Produk::find($pid);
        return view('User.detail-product',compact('produk'));
    }

    #Batas Page

    #Cart dan transaksi

    public function newPesanan(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $cart = json_decode($request->cookie('cart',"[]"),true);
        $pids = array_keys($cart[session('uid')]['items']);
        $produks = Produk::whereIn('id', $pids)->get();
        foreach ($produks as $p => $value) {
            foreach ($cart[session('uid')]['items'][$value->id]['sizeQTY'] as $size => $quantity){
                $pesanan = new Pesanan;
                $pesanan->user_id = session('uid');
                $pesanan->produk_id = $value->id;
                $pesanan->jumlah = $quantity;
                $pesanan->size = $size;
                $pesanan->status = "Menunggu Konfirmasi";
                $pesanan->invoice = "ZLNS/".session('uid')."/".$value->id."/".$quantity."/".random_int(0,9999);
                $pesanan->save();
            }
        }
        unset($cart[session('uid')]);
        $cart = json_encode($cart);
        Cookie::queue('cart', $cart, 1440);
        return redirect()->route('orderStatus');
    }

    public function cart(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $cart = json_decode($request->cookie('cart',"[]"),true);
        $cartWithNames = [];
        if (!isset($cart[session('uid')])) return view('User.shopping-cart',compact('cartWithNames'));
        $cart = $cart[session('uid')];
        $pids = array_keys($cart['items']);
        $produks = Produk::whereIn('id', $pids)->get();
        $cartWithNames['total'] = $cart['total'];
        $cartWithNames['cartItem'] = [];
        foreach ($produks as $p => $value) {
            foreach ($cart['items'][$value->id]['sizeQTY'] as $size => $quantity){
                $cartWithNames['cartItem'][$value->id][$size] = [
                    'name' => $value->nama_produk,
                    'size' => $size,
                    'quantity' => $quantity,
                    'harga' => $quantity*$value->harga
                ];
            }
        }
        return view('User.shopping-cart',compact('cartWithNames'));
    }

    public function addCart(Request $request, $pid){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $cart = json_decode($request->cookie('cart', "[]"),true);
        $size = $request->size;
        $user = session('uid');
        // Add the product to the cart
        if (array_key_exists($user, $cart)) {
            if (array_key_exists($pid, $cart[$user]['items'])) {
                if (array_key_exists($size, $cart[$user]['items'][$pid]['sizeQTY'])) {
                    $cart[$user]['items'][$pid]['sizeQTY'][$size] += 1;
                } else {
                    $cart[$user]['items'][$pid]['sizeQTY'][$size] = 1;
                }
            } else{
                $cart[$user]['items'][$pid]['sizeQTY'][$size] = 1;
            }
        } else{
            $cart[$user]['items'][$pid]['sizeQTY'][$size] = 1;
        }
        $cart[$user]['items'][$pid]['harga'] = $request->harga;
        if (array_key_exists('total',$cart[$user])){
            $cart[$user]['total'] += $request->harga; 
        }else{
            $cart[$user]['total'] = $request->harga;
        }
        $cart = json_encode($cart);
        // Save the cart back to the cookies
        Cookie::queue('cart', $cart, 1440);
        return redirect()->route('cart');
    }

    public function deleteCart(Request $request,$pid,$size){
        $cart = json_decode($request->cookie('cart', "[]"),true);
        $cart[session('uid')]['total'] -= $cart[session('uid')]['items'][$pid]['harga']*$cart[session('uid')]['items'][$pid]['sizeQTY'][$size];
        unset($cart[session('uid')]['items'][$pid]['sizeQTY'][$size]);
        $cart = json_encode($cart);
        Cookie::queue('cart', $cart, 1440);
        return redirect()->route('cart');
    }
    
    public function newCustom(Request $request){
        $custom = new Custom;
        $custom->user_id = session('uid');
        $custom->nama_produk = $request->name;
        $custom->lengan = $request->lengan;
        $custom->harga = 149000;
        $custom->size = $request->size;
        if($request->hasfile('img')){
            $customPic = $request->file('img');
            $customPic->storeAs('public/uploaded/custom/',$customPic->hashName());
            $custom->foto_produk = $customPic->hashName();
        }
        $custom->save();
        return redirect()->route('home');
    }
    
    
    
    #Batas user
    public function login(Request $request){
        if (session('loggedin',FALSE)) return redirect()->route('home')->with('ilegal','Already Logged in');
        $remember = $request->cookie('remember');
        if($remember){
            $data = [
                "email" => $request->cookie('email'),
                "password" => $request->cookie('password'),
                "remember" => $remember
            ];
        }else{
            $data = [
                "remember" => FALSE
            ];
        }
        return view('User.Login',compact('data'));
    }

    public function create(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if($u) return redirect()->route('register')->with('email-exist','email must be unique');
        if($request->password != $request->password1) return redirect()->route('register')->with('password-not-match','please try again');
        $user = new user;
        $user->nama_user = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('login');
    }

    public function loginget(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if ($u && $u->password == $request->password) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['name' => $u->nama_user]);
            session(['email' => $u->email]);
            session(['admin' => $u->admin]);
            if($request->remember){
                Cookie::queue('email',$u->email,1440);
                Cookie::queue('password',$u->password,1440);
                Cookie::queue('remember',TRUE,1440);
            }
            return redirect()->route('home')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('login')->with('login-failed','Password atau email salah');
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->route('home')->with('logout-success','Berhasil logout');
    }

    
    public function updateProfile(Request $request){
        $user = User::find(session('uid'));
        $user->nama_user = $request->name;
        $user->email = $request->email;
        if($request->password != "") $user->password = $request->password;
        $user->save();

        session(['name' => $request->name]);
        session(['email' => $request->email]);
        return redirect()->route('profil')->with('edit-success','Berhasil update data profil');
    }
}
