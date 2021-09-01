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
      'horaInicial',
      'horaFinal', 
      'motorista',
      'codPlaca',
      'Kfinal',
      'Kinicial',
      'total',
      'Fbruta',
      'porcentagem',
      'comissao',
      'combustivel',
      'fliquida', 
      'tanqueK', 
      
   ];
}


  
