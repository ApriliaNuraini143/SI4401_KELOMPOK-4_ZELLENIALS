<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('User.homepage');
    }

    public function keranjang(){
        return view('User.shopping-cart');
    }
}
