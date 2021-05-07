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
    
    public function tambah_pemeriksaanbarang()
    {
        $masterbarang = \DB::table('masterbarang')->join('pemeriksaanbarang', 'masterbarang.id', '=', 'pemeriksaanbarang.id_barang','LEFT')->select('masterbarang.id', 'masterbarang.nama_barang')->get();
        // dd($masterbarang);
        return view('tambah_pemeriksaanbarang', ['masterbarang' => $masterbarang]);
    }

    public function InputPemeriksaanBarang(Request $request)
    {
        \DB::table('pemeriksaanbarang')->insert([
            'id_barang' => $request->barang,
            'jumlah_barangaman' => $request->jumlah_barangaman,
            'jumlah_barangexpired' => $request->jumlah_barangexpired,
            'waktu_pemeriksaanbarang' => $request->waktu_pemeriksaanbarang
            ]);
            return redirect('pemeriksaanbarang')->with('status', 'Data Pemeriksaan Barang Berhasil Ditambah!');
    }


    public function delete($id)
    {
        \DB::table('pemeriksaanbarang')->where('id', $id)->delete();
        return redirect('pemeriksaanbarang');
    }
    //

}
