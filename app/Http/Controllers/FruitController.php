<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buah = Fruit::all();
        return view('fruit.index', compact('buah')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fruit.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $pesan = [
            'nama_buah.required'    => 'Nama buah masih kosong !',
            'harga.required'        => 'Harga masih kosong !',
            'harga.min'             => 'Harga tidak mecukupi',
        ]; //kenapa pake kurung kotak? karna isinya data array

        $request->validate([
            'nama_buah'     => 'required',
            'harga'     => 'required|min:4', //garis lurus itu artinya 'dan' 
        ], $pesan);

        $buah = new Fruit();

        $buah->nama_buah = $request->nama_buah;
        $buah->harga = $request->harga;

        $buah->save();
        return redirect()->route('buah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buah = Fruit::findOrFail($id); // findOrFail itu untuk mencari data
        return view('fruit.show', compact('buah')); //compact itu biar view nya ngebawa data
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buah = Fruit::findOrFail($id);
        return view('fruit.edit', compact('buah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buah = Fruit::findOrFail($id);

        $buah->nama_buah    = $request->nama_buah;
        $buah->harga    = $request->harga;

        $buah->update();

        return redirect()->route('buah.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buah = Fruit::findOrFail($id);
        $buah->delete();

        return redirect()->route(('buah.index'));
    }
}
