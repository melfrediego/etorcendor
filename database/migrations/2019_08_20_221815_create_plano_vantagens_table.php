<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoVantagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_vantagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao_vantagem');
            $table->boolean('visivel_home');
            $table->unsignedBigInteger('plano_id');
            $table->foreign('plano_id')
                ->references('id')
                ->on('planos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('plano_vantagens');
    }
}
