<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('produk.index', compact('produk'));
    }

    public function create()
    {  
        $kategori = DB::table('kategori')->get();

        return view('produk.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'qty' => 'required|numeric',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
        ]);

        Produk::create([
            'nama' => $request->nama,
            'kategori' => $request->kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect('/produk');
    }

    public function edit($id)
    {
        $produk = Produk::find($id);

        $kategori = DB::table('kategori')->get();

        return view('produk.edit', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        Produk::find($id)->update([
            'nama' => $request->nama,
            'id_kategori' => $request->kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect('/produk');
    }

    public function delete($id)
    {
        Produk::find($id)->delete();

        return redirect('/produk');
    }
}