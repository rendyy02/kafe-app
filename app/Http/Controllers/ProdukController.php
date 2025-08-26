<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::paginate(10);
        return view('produk.index', compact('produks'));
    }
    
    public function create()
    {
        return view('produk.create');
    }

    public function store(StoreProdukRequest $request)
    {
        Produk::create($request->validated());
        return redirect()->route('produk.index');
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    public function update(UpdateProdukRequest $request, Produk $produk)
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
