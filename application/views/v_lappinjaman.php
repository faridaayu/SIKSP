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
                                <h4 class="card-title">Laporan Pinjaman</h4>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                            <tr>
                                                <th>Id Pinjaman</th>
                                                <th>NIP</th>
                                                <th>Jumlah Pinjaman</th>
                                                <th>Bunga Pinjaman</th>
                                                <th>Tanggal Pinjaman</th>
                                                <th>Lama Pinjaman</th>
                                                <th>Denda Pinjaman</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                            <?php 
        $no = 1;
        foreach($pinjaman as $p){ 
        ?>
        <tr>
            <td><?php echo $p->id_pinjam?></td>
            <td><?php echo $p->NIP?></td>
            <td><?php echo $p->jumlah_pinjam?></td>
            <td><?php echo $p->bunga?></td>
            <td><?php echo $p->tanggal_pinjam?></td>
            <td><?php echo $p->lama_pinjam?></td>
            <td><?php echo $p->denda?></td>
            <td><?php echo $p->keterangan?></td>
            <td>
                  <?php echo anchor('pinjaman/edit/'.$p->id_pinjam,'Edit'); ?>
                              <?php echo anchor('pinjaman/hapus/'.$p->id_pinjam,'Hapus'); ?>
            </td>
        </tr>
        <?php } ?>
                                          
                                    </table>
                                </div>
                            </div>
                        </div>

                        <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>