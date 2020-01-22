<?php
class m_login extends CI_Model{
    //cek nip dan password admin
    function auth_admin($NIP,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE NIP='$NIP' AND password=('$password') LIMIT 1");
        return $query;
    }
 
    //cek nip dan password user
    function auth_user($NIP,$password){
        $query=$this->db->query("SELECT * FROM user WHERE NIP='$NIP' AND password=('$password') LIMIT 1");
        return $query;
    }
 
}