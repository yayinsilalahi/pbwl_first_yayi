<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['npm', 'nama_mahasiswa', 'jk', 'tgl_lahir', 'alamat'];
    protected $table = 'mahasiswa';
}
