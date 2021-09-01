<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatechecklistTable extends Migration
{
   
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
          
             /*Dados do motorista e carro */ 
            $table->id();
            $table->text('nome')->nullable();
            $table->string('dia',100)->nullable();
            $table->string('mes',100)->nullable();
            $table->string('ano',100)->nullable();
            $table->string('semana',100)->nullable();
            $table->string('horaInicial',100)->nullable();
            $table->string('horaFinal',100)->nullable();
            $table->string('motorista',100)->nullable();
            $table->string('codPlaca',100)->nullable();
                     
           /* Kilometragem  */ 
           /*
            $table->integer('Kfinal')->nullable();
            $table->integer('Kinicial')->nullable();
            $table->integer('total')->nullable();
            $table->integer('Fbruta')->nullable();
            $table->integer('porcentagem')->nullable();
            $table->double('comissao', 8, 2);
            $table->double('combustivel', 8, 2);
            $table->double('fliquida', 8, 2);
            $table->double('tanqueK', 8, 2); 

                */

            $table->integer('Kfinal')->nullable();
            $table->integer('Kinicial')->nullable();
            $table->integer('total')->nullable();
            $table->integer('Fbruta')->nullable();
            $table->integer('porcentagem')->nullable();
            $table->double('comissao', 8, 2);
            $table->double('combustivel', 8, 2);
            $table->double('fliquida', 8, 2);
            $table->double('tanqueK', 8, 2); 










            $table->timestamps();  
        });
        
    }



        public function down()
        {
      
            Schema::dropIfExists('checklist');
       
        }
    }


   