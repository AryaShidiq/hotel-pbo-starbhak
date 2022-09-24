<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resepsionis', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_pemesanan')->nullable();
            $table->string('nama_pemesan');
            $table->integer('nomor_kamar')->nullable();
            $table->foreignId('tipe_kamar_id');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('status')->nullable();
            $table->string('total_harga')->nullable();
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
        Schema::dropIfExists('resepsionis');
    }
};
