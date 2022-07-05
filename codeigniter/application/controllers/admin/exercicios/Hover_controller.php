<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hover_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Hover e Inline Box';
        $this->view('exercicios/Hover_view', $data);
    }
}
