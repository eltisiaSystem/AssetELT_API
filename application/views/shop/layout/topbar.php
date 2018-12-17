<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="col-md-6" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                    <?php if($akses_level==='Pembeli'){ ?>
                        <li>
                            <p style="color: white"><img style="width: 50px" class="img-thumbnail" src="<?php echo base_url('assets/uploads/users/thumbs/'.$users['path_file']); ?>" alt=""> <?php echo $users['username']; ?> - <?php echo $users['akses_level']; ?></p>
                        </li>
                        <li><a href="<?php echo base_url('login/logout') ?>">Logout</a>
                        </li>
                    <?php } elseif ($akses_level === 'Pasar Ternak') {?>
                        <li>
                            <p style="color: white"><img style="width: 50px" class="img-thumbnail" src="<?php echo base_url('assets/uploads/users/thumbs/'.$users['path_file']); ?>" alt=""> <?php echo $users['username']; ?> - <?php echo $users['akses_level']; ?></p>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/users/daftar_operator_pasar_ternak/'.$users['username']); ?>">Admin</a>
                        </li>
                        <li><a href="<?php echo base_url('login/logout') ?>">Logout</a>
                        </li>      
                    <?php }else{ ?>
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li><a href="<?php echo base_url('register') ?>">Register</a>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

        </div>
        <?php include('login.php'); ?>

    </div>