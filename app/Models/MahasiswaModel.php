<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = ['nama_pengguna', 'nama_lengkap', 'email', 'password', 'id_kelas'];

    protected $hidden = ['password'];

    protected function ambilNamaTable()
    {
        return $this->table;
    }

    protected function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}

