<main>
        <h1>Imagem dinamica</h1>
        <p>Testando fazer a imagem ficar dinamica com outro codigo</p>
        <picture>
            <source media="(min-width:1030px )" srcset="<?= base_url('public/imagens/foto-g.png')?>">
            <source media="(min-width:750px )" srcset="<?= base_url('public/imagens/foto-m.png')?>">
            <img src="<?= base_url('public/imagens/foto-p.png')?>" alt="Imagem flexivel">
        </picture>
    </main>