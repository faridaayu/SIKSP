<?php 
 
class M_anggota extends CI_Model{
    function tampil_data(){
        return $this->db->get('user');
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
    function get_jk() {
 $this->db->select('*');
 $this->db->from('jenis_kelamin');
 $query = $this->db->get();
 return $query->result();
}
   function get_unit() {
 $this->db->select('*');
 $this->db->from('unit');
 $query = $this->db->get();
 return $query->result();
}
   function get_agama() {
 $this->db->select('*');
 $this->db->from('agama');
 $query = $this->db->get();
 return $query->result();
}
}