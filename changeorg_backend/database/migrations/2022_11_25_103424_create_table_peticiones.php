<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticiones', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
            $table->text('descripcion');
            $table->text('destinatario');
            $table->integer('firmantes');
            $table->enum('estado', ['aceptada', 'pendiente']);
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categories');
            $table->string('image', 255, );
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
        Schema::dropIfExists('table_peticiones');
    }
};
