<?php
defined('BASEPATH') or exit('No direct script access allowed');


class LinksHiperlinks_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Links e Hiperlinks';
        $this->view('exercicios/LinksHiperlinks_view', $data);
    }
    public function algoritmo(): void
    {
        $data['title'] = 'Curso de Algoritmos';
        $this->view('exercicios/Video2_view', $data);
    }
    public function javascript(): void
    {
        $data['title'] = 'Curso de Javascript';
        $this->view('exercicios/Video3_view', $data);
    }
    public function hardware(): void
    {
        $data['title'] = 'Curso de Hardware';
        $this->view('exercicios/Video4_view', $data);
    }
    public function python(): void
    {
        $data['title'] = 'Curso de Python';
        $this->view('exercicios/Video5_view', $data);
    }

}
