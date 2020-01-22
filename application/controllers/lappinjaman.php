<?php
class Lappinjaman extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('m_lappinjaman');
}
function index()
{
	$data['pinjaman']=$this->m_lappinjaman->selectAll();
	$this->load->view('v_lappinjaman',$data);
	}
}
?>