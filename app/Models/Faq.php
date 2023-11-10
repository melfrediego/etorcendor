<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['pergunta', 'resposta', 'visivel_home', 'ativo'];

    public function search(Array $data, $totalPage){
        return $this->where(function($query) use ($data){
            $query->where('pergunta', 'like', '%'.$data['search'].'%')
            ->orwhere('pergunta', 'like', '%'.$data['search'].'%');
        })
        ->paginate($totalPage);
    }
}
