<div class="modal fade" id="add_button_modal" tabindex="-1" role="dialog" aria-labelledby="botão_para_adcionar" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary d-flex justify-content-between">
                <div><h5 class="modal-title font-weight-light text-white">Adicionar Botão</h5></div>
				<div><button class=" btn-close" type="button" data-dismiss="modal" aria-label="Close"></button></div>
            </div>
			<form class="p-4" action="<?= base_url('admin/configuracao/adicionar')?>" method="post">
				<?= $csrf_input ?>

				<div class="row">
					<div class="text-dark col-md-6">
						<div class="form-group">
							<label for="botoes_titulo"><h5>Titulo</h5></label>
							<input type="text" class="form-control" name="botoes_titulo" id="botoes_titulo" placeholder="Titulo" required>
						</div>
					</div>
					<div class="text-dark col-md-5">
						<!-- <div class="form-group">
							<label for="botoes_filtro"><h5>Filtro</h5></label>
							<input type="text" class="form-control" name="botoes_filtro" id="botoes_filtro" placeholder="Filtro" required>
						</div> -->
						<div class="form-group">
							<label for="botoes_filtro">Filtro</label>
							<select class="custom-select" id="botoes_filtro" name="botoes_filtro" required>
							<option value="" disabled selected>Selecione...</option>
								<?php foreach ($filtros as $filtro) : ?>
									<option value="<?= $filtro['filtro_id'] ?>"><?= str_replace("-", " ", ucfirst($filtro['filtro_text'])) ?></option>
        

								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-md-1">
						<div><h4 class="text-white">teste</h4></div>
						<a type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#add_filtro_button_modal"><i class="fa-solid fa-circle-plus"></i></i></a>
					</div>
					<div class="text-dark col-md-5">
						<div class="form-group">
							<label for="botoes_icone">Icone</label>
							<select class="custom-select" id="botoes_icone" name="botoes_icone" required>
								<option value="" disabled selected>Selecione...</option>
								<?php foreach ($icones as $icone) : ?>
									<option value="<?= $icone['icone_id'] ?>"><?= $icone['icone_tipo'] ." fa-".$icone['icone_text']?></option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>
					<div class="col-md-1">
						<div><h4 class="text-white">teste</h4></div>
						<a type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#add_icone_button_modal"><i class="fa-solid fa-circle-plus"></i></i></a>
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