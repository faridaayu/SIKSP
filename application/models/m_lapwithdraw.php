<?php
class m_lapwithdraw extends CI_Model{
   function selectAll()
   {
		$this->db->order_by("NIP","desc"); 
		return $this->db->get('withdraw')->result();
   }
}
?>