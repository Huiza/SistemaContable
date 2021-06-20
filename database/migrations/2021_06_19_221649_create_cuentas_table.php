<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->string('codigo',6)->primary();
            $table->string('nombre_cuenta',100);
            $table->integer('subcuenta_id')->unsigned()->foreign()->references('id')->on('sub_cuentas')->onDelete('cascade');
            $table->integer('tipo_cuenta_id')->unsigned()->foreign()->references('id')->on('tipo_cuentas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}
