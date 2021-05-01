<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    //
    public function data_barangmasuk()
    {
        $data_barangmasuk = \DB::table('masterbarang')->join('transaksi_barang', 'transaksi_barang.id_barang', '=', 'masterbarang.id')->where('transaksi_barang.status', 'Masuk')->get();
        return view('data_barangmasuk', ['data_barangmasuk' => $data_barangmasuk]);
    }
    public function tambah_data_barangmasuk()
    {

        $masterbarang = \DB::table('masterbarang')->join('data_stokbarang', 'data_stokbarang.id_barang', '=','masterbarang.id')->select('masterbarang.id', 'masterbarang.nama_barang')->where('data_stokbarang.stok', '>=', '0')->get();



        return view('tambah_data_barangmasuk', compact('masterbarang'));
    }
    public function inputDataBarangMasuk(Request $request)
    {
        $stok = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $request->barang)->value('id_barang');
        $masuk =  $request->jumlah_barangmasuk;
        $jumlah = $stok + $masuk;
        \DB::table('data_stokbarang')->where('id_barang', $request->barang)->update(['stok' => $jumlah]);
        \DB::table('transaksi_barang')->insert([
            'id_barang' => $request->barang,
            'jumlah' => $request->jumlah_barangmasuk,
            'tanggal' => $request->waktu_barangmasuk,
            'status' => "Masuk"
        ]);
        return redirect('data_barangmasuk')->with('status', 'Tambah Data Barang Masuk Berhasil!');
    }
    public function updateDataBarangmasuk($id)
    {
        $barangmasuk = \DB::table('masterbarang')->join('transaksi_barang', 'transaksi_barang.id_barang', '=', 'masterbarang.id')->where('transaksi_barang.id', $id)->first();
        return view('edit_data_barangmasuk', ['barangmasuk' => $barangmasuk]);
    }
    public function updateDataBarangMasukProcess(Request $request, $id)
    {
        $stock = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $request->id_barang)->value('stok');
        $jumlah_before = \DB::table('transaksi_barang')->select('jumlah')->where('id', $id)->value('jumlah');
        $sum_before = $stock - $jumlah_before;
        $masuk =  $request->jumlah_barangmasuk;
        $sum_after = $sum_before + $masuk;
        \DB::table('data_stokbarang')->where('id_barang', $request->id_barang)->update(['stok' => $sum_after]);
        \DB::table('transaksi_barang')->where('id', $id)
            ->update([
                'jumlah' => $request->jumlah_barangmasuk,
                'tanggal' => $request->waktu_barangmasuk
            ]);
        return redirect('data_barangmasuk')->with('status', 'Data Barang Masuk Berhasil Diubah!');
    }
    public function delete($id)
    {
        $id_barang = \DB::table('transaksi_barang')->select('id_barang')->where('id', $id)->value('id_barang');
        $stock = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $id_barang)->value('stok');
        $jumlah_before = \DB::table('transaksi_barang')->select('jumlah')->where('id', $id)->value('id');
        $sum_before = $stock - $jumlah_before;
        \DB::table('data_stokbarang')->where('id_barang', $id_barang)->update(['stok' => $sum_before]);
        \DB::table('transaksi_barang')->where('id', $id)->delete();
        return redirect('data_barangmasuk')->with('status', 'Data Barang Masuk Berhasil Dihapus!');
    }
}
