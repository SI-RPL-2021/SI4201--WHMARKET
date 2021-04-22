<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    //
    public function data_barangmasuk()
    {
        $data_barangmasuk = \DB::table('data_barangmasuk')->get();
        return view('data_barangmasuk', ['data_barangmasuk' => $data_barangmasuk]);
    }
   
   
    public function delete($id)
    {
        \DB::table('data_barangmasuk')->where('id', $id)->delete();
        return redirect('data_barangmasuk');
    }
}

