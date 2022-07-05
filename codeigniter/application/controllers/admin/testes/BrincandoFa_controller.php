<?php
defined('BASEPATH') or exit('No direct script access allowed');


class BrincandoFa_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Brincando com Font Awesome';
        $this->view('testes/BrincandoFa_view', $data);
    }
}
