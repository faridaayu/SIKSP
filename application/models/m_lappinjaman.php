<?php
class m_lappinjaman extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("NIP","desc"); 
		return $this->db->get('pinjaman')->result();
   }
}
?>