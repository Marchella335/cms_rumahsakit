<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('rekam_medis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('dokter_id'); // foreign key
        $table->text('hasil_pemeriksaan');
        $table->text('riwayat_rekam_medis')->nullable();
        $table->timestamps();

        $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekam_medis');
    }
};
