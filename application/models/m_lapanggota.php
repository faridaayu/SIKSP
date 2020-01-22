<?php
class m_lapanggota extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("NIP","desc"); 
		return $this->db->get('user')->result();
   }
   function get_jk() {
 $this->db->select('*');
 $this->db->from('jenis_kelamin');
 $query = $this->db->get();
 return $query->result();
}
function get_agama() {
 $this->db->select('*');
 $this->db->from('agama');
 $query = $this->db->get();
 return $query->result();
}
function get_unit() {
 $this->db->select('*');
 $this->db->from('unit');
 $query = $this->db->get();
 return $query->result();
}
}
?>