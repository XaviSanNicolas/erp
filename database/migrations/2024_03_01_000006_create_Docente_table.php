<?php

//namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocenteTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Docente';

    /**
     * Run the migrations.
     * @table Docente
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_Docente');
            $table->string('Nombre', 45)->nullable();
            $table->string('Apellido', 100)->nullable();
            $table->date('Fecha_Nacimiento')->nullable();
            $table->string('Genero', 10)->nullable();
            $table->string('Direccion', 100)->nullable();
            $table->string('Telefono_Contacto', 20)->nullable();
            $table->string('Correo_Electronico', 45)->nullable();
            $table->string('Rol', 45)->nullable();
            $table->date('Fecha_Inicio')->nullable();

            $table->unique(["ID_Docente"], 'ID_Docente_UNIQUE');
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
