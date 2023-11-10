<?php


Auth::routes();


Route::middleware(['auth'])->group(function () {
    // Route::get('/', function () {
    //     return view('admin.home');
    // });

    Route::get('/', 'AdminController@index');

    // Socio Torcedor
    Route::get('socio', 'SocioController@index')->name('socio');
    Route::get('socio/create', 'SocioController@create')->name('socio.create');
    Route::get('socio/{id}/edit', 'SocioController@edit')->name('socio.edit');
    Route::get('socio/{id}', 'SocioController@show')->name('socio.show');
    Route::post('socio/store', 'SocioController@store')->name('socio.store');
    Route::post('socio/{id}', 'SocioController@update')->name('socio.update');
    Route::get('socio/ativar/{id}', 'SocioController@ativar')->name('socio.ativar');
    Route::get('socio/gera_senha/{id}', 'SocioController@gera_senha')->name('socio.gera_senha');
    Route::get('socio-mensalidades/{id}', 'SocioController@gera_senha')->name('socio.socio_mensalidade');
    Route::get('socio/email', 'SocioController@email')->name('socio.email');
    Route::get('/socio/get-cidade/{id}', 'SocioController@get_cidade')->name('socio.get_cidade');
    // Route::post('socio/{id}', 'SocioController@update')->name('socio.update');
    Route::delete('socio/destroy/{id}', 'SocioController@destroy')->name('socio.destroy');
    Route::any('socio-search', 'SocioController@search')->name('socio.search');

    // FAQS
    Route::get('faq', 'FaqController@index')->name('socio');
    Route::get('faq/create', 'FaqController@create')->name('faq.create');
    Route::get('faq/{id}/edit', 'FaqController@edit')->name('faq.edit');
    Route::get('faq/{id}', 'FaqController@show')->name('faq.show');
    Route::post('faq/store', 'FaqController@store')->name('faq.store');
    Route::post('faq/{id}', 'FaqController@update')->name('faq.update');
    Route::delete('faq/destroy/{id}', 'FaqController@destroy')->name('faq.destroy');
    Route::any('faq-search', 'FaqController@search')->name('faq.search');

    // Config/Bancos
    Route::get('banco', 'BancoController@index')->name('socio');
    Route::get('banco/create', 'BancoController@create')->name('banco.create');
    Route::get('banco/{id}/edit', 'BancoController@edit')->name('banco.edit');
    Route::get('banco/{id}', 'BancoController@show')->name('banco.show');
    Route::post('banco/store', 'BancoController@store')->name('banco.store');
    Route::post('banco/{id}', 'BancoController@update')->name('banco.update');
    Route::delete('banco/destroy/{id}', 'BancoController@destroy')->name('banco.destroy');
    Route::any('banco-search', 'BancoController@search')->name('banco.search');

    // GerenciaNet/Bancos
    Route::get('solicitacao-retirada-financeira', 'SolicitacaoRetiradaFinanceiraController@index')->name('socio');
    Route::get('solicitacao-retirada-financeira/create', 'SolicitacaoRetiradaFinanceiraController@create')->name('solicitacao-retirada-financeira.create');
    Route::get('solicitacao-retirada-financeira/{id}/edit', 'SolicitacaoRetiradaFinanceiraController@edit')->name('solicitacao-retirada-financeira.edit');
    Route::get('solicitacao-retirada-financeira/{id}', 'SolicitacaoRetiradaFinanceiraController@show')->name('solicitacao-retirada-financeira.show');
    Route::post('solicitacao-retirada-financeira/store', 'SolicitacaoRetiradaFinanceiraController@store')->name('solicitacao-retirada-financeira.store');
    Route::post('solicitacao-retirada-financeira/{id}', 'SolicitacaoRetiradaFinanceiraController@update')->name('solicitacao-retirada-financeira.update');
    Route::delete('solicitacao-retirada-financeira/destroy/{id}', 'SolicitacaoRetiradaFinanceiraController@destroy')->name('solicitacao-retirada-financeira.destroy');
    Route::any('solicitacao-retirada-financeira-search', 'SolicitacaoRetiradaFinanceiraController@search')->name('solicitacao-retirada-financeira.search');


    // Planos
    Route::get('plano', 'PlanoController@index')->name('socio');
    Route::get('plano/create', 'PlanoController@create')->name('plano.create');
    Route::get('plano/{id}/edit', 'PlanoController@edit')->name('plano.edit');
    Route::get('plano/{id}', 'PlanoController@show')->name('plano.show');
    Route::post('plano/store', 'PlanoController@store')->name('plano.store');
    Route::post('plano/{id}', 'PlanoController@update')->name('plano.update');
    Route::delete('plano/destroy/{id}', 'PlanoController@destroy')->name('plano.destroy');
    Route::any('plano-search', 'PlanoController@search')->name('plano.search');

    // PArceiros/Patrocinadores
    Route::get('parceiro-patrocinador', 'ParceiroPatrocinadorController@index')->name('parceiro-patrocinador');
    Route::get('parceiro-patrocinador/create', 'ParceiroPatrocinadorController@create')->name('parceiro-patrocinador.create');
    Route::get('parceiro-patrocinador/{id}/edit', 'ParceiroPatrocinadorController@edit')->name('parceiro-patrocinador.edit');
    Route::get('parceiro-patrocinador/{id}', 'ParceiroPatrocinadorController@show')->name('parceiro-patrocinador.show');
    Route::post('parceiro-patrocinador/store', 'ParceiroPatrocinadorController@store')->name('parceiro-patrocinador.store');
    Route::post('parceiro-patrocinador/{id}', 'ParceiroPatrocinadorController@update')->name('parceiro-patrocinador.update');
    Route::delete('parceiro-patrocinador/destroy/{id}', 'ParceiroPatrocinadorController@destroy')->name('parceiro-patrocinador.destroy');
    Route::any('parceiro-patrocinador-search', 'ParceiroPatrocinadorController@search')->name('parceiro-patrocinador.search');

    // Tickets
    Route::get('ticket', 'TicketController@index')->name('ticket');
    Route::get('ticket/create', 'TicketController@create')->name('ticket.create');
    Route::get('ticket/{id}/edit', 'TicketController@edit')->name('ticket.edit');
    Route::get('ticket/{id}', 'TicketController@show')->name('ticket.show');
    Route::post('ticket/store', 'TicketController@store')->name('ticket.store');
    Route::post('ticket/{id}', 'TicketController@update')->name('ticket.update');
    Route::delete('ticket/destroy/{id}', 'TicketController@destroy')->name('ticket.destroy');
    Route::any('ticket-search', 'TicketController@search')->name('ticket.search');

    // Mensalidades
    Route::get('mensalidade', 'MensalidadeController@index')->name('mensalidade');
    Route::get('mensalidade/create', 'MensalidadeController@create')->name('mensalidade.create');
    Route::get('mensalidade/{id}/edit', 'MensalidadeController@edit')->name('mensalidade.edit');
    Route::get('mensalidade/{id}', 'MensalidadeController@show')->name('mensalidade.show');
    Route::get('mensalidade/mensalidade-socio/{id}', 'MensalidadeController@mensalidade_socio')->name('mensalidade.mensalidade_socio');
    Route::get('mensalidade/gerar-boleto/{id}/{socio_id}', 'MensalidadeController@transacao_boleto')->name('mensalidade.transacao_boleto');
    Route::get('mensalidade/reenviar-boleto/{id_transacao}/{socio_id}', 'MensalidadeController@reenviar_boleto_gerencia_net')->name('mensalidade.reenvio_boleto');
    Route::get('mensalidade/detalhe-transacao/{id_transacao}', 'MensalidadeController@detalhe_transacao_gerencia_net')->name('mensalidade.detalhe_transacao');
    Route::post('mensalidade/store', 'MensalidadeController@store')->name('mensalidade.store');
    Route::post('mensalidade/alterar_vencimento', 'MensalidadeController@alterar_vencimento_mensalidade')->name('mensalidade.alterar_vencimento');
    Route::post('mensalidade/alterar_vencimento_boleto', 'MensalidadeController@alterar_vencimento_gerencia_net')->name('mensalidade.alterar_vencimento_boleto');
    Route::post('mensalidade/{id}', 'MensalidadeController@update')->name('mensalidade.update');
    Route::delete('mensalidade/destroy/{id}', 'MensalidadeController@destroy')->name('mensalidade.destroy');
    Route::any('mensalidade-search', 'MensalidadeController@search')->name('mensalidade.search');

    //Usuarios
    Route::get('usuarios', 'Auth\UserController@index')->name('usuarios.index');
    Route::get('usuarios/create', 'Auth\UserController@create')->name('usuarios.create');
    Route::get('usuarios/{id}/edit', 'Auth\UserController@edit')->name('usuarios.edit');
    Route::get('usuarios/{id}', 'Auth\UserController@show')->name('usuarios.show');
    Route::post('usuarios/store', 'Auth\UserController@store')->name('usuarios.store');
    Route::post('usuarios/{id}', 'Auth\UserController@update')->name('usuarios.update');
    Route::delete('usuarios/destroy/{id}', 'Auth\UserController@destroy')->name('usuarios.destroy');

    Route::get('baixa/{id_mensalidade}', 'MensalidadeController@update')->name('baixa');

    //Teste envio de emails
    Route::get('/enviar-email', function (){

        Mail::send('email.boas_vindas', ["nome" => "Torcedor Teste"], function($m){
           $m->subject('Socio Eterno Campeao - Bem Vindo');
           $m->to('afrentideveloper@gmail.com');//email para envio
           $m->from('nao-responda@socioeternocampeao.com.br');
        });
    });

});



Route::get('/home', 'HomeController@index')->name('home');
