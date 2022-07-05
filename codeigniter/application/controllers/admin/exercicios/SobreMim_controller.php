<?php
defined('BASEPATH') or exit('No direct script access allowed');


class SobreMim_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Minhas Redes Sociais';
        $this->view('exercicios/SobreMim_view', $data);
    }
}
