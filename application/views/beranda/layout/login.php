<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">Customer login</h4>
            </div>
            <div class="modal-body">

                <?php

                    if($this->session->flashdata('sukses'))
                    {
                      echo '<div class="alert alert-success alert-dismissible">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                      echo $this->session->flashdata('sukses');
                      echo '</div>';
                    }

                    if($this->session->flashdata('warning'))
                    {
                      echo '<div class="alert alert-warning alert-dismissible">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                      echo $this->session->flashdata('warning');
                      echo '</div>';
                    }

                    if($this->session->flashdata('danger'))
                    {
                      echo '<div class="alert alert-danger alert-dismissible">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                      echo $this->session->flashdata('danger');
                      echo '</div>';
                    }

                    if(validation_errors())
                    {
                      echo '<div class="alert alert-danger alert-dismissible">';
                      echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                      echo validation_errors();
                      echo '</div>';
                    }

                ?>

                <?php echo form_open('login'); ?>
                <!-- <form action="customer-orders.html" method="post"> -->
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>

                    <p class="text-center">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                    </p>

                <!-- </form> -->
                <?php echo form_close(); ?>


                <p class="text-center text-muted">Not registered yet?</p>
                <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

            </div>
        </div>
    </div>
</div>