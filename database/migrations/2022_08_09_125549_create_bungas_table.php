<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBungasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bungas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_investasi');
            $table->string('nisbah')->nullable();
            $table->string('nama_bulan1');
            $table->string('nama_bulan2');
            $table->string('nama_bulan3');
            $table->float('bunga_bulan1');
            $table->float('bunga_bulan2');
            $table->float('bunga_bulan3');
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
        Schema::dropIfExists('bungas');
    }
}
