<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
    protected $primarykey = 'id';

    protected $fillable = [
        'nama_dokter',
        'spesialis',
        'jam_datang',
        'jam_pulang',
    ];
}
