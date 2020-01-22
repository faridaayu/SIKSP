<?php 
class Angsuran extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_angsuran');
        $this->load->helper('url');
 
    }
 
    function index(){
        $this->load->view('v_angsuran');
    }
 
function tambah_aksi(){
        $NIP = $this->input->post('NIP');
        $tanggal_angsuran = date("Y-m-d H:i:s");
        $angsuran_ke = $this->input->post('angsuran_ke');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $keterangan= $this->input->post('keterangan');

        $data = array(
            'NIP' => $NIP,
            'tanggal_angsuran' => $tanggal_angsuran,
            'angsuran_ke' => $angsuran_ke,
            'jumlah_bayar'=>$jumlah_bayar,
            'keterangan'=>$keterangan

 
            );

    
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->m_angsuran->input_data($data,'angsuran');
        redirect('angsuran');
    }
 
function hapus($id_angsuran){
        $where = array('id_angsuran' => $id_angsuran);
        $this->m_angsuran->hapus_data($where,'angsuran');
        redirect('lapangsuran');
    }
 
    function edit($id_angsuran){
        $where = array('id_angsuran' => $id_angsuran);
        $data['angsuran'] = $this->m_angsuran->edit_data($where,'angsuran')->result();
        $this->load->view('edit/angsuran',$data);
    }
    function update(){
         $NIP = $this->input->post('NIP');
        $tanggal_angsuran = date("Y-m-d H:i:s");
        $angsuran_ke = $this->input->post('angsuran_ke');
        $jumlah_bayar = $this->input->post('jumlah_bayar');
        $keterangan= $this->input->post('keterangan');

        $data = array(
            'NIP' => $NIP,
            'tanggal_angsuran' => $tanggal_angsuran,
            'angsuran_ke' => $angsuran_ke,
            'jumlah_bayar'=>$jumlah_bayar,
            'keterangan'=>$keterangan
    );
 
    $where = array(
        'id_angsuran' => $id_angsuran
    );
 
    $this->m_angsuran->update_data($where,$data,'angsuran');
    redirect('lapangsuran');
}
 
}
 