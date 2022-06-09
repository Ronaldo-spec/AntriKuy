<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends Model
{
    use HasFactory;
    protected $table = 'poli';
    protected $primarykey = 'id';

    protected $fillable = [
        'nama_poli',
        'spesialis',
        'jam_buka',
        'jam_tutup',
        'id_dokter'
    ];
}
