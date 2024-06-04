<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kela extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kelas',
        'jurusan'
    ];

    public $timestamps = false;

    public function hasGuru()
    {
        return $this->hasOne(Guru::class, 'kela_id', 'id');
    }

    public function hasSiswa()
    {
        return $this->hasMany(Siswa::class, 'kela_id', 'id');
    }
}
