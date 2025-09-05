<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::paginate(10);
        return view('admin.produk.index', compact('produks'));
    }
    
    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        Produk::create($request->validated());
        return redirect()->route('produk.index');
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, Produk $produk)
    {
        $produk->update($request->validated());
        return redirect()->route('produk.index');
    }

    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index');
    }
}
