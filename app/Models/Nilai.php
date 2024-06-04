<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = [
        'siswa_id',
        'mapel_id',
        'na',
        'ckmin',
        'ckmax',
    ];

    public $timestamps = false;

    protected $table = 'nilai';

    public function MapelNilai()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id', 'id');
    }
}
