<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    //
    public function data_barangkeluar()
    {
        $data_barangkeluar = \DB::table('masterbarang')->join('transaksi_barang', 'transaksi_barang.id_barang', '=', 'masterbarang.id')->where('transaksi_barang.status', 'Keluar')->get();
        return view('data_barangkeluar', ['data_barangkeluar' => $data_barangkeluar]);
    }
    public function tambah_data_barangkeluar()
    {
        $masterbarang = \DB::table('masterbarang')->join('data_stokbarang', 'data_stokbarang.id_barang', '=','masterbarang.id')->select('masterbarang.id', 'masterbarang.nama_barang')->where('data_stokbarang.stok', '>', '0')->get();
        return view('tambah_data_barangkeluar', compact('masterbarang') );
    
    }
    public function inputDataBarangkeluar(Request $request)
    {
        
        $stok = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $request->barang)->value('id_barang');
        $keluar =  $request->jumlah_barangkeluar;
        $jumlah = $stok - $keluar;
        \DB::table('data_stokbarang')->where('id_barang', $request->barang)->update(['stok' => $jumlah]);
        \DB::table('transaksi_barang')->insert([
            'id_barang' => $request->barang,
            'jumlah' => $request->jumlah_barangkeluar,
            'tanggal' => $request->waktu_barangkeluar,
            'status' => "Keluar"
        ]);
        return redirect('data_barangkeluar')->with('status', 'Tambah Data Barang Keluar Berhasil!');
    }
    public function updateDataBarangkeluar($id)
    {
        $barangkeluar = \DB::table('masterbarang')->join('transaksi_barang', 'transaksi_barang.id_barang', '=', 'masterbarang.id')->where('transaksi_barang.id', $id)->first();
        return view('edit_data_barangkeluar', compact('barangkeluar'));
    }
    public function updateDataBarangkeluarProcess(Request $request, $id)
    {
        $stock = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $request->id_barang)->value('stok');
        $jumlah_before = \DB::table('transaksi_barang')->select('jumlah')->where('id', $id)->value('jumlah');
        $sum_before = $stock + $jumlah_before;
        $keluar =  $request->jumlah_barangkeluar;
        $sum_after = $sum_before - $keluar;
        \DB::table('data_stokbarang')->where('id_barang', $request->id_barang)->update(['stok' => $sum_after]);
        \DB::table('transaksi_barang')->where('id', $id)
            ->update([
                'jumlah' => $request->jumlah_barangkeluar,
                'tanggal' => $request->waktu_barangkeluar
            ]);
        return redirect('data_barangkeluar')->with('status', 'Data Barang Keluar Berhasil Diubah!');
    }
    public function delete($id)
    {
        $id_barang = \DB::table('transaksi_barang')->select('id_barang')->where('id', $id)->value('id_barang');
        $stock = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $id_barang)->value('stok');
        $jumlah_before = \DB::table('transaksi_barang')->select('jumlah')->where('id', $id)->value('id');
        $sum_before = $stock + $jumlah_before;
        \DB::table('data_stokbarang')->where('id_barang', $id_barang)->update(['stok' => $sum_before]);
        \DB::table('transaksi_barang')->where('id', $id)->delete();
        return redirect('data_barangkeluar')->with('status', 'Data Barang Keluar Berhasil Dihapus!');
    }

}
