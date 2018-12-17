<div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="<?php echo base_url('shop/chart/alamat/'.$user_id) ?>">

                            <h1>Shopping cart</h1>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Produk</th>
                                            <th>Qty</th>
                                            <th>Harga Satuan</th>
                                            <th>Diskon</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no=1; $total=0; $subtotal=0; foreach($keranjang as $keranjang){ 
                                            if ($keranjang['status'] === 'Cart') { ?>
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src=<?php echo base_url('assets/uploads/daftar_ternak/thumbs/'.$keranjang['path_file']); ?>>
                                                        </a>
                                                    </td>
                                                    <td><a href="#"><?php echo $keranjang['inisial_ternak']; ?></a>
                                                    </td>
                                                    <td>
                                                        <p class="text-center"><?php echo $keranjang['qty']; ?></p>
                                                    </td>
                                                    <td>Rp. <?php echo number_format($keranjang['harga_ternak'], 0, ".", "."); ?></td>
                                                    <td>Rp. <?php echo $discount=0; ?></td>
                                                    <td>Rp. <?php echo number_format($subtotal = ($keranjang['harga_ternak'] + $discount), 0, ".", "."); 
                                                    $total += $subtotal; ?></td>
                                                    <td><a href="<?php echo base_url('shop/chart/hapus/'.$keranjang['keranjang_id']) ?>"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php }} ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">Rp. <?php echo number_format($total, 0, ".", "."); ?>
                                                <input type="hidden" name="harga_total" value="<?php echo $total; ?>" >
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                            <!-- /.table-responsive -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url('beranda'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Lanjutan Belanja</a>
                                </div>
                                <div class="pull-right">
                                    <!-- <button class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button> -->
                                    <button type="submit" class="btn btn-primary">Checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->


                </div>
                <div class="col-md-3">
                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Ringkasan Pesanan</h3>
                        </div>
                        <p class="text-muted">Ongkos kirim dan biaya tambahan lainnya terhantung harha yang ditentukan.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td style="font-size: 10pt">Order<br>subtotal</td>
                                        <th>Rp. <?php echo number_format($total, 0, ".", ".");?></th>
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
                                        <th style="font-size: 12pt">Rp. <?php echo number_format($total, 0, ".", "."); ?></th>
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