<?php

//namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Horarios';

    /**
     * Run the migrations.
     * @table Horarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_Horario');
            $table->string('Dia_Semana', 45)->nullable();
            $table->string('Hora_Inicio', 45)->nullable();
            $table->string('Hora_Fin', 45)->nullable();

            $table->unique(["ID_Horario"], 'ID_Horario_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
