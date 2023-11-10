<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Socio;
use App\Models\Pedido;
use App\Models\Mensalidade;

class _SocioController extends Controller
{
    private $totalPage = 100;

    public function index(){


      $socios = Socio::paginate($this->totalPage);

      // $socios = Socio::with(['pedido'])->get();

      // foreach ($socios as $key => $pedido) {
      //    echo $pedido[$key]['pedido'];
      // }

      //dd($socios->pedido);

      return view('admin.socio.index', compact(['socios']));


    }

    public function create(){
      return view('admin.socio.create');
    }

    public function store(Request $request){
        //return redirect('/app/pedidos')->with('success', 'Dados inseridos com sucesso!');
   }

   public function show($id){
       $socio = Socio::findOrFail($id);

       return view('admin.socio.show', compact('socio'));
   }

   public function edit($id){
       $socio = Socio::findOrFail($id);
       $pedido = Pedido::where('socio_id', $id)->get()->first();
       $mensalidades = Mensalidade::where('pedido_id', $pedido->id)->orderBy('numero_mensalidade','ASC')->get();

       // dd($mensalidades);
       return view('admin.socio.edit', compact('socio', 'pedido', 'mensalidades'));
   }

   public function update(Request $request, $id){

   }

   public function destroy(Request $request, $id){

   }

    public function search(Request $request, Socio $socio){
        $dataForm = $request->all();
        $socios = $socio->search($dataForm, $this->totalPage);
        if (!$socios) {
            return redirect('/socios')->with('error', 'Não encontramos nenhuma Socio com os termos informados!');
        }
        return view('admin.socio.index', compact('socios', 'dataForm'));
    }

    public function email(){
        Mail::send('email.boas_vindas', ["nome" => "Torcedor Teste"], function($m){
           $m->subject('Socio Eterno Campeao - Bem Vindo');
           //$m->to('melfre21@gmail.com');//email para envio
           $m->to('afrentideveloper@gmail.com');//email para envio
        });
    }
}
