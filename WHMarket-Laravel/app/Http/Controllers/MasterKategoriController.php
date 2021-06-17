<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterKategoriController extends Controller
{
    //
    public function tambah_masterkategori()
    {
        return view('tambah_masterkategori');
    }
    public function data_masterkategori()
    {
        $masterkategori = \DB::table('masterkategori')->get();
        return view('masterkategori', ['masterkategori' => $masterkategori]);
    }
    public function inputMasterKategori(Request $request)
    {
        
        \DB::table('masterkategori')->insert([
            'nama_kategori' => $request->nama_kategori
            ]);
            return redirect('masterkategori')->with('status', 'Master Kategori Berhasil Ditambah!');
    }
    public function updateMasterKategori($id)
    {
        $masterkategori = \DB::table('masterkategori')->where('id', $id)->first();
        return view('edit_masterkategori', compact('masterkategori'));
    }
    public function updateMasterKategoriProcess(Request $request, $id)
    {
        \DB::table('masterkategori')->where('id', $id)
        ->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('masterkategori');
    }
    public function delete($id)
    {
        \DB::table('masterkategori')->where('id', $id)->delete();
        return redirect('masterkategori')->with('status', 'Master Kategori Berhasil Dihapus!'); //
    }

}
