<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitacaoRetiradaFinanceira extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitacao_retirada_financeira', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo_pessoa', ['PF', 'PJ']);
            $table->string('nome', 150);
            $table->string('cpf_cnpj');
            $table->enum('tipo_conta', ['CC', 'CP']);
            $table->string('agencia_numero');
            $table->string('agencia_digito')->nullable();
            $table->string('conta_numero');
            $table->string('conta_digito')->nullable();

            $table->unsignedBigInteger('banco_id');
            $table->foreign('banco_id')
                ->references('id')
                ->on('bancos');

            $table->enum('deferido', ['S', 'N'])->nullable();
            $table->text('observacao_deferido')->nullable();

            $table->decimal('valor_solicitado', 8,2);
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
        Schema::dropIfExists('solicitacao_retirada_financeira');
    }
}
