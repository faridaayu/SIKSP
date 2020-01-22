<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head.php") ?>
<?php $this->load->view("_partials/navbar.php") ?>
<?php $this->load->view("_partials/leftbar.php") ?>
<?php $this->load->view("_partials/breadcrumb.php") ?>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Info box -->
                <!-- ============================================================== -->
                    <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                </div>
                <div class="mr-5">Simpanan</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>lapsimpanan">
                <span class="float-left">View Details</span>
                </a>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                </div>
                <div class="mr-5">Pinjaman</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>lappinjaman">
                <span class="float-left">View Details</span>
                </a>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                </div>
                <div class="mr-5">Angsuran</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>lapangsuran">
                <span class="float-left">View Details</span>
                </a>
            </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                <div class="card-body-icon">
                </div>
                <div class="mr-5">Withdraw</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url();?>lapwithdraw">
                <span class="float-left">View Details</span>
                </a>
            </div>
            </div>
        </div>

        </div>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->
    
                <?php $this->load->view("_partials/rightbar.php") ?>
   <?php $this->load->view("_partials/js.php") ?>