<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class guru extends Model
{
    //

    use HasFactory;

    protected $table = 'dataguru';
    protected $primaryKey ='idguru';
    protected $fillable = ['nama', 'mapel', 'id'];

    public function admin(){
        return $this->belongsTo(admin::class, 'id');
    }
}
