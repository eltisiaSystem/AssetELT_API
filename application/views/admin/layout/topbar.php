<body>
    <?php 
  $id = $this->session->userdata('user_id'); 
  $users = $this->users_model->detail($id);
  $alamat = $this->alamat_model->detail();
  ?>

    <div id="top">
        <div class="container">
            <div class="col-md-6" data-animate="fadeInDown">
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                        <li>
                            <p style="color: white"><img style="width: 50px" class="img-thumbnail" src="<?php echo base_url('assets/uploads/users/thumbs/'.$users['path_file']); ?>" alt=""> <?php echo $users['username']; ?> - <?php echo $users['akses_level']; ?></p>
                        </li>
                    <?php if($users['user_id'] === ""){ ?>
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
                        <li><a href="<?php echo base_url('register') ?>">Register</a></li>
                    <?php }
                    else { ?>
                        <li><a href="<?php echo base_url('login/logout') ?>">Logout</a>
                        </li>
                    <?php } ?>

                    <li><a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
        <?php include('login.php'); ?>