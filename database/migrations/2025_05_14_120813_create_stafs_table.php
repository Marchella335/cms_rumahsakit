<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafsTable extends Migration
{
    public function up(): void
{
    Schema::create('stafs', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('departemen');
        $table->string('nomor_telepon');
        $table->decimal('gaji', 10, 2);
        $table->timestamps();
    });
}

}