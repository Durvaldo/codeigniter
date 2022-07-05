<?php
defined('BASEPATH') or exit('No direct script access allowed');


class QuebraDeLinha_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Quebra de Linha';
        $this->view('exercicios/QuebraDeLinha_view', $data);
    }
}
