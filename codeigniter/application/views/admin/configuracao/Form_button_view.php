<main class="formulario_configuracao">
	<h1 class="mt-4 text-center"><?= isset($botoes) ? "Editar Botão" : "Adicionar Botão" ?></h1>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2"></h1>
	</div>
		<div class="col-md-12">
		<form action="<?= isset($botoes) ? base_url('admin/configuracao/editar/').$botoes['botoes_id'] : base_url('admin/configuracao/adicionar') ?>" method="post">
				<?= $csrf_input ?>

				<div class="text-dark col-md-6">
					<div class="form-group">
						<label for="botoes_titulo"><h5>Titulo</h5></label>
						<input type="text" class="form-control" name="botoes_titulo" id="botoes_titulo" placeholder="Titulo" value="<?= isset($botoes) ? $botoes['botoes_titulo'] : "" ?>" required>
					</div>
				</div>

				<div class="text-dark col-md-6">
					<div class="form-group">
						<label for="botoes_filtro"><h5>Filtro</h5></label>
						<input type="text" class="form-control" name="botoes_filtro" id="botoes_filtro" placeholder="Filtro" value="<?= isset($botoes) ? $botoes['botoes_filtro'] : "" ?>" required>
					</div>
				</div>

				<div class="text-dark col-md-6">
					<div class="form-group">
						<label for="botoes_icone"><h5>Icone</h5></label>
						<input type="text" class="form-control" name="botoes_icone" id="botoes_icone" placeholder="Icone" value="<?= isset($botoes) ? $botoes['botoes_icone'] : "" ?>" required>
					</div>
				</div>

				<div class="col-md-6">
					<div class="text-dark form-group">
						<label for="botoes_descricao"><h5>Descrição</h5></label>
						<textarea name="botoes_descricao" id="botoes_descricao" rows="5" class="form-control" required><?= isset($botoes) ? $botoes['botoes_descricao'] : "" ?></textarea>
					</div>
				</div>

				<div class="col-md-6">
						<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
						<a href="<?= base_url('admin/configuracao')?>" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
					</div>
				</div>
			</form>
		</div>
</main>