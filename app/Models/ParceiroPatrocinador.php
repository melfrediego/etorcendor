<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParceiroPatrocinador extends Model
{

    protected $table = 'parceiro_patrocinadores';

    protected $fillable = [
        'nome_razao_social',
        'cpf_cnpj',
        'email',
        'site',
        'patrocinador',
        'parceiro',
        'responsavel_nome',
        'responsavel_email',
        'responsavel_telefone',
        'logo',
    ];

    public function search(Array $data, $totalPage){
        return $this->where(function($query) use ($data){
            $query->where('nome_razao_social', 'like', '%'.$data['search'].'%')
            ->orwhere('email', 'like', '%'.$data['search'].'%');
        })
        ->paginate($totalPage);
    }
}
