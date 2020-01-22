<?php 
class Withdraw extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_withdraw');
        $this->load->helper('url');
 
    }
 
    function index(){
        $this->load->view('v_withdraw');
    }
 
function tambah_aksi(){
        $NIP = $this->input->post('NIP');
        $tanggal_withdraw = date("Y-m-d H:i:s");
        $jenis_simpanan= $this->input->post('jenis_simpanan');
 $jumlah_withdraw= $this->input->post('jumlah_withdraw');
        $data = array(
            'NIP' => $NIP,
            'tanggal_withdraw' => $tanggal_withdraw,
            'jenis_simpanan' => $jenis_simpanan,
            'jumlah_withdraw'=>$jumlah_withdraw
 
            );

    
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->m_withdraw->input_data($data,'withdraw');
        redirect('withdraw');
    }
    function hapus($id_withdraw){
		$where = array('id_withdraw' => $id_withdraw);
		$this->m_withdraw->hapus_data($where,'withdraw');
		redirect('lapwithdraw');
	}
 
	function edit($id_withdraw){
		$where = array('id_withdraw' => $id_withdraw);
		$data['withdraw'] = $this->m_withdraw->edit_data($where,'withdraw')->result();
		$this->load->view('edit/withdraw',$data);
	}
	function update(){
  $NIP = $this->input->post('NIP');
        $tanggal_withdraw = date("Y-m-d H:i:s");
        $jenis_simpanan= $this->input->post('jenis_simpanan');
 $jumlah_withdraw= $this->input->post('jumlah_withdraw');
 
	$data = array(
		'NIP' => $NIP,
            'tanggal_withdraw' => $tanggal_withdraw,
            'jenis_simpanan' => $jenis_simpanan,
            'jumlah_withdraw'=>$jumlah_withdraw
	);
 
	$where = array(
		'id_withdraw' => $id_withdraw
	);
 
	$this->m_withdraw->update_data($where,$data,'withdraw');
	redirect('lapwithdraw');
}
 
}
 