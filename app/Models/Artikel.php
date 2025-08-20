<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use hasFactory;

class artikel extends Model
{
    protected $table = 'isiartikel';
    protected $fillable = [
        'judul',
        'isi',
        'detil',
    ];
    public $timestamps = false;
}
