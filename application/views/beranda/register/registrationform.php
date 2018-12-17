<div class="col-md-12">
                    <div class="box">
                        <h1>New account</h1>

                        <p class="lead">Not our registered customer yet?</p>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                            <?php echo form_open_multipart('admin/users/tambah_pembeli'); ?>
                            <div class="form-group">
                                <label for="username">Username</label> 
                                <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Username" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo set_value('email'); ?>" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" value="<?php echo set_value('nama_lengkap'); ?>" placeholder="Nama lengkap" required="">
                            </div>
                            <div class="form-group">
                                <label for="path_file">Upload Foto</label>
                                <input type="file" name="path_file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="akses_level"></label>
                                <input type="hidden" name="akses_level" value="Pembeli">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                            <?php echo form_close(); ?>
                    </div>
                </div>
            </div>