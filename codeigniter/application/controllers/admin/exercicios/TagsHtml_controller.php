<?php
defined('BASEPATH') or exit('No direct script access allowed');


class TagsHtml_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['title'] = 'Tags em Html';
        $this->view('exercicios/TagsHtml_view', $data);
    }
}
