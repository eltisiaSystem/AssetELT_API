<div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="<?php echo base_url('shop/chart/delivery/'.$order_id) ?>">
                            <h1>Checkout <?php echo $check_keranjang['status']; ?></h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Alamat Pengiriman</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Metode Pengiriman</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Metode Pembayaran</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Ringkasan Pesanan</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Depan</label>
                                            <input name="firstname" type="text" class="form-control" id="firstname" value="<?php echo set_value('firstname'); ?>" required="" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Nama Belakang</label>
                                            <input name="lastname" type="text" class="form-control" id="lastname" value="<?php echo set_value('lastname'); ?>" required="" >
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" type="text" class="form-control" id="street" value="<?php echo set_value('alamat'); ?>" required="" ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="kode_pos">Kode Pos</label>
                                            <input name="kode_pos" type="text" class="form-control" id="zip" value="<?php echo set_value('kode_pos'); ?>" required="" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="kabupaten_kota">Kota / Kabupaten</label>
                                            <select name="kabupaten_kota" class="form-control" id="state" value="<?php echo set_value('kabupaten_kota'); ?>" required="" >
                                                <option value="">Pilih Kota/Kabupaten</option>
                                                <option value="kota_tangerang">Kota Tangerang</option>
                                                <option value="kota_tangerang_selatan">Kota Tangerang Selatan</option>
                                                <option value="kab_tangerang">Kab. Tangerang</option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <select name="provinsi" class="form-control" id="country" value="<?php echo set_value('provinsi'); ?>" required="" >
                                                <option value="">Pilih Provinsi</option>
                                                <option value="banten">Banten</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telepon">Nomor Telepon</label>
                                            <input name="telepon" type="tel" class="form-control" id="phone" value="<?php echo set_value('telepon'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="handphone">No Handphone</label>
                                            <input name="handphone" type="tel" class="form-control" id="handphone" value="<?php echo set_value('handphone'); ?>" required="">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url('shop/chart/shopping/'.$user_id) ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali ke Keranjang</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Lanjut Metode Pengiriman<i class="fa fa-chevron-right"></i>
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