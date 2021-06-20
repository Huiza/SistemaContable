<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsientoContablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asiento_contables', function (Blueprint $table) {
            $table->id();
            $table->integer('libro_diario_id')->unsigned()->foreign()->references('id')->on('libro_diarios')->onDelete('cascade');
            $table->integer('cuenta_debe_id')->unsigned()->foreign()->references('codigo')->on('cuentas')->onDelete('cascade');
            $table->decimal('importe_debe', 8, 2);
            $table->integer('cuenta_haber_id')->unsigned()->foreign()->references('codigo')->on('cuentas')->onDelete('cascade');
            $table->decimal('importe_haber', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asiento_contables');
    }
}
