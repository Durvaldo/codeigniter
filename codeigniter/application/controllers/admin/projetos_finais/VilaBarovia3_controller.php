<?php
defined('BASEPATH') or exit('No direct script access allowed');


class VilaBarovia3_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Vila de Barovia';
        $this->view('projetos_finais/VilaBarovia3_view', $data);
    }
}
