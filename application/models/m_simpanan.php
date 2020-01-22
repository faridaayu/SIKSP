<?php 
 
class M_simpanan extends CI_Model{
    function tampil_data(){
        return $this->db->get('simpanan');
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
 
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
 
    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }
 
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   
    function get_option() {
 $this->db->select('*');
 $this->db->from('jenis_simpanan');
 $query = $this->db->get();
 return $query->result();
}
}