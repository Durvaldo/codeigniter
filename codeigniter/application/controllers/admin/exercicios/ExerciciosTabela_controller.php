<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ExerciciosTabela_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Exercicios Tabela';
        $this->view('exercicios/ExerciciosTabela_view', $data);
    }
}
