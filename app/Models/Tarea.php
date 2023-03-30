<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarea extends Model
{
    use HasFactory;
    use SoftDeletes;

    # en caso de recibir un nombre de una tabla incorrecta
    protected $table = 'tareas';

    protected $fillable = ['nombre',
                           'descripcion',
                           'finalizado',
                           'fecha_limite',
                           'urgencia'];
    
    # para dar formatos a la fecha
    protected $dates = ['fecha_limite'];

    # Comando en caso de no querer los ultimos campos
    #protected $timestamps = false;

    public const URGENCIAS = ['Baja','Normal','Alta'];

    public function urgencia(){
        return self::URGENCIAS[ $this->urgencia ];
    }

    public const FINALIZADA = ['Si','No'];

    public function esFinalizada(){
        return $this -> finalizada == 1 ? 'Si' : 'No';
    }
}
