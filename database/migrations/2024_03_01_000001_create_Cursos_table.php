<?php

//namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Cursos';

    /**
     * Run the migrations.
     * @table Cursos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_Curso');
            $table->string('Nombre_Curso', 200)->nullable();
            $table->text('Descripcion')->nullable();
            $table->string('Horario', 45)->nullable();
            $table->string('Aula', 45)->nullable();

            $table->unique(["ID_Curso"], 'ID_Curso_UNIQUE');
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
