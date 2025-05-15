<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    // Tentukan nama tabel (bisa diabaikan jika sudah sesuai dengan konvensi Laravel)
    protected $table = 'penggunas';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'name',
        'email',
        'password',
        'tinggi_badan',
        'berat_badan',
        'photo',  // Kolom untuk menyimpan path gambar
    ];

    // Menambahkan mutator untuk mengenkripsi password sebelum disimpan
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
