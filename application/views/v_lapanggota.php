<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/leftbar.php") ?>
<?php $this->load->view("_partials/breadcrumb.php") ?>
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Anggota</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <tr>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Gaji</th>
                                                <th>Agama</th>
                                                <th>Unit</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No HP</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
        $no = 1;
        foreach($user as $a){ 
             foreach ($jenis_kelamin as $jk) {
             # code...
            if ($a->id_jenis_kelamin==$jk->id_jenis_kelamin) {
                # code...
                $k=$jk->jenis_kelamin;
            }
         } 
         foreach ($agama as $ag) {
             # code...
            if ($a->id_agama==$ag->id_agama) {
                # code...
                $x=$ag->agama;
            }
         } 
         foreach ($unit as $un) {
             # code...
            if ($a->id_unit==$un->id_unit) {
                # code...
                $y=$un->unit;
            }
         } 

        ?>
        <tr>
            <td><?php echo $a->NIP?></td>
            <td><?php echo $a->nama?></td>
            <td><?php echo $a->tempat_lahir?></td>
            <td><?php echo $a->tanggal_lahir?></td>
            <td><?php echo $k?></td>
            <td><?php echo $a->gaji?></td>
            <td><?php echo $x?></td>
            <td><?php echo $y?></td>
            <td><?php echo $a->alamat?></td>
            <td><?php echo $a->email?></td>
            <td><?php echo $a->no_hp?></td>
            <td><?php echo $a->password?></td>
     
            <td>
                  <?php echo anchor('crud/edit/'.$a->NIP,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$a->NIP,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
                                          
                                    </table>
                                </div>
                            </div>
                        </div>


                           <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>
