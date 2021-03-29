<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterSatuanController extends Controller
{
    //
    public function tambah_mastersatuan()
    {
        return view('tambah_mastersatuan');
    }
    public function data_mastersatuan()
    {
        $mastersatuan = \DB::table('mastersatuan')->get();
        return view('mastersatuan', ['mastersatuan' => $mastersatuan]);
    }
    public function inputMasterSatuan(Request $request)
    {
        
        \DB::table('mastersatuan')->insert([
            'nama_satuan' => $request->nama_satuan
            ]);
            return redirect('mastersatuan');
    }
    public function updateMasterSatuan($id)
    {
        $mastersatuan = \DB::table('mastersatuan')->where('id', $id)->first();
        return view('edit_mastersatuan', compact('mastersatuan'));
    }
    public function updateMasterSatuanProcess(Request $request, $id)
    {
        \DB::table('mastersatuan')->where('id', $id)
        ->update([
            'nama_satuan' => $request->nama_satuan
        ]);
        return redirect('mastersatuan');
    }
    public function delete($id)
    {
        \DB::table('mastersatuan')->where('id', $id)->delete();
        return redirect('mastersatuan');
    }

}
