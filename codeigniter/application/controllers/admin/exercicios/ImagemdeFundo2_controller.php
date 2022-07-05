<?php
defined('BASEPATH') or exit('No direct script access allowed');


class ImagemdeFundo2_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Background';
        $this->view('exercicios/ImagemdeFundo2_view', $data);
    }
}
