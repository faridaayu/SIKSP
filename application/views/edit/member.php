<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/leftbar.php") ?>
<?php $this->load->view("_partials/breadcrumb.php") ?>

<?php foreach($user as $u){ ?>

                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Register Anggota</h4>
                                <form class="m-t-40" action="<?php echo base_url(). 'member/update'; ?>" method="post">
                                    <div class="form-group">
                                        <h5>NIP <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                                        <div class="form-control-feedback"><small>Masukkan <code>data</code> untuk validasi</small></div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Nama<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Tempat Lahir<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Tanggal Lahir<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" placeholder="Tgl/Bln/Thn" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Jenis Kelamin <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="select" id="select" required class="form-control">
                                                <option value="">Pilih Jenis Kelamin</option>
                                                <option value="1">Laki-laki</option>
                                                <option value="2">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Gaji<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Masukkan dalam rupiah" data-validation-required-message="This field is required">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-dollar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Agama<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Unit<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>Alamat <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="textarea" id="textarea" class="form-control" required placeholder="Masukkan Alamat lengkap"></textarea>
                                        </div>
                                    </div>

                                          <div class="form-group">
                                        <h5>Email <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" class="form-control" placeholder="Email Address" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" data-validation-regex-message="Enter Valid Email"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Nomer HP <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="maxChar" class="form-control" required data-validation-required-message="This field is required" maxlength="13">
                                        </div>
                                        <div class="form-control-feedback"><small>Masukkan <code>maksimal='13'</code> angka </small></div>
                                    </div>
                                     <div class="form-group">
                                        <h5>Password<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>Foto<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="file" class="form-control" required> </div>
                                    </div>
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
                <?php } ?>
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>