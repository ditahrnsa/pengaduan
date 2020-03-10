<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->increments('id_masyarakat');
            $table->char('nik', 16)->unique();
            // $table->primary('nik');
            $table->string('nama',35)->unique();
            $table->string('username',35)->unique();
            $table->string('password');
            $table->string('telp', 13);
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                   ->on('users')//relasi ke tabel user
                   ->references('id') //kolom yang berelasi
                   ->onDelete('cascade')
                   ->onUpdate('cascade');

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
        Schema::dropIfExists('masyarakat');
    }
}
