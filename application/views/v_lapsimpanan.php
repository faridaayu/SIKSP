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
                                <h4 class="card-title">Laporan Simpanan</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <tr>
                                                <th>Id Simpanan</th>
                                                <th>NIP</th>
                                                <th>Jumlah Simpanan</th>
                                                <th>Jenis Simpanan</th>
                                                <th>Tanggal Simpanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
        $no = 1;
        foreach($simpanan as $s){
        foreach ($jenis_simpanan as $key) {
             # code...
            if ($s->id_jenis_simpanan==$key->id_jenis_simpanan) {
                # code...
                $a=$key->jenis_simpanan;
            }
         } 
        ?>
        <tr>
            <td><?php echo $s->id_simpanan?></td>
            <td><?php echo $s->NIP?></td>
            <td><?php echo $s->jumlah_simpanan?></td>
            <td><?php echo $a?></td>
            <td><?php echo $s->tanggal_simpanan?></td>
            <td>
                  <?php echo anchor('simpanan/edit/'.$s->id_simpanan,'Edit'); ?>
                              <?php echo anchor('simpanan/hapus/'.$s->id_simpanan,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
                                          
                                    </table>
                                </div>
                            </div>
                        </div>
               <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>