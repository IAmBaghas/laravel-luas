<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersegiController extends Controller
{
    public function index()
    {
        return view('hitung_persegi');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'sisi' => 'required|numeric'
        ]);

        $sisi = $request->input('sisi');
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;

        return view('hasil_persegi', compact('sisi', 'luas', 'keliling'));
    }
}
