<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'email', 'password'];

    protected $hidden = ['password'];

    protected function setPasswordAttribute($value)
    {
        $this->attributes['password'] = password_hash($value, PASSWORD_BCRYPT);
    }

    public function getAuthPassword()
    {
        return password_verify($this->password, $this->attributes['password']);
    }
}