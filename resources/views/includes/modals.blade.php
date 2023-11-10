<!-- Modal Structure -->
{{-- <div id="modalLoad" class="modal">
    <div class="modal-content">
        <h4 class="center"><b>Aguarde!</b></h4>
        <p class="center">Estamos processando sua solicitação.</p>
        <br>
        <p class="center">
            <img src="{{ url('images/gif/loading.gif') }}" alt="" width="50">
        </p>
    </div>
</div> --}}

<!-- Modal extra grande -->


<div class="modal fade modal-load" id="load" tabindex="-1" role="dialog" aria-labelledby="myload" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <h5 class="text-center container-modal">Aguarde...</h5>
    </div>
  </div>
</div>

<div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="myload" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content">
      <h5 class="text-center container-modal">Aguarde...</h5>
    </div>
  </div>
</div>


<div class="modal fade detalhe-mensalidade" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <h5 class="text-center container-modal">Detlhe da mensalidade</h5>
    </div>
  </div>
</div>

<!-- Modal Structure Success0#########################################################################################################-->


<div class="modal fade" id="modal_sucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			{{-- <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">
					Modal title
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div> --}}
			<div class="modal-body text-center">
                {{-- <div class="img_icon center">
                    <img src="{{ url('images/icon/success_icon.png') }}" alt="" width="50">
                </div> --}}
                <h1 class="text-success">Sucesso!</h1>
                <br>
				<p class="texto-sucesso"></p>
			</div>
			<div class="modal-footer d-flex justify-content-center">
				{{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">
					Sair
				</button> --}}
                <a href="#!" class="modal-close btn btn-link">Ok entendi, fechar!</a>
				{{-- <button type="button" class="btn btn-primary">
					Fechar
				</button> --}}
			</div>
		</div>
	</div>
</div>

<!-- Modal Structure Error -->
<div class="modal fade" id="modal_erro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			{{-- <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">
					Modal title
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						×
					</span>
				</button>
			</div> --}}
			<div class="modal-body text-center">
                {{-- <div class="img_icon center">
                    <img src="{{ url('images/icon/success_icon.png') }}" alt="" width="50">
                </div> --}}
                <h1 class="text-danger">Erros!</h1>
                <br>
				<p class="texto-erro"></p>
			</div>
			<div class="modal-footer d-flex justify-content-center">
                <a href="#!" class="modal-close btn btn-link">Ok entendi, fechar!</a>
			</div>
		</div>
	</div>
</div>



{{-- Modal Form Alterar Vencimento Mensalidade --}}
<div class="modal fade" id="modal-novo-vencimento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Vencimento Mensalidade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="form_nova_data">
                    <input type="hidden" id="mensalidade_id" name="" value="">
                    <input type="hidden" id="socio_id" name="" value="">

                    <div class="form-group m-form__group row">
						<label for="example-text-input" class="col-3 col-form-label">
							Nova Data:
						</label>
						<div class="col-6">
							<input type="date" id="txt-vencimento" class="form-control" id="vencimento">
						</div>
					</div>

                    {{-- <div class="form-group m-form__group row">
						<label for="example-text-input" class="col-3 col-form-label">
							Propagar:
						</label>
						<div class="col-6">
                            <div class="m-radio-inline">
    							<label class="m-radio">
    								<input type="radio" name="propagar" id="propagar_data" value="0">
    								Não
    								<span></span>
    							</label>
    							<label class="m-radio">
    								<input type="radio" name="propagar" id="propagar_data" value="1">
    								Sim
    								<span></span>
    							</label>
    						</div>
						</div>
					</div> --}}
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success btn-salvar-vencimento">Salvar</button>
            </div>
        </div>
    </div>
</div>


{{-- Modal Form Alterar Vencimento Boleto --}}
<div class="modal fade" id="modal-novo-vencimento-boleto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novo Vencimento Boleto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form id="form_nova_data">
                    {{-- <input type="hidden" id="mensalidade_id" name="" value=""> --}}
                    <input type="hidden" id="boleto_transacao_id" name="" value="">
                    <input type="hidden" class="socio_id" id="boleto_socio_id" name="" value="">

                    <div class="form-group m-form__group row">
						<label for="example-text-input" class="col-3 col-form-label">
							Nova Data:
						</label>
						<div class="col-6">
							<input type="date" id="txt-vencimento-boleto" class="form-control" id="vencimento">
						</div>
					</div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-success btn-salvar-vencimento-boleto">Salvar</button>
            </div>
        </div>
    </div>
</div>
