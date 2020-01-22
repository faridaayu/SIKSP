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
                                <h4 class="card-title">Laporan Angsuran</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <tr>
                                                <th>Id Angsuran</th>
                                                <th>NIP</th>
                                                <th>Id Pinjaman</th>
                                                <th>Tanggal Angsuran</th>
                                                <th>Angsuran ke</th>
                                                <th>Jumlah Bayar</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
        $no = 1;
        foreach($angsuran as $a){ 
        ?>
        <tr>
            <td><?php echo $a->id_angsuran?></td>
            <td><?php echo $a->NIP?></td>
            <td><?php echo $a->id_pinjam?></td>
            <td><?php echo $a->tanggal_angsuran?></td>
            <td><?php echo $a->angsuran_ke?></td>
            <td><?php echo $a->jumlah_bayar?></td>
            <td><?php echo $a->keterangan?></td>
            <td>
                  <?php echo anchor('angsuran/edit/'.$a->id_angsuran,'Edit'); ?>
                              <?php echo anchor('angsuran/hapus/'.$a->id_angsuran,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
                                          
                                    </table>
                                </div>
                            </div>
                        </div>
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>
    