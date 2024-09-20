<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = [
        'nrp' ,
        'nama',
        'alamat',
        'jurusan', 
        'no_hp',
        'email',
        'password',
    ];


    use HasFactory;
}
