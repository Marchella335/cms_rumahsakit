<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter');
            $table->string('spesialis');
            $table->string('jadwal_praktek'); // contoh: "Senin - Jumat 08:00 - 14:00"
            $table->enum('jenis_kelamin', ['L', 'P']); // L = Laki-laki, P = Perempuan
            $table->string('nomor_telepon');
            $table->string('nomor_sip'); // Surat Izin Praktek
            $table->decimal('gaji', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
