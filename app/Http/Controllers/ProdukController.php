<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index($angka)
    {
        // Cek apakah angka ganjil atau genap
        if ($angka % 2 == 0) {
            // Genap
            $pesan = "Nilai ini adalah genap";
            $alertType = "success";
        } else {
            // Ganjil
            $pesan = "Nilai ini adalah ganjil";
            $alertType = "warning";
        }

        // Kirim data ke view
        return view('produk', [
            'pesan' => $pesan,
            'alertType' => $alertType,
            'angka' => $angka
        ]);
    }
}