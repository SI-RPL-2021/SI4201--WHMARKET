<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $user = new \App\Models\User;
        $user->role = 'pegawai';
        $user->name = $request->nama_pegawai;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        
        \DB::table('datapegawai')->insert([
            'nama_pegawai' => $request->nama_pegawai,
            'user_id' => $user->id,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'no_hp' => $request->no_hp

        ]);

        
            return redirect('datapegawai')->with('status', 'Data Pegawai Berhasil Ditambah!');
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
            'password' => $request->password,
            'no_hp' => $request->no_hp
        ]);
        return redirect('datapegawai')->with('status', 'Data Pegawai Berhasil Diubah!');
    }
    public function delete($id)
    {
        \DB::table('datapegawai')->where('id', $id)->delete();
        return redirect('datapegawai')->with('status', 'Data Pegawai Berhasil Dihapus!');
    }
}
