<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Video_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Videos Locais';
        $this->view('exercicios/Video_view', $data);
    }
}
