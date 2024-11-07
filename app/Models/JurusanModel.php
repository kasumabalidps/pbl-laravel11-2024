<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    protected $table = 'jurusan';
    protected $fillable = ['id_jurusan', 'jurusan'];
    protected $primaryKey = 'id_jurusan';
}
