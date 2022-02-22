<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban_kuesioners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pertanyaan_kuesioners_id')
                  ->references('id')
                  ->on('pertanyaan_kuesioners')
                  ->onDelete('cascade');
            $table->foreignId('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')->nullable();
            $table->integer('persepsi');
            $table->integer('ekspektasi');
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
        Schema::dropIfExists('jawaban_kuesioners');
    }
}
