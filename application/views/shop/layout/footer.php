<div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h4>Pages</h4>

                <ul>
                    <li><a href="text.html">About us</a>
                    </li>
                    <li><a href="text.html">Terms and conditions</a>
                    </li>
                    <li><a href="faq.html">FAQ</a>
                    </li>
                    <li><a href="contact.html">Contact us</a>
                    </li>
                </ul>

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-4 col-sm-6">

                <h4>Where to find us</h4>

                <p><strong><?php echo $alamat['nama_alamat']; ?></strong>
                  <br><?php echo $alamat['alamat']; ?>
                  <br><?php echo $alamat['kecamatan']; ?>, <?php echo $alamat['kabupaten_kota']; ?>
                  <br><?php echo $alamat['provinsi']; ?>
                  <br><?php echo $alamat['kode_pos']; ?>
                  <br>
                </p>

                <a href="contact.html">Go to contact page</a>

                <hr class="hidden-md hidden-lg">

            </div>
            <!-- /.col-md-3 -->

            <div class="col-md-4 col-sm-6">

                <h4>Get the news</h4>

                <form>
                    <div class="input-group">

                        <input type="text" class="form-control">

                        <span class="input-group-btn">

                            <button class="btn btn-default" type="button">Subscribe!</button>

                        </span>

                    </div>
                    <!-- /input-group -->
                </form>

                <hr>

                <h4>Stay in touch</h4>

                <p class="social">
                    <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                </p>


            </div>
            <!-- /.col-md-3 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
           _________________________________________________________ -->
           <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="text-center">© Copyright <a href="https:/eltisia.co.id">Eltisia</a> 2018</p>

                </div>
           </div>
       </div>
       <!-- *** COPYRIGHT END *** -->


       

    <!-- *** SCRIPTS TO INCLUDE ***
       _________________________________________________________ -->
       <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-1.11.0.min.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.cookie.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/waypoints.min.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/modernizr.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap-hover-dropdown.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.min.js"></script>
       <script src="<?php echo base_url(); ?>assets/frontend/js/front.js"></script>


   </body>

   </html>