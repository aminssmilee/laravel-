<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $table = 'obat';
    protected $fillable = [
        'nama',
        'jenis',
        'harga',
        'stok',
        'dosis',
        'tanggal_minum',
        'jam_minum',
    ];
}
