<?php

namespace App\Http\Controllers;

use App\Models\Cidade;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    private $totalPage = 20;

    public function index(){
        $itens = Cidade::paginate($this->totalPage);
        return view('admin.cidade.index', compact('itens'));
    }
}
