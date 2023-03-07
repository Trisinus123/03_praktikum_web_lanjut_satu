<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function spot() {
        return view('products.anggur');
    }
    public function farm() {
        return view('products.apel');
    }
    public function kopi() {
        return view('products.sayur');
    }
    public function strawberry() {
        return view('products.buah');
    }
}
