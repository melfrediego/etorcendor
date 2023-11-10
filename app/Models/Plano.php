<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $fillable = [
        'nome',
        'titulo',
        'descricao',
        'validade',
        'valor',
        'valor_adesao',
        'ativo',
        'tipo_assinatura',
        'imagem_carteira_frente',
        'imagem_carteira_verso',
    ];

    // public function search(Array $data, $totalPage){
    //     return $this->where(function($query) use ($data){
    //         $query->where('pergunta', 'like', '%'.$data['search'].'%')
    //         ->orwhere('pergunta', 'like', '%'.$data['search'].'%');
    //     })
    //     ->paginate($totalPage);
    // }
}
