<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/leftbar.php") ?>
<?php $this->load->view("_partials/breadcrumb.php") ?>
       

      <?php foreach($withdraw as $w){ ?>

                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Withdraw Anggota</h4>
                                <form class="m-t-40" action="<?php echo base_url(). 'withdraw/update'; ?>" method="post">
                                   
                                   <div class="form-group">
                                        <div class="form-group">
                                        <h5>NIP<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="hidden" name="id_withdraw" value="<?php echo $w->id_withdraw ?>">
                                                <input id="NIP" name="NIP" type="text" class="form-control" placeholder="Masukkan NIP" required value="<?php echo $w->NIP?>"> <span class="input-group-btn">
                                                  <button class="btn btn-info" type="button">Cari</button>
                                                </span> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Jenis Simpanan <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="jenis_simpanan" id="jenis_simpanan" class="form-control" required placeholder="Otomatis"  value="<?php echo $w->jenis_simpanan?>"></textarea>
                                        </div>
                                    </div>


                                   <div class="form-group">
                                        <h5>Jumlah Withdraw <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="jumlah_withdraw" name="jumlah_withdraw" class="form-control" required data-validation-required-message="This field is required" minlength="6" maxlength="8"  value="<?php echo $w->jumlah_withdraw?>"> </div>
                                    </div>
                                <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Save</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>
    