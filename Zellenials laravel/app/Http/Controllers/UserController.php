<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Produk;
use App\Models\Custom;
use App\Models\Pesanan;
use App\Models\Pengiriman;





class UserController extends Controller
{
    public function index(){
        if (session('admin',FALSE) == "TRUE") return redirect()->route('dashboard');
        $produks = Produk::latest()->get();
        return view('User.homepage', compact('produks'));
    }
    public function aboutUs(){
        return view('User.tentangkami');
    }

    public function custom(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.custom-product');
    }
    public function profil(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.profile');
    }

    public function return(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.return-1');
    }

    public function returnConfirm(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $invoice = $request->invoice;
        $produk = DB::table('pesanans')->where('invoice', 'like', $invoice)->first();
        if (!$produk) return redirect()->route('return');
        return view('User.return-2',compact("invoice"));
    }

    public function returnDone(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $invoice = $request->invoice;
        $pesanan = Pesanan::where('invoice', 'like', $invoice)->first();
        $pesanan->status = "Retur";
        $pesanan->alasan_retur = $request->alasan;
        $returPic = $request->file('picRetur');
        $returPic->storeAs('public/uploaded/retur/',$returPic->hashName());
        $pesanan->foto_retur = $returPic->hashName();
        $pesanan->save();
        return view('User.return-3',compact('invoice'));
    }

    public function register(){
        if (session('loggedin',FALSE)) return redirect()->route('home');
        return view('User.Registrasi');
    }

    public function checkout(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        return view('User.checkout-page');
    }

    public function checkoutConfirm(Request $request, $idPengiriman){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $data = [
            "total" => json_decode($request->cookie('cart',"[]"),true)[session('uid')]['total'],
            "idPengiriman" => $idPengiriman
        ];
        return view('User.checkout-confirm',compact('data'));
    }

    public function detailProduk($pid){
        $produk = Produk::find($pid);
        return view('User.detail-product',compact('produk'));
    }

    
    public function profileEdit(){
        $user = User::find(session('uid'));
        return view('User.edit_profile',compact('user'));
    }
    
    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->route('home')->with('logout-success','Berhasil logout');
    }

    public function orderStatus(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $pesanans = User::find(session('uid'))->produks()->latest()->get();
        return view('User.status-order',compact('pesanans'));
    }

    public function order(){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $pesanans = User::find(session('uid'))->produks()->latest()->get();
        return view('User.my-order',compact('pesanans'));
    }

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
                $pesanan->pengiriman_id = $request->idPengiriman;
                $pesanan->jumlah = $quantity;
                $pesanan->size = $size;
                $pesanan->status = "Menunggu Konfirmasi";
                $pesanan->invoice = "ZLNS/".session('uid')."/".$value->id."/".$quantity."/".random_int(0,9999);
                $pesananPic = $request->file('img');
                
                $pesananPic->storeAs('public/uploaded/bukti/',$pesananPic->hashName());
                $pesanan->foto_pembayaran = $pesananPic->hashName();
                $pesanan->save();
            }
        }
        unset($cart[session('uid')]);
        $cart = json_encode($cart);
        Cookie::queue('cart', $cart, 1440);
        return redirect()->route('orderStatus');
    }

    public function newPengiriman(Request $request){
        $pengiriman = new Pengiriman;
        $pengiriman->nama = $request->nama;
        $pengiriman->email = $request->email;
        $pengiriman->no_hp = $request->no_hp;
        $pengiriman->alamat = $request->alamat;
        $pengiriman->kabupaten = $request->kabupaten;
        $pengiriman->kodepos = $request->kodepos;
        $pengiriman->expedisi = $request->expedisi;
        $pengiriman->save();
        return redirect()->route('checkoutConfirm',$pengiriman->id);
    }

    public function cart(Request $request){
        if (!session('loggedin',FALSE)) return redirect()->route('login');
        $cart = json_decode($request->cookie('cart',"[]"),true);
        $cartWithNames = [];
        if (!isset($cart[session('uid')])) return view('User.shopping-cart',compact('cartWithNames'));
        $cart = $cart[session('uid')];
        if ($cart['total'] == 0 ) return view('User.shopping-cart',compact('cartWithNames'));
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

    // cart = [
    //     userId (misal 1) = [
    //         items = [
    //             pid (mis. 2) = [
    //                 sieqty = [
    //                     s= 1,
    //                     m=2,
    //                     xl=3,
    //                 ]
    //                 harga = 100000
    //             ]
    //         ]
    //         totalHarga = 600000
    //     ]
    // ]

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
        $custom->status = "Menunggu Konfirmasi";
        if($request->hasfile('img')){
            $customPic = $request->file('img');
            $customPic->storeAs('public/uploaded/custom/',$customPic->hashName());
            $custom->foto_produk = $customPic->hashName();
        }
        $custom->save();
        return redirect()->route('home');
    }

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


    public function loginScript(Request $request){
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
            }else{
                Cookie::queue('email',"",0);
                Cookie::queue('password',"",0);
                Cookie::queue('remember',"",0);
            }
            return redirect()->route('home')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('login')->with('login-failed','Password atau email salah');
        }
    }

    public function registerScript(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if($u) return redirect()->route('daftar')->with('email-exist','email must be unique');
        if($request->password != $request->password1) return redirect()->route('register')->with('password-not-match','please try again');
        $user = new User;
        $user->nama_user = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('login');
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
