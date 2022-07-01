<?php

class Sistema_Controller extends CI_Controller
{

    /**
     * ACL VAR
     * Variável que controla acesso as funcionalidades do ACL
     */
    // public $acess_control_list = [
    //     'gestão' =>                     ['inicio', 'laboratorio', 'pacientes', 'regulacao', 'transportes', 'almoxarifado', 'configuracoes', 'assistencia-social', 'api'],
    //     'regulação' =>                  ['inicio', 'pacientes', 'regulacao', 'transportes', 'configuracoes', 'api'],
    //     'regulação externa' =>          ['inicio', 'pacientes', 'regulacao', 'transportes', 'configuracoes', 'api'],
    //     'laboratorio' =>                ['inicio', 'pacientes', 'laboratorio', 'configuracoes', 'api'],
    //     'gestor laboratorio' =>         ['inicio', 'pacientes', 'laboratorio', 'configuracoes', 'api'],
    //     'assistência social' =>         ['inicio', 'pacientes', 'assistencia-social', 'api'],
    //     'transportes' =>                ['inicio', 'pacientes', 'transportes', 'api'],
    //     'município' =>                  ['inicio', 'pacientes', 'regulacao', 'configuracoes', 'api'],
    //     'ubs' =>                        ['inicio', 'pacientes', 'regulacao', 'configuracoes', 'api'],
    //     'estabelecimento prestador' =>  ['inicio', 'regulacao', 'api'],
    //     'almoxarifado' =>               ['inicio', 'pacientes', 'almoxarifado', 'api'],
    //     'almoxarifado-solicitacao' =>   ['inicio', 'pacientes', 'almoxarifado', 'api'],
    //     'paciente' =>                   ['inicio'],
    // ];


    function __construct()
    {
        parent::__construct();

        /**
        *  ACS - ACCESS CONTROL SESSION
        *  Controla o acesso do sistema de acordo a existencia da sessão autenticada
        *  Essa condição ainda permite o uso do módulo do paciente, sem interferência na session do sistema
        */


        // if (empty($this->session->situacao_paciente) && empty($this->session->situacao_infosus))
        // {
        //     if ($this->uri->segment(1) == 'paciente' || $this->uri->segment(2) == 'paciente') 
        //     {
        //         $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
        //         redirect('paciente/login');
        //     }

        //     else if ($this->uri->segment(1) == 'v2' || $this->uri->segment(2) == 'v2')
        //     {
        //         $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
        //         redirect('auth');
                
        //     }
        // }

        // else if ($this->session->situacao_paciente && empty($this->session->situacao_infosus))
        // {
        //     if ($this->uri->segment(1) == 'v2' || $this->uri->segment(2) == 'v2')
        //     {
        //         $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
        //         redirect('auth');
                
        //     }
        // }

        // else if (empty($this->session->situacao_paciente) && $this->session->situacao_infosus)
        // {
        //     if ($this->uri->segment(1) == 'paciente')
        //     {
        //         $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
        //         redirect('paciente/login');
        //     }
        // }





        // if (empty($this->session->usuario_email) xor ($this->uri->segment(1) != 'paciente' and empty($this->session->usuario_password))) {
        //     $this->session->set_flashdata('danger', 'Falha na autenticação. Faça login novamente.');
        //     if ($this->uri->segment(1) == 'paciente') {
        //         redirect('paciente/login');

        //     }else{
        //     redirect('auth');
        //     }
        // }



        /**
         * ACL - ACCESS CONTROL LIST
         * Controla o acesso dos recursos de acordo o segmneto 2 de url
         */
        // if (!in_array($this->uri->segment(2), $this->acess_control_list[$this->session->usuario_nivel])) {
        //     $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
        //     redirect($this->agent->referrer());
        // }

        // if ($this->session->usuario_nivel == 'ubs' || $this->session->usuario_nivel == 'município' || $this->session->usuario_nivel == 'estabelecimento prestador'){
        //     if ($this->uri->segment(2) == 'configuracoes' && in_array($this->uri->segment(3), ['procedimentos', 'cirurgias', 'exames', 'especialidades', 'motoristas', 'municipios', 'usuarios', 'cotas', 'estabelecimentos'])){
        //         $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
        //         redirect($this->agent->referrer());
        //     }
        //     if (in_array($this->uri->segment(3), ['casa-de-apoio', 'tfd'])) {
        //         $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
        //         redirect($this->agent->referrer());
        //     }
        //     if (in_array($this->uri->segment(4), ['dashboard'])) {
        //         $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
        //         redirect($this->agent->referrer());
        //     }
        //     if ($this->uri->segment(4) == 'fila' && $this->session->usuario_nivel == 'estabelecimento prestador') {
        //         $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
        //         redirect($this->agent->referrer());
        //     }
        // }

        // if ($this->session->usuario_nivel == 'município' || $this->session->usuario_nivel == 'estabelecimento prestador') {
        //     if (in_array($this->uri->segment(3), ['cotas-especialidades'])) {
        //         $this->session->set_flashdata('danger', '<i class="fas fa-hand-paper"></i> VOCÊ NÃO TEM PERMISSÃO PARA ESTA PÁGINA OU FUNCIONALIDADE.');
        //         redirect($this->agent->referrer());
        //     }
        // }

        // if (in_array('ubs', $_SESSION) || in_array('município', $_SESSION) || in_array('estabelecimento prestador', $_SESSION)){
        //     define('ACESSO_EXTERNO', true);
        // } else {
        //     define('ACESSO_EXTERNO', false);
        // }


        //LOG PARA TODAS AS REQUISIÇÕES POST
        // if ($this->input->post() and $this->uri->segment(2) != 'api') {
        //     $json = [
        //         'log_tipo' => 'automatic log',
        //         'log_desc' => json_encode([
        //             'referrer' => $this->agent->referrer(),
        //             'current' => current_url(),
        //             'get' => $this->input->get(),
        //             'post' => $this->input->post(),
        //             'user' => $this->session->usuario_id
        //         ])
        //     ];
        //     $this->db->insert('logs', $json);
        // }
       
       
    }

     /**
     * Função que monta as views da v2
     */

    public function view(string $view, array $data = []): void
        {
            $data['durvaldo'] = 'passei aqui';
            pre($data);

            $data['csrf_input'] = '<input type="hidden" name="' . $this->security->get_csrf_token_name() . '" value="' . $this->security->get_csrf_hash() . '">';
            $data['csrf_name'] = $this->security->get_csrf_token_name();
            $data['csrf_value'] = $this->security->get_csrf_hash();
            
            $this->load->view('admin/includes/Header_view', $data);
            $this->load->view('admin/' . $view, $data);
            $this->load->view('admin/includes/Footer_view', $data);
        }
    
}
