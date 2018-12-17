<div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="<?php echo base_url('shop/chart/rincian_pembelian/'.$user_id) ?>">
                            <h1>Checkout - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.html"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li><a href="checkout2.html"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="checkout4.html"><i class="fa fa-eye"></i><br>Order Review php</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Transfer</h4>

                                            <p>Transfer Bank</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="1" required="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url('shop/chart/delivery/'.$order_id) ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke Metode Pengiriman</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Review Pembelian<i class="fa fa-chevron-right"></i>
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