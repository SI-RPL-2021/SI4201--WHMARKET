<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataBarangmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barangmasuk', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('kategori');
            $table->string('satuan');
            $table->string('kemasan');
            $table->integer('jumlah_barangmasuk'); 
            $table->date('waktu_barangmasuk');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_barangmasuk');
    }
}
