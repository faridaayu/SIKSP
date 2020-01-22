<?php
class m_lapangsuran extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("NIP","desc"); 
		return $this->db->get('angsuran')->result();
   }
}
?>