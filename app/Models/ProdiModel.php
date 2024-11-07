<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdiModel extends Model
{
    protected $table = 'prodi';
    protected $fillable = ['id_prodi', 'prodi'];
    protected $primaryKey = 'id_prodi';

    // foreign key ke table jurusan
    public function jurusan_id()
    {
        return $this->belongsTo(JurusanModel::class, 'id_jurusan', 'id_jurusan');
    }
}
