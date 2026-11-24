<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa2 extends Model
{
  protected $table = "siswa";
   protected $fillable = ['nisn', 'nama', 'kelas'];
}
