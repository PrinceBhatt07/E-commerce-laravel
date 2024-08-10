<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('Cart.cart');
    }

    public function checkout(){
        return view('Cart.checkout');
    }
}
