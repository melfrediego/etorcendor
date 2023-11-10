<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitacaoRetiradaFinanceira extends Model
{
    protected $table = 'solicitacao_retirada_financeira';

    protected $fillable = [
        'tipo_pessoa',
        'nome',
        'cpf_cnpj',
        'tipo_conta',
        'agencia_numero',
        'agencia_digito',
        'conta_numero',
        'conta_digito',
        'banco_id',
        'banco_id',
        'deferido',
        'observacao_deferido',
        'valor_solicitado'
    ];

    public function banco(){
        return $this->belongsTo(Banco::class);
    }
}
