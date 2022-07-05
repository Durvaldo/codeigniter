<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ImagemDinamica_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Imagem Dinamica';
        $this->view('exercicios/ImagemDinamica_view', $data);
    }
}
