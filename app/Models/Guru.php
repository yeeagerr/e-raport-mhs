<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableGuru;
use Illuminate\Contracts\Auth\Authenticatable;

class Guru extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableGuru;

    protected $table = 'guru';

    public $fillable = [
        'nama',
        'nuptk',
        'kela_id',
        'username',
        'password'
    ];

    public $timestamps = false;

    public function kelas_siswa()
    {
        return $this->belongsTo(Kela::class, "kela_id", "id");
    }
}
