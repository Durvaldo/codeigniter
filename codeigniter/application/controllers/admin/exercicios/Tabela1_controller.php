<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tabela1_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Tabela Pequena';
        $this->view('exercicios/Tabela1_view', $data);
    }
}
