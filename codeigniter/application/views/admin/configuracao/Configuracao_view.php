<main class="formulario_configuracao">
    <h1 class="mt-4 text-center">Configuração dos botões inicias</h1>
    <hr>
    <div class="container my-2">
        <div>
            <a type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#add_button_modal">Adicionar <i class="fa-solid fa-folder-plus"></i></a>
        </div>
        <table class="table table-striped table-bordered table-hover mb-8">
            <thead>
                <tr class="cabecalho_tabela">
                    <th scope="col">Titulo</th>
                    <th scope="col">Filtro</th>
                    <th scope="col">Icone</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Status</th>
                    <th scope="col">Editar</th> 
                </tr>
            </thead>  
            <tbody>
                <?php foreach ($botoes as $p) : ?>
                    <tr>
                        <td class="text-dark text-left"><?= $p['botoes_titulo'] ?></td>
                        <td class="text-dark text-left"><?= $p['botoes_filtro'] ?></td>
                        <td class="text-dark text-left"><?= $p['botoes_icone'] ?></td>
                        <td class="text-dark text-left"><?= $p['botoes_descricao'] ?></td>
                        <td class="text-dark text-center">
                            
                                    <span class="text-center fa-solid fa-circle <?= ($p['botoes_status'] == 0 ? 'text-danger' : 'text-success') ?> " style="font-size:20px"></span>
                        </td>
                        <td class="text-dark text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-caret-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-left editar_tabela_botoes_button" data-button_id="<?= $p['botoes_id'] ?>" href="#">
                                        <i class="fa-solid fa-pencil"></i> Editar
                                    </a>
                                    <a class="dropdown-item text-left" href="<?= base_url('admin/configuracao/deletar/').$p['botoes_id']?>"><i class="fa-solid fa-trash-can"></i></i> Apagar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-left" href="<?= base_url('admin/configuracao/switch/').$p['botoes_id']?>" method="post">
                                        <i class="fa-solid fa-toggle-<?= ($p['botoes_status'] == 1 ? 'on' : 'off')?>"></i> <?= ($p['botoes_status'] == 0 ? 'Ativar' : 'Desativar')?>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?php $this->load->view('admin/components/configuracao/edit_button_modal') ?> 
    <?php $this->load->view('admin/components/configuracao/add_button_modal') ?> 
</main>

<script>
    window.onload = function(){
        let edit_button_modal = new bootstrap.Modal(document.getElementById('edit_button_modal'))

        $('.editar_tabela_botoes_button').on('click', function(){
            const button_id = this.dataset.button_id;
            $.ajax({
                    method: "POST",
                    url: "<?= base_url('admin/api/tabela_botoes/buscar-botao') ?>",
                    data: {
                        id: button_id,
                        <?= $csrf_name ?>: "<?= $csrf_value ?>"
                    }
            })
            .done(function(botao) {
                $('#botoes_titulo').val(botao.botoes_titulo)
                $('#botoes_filtro').val(botao.botoes_filtro)
                $('#botoes_icone').val(botao.botoes_icone)
                $('#botoes_descricao').val(botao.botoes_descricao)
                $('#botoes_id').val(button_id)
                edit_button_modal.toggle();  
            })
            
        }) 
    }
</script>