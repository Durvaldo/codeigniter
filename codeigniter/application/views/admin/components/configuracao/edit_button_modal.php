<div class="modal fade" id="edit_button_modal" tabindex="-1" role="dialog" aria-labelledby="botão_para_editar" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary d-flex justify-content-between">
                <div><h5 class="modal-title font-weight-light text-white" id="add_paciente_label">Editar Botão</h5></div>
				<div><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button></div>
            </div>
			<form class="p-4" action="<?= base_url('admin/configuracao/editar')?>" method="post">
				<?= $csrf_input ?>
				<input type="hidden" name="botoes_id" id="botoes_id">

				<div class="row">
					<div class="text-dark col-md-6">
						<div class="form-group">
							<label for="botoes_titulo"><h5>Titulo</h5></label>
							<input type="text" class="form-control" name="botoes_titulo" id="botoes_titulo" placeholder="Titulo" required>
						</div>
					</div>
					<div class="text-dark col-md-6">
						<div class="form-group">
							<label for="botoes_filtro"><h5>Filtro</h5></label>
							<input type="text" class="form-control" name="botoes_filtro" id="botoes_filtro" placeholder="Filtro" required>
						</div>
					</div>
					<div class="text-dark col-md-6">
						<div class="form-group">
							<label for="botoes_icone"><h5>Icone</h5></label>
							<input type="text" class="form-control" name="botoes_icone" id="botoes_icone" placeholder="Icone" required>
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-dark form-group">
							<label for="botoes_descricao"><h5>Descrição</h5></label>
							<textarea name="botoes_descricao" id="botoes_descricao" rows="5" class="form-control" required></textarea>
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