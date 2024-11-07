<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    use HasFactory;

    protected $table = 'dosen';
    protected $primaryKey = 'nip';
    protected $fillable = ['nama_pengguna', 'nama_lengkap', 'email', 'password'];

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

