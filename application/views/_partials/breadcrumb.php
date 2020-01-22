<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">SISTEM INFORMASI KOPERASI SIMPAN PINJAM</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <!-- Breadcrumbs-->
<ol class="breadcrumb">
<?php foreach ($this->uri->segments as $segment): ?>
    <?php 
        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
        $is_active =  $url == $this->uri->uri_string;
    ?>


    <li class="breadcrumb-item <?php echo $is_active ? 'active': '' ?>">
        <?php if($is_active): ?>
            <?php echo ucfirst($segment) ?>
        <?php else: ?>
            <a href="<?php echo site_url($url) ?>"><?php echo ucfirst($segment) ?></a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
</ol>

                        </div>
                    </div>
                </div>