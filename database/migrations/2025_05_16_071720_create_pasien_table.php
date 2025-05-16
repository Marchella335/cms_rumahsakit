<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    public function up()
    {
        Schema::create('PASIEN', function (Blueprint $table) {
            $table->id(); // ID_PASIEN
            $table->string('nama', 255);
            $table->text('alamat')->nullable();
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->string('nomor_telepon', 20);
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('PASIEN');
    }
}
