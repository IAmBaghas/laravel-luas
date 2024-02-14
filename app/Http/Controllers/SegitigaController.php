<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegitigaController extends Controller
{
    public function index()
    {
        return view('hitung_segitiga');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'alas' => 'required|numeric',
            'tinggi' => 'required|numeric'
        ]);

        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $luas = 0.5 * $alas * $tinggi;

        return view('hasil_segitiga', compact('alas', 'tinggi', 'luas'));
    }

}
