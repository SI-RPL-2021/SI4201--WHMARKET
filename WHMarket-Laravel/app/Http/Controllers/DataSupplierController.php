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
    public function delete($id)
    {
        \DB::table('datasupplier')->where('id', $id)->delete();
        return redirect('datasupplier'); //
    }
}
