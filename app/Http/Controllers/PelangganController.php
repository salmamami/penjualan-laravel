<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = ['Jay', 'Ohyul', 'Ryul', 'Jungwon'];
        return view('pelanggan.index', compact('pelanggan'));
    }
}
