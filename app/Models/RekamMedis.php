<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{

    protected $fillable = ['dokter_id', 'hasil_pemeriksaan', 'riwayat_rekam_medis'];
    public function dokter()
{
    return $this->belongsTo(Dokter::class);
}
    use HasFactory;
}
