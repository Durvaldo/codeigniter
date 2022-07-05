<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cordel_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Cordel';
        $this->view('projetos_finais/Cordel_view', $data);
    }
}
