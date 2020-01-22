<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                          <li> <a href="<?php echo base_url();?>dashboard"><i class="icon-speedometer"></i>Dashboard</a>
                        </li>
                        <li class="nav-small-cap">--- MENU ---</li>
                        <li> <a href="<?php echo base_url();?>member" aria-expanded="false"><i class="ti-layout-grid2"></i>Register Member</a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-email"></i><span class="hide-menu">Transaksi</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>simpanan">Simpanan</a></li>
                                   <li><a href="<?php echo base_url();?>pinjaman">Pinjaman</a></li>
                                      <li><a href="<?php echo base_url();?>withdraw">Withdraw</a></li>
                                         <li><a href="<?php echo base_url();?>angsuran">Angsuran</a></li>
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url();?>lapanggota">Data Anggota</a></li>
                            <li><a href="<?php echo base_url();?>lapsimpanan">Simpanan</a></li>
                                   <li><a href="<?php echo base_url();?>lappinjaman">Pinjaman</a></li>
                                      <li><a href="<?php echo base_url();?>lapwithdraw">Withdraw</a></li>
                                         <li><a href="<?php echo base_url();?>lapangsuran">Angsuran</a></li>
                               
                            </ul>
                        </li>
                
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>