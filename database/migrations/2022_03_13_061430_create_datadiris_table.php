<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadirisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadiris', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('foto')->nullable();
            $table->string('asal');
            $table->date('tanggal_lahir');
            $table->string('status');
            $table->string('alamat');
            $table->string('kota_alamat');
            $table->integer('tahun_lulus');
            $table->string('pendidikan');
            $table->string('jurusan');
            $table->bigInteger('hp');
            $table->bigInteger('tahun_pengalaman');
            $table->string('pekerjaan')->nullable();
            $table->text('file_resume')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('datadiris');
    }
}
