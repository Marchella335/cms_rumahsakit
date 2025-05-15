<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokters'; // sesuaikan jika nama tabel beda
    protected $fillable = [
        'nama_dokter',
        'spesialis',
        'jadwal_praktek',
        'jenis_kelamin',
        'nomor_telepon',
        'nomor_sip',
        'gaji',
    ];

    public function rekamMedis()
{
    return $this->hasMany(RekamMedis::class);
}
}
