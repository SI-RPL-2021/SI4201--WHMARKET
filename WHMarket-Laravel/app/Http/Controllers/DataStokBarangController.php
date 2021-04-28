<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataStokBarangController extends Controller
{
    //
    public function data_stokbarang()
    {
        $masterbarang = \DB::table('masterbarang')->get();
        return view('data_stokbarang', ['masterbarang' => $masterbarang]);
    }
    public function updateDataStokBarang($id)
    {
        $masterbarang = \DB::table('masterbarang')->where('id', $id)->first();
        return view('edit_data_stokbarang', ['masterbarang' => $masterbarang]);
    }
    public function updateDataStokBarangProcess(Request $request, $id)
    {
        \DB::table('masterbarang')->where('id', $id)
        ->update([
            
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
