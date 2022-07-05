<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Gradiente_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Teste de Gradiente';
        $this->view('testes/Gradiente_view', $data);
    }
}
