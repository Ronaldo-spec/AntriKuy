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
        'deskripsi',
        'jam_buka',
        'jam_tutup',
        'id_dokter'
    ];
    public function dokter()
    {
        return $this->hasOne(Dokter::class, 'id', 'id_dokter');
    }
}
