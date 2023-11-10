<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanoVantagem extends Model
{

    protected $table = "plano_vantagens";

    protected $fillable = [
        'descricao_vantagem',
        'visivel_home',
        'plano_id'
    ];
}
