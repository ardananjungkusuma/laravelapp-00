<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}
