<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';
    protected $fillable = [
        'username', 'nama_video', 'jum_like', 'jum_play', 'jum_komentar','jum_share'
    ];
}
