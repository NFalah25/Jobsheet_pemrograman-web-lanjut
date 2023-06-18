<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    public $timestamps= false;
    protected $primaryKey='Nim';

    protected $fillable=[
        'Nim',
        'nama',
        'kelas',
        'jurusan',
        'no_handphone',
        'email',
        'tanggal_lahir'
        ];
//    use HasFactory;
}
