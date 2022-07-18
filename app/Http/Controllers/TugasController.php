<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pembayaran;
use App\Models\Pembeli;
use App\Models\Supplier;
use App\Models\Transaksi;

class TugasController extends Controller
{
    public function index() {
        
        $barang = Barang::all();
        $supplier = Supplier::all();
        $pembayaran = Pembayaran::all();
        $pembeli = Pembeli::all();
        $transaksi = Transaksi::all();

        return view('TugasBaru.index', compact('barang' ,'supplier', 'pembayaran', 'pembeli', 'transaksi'));

    }
    
}