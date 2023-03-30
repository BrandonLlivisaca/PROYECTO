<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'User';

    protected $fillable = ['name',
                           'email',
                           'password',
                           'role_id'];

    public const ROLES = ['ADMIN','PUBLICADOR','VISITANTE'];

    public function roles(){
      return self::ROLES[ $this->rol ];
    }
}
