    <main>
        <h1>Imagem dinamica</h1>
        <p>teste esse site em varios tamanhos</p>
        <picture>
            <source media="(max-width: 750px )" srcset="<?= base_url('public/imagens/foto-p.png')?>">
            <source media="(max-width: 1030px )" srcset="<?= base_url('public/imagens/foto-m.png')?>">
            <img src="<?= base_url('public/imagens/foto-g.png')?>" alt="imagem flexivel">
        </picture>
        <h1>Reproduzindo audio</h1>
        <p>Vamos aprender a reproduzir audio em HTMLS</p>
        <audio src="<?= base_url('public/midias/happy-mistake.mp3')?>" controls autoplay loop></audio>
    </main>