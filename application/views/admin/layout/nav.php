<div class="box">
<div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-3">

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title"> <a href="<?php echo base_url('beranda'); ?>"> Menu Utama</a> </h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <?php if($users['akses_level'] === "Admin"){ ?>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-users"></i><span>Daftar Pengguna</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/users/daftar_pasar_ternak') ?>"><i class="fa fa-newspaper-o"></i> Pasar Ternak</a></li>
                                        <li><a href="<?php echo base_url('admin/users/tambah_pasar_ternak') ?>"><i class="fa fa-newspaper-o"></i> Tambah Pasar Ternak</a></li>
                                        <li><a href="<?php echo base_url('admin/users/daftar_peternak/'.$users['pasar_ternak_id']) ?>"><i class="fa fa-newspaper-o"></i> Peternak</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-tasks"></i><span>Konten</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/slider') ?>"><i class="fa fa-newspaper-o"></i> Slider</a></li>
                                        <li><a href="<?php echo base_url('admin/alamat') ?>"><i class="fa fa-newspaper-o"></i> Alamat</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-money-bill-wave"></i><span>Daftar Harga</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/harga_ternak') ?>"><i class="fa fa-newspaper-o"></i>Harga Ternak</a></li>
                                        <li>
                                            <a href="<?php echo base_url('admin/kategori') ?>"><i class="fa fa-newspaper-o"></i>Kategori Ternak</a> 
                                        </li>
                                    </ul>
                                </li>
                            <?php } elseif ($users['akses_level'] === "Pasar Ternak") {?>
                                <li class="treeview">
                                    <a href="<?php echo base_url('admin/users') ?>">
                                        <i class="fa fa-users"></i><span>Daftar Pengguna</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/users/daftar_operator_pasar_ternak/'.$users['pasar_ternak_id']) ?>"><i class="fa fa-newspaper-o"></i> Daftar Operator</a></li>
                                        <li><a href="<?php echo base_url('admin/users/tambah_operator_pasar_ternak') ?>"><i class="fa fa-newspaper-o"></i> Tambah Operator</a></li>
                                        <li><a href="<?php echo base_url('admin/users/daftar_peternak/'.$users['pasar_ternak_id']) ?>"><i class="fa fa-newspaper-o"></i> Peternak</a></li>
                                        <li><a href="<?php echo base_url('admin/users/tambah_peternakan') ?>"><i class="fa fa-newspaper-o"></i>Tambah Peternak</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-tasks"></i><span>Ternak</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/daftar_ternak/tambah') ?>"><i class="fa fa-newspaper-o"></i> Tambah Ternak</a></li>
                                        <li><a href="<?php echo base_url('admin/daftar_ternak/daftar_ternak_list/'.$users['pasar_ternak_id']) ?>"><i class="fa fa-newspaper-o"></i> Daftar Ternak</a></li>
                                        <li><a href="<?php echo base_url('admin/daftar_ternak/daftar_ternak_terjual/'.$users['pasar_ternak_id']) ?>"><i class="fa fa-newspaper-o"></i> Laporan Penjualan</a></li>
                                    </ul>
                                </li>
                                <?php }elseif ($users['akses_level']==="Operator"){?>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-tasks"></i><span>Ternak</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/daftar_ternak/daftar_ternak_list/'.$users['pasar_ternak_id']) ?>"><i class="fa fa-newspaper-o"></i> Daftar Ternak</a></li>
                                        <li><a href="<?php echo base_url('admin/daftar_ternak/tambah') ?>"><i class="fa fa-newspaper-o"></i> Tambah Ternak</a></li>
                                        
                                    </ul>
                                </li>
                            <?php }elseif ($users['akses_level']==="Peternak"){?>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="fa fa-tasks"></i><span>Ternak</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="<?php echo base_url('admin/daftar_ternak/daftar_ternak_peternakan/'.$users['nama_peternakan']) ?>"><i class="fa fa-newspaper-o"></i> Daftar Ternak</a></li>                              
                                    </ul>
                                </li>
                                <?php } ?>
                            </ul>

                        </div>
                    </div>

                </div>