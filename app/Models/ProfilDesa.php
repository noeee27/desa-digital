<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    protected $table = 'profil_desas';

    protected $fillable = [
        'nama_desa',
        'deskripsi',
        'visi',
        'misi',
        'alamat',
        'telepon',
        'email',
        'website',
        'foto',
    ];
}