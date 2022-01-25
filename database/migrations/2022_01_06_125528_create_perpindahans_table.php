<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpindahans', function (Blueprint $table) {
            $table->id();
            // $table->id('penduduk');
            $table->string('nama');
            $table->bigInteger('nik');
            $table->string('rt');
            $table->string('rw');
            $table->enum('statuspindah',['sendiri','sekeluarga']);
            $table->string('tujuandomisili');
            $table->string('alasan');
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
        Schema::dropIfExists('perpindahans');
    }
}
