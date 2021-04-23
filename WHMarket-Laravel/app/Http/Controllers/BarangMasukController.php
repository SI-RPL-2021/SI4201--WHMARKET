<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    //
    public function data_barangmasuk()
    {
        $data_barangmasuk = \DB::table('data_barangmasuk')->get();
        return view('data_barangmasuk', ['data_barangmasuk' => $data_barangmasuk]);
    }
    public function tambah_data_barangmasuk()
    {
        $masterbarang = \DB::table('masterbarang')->get();
        $masterkategori = \DB::table('masterkategori')->get();
        $mastersatuan = \DB::table('mastersatuan')->get();
        $masterkemasan = \DB::table('masterkemasan')->get();
       
 
        return view('tambah_data_barangmasuk', compact('masterbarang','masterkategori','mastersatuan','masterkemasan') );
    
    }
    public function inputDataBarangMasuk(Request $request)
    {
        
        \DB::table('data_barangmasuk')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'jumlah_barangmasuk' => $request->jumlah_barangmasuk,
            'waktu_barangmasuk' => $request->waktu_barangmasuk
            ]);
            return redirect('data_barangmasuk');
    }
    public function updateDataBarangmasuk($id)
    {
        $masterbarang = \DB::table('masterbarang')->where('id', $id)->first();
        $masterkemasan = \DB::table('masterkemasan')->get();
        $masterkategori = \DB::table('masterkategori')->get();
        $mastersatuan = \DB::table('mastersatuan')->get();
        return view('edit_data_barangmasuk', compact('masterbarang','masterkategori','masterkemasan','mastersatuan'));
    }
    public function updateDataBarangMasukProcess(Request $request, $id)
    {
        \DB::table('data_barangmasuk')->where('id', $id)
        ->update([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'jumlah_barangmasuk' => $request->jumlah_barangmasuk,
            'waktu_barangmasuk' => $request->waktu_barangmasuk
        ]);
        return redirect('data_barangmasuk');
    }
    public function delete($id)
    {
        \DB::table('data_barangmasuk')->where('id', $id)->delete();
        return redirect('data_barangmasuk');
    }
}

