<div id="hot">

    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>Hot this week</h2>
            </div>
        </div>
    </div>

    

    <div class="container">
        <div class="product-slider">

            <?php foreach($daftar_ternak as $daftar_ternak){ 
                if ($daftar_ternak->status_ternak == 'Publish' && $username === $daftar_ternak->pasar_ternak_id) { ?>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="<?php echo base_url('produk/detail/'.$daftar_ternak->daftar_ternak_id); ?>">
                                            <img width="176px" src="<?php echo base_url('assets/uploads/daftar_ternak/thumbs/' . $daftar_ternak->path_file) ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url('produk/detail/'.$daftar_ternak->daftar_ternak_id); ?>" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text text-center">
                                <h3><a href="<?php echo base_url('produk/detail/'.$daftar_ternak->daftar_ternak_id); ?>"><?php echo $daftar_ternak->inisial_ternak ?></a></h3>
                                <p class="price">Rp. <?php echo number_format($daftar_ternak->harga_ternak, 0, ".", "."); ?></p>
                            </div> 
                            <!-- /.text -->

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <!-- <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div> -->
                            <!-- /.ribbon -->

                            <!-- <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div> -->
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>
            <?php } elseif ($daftar_ternak->status_ternak == 'Tersedia' && $akses_level === 'Pembeli') {?>
                    <div class="item">
                        <div class="product">
                            <div class="flip-container">
                                <div class="flipper">
                                    <div class="front">
                                        <a href="<?php echo base_url('produk/detail/'.$daftar_ternak->daftar_ternak_id); ?>">
                                            <img width="176px" src="<?php echo base_url('assets/uploads/daftar_ternak/thumbs/' . $daftar_ternak->path_file) ?>" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url('produk/detail/'.$daftar_ternak->daftar_ternak_id); ?>" class="invisible">
                                <img src="img/product2.jpg" alt="" class="img-responsive">
                            </a>
                            <div class="text text-center">
                                <h3><a href="<?php echo base_url('produk/detail/'.$daftar_ternak->daftar_ternak_id); ?>"><?php echo $daftar_ternak->inisial_ternak ?></a></h3>
                                <p class="price">Rp. <?php echo number_format($daftar_ternak->harga_ternak, 0, ".", "."); ?></p>
                            </div> 
                            <!-- /.text -->

                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <!-- <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div> -->
                            <!-- /.ribbon -->

                            <!-- <div class="ribbon gift">
                                <div class="theribbon">GIFT</div>
                                <div class="ribbon-background"></div>
                            </div> -->
                            <!-- /.ribbon -->
                        </div>
                        <!-- /.product -->
                    </div>
            <?php }} ?>
        </div>
        <!-- /.product-slider -->
    </div>

    

</div>