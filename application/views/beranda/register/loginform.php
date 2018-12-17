<div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>

                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>

                        <hr>

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
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>