<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class siswa extends Model
{
    //
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'id', 
        'nama', 
        'bb', 
        'tb'];
    protected $primaryKey = 'idsiswa';

    public function siswa(){
        return $this->hasOne(siswa::class, 'id');
    }
}
