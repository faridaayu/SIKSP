<?php 
class Member extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_anggota');
        $this->load->helper('url');
 
    }
 
    function index(){
        $data=array(
            'get_jenis_kelamin'=> $this->m_anggota->get_jk(),
        	'get_unit'=> $this->m_anggota->get_unit(),
            'get_agama'=> $this->m_anggota->get_agama()
    );  
 $this->load->view('v_member', $data);
    }
 
function tambah_aksi(){
        $NIP = $this->input->post('NIP');
        $nama= $this->input->post('nama');
        $tempat_lahir= $this->input->post('tempat_lahir');
        $tanggal_lahir= $this->input->post('tanggal_lahir');
 $jenis_kelamin= $this->input->post('jenis_kelamin');
 $gaji= $this->input->post('gaji');
 $agama= $this->input->post('agama');
 $unit= $this->input->post('unit');
  $alamat= $this->input->post('alamat');
   $email= $this->input->post('email');
    $no_hp= $this->input->post('no_hp');
     $password= $this->input->post('password');
        $data = array(
            'NIP' => $NIP,
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'id_jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'gaji' => $gaji,
            'id_agama' => $this->input->post('agama'),
            'id_unit' => $this->input->post('unit'),
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $no_hp,
            'password' => $password
            );

    
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        $this->m_anggota->input_data($data,'user');
        redirect('member');
    }
 
    function hapus($NIP){
        $where = array('NIP' => $NIP);
        $this->m_anggota->hapus_data($where,'user');
        redirect('lapanggota');
    }
 
    function edit($NIP){
        $where = array('NIP' => $NIP);
        $data['user'] = $this->m_anggota->edit_data($where,'user')->result();
        $this->load->view('edit/member',$data);
    }
    function update(){
 $NIP = $this->input->post('NIP');
        $nama= $this->input->post('nama');
        $tempat_lahir= $this->input->post('tempat_lahir');
        $tanggal_lahir= $this->input->post('tanggal_lahir');
 $jenis_kelamin= $this->input->post('jenis_kelamin');
 $gaji= $this->input->post('gaji');
 $agama= $this->input->post('agama');
 $unit= $this->input->post('unit');
  $alamat= $this->input->post('alamat');
   $email= $this->input->post('email');
    $no_hp= $this->input->post('no_hp');
     $password= $this->input->post('password');
        $data = array(
            'NIP' => $NIP,
            'nama' => $nama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'id_jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'gaji' => $gaji,
            'id_agama' => $this->input->post('agama'),
            'id_unit' => $this->input->post('unit'),
            'alamat' => $alamat,
            'email' => $email,
            'no_hp' => $no_hp,
            'password' => $password
            );
 
    $where = array(
        'NIP' => $NIP
    );
 
    $this->m_anggota->update_data($where,$data,'user');
    redirect('lapanggota');
}
 
}