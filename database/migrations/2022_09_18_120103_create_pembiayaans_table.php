<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembiayaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembiayaans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_produk');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat_domisili');
            $table->string('kebutuhan_dana');
            $table->string('jangka_waktu');
            $table->string('agunan');
            $table->string('no_hp');
            $table->string('nik');
            $table->string('foto_ktp');
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
        Schema::dropIfExists('pembiayaans');
    }
}
