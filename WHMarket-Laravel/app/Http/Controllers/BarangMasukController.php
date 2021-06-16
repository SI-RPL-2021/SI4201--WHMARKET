<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    //
    public function data_barangmasuk()
    {
        $masterbarang = \DB::select("SELECT masterbarang.nama_barang, masterbarang.kategori, masterbarang.satuan, masterbarang.kemasan, transaksi_barang.jumlah, transaksi_barang.tanggal, datasupplier.nama_supplier, transaksi_barang.id, transaksi_barang.id_barang FROM masterbarang INNER JOIN transaksi_barang ON masterbarang.id = transaksi_barang.id_barang INNER JOIN datasupplier ON datasupplier.id = transaksi_barang.id_supplier WHERE transaksi_barang.status = 'Masuk'");
       
        return view('data_barangmasuk', ['masterbarang' => $masterbarang]);

    }
    public function tambah_data_barangmasuk()
    {

        $masterbarang = \DB::table('masterbarang')->join('transaksi_barang', 'masterbarang.id', '=', 'transaksi_barang.id_barang','LEFT')->select('masterbarang.id', 'masterbarang.nama_barang')->distinct()->get();
        
        $datasupplier = \DB::table('datasupplier')->select('id','nama_supplier')->get();

        return view('tambah_data_barangmasuk', ['masterbarang' => $masterbarang, 'datasupplier' => $datasupplier]);
    }
    public function inputDataBarangMasuk(Request $request)
    {
        $stok = \DB::table('data_stokbarang')->select('stok')->where('id_barang', $request->barang)->value('id_barang');
        $masuk =  $request->jumlah_barangmasuk;
        $jumlah = $stok + $masuk;
        \DB::table('data_stokbarang')->where('id_barang', $request->barang)->update(['stok' => $jumlah]);
        \DB::table('transaksi_barang')->insert([
            'id_barang' => $request->barang,
            'id_supplier' => $request->supplier,
            'jumlah' => $request->jumlah_barangmasuk,
            'tanggal' => $request->waktu_barangmasuk,
            'status' => "Masuk"
        ]);
       
        return redirect('data_barangmasuk')->with('status', 'Tambah Data Barang Masuk Berhasil!');
    }
    public function updateDataBarangmasuk($id)
    {
        $barangmasuk = \DB::select("SELECT masterbarang.nama_barang, masterbarang.kategori, masterbarang.satuan, masterbarang.kemasan, transaksi_barang.jumlah, transaksi_barang.tanggal, datasupplier.nama_supplier, transaksi_barang.id, transaksi_barang.id_barang FROM masterbarang INNER JOIN transaksi_barang ON masterbarang.id = transaksi_barang.id_barang INNER JOIN datasupplier ON datasupplier.id = transaksi_barang.id_supplier WHERE transaksi_barang.id = ".$id);
        $datasupplier = \DB::table('datasupplier')->select('id','nama_supplier')->get();
        return view('edit_data_barangmasuk', ['barangmasuk' => $barangmasuk[0], 'datasupplier' => $datasupplier]);
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
                    'id_supplier' => $request->supplier,
                    'jumlah' => $request->jumlah_barangmasuk,
                    'tanggal' => $request->waktu_barangmasuk,
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
        \DB::table('transaksi_supplier')->where('id', $id)->delete();
        return redirect('data_barangmasuk')->with('status', 'Data Barang Masuk Berhasil Dihapus!');
    }
}
