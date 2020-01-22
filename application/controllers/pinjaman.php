<?php 
class Pinjaman extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_pinjaman');
        $this->load->helper('url');
 
    }
 
    function index(){
        $this->load->view('v_pinjaman');
    }
 
function tambah_aksi(){
        $NIP = $this->input->post('NIP');
        $tanggal_pinjam = date("Y-m-d H:i:s");
        $jumlah_pinjam = $this->input->post('jumlah_pinjam');
        $bunga = $this->input->post('bunga');
        $lama_pinjam = $this->input->post('lama_pinjam');
        $denda = $this->input->post('denda');
        $keterangan= $this->input->post('keterangan');

        $data = array(
            'NIP' => $NIP,
            'tanggal_pinjam' => $tanggal_pinjam,
            'jumlah_pinjam' => $jumlah_pinjam,
            'bunga' => $bunga,
            'lama_pinjam' => $lama_pinjam,
            'denda'=>$denda,
            'keterangan'=>$keterangan

 
            );

    
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->m_pinjaman->input_data($data,'pinjaman');
        redirect('pinjaman');
    }
 
    function hapus($id_pinjam){
        $where = array('id_pinjam' => $id_pinjam);
        $this->m_pinjaman->hapus_data($where,'pinjaman');
        redirect('lappinjaman');
    }
 
    function edit($id_pinjam){
        $where = array('id_pinjam' => $id_pinjam);
        $data['pinjaman'] = $this->m_pinjaman->edit_data($where,'pinjaman')->result();
        $this->load->view('edit/pinjaman',$data);
    }
    function update(){
    $NIP = $this->input->post('NIP');
        $tanggal_pinjam = date("Y-m-d H:i:s");
        $jumlah_pinjam = $this->input->post('jumlah_pinjam');
        $bunga = $this->input->post('bunga');
        $lama_pinjam = $this->input->post('lama_pinjam');
        $denda = $this->input->post('denda');
        $keterangan= $this->input->post('keterangan');

        $data = array(
            'NIP' => $NIP,
            'tanggal_pinjam' => $tanggal_pinjam,
            'jumlah_pinjam' => $jumlah_pinjam,
            'bunga' => $bunga,
            'lama_pinjam' => $lama_pinjam,
            'denda'=>$denda,
            'keterangan'=>$keterangan
    );
 
    $where = array(
        'id_pinjam' => $id_pinjam
    );
 
    $this->m_pinjaman->update_data($where,$data,'pinjaman');
    redirect('lappinjaman');
}
 
}