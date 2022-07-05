<?php
defined('BASEPATH') or exit('No direct script access allowed');


class AlinhamentoVertical_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Alinhamento Vertical';
        $this->view('exercicios/AlinhamentoVertical_view', $data);
    }
}
