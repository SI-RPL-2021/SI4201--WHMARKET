<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    public function tambah_datapegawai()
    {
        return view('tambah_datapegawai');
    }
    public function datapegawai()
    {
        $datapegawai = \DB::table('datapegawai')->get();
        return view('datapegawai', ['datapegawai' => $datapegawai]);
    }
    public function inputDataPegawai(Request $request)
    {
        
        \DB::table('datapegawai')->insert([
            'nama_pegawai' => $request->nama_pegawai,
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);

            return redirect('datapegawai');
    }
    public function updateDataPegawai($id)
    {
        $datapegawai = \DB::table('datapegawai')->where('id', $id)->first();
        return view('edit_datapegawai', compact('datapegawai'));
    }
    public function updateDataPegawaiProcess(Request $request, $id)
    {
        \DB::table('datapegawai')->where('id', $id)
        ->update([
            'nama_pegawai' => $request->nama_pegawai,
            'user_id' => $request->user_id,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);
        return redirect('datapegawai');
    }
    public function delete($id)
    {
        \DB::table('datapegawai')->where('id', $id)->delete();
        return redirect('datapegawai');
    }
}
