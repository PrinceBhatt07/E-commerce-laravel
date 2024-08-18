<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        return view('shop', compact('products'));
    }

    public function product_details($product_slug){
        $product = Product::where('slug', $product_slug)->first();
        $rproducts = Product::where('slug','<>', $product_slug)->get()->take(8);
        return view('details', compact('product','rproducts'));
    }
}
