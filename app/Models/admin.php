<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class admin extends Model
{
    //
    use HasFactory;
    protected $table = 'dataadmin';
    protected $fillable = ['username', 'password'];
    protected $primaryKey = 'id';

    public function siswa(){
        return $this->hasOne(siswa::class, 'id');
    }

    public function guru()
    {
        return $this->hasOne(Guru::class, 'admin_id');
    }
}