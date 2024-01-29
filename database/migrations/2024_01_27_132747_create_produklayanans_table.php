<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduklayanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produklayanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produklayanan');
            $table->string('foto_thumbnail');
            $table->longText('deskripsi');
            $table->string('jenis_tabungan');
            $table->string('jenis_produk');
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
        Schema::dropIfExists('produklayanans');
    }
}
