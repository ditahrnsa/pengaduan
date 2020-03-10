<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggapansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->increments('id_tanggapan');
            $table->unsignedInteger('id_pengaduan');
            $table->date('tgl_tanggapan');
            $table->text('tanggapan');
            $table->unsignedInteger('id_petugas');
            $table->timestamps();

            $table->foreign('id_pengaduan')
                ->on('pengaduan')
                ->references('id_pengaduan')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_petugas')
                ->on('petugas')
                ->references('id_petugas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan');
    }
}
