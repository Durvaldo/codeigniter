<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Inicio_controller extends Sistema_Controller
{

    public function index(): void
    {
 
        $data['title'] = 'Inicio';
        $this->view('inicio/Inicio_view', $data);
    }
}