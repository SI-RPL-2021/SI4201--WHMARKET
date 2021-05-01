<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanBarangController extends Controller
{
    public function pemeriksaanbarang()
    {
        $pemeriksaanbarang = \DB::table('pemeriksaanbarang')->get();
        return view('pemeriksaanbarang', ['pemeriksaanbarang' => $pemeriksaanbarang]);
    }
    public function delete($id)
    {
        \DB::table('pemeriksaanbarang')->where('id', $id)->delete();
        return redirect('pemeriksaanbarang');
    }
    //
}
