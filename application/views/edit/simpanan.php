<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/leftbar.php") ?>
<?php $this->load->view("_partials/breadcrumb.php") ?>
 
<?php foreach($simpanan as $s){ ?>

                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Simpanan Anggota</h4>
                                <form class="m-t-40" action="<?php echo base_url(). 'simpanan/update'; ?>" method="post">

                                    <div class="form-group">
                                        <h5>NIP<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input id="NIP" name="NIP" type="text" class="form-control" placeholder="Masukkan NIP" required value="<?php echo $s->NIP?>"> <span class="input-group-btn">
                                                  <button class="btn btn-info" type="button">Cari</button>
                                                </span> </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
    <label class="col-md-2 control-label"> Jenis Simpanan</label>
    <div class="col-md-3">
        <select class="form-control" name="jenis_simpanan">
                <option  value="">---Pilih Jenis Simpanan---</option>                    
            <?php foreach($get_jenis_simpanan as $row) { ?>
                <option value="<?php echo $row->id_jenis_simpanan;?>"><?php echo $row->jenis_simpanan;?></option>
            <?php } ?>
        </select>    
    </div>                
</div>

                                  
                                <div class="form-group">
                                        <h5>Jumlah Simpanan<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input id="jumlah_simpanan" name="jumlah_simpanan" type="text" class="form-control" required data-validation-required-message="This field is required" min="100000" value="<?php echo $s->jumlah_simpanan?>">
                                        </div>
                                        <div class="form-control-feedback"><small><i>Minimal Rp.100.000</i></small></div>
                                    </div>

                                <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Simpan</button>
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