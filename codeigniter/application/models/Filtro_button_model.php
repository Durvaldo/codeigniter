<?php
class Filtro_button_model extends CI_model
{
    protected $table = 'filtro_botoes';
    
    public function getAll()
    {
        return $this->db->get($this->table)->result_array();    
    }

    public function insert(array $dados): void
    {
        $dados['filtro_text'] = mb_strtolower($dados['filtro_text'], 'UTF-8');
        $dados['filtro_text'] = trim($dados['filtro_text']);

        do{
            $dados['filtro_text'] = str_replace("  ", " ", $dados['filtro_text'], $count);
        }while ($count > 0);

        $dados['filtro_text'] = str_replace(" ", "-", $dados['filtro_text']);
        $this->db->insert($this->table, $dados);
    }
}