<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterKemasanController extends Controller
{
    //
    public function tambah_masterkemasan()
    {
        return view('tambah_masterkemasan');
    }
    public function data_masterkemasan()
    {
        $masterkemasan = \DB::table('masterkemasan')->get();
        return view('masterkemasan', ['masterkemasan' => $masterkemasan]);
    }
    public function inputMasterKemasan(Request $request)
    {
        
        \DB::table('masterkemasan')->insert([
            'nama_kemasan' => $request->nama_kemasan
            ]);
            return redirect('masterkemasan')->with('status', 'Master Kemasan Berhasil Ditambah!');
            
    }
    public function updateMasterKemasan($id)
    {
        $masterkemasan = \DB::table('masterkemasan')->where('id', $id)->first();
        return view('edit_masterkemasan', compact('masterkemasan'));
    }
    public function updateMasterKemasanProcess(Request $request, $id)
    {
        \DB::table('masterkemasan')->where('id', $id)
        ->update([
            'nama_kemasan' => $request->nama_kemasan
        ]);
        return redirect('masterkemasan')->with('status', 'Master Kemasan Berhasil Diubah!');
    }
    public function delete($id)
    {
        \DB::table('masterkemasan')->where('id', $id)->delete();
        return redirect('masterkemasan')->with('status', 'Master Kemasan Berhasil Dihapus!');
    }
}
