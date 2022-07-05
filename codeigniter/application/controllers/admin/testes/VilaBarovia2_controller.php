<?php
defined('BASEPATH') or exit('No direct script access allowed');


class VilaBarovia2_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Vila barovia 2.0';
        $this->view('testes/VilaBarovia2_view', $data);
    }
}
