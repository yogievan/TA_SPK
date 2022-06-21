<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    protected $table = 'normalisasi';
    protected $fillable = [
        'nama_video', 'c1', 'c2', 'c3','c4'
    ];
}
