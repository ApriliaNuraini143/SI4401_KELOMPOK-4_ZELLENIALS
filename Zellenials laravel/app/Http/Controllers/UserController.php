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

    public function register(){
        if (session('loggedin',FALSE)) return redirect()->route('home')->with('ilegal','Already Logged in');
        return view('User.Registrasi');
    }

    public function create(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if($u) return redirect()->route('register')->with('email-exist','email must be unique');
        if($request->password != $request->password1) return redirect()->route('register')->with('password-not-match','please try again');
        $user = new user;
        $user->nama_user = $request->nama;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('login')->with('regist-success','Berhasil daftar');
    }

    public function get(Request $request){
        $u = DB::table('users')->where('email',$request->email)->first();
        if ($u->password == $request->password) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['nama' => $u->nama_user]);
            if($request->remember){
                Cookie::queue('email',$u->email,1440);
                Cookie::queue('password',$u->password,1440);
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
}
