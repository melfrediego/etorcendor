<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['nome', 'email', 'telefone', 'assunto', 'mensagem', 'mensagem_resposta', 'respondido', 'data_resposta'];

    public function search(Array $data, $totalPage){
        return $this->where(function($query) use ($data){
            $query->where('nome', 'like', '%'.$data['search'].'%')
            ->orwhere('email', 'like', '%'.$data['search'].'%');
        })
        ->paginate($totalPage);
    }
}
