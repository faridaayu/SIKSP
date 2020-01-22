<?php
class m_lapsimpanan extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("NIP","desc"); 
		return $this->db->get('simpanan')->result();
   }
   function get_option() {
 $this->db->select('*');
 $this->db->from('jenis_simpanan');
 $query = $this->db->get();
 return $query->result();
}
}
?>