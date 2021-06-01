<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function home()
    {
        return view('home');
    }
    public function masterbarang()
    {
        return view('masterbarang');
    }
    public function mastersatuan()
    {
        return view('mastersatuan');
    }
    public function masterkategori()
    {
        return view('masterkategori');
    }
    public function masterkemasan()
    {
        return view('masterkemasan');
    }
    public function data_stokbarang()
    {
        return view('data_stokbarang');
    }
    public function data_barangmasuk()
    {
        return view('data_barangmasuk');
    }
    public function data_barangkeluar()
    {
        return view('data_barangkeluar');
    }
    public function pemeriksaanbarang()
    {
        return view('pemeriksaanbarang');
    }
    public function datapegawai()
    {
        return view('datapegawai');
    }
    public function datasupplier()
    {
        return view('datasupplier');
    }
}