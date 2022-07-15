<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Botoes_controller extends Sistema_Controller
{

    public function buscarBotao(): void
    {
        $id = $this->input->post('id');
        
        $resultado = $this->Configuracao->select($id);

        if ($resultado) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($resultado));
        } else {
            show_404();
        }
    }
}
