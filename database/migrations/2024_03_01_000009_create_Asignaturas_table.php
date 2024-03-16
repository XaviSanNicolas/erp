<?php

//namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Asignaturas';

    /**
     * Run the migrations.
     * @table Asignaturas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_Materia');
            $table->string('Nombre_Materia', 100)->nullable();
            $table->string('Descripcion', 45)->nullable();
            $table->string('Contenido_Curso')->nullable();

            $table->unique(["ID_Materia"], 'ID_Materia_UNIQUE');
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
