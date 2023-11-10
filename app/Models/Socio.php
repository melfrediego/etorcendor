<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Socio extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'matricula',
        'data_nascimento',
        'foto',
        'sexo',
        'estado_civil',
        'email',
        'senha',
        'local_retirada_kit',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'estado',
        'cidade',
        'leu_contrato',
        'ativo',
        'plano_id',
    ];

    public function planos(){
        return $this->hasMany('App\Plano');
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function transacoes(){
        return $this->hasMany(Transacao::class);
    }

    public function pedido(){
        return $this->hasMany(Pedido::class);
    }

    public function search(Array $data, $totalPage){

       return $this->where(function($query) use ($data){

            if (isset($data['search'])) {

                $query->where('id', $data['search'])
                    ->orwhere('matricula', $data['search'])
                    ->orwhere('nome', 'like', '%'.$data['search'].'%')
                    ->orwhere('cpf', $data['search']);
                //
                // $query->where('id', $data['search'])
                //     ->orWhereHas('user', function($query) use ($data){
                //         $query->where('name', 'like', '%'.$data['search'].'%');
                //     });
            }

            if (isset($data['ativo'])) {
               $query->where('ativo', $data['ativo']);
            }


        })->paginate($totalPage);
    }
}
