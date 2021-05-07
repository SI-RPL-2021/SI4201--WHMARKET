<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanbarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaanbarang', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang');
            $table->integer('jumlah_barangaman');
            $table->integer('jumlah_barangexpired'); 
            $table->date('waktu_pemeriksaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeriksaanbarang');
    }
}
