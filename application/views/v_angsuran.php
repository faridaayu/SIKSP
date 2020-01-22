<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/leftbar.php") ?>
<?php $this->load->view("_partials/breadcrumb.php") ?>

<?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Angsuran Anggota</h4>
                                <form class="m-t-40" action="<?php echo base_url(). 'angsuran/tambah_aksi'; ?>" method="post">
                                    
                                    <div class="form-group">
                                        <div class="form-group">
                                        <h5>NIP<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input id="NIP" name="NIP" type="text" class="form-control" placeholder="Masukkan NIP" required> <span class="input-group-btn">
                                                  <button class="btn btn-info" type="button">Cari</button>
                                                </span> </div>
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <h5>Angsuran ke<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="angsuran_ke" class="form-control"> </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                   <div class="form-group">
                                        <h5>Jumlah Bayar<span class="text-danger"></span></h5>
                                        <div class="controls">
                                            <input type="text" name="jumlah_bayar" class="form-control"> </div>
                                        <div class="form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Keterangan<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="keterangan" id="keterangan" class="form-control" required placeholder="Catatan untuk Angsuran"></textarea>
                                        </div>
                                    </div>
                                <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Bayar</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>