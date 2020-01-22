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
                                <h4 class="card-title">Laporan Withdraw</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <tr>
                                                <th>Id Withdraw</th>
                                                <th>NIP</th>
                                                <th>Id Simpanan</th>
                                                <th>Jenis Withdraw</th>
                                                <th>Tanggal Withdraw</th>
                                                <th>Jumlah Withdraw</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
        $no = 1;
        foreach($withdraw as $w){ 
        ?>
        <tr>
            <td><?php echo $w->id_withdraw?></td>
            <td><?php echo $w->NIP?></td>
            <td><?php echo $w->id_simpanan?></td>
            <td><?php echo $w->jenis_simpanan?></td>
            <td><?php echo $w->tanggal_withdraw?></td>
            <td><?php echo $w->jumlah_withdraw?></td>
            <td>
                  <?php echo anchor('withdraw/edit/'.$w->id_withdraw,'Edit'); ?>
                              <?php echo anchor('withdraw/hapus/'.$w->id_withdraw,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
                                          
                                    </table>
                                </div>
                            </div>
                        </div>
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>