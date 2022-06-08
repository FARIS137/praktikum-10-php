<?php
class mahasiswa_model extends CI_model{
    private $table = 'mahasiswa';


    public function getall(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

}


?>