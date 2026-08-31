<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'alamat',
        'maps_url',
        'no_hp',
        'whatsapp',
        'harga',
        'foto',
        'status',
    ];
}