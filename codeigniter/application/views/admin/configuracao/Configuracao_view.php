<main class="formulario_configuracao">
    <h1 class="mt-4 text-center">Configuração dos botões inicias</h1>
    <hr>
    <div class="container my-2">
        <div>
            <a type="button" class="btn btn-primary" href="<?= base_url('admin/configuracao/adicionar')?>">Adicionar <i class="fa-solid fa-folder-plus"></i></i></a>
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
                                </thead>
                </tr>
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
                                    <a class="dropdown-item text-left" href="<?= base_url('admin/configuracao/editar/').$p['botoes_id']?>"><i class="fa-solid fa-pencil"></i> Editar</a>
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
</main>