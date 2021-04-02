<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterBarangController extends Controller
{
    //
    public function tambah_masterbarang()
    {
        $masterkemasan = DB::table('masterkemasan')->get();
        $masterkategori = DB::table('masterkategori')->get();
        $mastersatuan = DB::table('mastersatuan')->get();
        $masterkemasan = DB::table('masterkemasan')->get();
 
        return view('tambah_masterbarang', compact('masterkategori','mastersatuan','masterkemasan') );
    
    }

    public function data_masterbarang()
    {
        $masterbarang = \DB::table('masterbarang')->get();
        return view('masterbarang', ['masterbarang' => $masterbarang]);
    }
    public function inputMasterBarang(Request $request)
    {
        
        \DB::table('masterbarang')->insert([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'harga' => $request->harga
            ]);
            return redirect('masterbarang');
    }
    public function updateMasterBarang($id)
    {
        $masterbarang = \DB::table('masterbarang')->where('id', $id)->first();
        return view('edit_masterbarang', compact('masterbarang'));
    }
    public function updateMasterBarangProcess(Request $request, $id)
    {
        \DB::table('masterbarang')->where('id', $id)
        ->update([
            'nama_barang' => $request->nama_barang,
            'kategori' => $request->kategori,
            'satuan' => $request->satuan,
            'kemasan' => $request->kemasan,
            'harga' => $request->harga
        ]);
        return redirect('masterbarang');
    }
    public function delete($id)
    {
        \DB::table('masterbarang')->where('id', $id)->delete();
        return redirect('masterbarang');
    }
}


