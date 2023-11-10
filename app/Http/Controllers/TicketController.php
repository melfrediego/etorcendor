<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

use App\Models\Ticket;

class TicketController extends Controller
{
    private $totalPage = 20;

    public function index(){

      //$name = 'Krunal';
      //Mail::to('afrentideveloper@gmail.com')->send(new SendMailable($name));

       //dd(Config::get('mail'));
        $itens = Ticket::paginate($this->totalPage);
        return view('admin.ticket.index', compact('itens'));
    }

    public function create(){
        return view('admin.ticket.create');
    }

    // public function store(Request $request){
    //     $validatedData = $request->validate([
    //         'pergunta' => 'required',
    //         'resposta' => 'required',
    //         'visivel_home' => 'required',
    //         'ativo' => 'required',
    //     ]);
    //
    //     $dataForm = [
    //         'pergunta' => $request->pergunta,
    //         'resposta' => $request->resposta,
    //         'visivel_home' => $request->visivel_home,
    //         'ativo' => $request->ativo
    //     ];
    //
    //     $faq = Faq::create($dataForm);
    //     return redirect('/faq')->with('success', 'Dados inseridos com sucesso!');
    // }

    public function show($id){
        $ticket = Ticket::findOrFail($id);
        return view('admin.ticket.show', compact('ticket'));
    }

    public function edit($id){
        $ticket = Ticket::findOrFail($id);
        return view('admin.ticket.edit', compact('ticket'));
    }

    public function update(Request $request, $id){

        // dd($request->email);

        $data_atual = date('Y-m-d');

        $validatedData = $request->validate([
             'mensagem_resposta' => 'required',
             'respondido' => 'required'
         ]);

         $dataForm = [
             'mensagem_resposta' => $request->mensagem_resposta,
             'respondido' => $request->respondido,
             'data_resposta' => $request->$data_atual,
         ];

         $ticket_update = Ticket::whereId($id)->update($dataForm);

         if ($ticket_update) {
             Mail::send('email.resposta_ticket', [
                 "nome" => $request->nome,
                 "assunto" => $request->mensagem,
                 "resposta" => $request->mensagem_resposta
             ], function($m) use ($request){
                $m->subject('Resposta Ticket');
                $m->to($request->email);//email para envio
             });
         }

         //$faq = Faq::update($data);
         return redirect('/ticket')->with('success', 'Dados atulizados com sucesso, e email de resposta enviado!');
    }

    public function destroy(Request $request, $id){
        $ticket = Ticket::findOrFail($id);
        //dd($faq);
        $ticket->delete();
        return redirect('/ticket')->with('success', 'Registro excluido com sucesso!');
    }

    public function search(Request $request, Ticket $ticket){
        $dataForm = $request->all();
        $itens = $faq->search($dataForm, $this->totalPage);

        //dd($faqs);
        if (!$itens) {
            return redirect('/ticket')->with('error', 'Não encontramos nenhuma FAQ com os termos informados!');
        }
        return view('admin.ticket.index', compact('itens', 'dataForm'));
    }
}
