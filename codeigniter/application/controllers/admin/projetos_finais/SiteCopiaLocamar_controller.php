<?php
defined('BASEPATH') or exit('No direct script access allowed');


class SiteCopiaLocamar_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Locamar';
        $this->view('projetos_finais/SiteCopiaLocamar_view', $data);
    }
}
