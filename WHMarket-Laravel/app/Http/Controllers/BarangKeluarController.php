<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    //

    public function tambah_data_barangkeluar()
    {
        $masterbarang = \DB::table('masterbarang')->get();
        $masterkategori = \DB::table('masterkategori')->get();
        $mastersatuan = \DB::table('mastersatuan')->get();
        $masterkemasan = \DB::table('masterkemasan')->get();
       
 
        return view('tambah_data_barangkeluar', compact('masterbarang','masterkategori','mastersatuan','masterkemasan') );
    
    }
    public function inputDataBarangkeluar(Request $request)
    {
        
        \DB::table('data_barangkeluar')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'jumlah_barangkeluar' => $request->jumlah_barangkeluar,
            'waktu_barangkeluar' => $request->waktu_barangkeluar
            ]);
            return redirect('data_barangkeluar');
    }
    public function updateDataBarangkeluar($id)
    {
        $masterbarang = \DB::table('masterbarang')->where('id', $id)->first();
        $masterkemasan = \DB::table('masterkemasan')->get();
        $masterkategori = \DB::table('masterkategori')->get();
        $mastersatuan = \DB::table('mastersatuan')->get();
        return view('edit_data_barangkeluar', compact('masterbarang','masterkategori','masterkemasan','mastersatuan'));
    }
    public function updateDataBarangkeluarProcess(Request $request, $id)
    {
        \DB::table('data_barangkeluar')->where('id', $id)
        ->update([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'jumlah_barangkeluar' => $request->jumlah_barangkeluar,
            'waktu_barangkeluar' => $request->waktu_barangkeluar
        ]);
        return redirect('data_barangkeluar');
    }


}
