<div class="modal fade" id="add_icone_button_modal" tabindex="-1" role="dialog" aria-labelledby="botão_para_adcionar_icone" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary d-flex justify-content-between">
                <div><h5 class="modal-title font-weight-light text-white">Adicionar Icone</h5></div>
				<div><button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button></div>
            </div>
			<form class="p-4" action="<?= base_url('admin/configuracao/adicionar/icone')?>" method="post">
				<?= $csrf_input ?>

				<div class="row">
					<div class="text-dark col-12">
						<h3>Como cadastrar</h3>
						<p>Vá no site do <a target="_blank" href="https://fontawesome.com/search?m=free&s=solid%2Cbrands%2Cregular">Font Awesome</a> e escolha uma das opções <strong>free</strong> no primeiro selecione o tipo do icone, e depois a parte final dele. Cuidado para não repetir o "fa"</p>
					</div>
					<div class="text-dark col-md-4">
						<div class="form-group">
							<label for="icone_text"><h5>Icone</h5></label>
							<select class="custom-select" id="icone_tipo" name="icone_tipo" required>
								<option value="" disabled selected>Selecione...</option>
								<option>fa-solid</i></option>
								<option>fa-regular</option>
								<option>fa-brands</option>
							</select>
						</div>
					</div>
					<div class="text-dark col-1 col-md-1">
						<div><h4 class="text-white">3</h4></div>
						<h4 class="text-right">fa-</h4>
					</div>
					<div class="text-dark col-11 col-md-7">
						<div class="form-group">
						<div><h4 class="text-white">teste</h4></div>
							<input type="text" class="form-control" name="icone_text" id="icone_text" placeholder="Ex.: font-awesome" required>
						</div>
					</div>
					<hr  class="align-self-center col">
					<div class="col-md-12 d-flex justify-content-end">
						<a href="<?= base_url('admin/configuracao')?>" class="btn btn-danger btn-xs mr-2"><i class="fas fa-times"></i> Cancel</a>
						<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>