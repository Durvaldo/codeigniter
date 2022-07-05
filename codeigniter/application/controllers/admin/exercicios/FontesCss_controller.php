<?php
defined('BASEPATH') or exit('No direct script access allowed');


class FontesCss_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Brincando com fontes';
        $this->view('exercicios/FontesCss_view', $data);
    }
}
