<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->unique();
            $table->string('description', 100)->nullable();
        });
        DB::table('roles')->insert(array('id'=>'1','name'=>'Administrador', 'description'=>'Administradores de área'));
        DB::table('roles')->insert(array('id'=>'2','name'=>'Usuario', 'description'=>'Vendedor área venta'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
