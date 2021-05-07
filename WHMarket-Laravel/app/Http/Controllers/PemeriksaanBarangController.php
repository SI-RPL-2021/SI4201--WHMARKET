<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanBarangController extends Controller
{
    public function pemeriksaanbarang()
    {
        $masterbarang = \DB::table('masterbarang')->join('pemeriksaanbarang', 'masterbarang.id', '=', 'pemeriksaanbarang.id_barang')->get();
        return view('pemeriksaanbarang', ['masterbarang' => $masterbarang]);
    }
    
    public function delete($id)
    {
        \DB::table('pemeriksaanbarang')->where('id', $id)->delete();
        return redirect('pemeriksaanbarang');
    }
    //
}
