<?php
defined('BASEPATH') or exit('No direct script access allowed');


class BrincandoComBootstrap_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Bootstrap';
        $this->view('testes/BrincandoComBootstrap_view', $data);
    }
}
