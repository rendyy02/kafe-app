<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $products = Produk::all();
        return view('welcome', compact('products'));
    }
}
