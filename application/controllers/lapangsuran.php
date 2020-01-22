<?php
class Lapangsuran extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('m_lapangsuran');
}
function index()
{
	$data['angsuran']=$this->m_lapangsuran->selectAll();
	$this->load->view('v_lapangsuran',$data);
	}
}
?>