<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    protected $fillable = [
        'nama_usaha',
        'kategori',
        'nama_pemilik',
        'deskripsi',
        'no_hp',
        'whatsapp',
        'alamat',
        'maps_url',
        'foto',
        'status',
    ];
}