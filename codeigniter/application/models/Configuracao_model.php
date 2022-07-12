<?php
class Configuracao_model extends CI_model
{
    protected $table = 'botoes';

    public function getAll()
    {
        return $this->db->get($this->table)->result_array();
        
    }

    public function insert(array $dados): void
    {
        $this->db->insert($this->table, $dados);
    }

    public function select($id)
    {
        return $this->db->get_where($this->table,['botoes_id' => $id])->row_array();
    }
    
    public function update(array $where, array $dados): void
    {
        $this->db->update($this->table, $dados, $where);
    }

    public function delete(array $where, array $dados): void
    {
        $this->db->delete($this->table , $where, $limit = '1', $reset_data = TRUE);
    }
}