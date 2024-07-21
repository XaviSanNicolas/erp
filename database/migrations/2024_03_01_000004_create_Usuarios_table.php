<?php

//namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'Usuarios';

    /**
     * Run the migrations.
     * @table Usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idUsuarios');
            $table->string('Nombre_Usuario', 45)->nullable();
            $table->string('Password', 45)->nullable();
            $table->string('Rol', 45)->nullable();

            $table->unique(["idUsuarios"], 'idUsuarios_UNIQUE');
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
