<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluhansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->string('kategori_keluhan');
            $table->string('deskripsi_keluhan');
            $table->string('status')->default('BELUM DI PROSES'); 
            $table->string('laporan')->nullable();
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
        Schema::dropIfExists('keluhans');
    }
}
