<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Configuracao_controller extends Sistema_Controller
{

    public function index(): void
    {
        $data['botoes'] = $this->Configuracao->getAll();
        $data['title'] = 'Configurações';
        $this->view('configuracao/Configuracao_view', $data);
    }

    public function adicionar(): void
    {
        $data['title'] = 'Configurações - Adcionar';
        $this->view('configuracao/Form_button_view', $data);
    }

    public function new(): void
    {
        $botao = $this->input->post();
        $this->Configuracao->insert($botao);
        $this->session->set_flashdata('success', 'BOTÃO ADCIONADO COM SUCESSO');    
        // redirect($this->agent->referrer());    
        redirect(base_url('admin/configuracao/adicionar'));
        //flash sem funcionar

    }

    public function openEdit($id): void
    {
        $data['botoes'] = $this->Configuracao->select($id);
        $data['title'] = 'Configurações - Editar';
        $this->view('configuracao/Form_button_view', $data);
        
    }

    public function edit($id): void
    {
        $botao = $this->input->post();
        $this->Configuracao->update( ['botoes_id' => $id] , $botao);
        redirect(base_url('admin/configuracao'));
    }
    public function delete($id): void
    {
        $botao = $this->input->post();
        $this->Configuracao->delete( ['botoes_id' => $id] , $botao);
        redirect(base_url('admin/configuracao'));

    }
    public function switch($id):void
    {
        $botoes = $this->Configuracao->select($id);
        $botao['botoes_id'] = $id;
        $botao['botoes_status'] = ($botoes['botoes_status']? 0 : 1);
        $this->Configuracao->update( ['botoes_id' => $id] , $botao);
        redirect(base_url('admin/configuracao'));
    }
}
