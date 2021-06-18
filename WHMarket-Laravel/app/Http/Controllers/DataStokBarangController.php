<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStokBarangController extends Controller
{
    //
    public function data_stokbarang()
    {
        $masterbarang = \DB::table('masterbarang')->join('data_stokbarang', 'masterbarang.id', '=', 'data_stokbarang.id_barang')->get();
        return view('data_stokbarang', ['masterbarang' => $masterbarang]);
    }

    public function tambah_data_stokbarang()
    {
        $masterbarang = \DB::table('masterbarang')->join('data_stokbarang', 'masterbarang.id', '=', 'data_stokbarang.id_barang','LEFT')->select('masterbarang.id', 'masterbarang.nama_barang')->get();
        // dd($masterbarang);
        return view('tambah_data_stokbarang', ['masterbarang' => $masterbarang]);
    }

    public function InputDataStokBarang(Request $request)
    {
        \DB::table('data_stokbarang')->insert([
            'id_barang' => $request->barang,
            'stok' => $request->stok
            ]);
            return redirect('data_stokbarang')->with('status', 'Data Stok Barang Berhasil Ditambah!');
    }

    public function updateDataStokBarang($id)
    {
        $masterbarang = \DB::table('masterbarang')->join('data_stokbarang', 'masterbarang.id', '=', 'data_stokbarang.id_barang')->where('data_stokbarang.id', $id)->first();
        // dd($masterbarang);
        return view('edit_data_stokbarang', ['stokbarang' => $masterbarang]);
    }
    public function updateDataStokBarangProcess(Request $request, $id)
    {
        \DB::table('data_stokbarang')->where('id', $id)
        ->update([
            
            'stok' => $request->stok
        ]);
        return redirect('data_stokbarang')->with('status', 'Data Stok Barang Berhasil Diubah!');
    }
    public function delete($id)
    {
        \DB::table('data_stokbarang')->where('id', $id)->delete();
        return redirect('data_stokbarang')->with('status', 'Data Stok Barang Berhasil Dihapus!');
    }
}
