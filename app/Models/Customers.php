<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password','password_plain'];
    protected $hidden = ['password','password_plain'];
    public function getAuthPassword(){
        return $this->password;
    }
}
