<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller{
    public function product1(){
        return view ('product', ['produk' => 'produk ke 1']);
    }
    public function product2(){
        return view ('product', ['produk' => 'produk ke 2']);
    }
    public function product3(){
        return view ('product', ['produk' => 'produk ke 3']);
    }
}

?>
