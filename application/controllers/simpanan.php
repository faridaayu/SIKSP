<?php 
class Simpanan extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_simpanan');
        $this->load->helper('url');
 
    }
 
    function index(){
        $data=array('get_jenis_simpanan'=> $this->m_simpanan->get_option()
    );  
 $this->load->view('v_simpanan', $data);
    }
 
function tambah_aksi(){
        $NIP = $this->input->post('NIP');
        $tanggal_simpanan = date("Y-m-d H:i:s");
        $jenis_simpanan= $this->input->post('jenis_simpanan');
 $jumlah_simpanan= $this->input->post('jumlah_simpanan');
        $data = array(
            'NIP' => $NIP,
            'tanggal_simpanan' => $tanggal_simpanan,
            'id_jenis_simpanan' => $this->input->post('jenis_simpanan'),
            'jumlah_simpanan'=>$jumlah_simpanan
            );

    
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->m_simpanan->input_data($data,'simpanan');
        redirect('simpanan');
    }
 
    function hapus($id_simpanan){
        $where = array('id_simpanan' => $id_simpanan);
        $this->m_simpanan->hapus_data($where,'simpanan');
        redirect('lapsimpanan');
    }
 
    function edit($id_simpanan){
        $where = array('id_simpanan' => $id_simpanan);
        $data['simpanan'] = $this->m_simpanan->edit_data($where,'simpanan')->result();
        $this->load->view('edit/simpanan',$data);
    }
    function update(){
 $NIP = $this->input->post('NIP');
        $tanggal_simpanan = date("Y-m-d H:i:s");
        $jenis_simpanan= $this->input->post('jenis_simpanan');
 $jumlah_simpanan= $this->input->post('jumlah_simpanan');
        $data = array(
            'NIP' => $NIP,
            'tanggal_simpanan' => $tanggal_simpanan,
            'id_jenis_simpanan' => $this->input->post('jenis_simpanan'),
            'jumlah_simpanan'=>$jumlah_simpanan
            );
 
    $where = array(
        'id_simpanan' => $id_simpanan
    );
 
    $this->m_simpanan->update_data($where,$data,'simpanan');
    redirect('lapsimpanan');
}
 
}