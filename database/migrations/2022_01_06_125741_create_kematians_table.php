<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematians', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->enum('jeniskelamin',['laki','perempuan']);
            $table->string('rt');
            $table->bigInteger('notelepon');
            $table->enum('agama',['islam','kristen','katolik','hindu','budha','konghucu']);
            $table->string('tempatlahir');
            $table->string('tempatmeninggal');
            $table->string('statuskel');
            $table->date('tglmeninggal');
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
        Schema::dropIfExists('kematians');
    }
}
