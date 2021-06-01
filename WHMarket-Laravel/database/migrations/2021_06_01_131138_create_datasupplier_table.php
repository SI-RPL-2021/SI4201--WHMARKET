<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatasupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datasupplier', function (Blueprint $table) {
            
            $table->id();
            $table->string('nama_supplier');
            $table->string('alamat');
            $table->string('kota');
            $table->string('email');
            $table->integer('no_hp');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datasupplier');
    }
}
