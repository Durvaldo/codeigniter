<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estudos_Iframe_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Olá Mundo';
        $this->view('exercicios/Estudos_Iframe_view', $data);
    }
}
