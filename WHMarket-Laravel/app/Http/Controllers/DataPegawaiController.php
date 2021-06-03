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
    public function delete($id)
    {
        \DB::table('datapegawai')->where('id', $id)->delete();
        return redirect('datapegawai');
    }
}
