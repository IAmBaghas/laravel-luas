<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LingkaranController extends Controller
{
    public function index()
    {
        return view('hitung_lingkaran');
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'jari_jari' => 'required|numeric'
        ]);

        $jari_jari = $request->input('jari_jari');
        $luas = pi() * pow($jari_jari, 2);
        $keliling = 2 * pi() * $jari_jari;

        return view('hasil_lingkaran', compact('jari_jari', 'luas', 'keliling'));
    }

}
