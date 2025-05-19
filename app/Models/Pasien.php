<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // ① Deklarasi nama tabel persis seperti di database Oracle
    protected $table = 'PASIEN';

    // ② Jika primary key bukan 'id' atau ada tipe lain, atur di sini.
    //    Tapi karena pake $table->id(), default 'id' sudah benar.

    // ③ Field-field yang boleh di-mass assign
    protected $fillable = [
        'nama',
        'alamat',
        'jenis_kelamin',
        'usia',
        'nomor_telepon',
        'status_pasien'
    ];

}
