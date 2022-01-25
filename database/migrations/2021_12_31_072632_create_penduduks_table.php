<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kepala_keluarga')->nullable();
            $table->bigInteger('nik');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->date('tgllahir');
            $table->enum('jeniskelamin',['laki','perempuan']);
            $table->string('alamat');
            $table->integer('rt');
            $table->integer('rw');
            $table->enum('agama',['islam','kristen','katolik','hindu','budha','konghucu']);
            $table->enum('statusnikah',['sudahmenikah','belummenikah']);
            $table->string('pekerjaan');
            $table->bigInteger('notelepon');
            $table->string('statuskel');
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
        Schema::dropIfExists('penduduks');
    }
}
