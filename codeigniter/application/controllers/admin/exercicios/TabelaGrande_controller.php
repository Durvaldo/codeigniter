<?php
defined('BASEPATH') or exit('No direct script access allowed');


class TabelaGrande_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Tabela Grande';
        $this->view('exercicios/TabelaGrande_view', $data);
    }
}
