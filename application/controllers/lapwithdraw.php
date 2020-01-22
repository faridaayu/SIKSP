<?php
class Lapwithdraw extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('m_lapwithdraw');
}
function index()
{
	$data['withdraw']=$this->m_lapwithdraw->selectAll();
	$this->load->view('v_lapwithdraw',$data);
	}
}
?>