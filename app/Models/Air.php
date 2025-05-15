<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    use HasFactory;

    protected $table = 'airs';

    protected $fillable = [
        'user_id',
        'Keterangan',
        'banyak_air(ml)',
        'waktu_minum'
    ];
}

