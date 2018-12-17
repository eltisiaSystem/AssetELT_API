<div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="<?php echo base_url('shop/chart/payment/'.$order_id['order_id']) ?>">
                            <h1>Checkout - Metode Pengiriman</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.html"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>
                            <div class="content">
                                <div class="row">
                                    <?php foreach ($metode_pengiriman as $pengiriman) {?>
                                    <div class="col-sm-6">
                                        <div class="box shipping-method">

                                            <h4><?php echo $pengiriman['ekspedisi']; ?></h4>

                                            <p><?php echo $pengiriman['jenis_pengiriman']; ?> <?php echo $pengiriman['metode_pengiriman_id']; ?></p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="metode_pengiriman_id" value="<?php echo $pengiriman['metode_pengiriman_id']  ?>" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url('shop/chart/alamat/'.$user_id) ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke Pilih Alamat</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Lanjut ke Metode Pembayaran<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="font-size: 10pt">Order<br>subtotal</td>
                                        <th>Rp. <?php echo number_format($harga_total, 0, ".", ".");?></th>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 10pt">Ongkos <br> kirim</td>
                                        <th>Rp. 0.00</th>
                                    </tr>
                                    <tr>
                                        <td style="font-size: 10pt">Pajak</td>
                                        <th>Rp. 0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td style="font-size: 12pt">Total</td>
                                        <th style="font-size: 12pt">Rp. <?php echo number_format($harga_total, 0, ".", "."); ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>