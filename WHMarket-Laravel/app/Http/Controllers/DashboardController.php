<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $transaksi_barang = \DB::table('masterbarang')->join('transaksi_barang', 'masterbarang.id', '=', 'transaksi_barang.id_barang')->where('transaksi_barang.status','Keluar')->get();;
        
        $categories = [];
        foreach($transaksi_barang as $tb){
            $categories[] = $tb->nama_barang;
            $jumlah[] = $tb->jumlah;
        }

        return view('dashboard_reporting', ['transaksi_barang' => $transaksi_barang, 'categories' => $categories, 'jumlah' => $jumlah]);

    }
    public function data_dashboard()
    {
        
    }
}
