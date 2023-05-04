<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kelas;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";

    public $timestamps= false;
    protected $primaryKey='Nim';

    protected $fillable=[
        'Nim',
        'nama',
        'kelas_id',
        'jurusan',
        'no_handphone'
        ];

        public function kelas(){
            return $this->belongsTo(kelas::class);
        }
//    use HasFactory;
}
