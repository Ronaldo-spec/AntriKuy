<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primarykey = 'nik';
    protected $fillable = [
        'nik',
        'nama_lengkap',
        'alamat',
        'no_hp',
        'jenis_kelamin'
    ];
}
