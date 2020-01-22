<?php
class Lapsimpanan extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('m_lapsimpanan');
}
function index()
{
	$data['simpanan']=$this->m_lapsimpanan->selectAll();
	$data['jenis_simpanan']=$this->m_lapsimpanan->get_option();
	$this->load->view('v_lapsimpanan',$data);
	}
}
?>