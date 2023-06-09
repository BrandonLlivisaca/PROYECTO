<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use HasFactory;
    use SoftDeletes;

    # en caso de recibir un nombre de una tabla incorrecta
    protected $table = 'roles';

    protected $fillable = ['rol'];
    
}
