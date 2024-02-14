<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiPanjangController extends Controller
{
    public function index()
    {
        return view('hitung_persegi_panjang');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'panjang' => 'required|numeric',
            'lebar' => 'required|numeric'
        ]);

        $panjang = $request->input('panjang');
        $lebar = $request->input('lebar');
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);

        return view('hasil_persegi_panjang', compact('panjang', 'lebar', 'luas', 'keliling'));
    }

}
