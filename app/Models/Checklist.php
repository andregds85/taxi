<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checklist extends Model
{
    use HasFactory;
    protected $table="checklist";
    protected $fillable = [
   
'dia',
'mes',
'ano',
'semana',
'motorista',
'codPlaca',
'horaInicial',
'horaFinal',
'Kfinal',
'Kinicial',
'tcombustivel',
'vCombustivel',
'outros',
'Espoutros',

];
}