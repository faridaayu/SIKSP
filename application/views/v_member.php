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
                                <h4 class="card-title">Form Register Anggota</h4>
                                <form class="m-t-40" action="<?php echo base_url(). 'member/tambah_aksi'; ?>" method="post">
                                    <div class="form-group">
                                        <h5>NIP <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="NIP" class="form-control" required data-validation-required-message="This field is required"> </div>
                                        <div class="form-control-feedback"><small>Masukkan <code>data</code> untuk validasi</small></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Nama<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="nama" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Tempat Lahir<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="tempat_lahir" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                     <div class="form-group">
                                        <h5>Tanggal Lahir<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="tanggal_lahir" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
    <label class="col-md-2 control-label"> Jenis Kelamin</label>
    <div class="col-md-3">
        <select class="form-control" name="jenis_kelamin">
                <option  value="">---Pilih Jenis Kelamin---</option>                    
            <?php foreach($get_jenis_kelamin as $row) { ?>
                <option value="<?php echo $row->id_jenis_kelamin;?>"><?php echo $row->jenis_kelamin;?></option>
            <?php } ?>
        </select>    
    </div>                
</div>

                                     <div class="form-group">
                                        <h5>Gaji<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="gaji" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                                                       <div class="form-group">
    <label class="col-md-2 control-label"> Agama</label>
    <div class="col-md-3">
        <select class="form-control" name="agama">
                <option  value="">---Pilih Agama---</option>                    
            <?php foreach($get_agama as $row) { ?>
                <option value="<?php echo $row->id_agama;?>"><?php echo $row->agama;?></option>
            <?php } ?>
        </select>    
    </div>                
</div>

                                                                 <div class="form-group">
    <label class="col-md-2 control-label"> Unit</label>
    <div class="col-md-3">
        <select class="form-control" name="unit">
                <option  value="">---Pilih Jenis Unit---</option>                    
            <?php foreach($get_unit as $row) { ?>
                <option value="<?php echo $row->id_unit;?>"><?php echo $row->unit;?></option>
            <?php } ?>
        </select>    
    </div>                
</div>

                                    <div class="form-group">
                                        <h5>Alamat <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="alamat" id="alamat" class="form-control" required placeholder="Masukkan Alamat lengkap"></textarea>
                                        </div>
                                    </div>

                                          <div class="form-group">
                                        <h5>Email<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                     <div class="form-group">
                                        <h5>No HP<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="no_hp" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                        
                                      <div class="form-group">
                                        <h5>Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                  
                                <div class="text-xs-right">
                                        <button type="submit" class="btn btn-info">Submit</button>
                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>