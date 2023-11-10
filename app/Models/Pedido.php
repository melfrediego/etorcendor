<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    public function socio(){
        return $this->belongsTo(Socio::class);
    }

    public function plano(){
        return $this->belongsTo(Plano::class);
    }

    //Pedido tem Muitas Mensalidades
    public function mensalidades(){
        return $this->hasMany(Mensalidade::class);
    }
}
