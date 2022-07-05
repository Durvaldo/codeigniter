<?php
defined('BASEPATH') or exit('No direct script access allowed');


class VilaBarovia_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Vila Barovia';
        $this->view('testes/VilaBarovia_view', $data);
    }
}
