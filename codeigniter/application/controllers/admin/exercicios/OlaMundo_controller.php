<?php
defined('BASEPATH') or exit('No direct script access allowed');


class OlaMundo_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Olá Mundo';
        $this->view('exercicios/OlaMundo_view', $data);
    }
}
