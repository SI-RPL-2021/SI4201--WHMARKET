<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangkeluar', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_barangkeluar');
        $table->id();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->string('satuan');
            $table->string('kemasan');
            $table->integer('jumlah_barangkeluar'); 
            $table->date('waktu_barangkeluar');
    }
}
