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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('no_kamar');
            $table->unsignedBigInteger("kategori_id");
            $table->foreign("kategori_id")->references('id')->on('kategoris');
            // $table->foreignId('tipe_kamar_id');
            $table->string('foto_kamar');
            // $table->string('harga');
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
        Schema::dropIfExists('kamars');
    }
};
