<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meja;

class MejaController extends Controller
{
    public function index()
    {
        $mejas = Meja::paginate(10);
        return view('admin.meja.index', compact('mejas'));
    }

    public function create()
    {
        return view('meja.create');
    }

    public function store(Request $request)
    {
        Meja::create($request->validated());
        return redirect()->route('meja.index');
    }

    public function edit(Meja $meja)
    {
        return view('meja.edit', compact('meja'));
    }

    public function update(Request $request, Meja $meja)
    {
        $meja->update($request->validated());
        return redirect()->route('meja.index');
    }

    public function destroy(Meja $meja)
    {
        $meja->delete();
        return redirect()->route('meja.index');
    }
}
