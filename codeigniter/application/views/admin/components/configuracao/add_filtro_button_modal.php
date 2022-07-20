<div class="modal fade" id="add_filtro_button_modal" tabindex="-1" role="dialog" aria-labelledby="botão_para_adcionar_filtro" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary d-flex justify-content-between">
                <div><h5 class="modal-title font-weight-light text-white">Adicionar Filtro</h5></div>
				<div><button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button></div>
            </div>
			<form class="p-4" action="<?= base_url('admin/configuracao/adicionar/filtro')?>" method="post">
				<?= $csrf_input ?>
				<div class="row">
					<div class="text-dark col-md-6">
						<div class="form-group">
							<label for="filtro_text"><h5>Filtro</h5></label>
							<input type="text" class="form-control" name="filtro_text" id="filtro_text" placeholder="Ex.: Projetos Finais" required>
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