<?php 
  $id = $this->session->userdata('user_id'); 
  $users = $this->users_model->detail($id);
  $alamat = $this->alamat_model->detail();
  ?>

<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li>
                    <img style="margin: auto; width: 72px;" src="<?php echo base_url('assets/img/logo2_sm.PNG') ?>" alt="">
                </li>
                <li><p>&nbsp&nbsp&nbsp</p></li>
                <li class="active"><a href="<?php echo base_url('beranda'); ?>">Beranda</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Jenis Ternak <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Sapi</h5>
                                        <ul>
                                            <?php foreach($header_sapi as $header_sapi){ ?>
                                            <li><a href="#"><?php echo $header_sapi->ras_kategori; ?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Kambing</h5>
                                        <ul>
                                            <?php foreach($header_kambing as $header_kambing){ ?>
                                            <li><a href="#"><?php echo $header_kambing->ras_kategori; ?></a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <?php if ($user_id != '') { ?>
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="<?php echo base_url('shop/chart/shopping/'.$user_id); ?>" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"> <?php echo count($produk); ?></span></a>
                </div>
            <?php } ?>
            <!--/.nav-collapse -->

           <!--  <div class="navbar-collapse collapse right" id="search-not-mobile">
                <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div> -->

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">

                     <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

                 </span>
             </div>
         </form>

     </div>
     <!--/.nav-collapse -->

 </div>
 <!-- /.container -->
</div>

<div id="all">