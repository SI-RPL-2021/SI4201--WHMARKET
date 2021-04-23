<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStokBarangController extends Controller
{
    //
    public function data_stokbarang()
    {
        $data_stokbarang = \DB::table('data_stokbarang')->get();
        return view('data_stokbarang', ['data_stokbarang' => $data_stokbarang]);
    }
    public function tambah_data_stokbarang()
    {
        $masterbarang = \DB::table('masterbarang')->get();
        $masterkategori = \DB::table('masterkategori')->get();
        $mastersatuan = \DB::table('mastersatuan')->get();
        $masterkemasan = \DB::table('masterkemasan')->get();
       
 
        return view('tambah_data_stokbarang', compact('masterbarang','masterkategori','mastersatuan','masterkemasan') );
    
    }
    public function inputDataStokBarang(Request $request)
    {
        
        \DB::table('data_stokbarang')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'harga' => $request->harga,
            'stok' => $request->stok
            ]);
            return redirect('data_stokbarang');
    }
    public function delete($id)
    {
        \DB::table('data_stokbarang')->where('id', $id)->delete();
        return redirect('data_stokbarang');
    }
}
