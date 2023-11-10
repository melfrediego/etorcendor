<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $table = 'bancos';

    protected $fillable = [
        'numero',
        'nome',
        'ativo'
    ];

    public function search(Array $data, $totalPage){
        return $this->where(function($query) use ($data){
            $query->where('numero', 'like', '%'.$data['search'].'%')
            ->orwhere('nome', 'like', '%'.$data['search'].'%');
        })
        ->paginate($totalPage);
    }


    public function solicitacao_retirada(){
        return $this->hasOne(SolicitacaoRetiradaFinanceira::class);
    }
}
