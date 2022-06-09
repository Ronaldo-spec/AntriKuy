<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;
    protected $table = 'antrian';
    protected $primarykey = 'id';

    protected $fillable = [
        'nomor_antrian',
        'id_pasien',
        'id_poli',
        'status'
    ];

    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'id', 'id_pasien');
    }
    public function poli()
    {
        return $this->hasOne(Poli::class, 'id', 'id_poli');
    }
}
