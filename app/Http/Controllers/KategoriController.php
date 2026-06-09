<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori_produk = Kategori::all();

        return view('kategori.index', compact('kategori_produk'));
    }

    public function store()
    {
        $kategori = new Kategori;
        $kategori->kategori = 'Alat Dapur';
        $kategori->keterangan = 'Peralatan masak';
        $kategori->save();

    Kategori::create([
        'kategori' => 'Elektronik',
        'keterangan' => 'Barang elektronik'
    ]);

    return "Data berhasil ditambah";
    }

    public function update()
    {
    Kategori::where('id', 2)
    ->update([
        'kategori' => 'Alat-alat Dapur'
    ]);

    return redirect('/kategori');
    }
    
    public function delete()
    {
    Kategori::where('id', 2)->delete();

    return redirect('/kategori');
    }
}
