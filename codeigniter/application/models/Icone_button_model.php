<?php
class Icone_button_model extends CI_model
{
    protected $table = 'icone_botoes';
    
    public function getAll()
    {
        return $this->db->get($this->table)->result_array();    
    }

    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }

}