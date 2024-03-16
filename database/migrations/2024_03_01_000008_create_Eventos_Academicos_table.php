<?php

//namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosAcademicosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Eventos_Academicos';

    /**
     * Run the migrations.
     * @table Eventos_Academicos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_Evento');
            $table->string('Nombre_Evento', 200)->nullable();
            $table->string('Descripcion', 200)->nullable();
            $table->dateTime('Fecha y Hora')->nullable();
            $table->string('Lugar', 100)->nullable();

            $table->unique(["ID_Evento"], 'ID_Evento_UNIQUE');
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
