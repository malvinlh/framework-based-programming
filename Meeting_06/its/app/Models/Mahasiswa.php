<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['nama', 'nim', 'dosen_id'];
    protected $table = 'mahasiswa';

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    use HasFactory;
}



