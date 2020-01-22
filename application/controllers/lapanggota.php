<?php
class Lapanggota extends CI_Controller{
function __construct(){
	parent::__construct();
	$this->load->model('m_lapanggota');
}
function index()
{
	$data['user']=$this->m_lapanggota->selectAll();
	$data['jenis_kelamin']=$this->m_lapanggota->get_jk();
	$data['agama']=$this->m_lapanggota->get_agama();
	$data['unit']=$this->m_lapanggota->get_unit();
	$this->load->view('v_lapanggota',$data);
	}
}
?>