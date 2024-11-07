<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelasModel extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['id_kelas', 'kelas'];
    protected $primaryKey = 'id_kelas';

    public function prodi_id()
    {
        return $this->belongsTo(ProdiModel::class, 'id_prodi', 'id_prodi');
    }
}


