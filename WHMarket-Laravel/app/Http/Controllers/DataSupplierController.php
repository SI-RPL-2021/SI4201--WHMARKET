<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSupplierController extends Controller
{
    public function tambah_datasupplier()
    {
        return view('tambah_datasupplier');
    }
    public function datasupplier()
    {
        $datasupplier = \DB::table('datasupplier')->get();
        return view('datasupplier', ['datasupplier' => $datasupplier]);
    }
    public function inputDataSupplier(Request $request)
    {
        
        \DB::table('datasupplier')->insert([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'no_hp' => $request->no_hp
            ]);
            return redirect('datasupplier')->with('status', 'Data Supplier Berhasil Ditambah!');
    }
    public function updateDataSupplier($id)
    {
        $datasupplier = \DB::table('datasupplier')->where('id', $id)->first();
        return view('edit_datasupplier', compact('datasupplier'));
    }
    public function updateDataSupplierProcess(Request $request, $id)
    {
        \DB::table('datasupplier')->where('id', $id)
        ->update([
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'no_hp' => $request->no_hp
        ]);
        return redirect('datasupplier')->with('status', 'Data Supplier Berhasil Diubah!');
    }
    public function delete($id)
    {
        \DB::table('datasupplier')->where('id', $id)->delete();
        return redirect('datasupplier')->with('status', 'Data Supplier Berhasil Dihapus!'); //
        
    }
}
