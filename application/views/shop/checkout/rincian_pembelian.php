<div class="col-md-9" id="basket">

                    <div class="box">

                        <form method="post" action="<?php echo base_url('shop/chart/sukses/'.$order_id) ?>">

                            <h1>Rincian Pembelian</h1>

                            <ul class="nav nav-pills nav-justified">
                                <li><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review php</a>
                                </li>
                            </ul>
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
                            <br>
                            <h3>Alamat Pengiriman</h3>
                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama Depan</label>
                                            <input name="firstname" type="text" class="form-control" id="firstname" value="<?php echo $alamat['firstname']; ?>" disabled="" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Nama Belakang</label>
                                            <input name="lastname" type="text" class="form-control" id="lastname" value="<?php echo $alamat['lastname']; ?>" disabled="" >
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" type="textarea" class="form-control" id="street" value="<?php echo $alamat['alamat']; ?>" disabled="" ><?php echo $alamat['alamat']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="kode_pos">Kode Pos</label>
                                            <input name="kode_pos" type="text" class="form-control" id="zip" value="<?php echo $alamat['kode_pos']; ?>" disabled="" >
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="kabupaten_kota">Kota / Kabupaten</label>
                                            <select name="kabupaten_kota" class="form-control" id="state" value="" disabled="" >
                                                <option value=""><?php echo $alamat['kabupaten_kota']; ?></option>
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="form-group">
                                            <label for="provinsi">Provinsi</label>
                                            <select name="provinsi" class="form-control" id="country" value="" disabled="" >
                                                <option value=""><?php echo $alamat['provinsi']; ?></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telepon">Nomor Telepon</label>
                                            <input name="telepon" type="tel" class="form-control" id="phone" value="<?php echo $alamat['telepon'];; ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="handphone">No Handphone</label>
                                            <input name="handphone" type="tel" class="form-control" id="handphone" value="<?php echo $alamat['handphone']; ?>" disabled="">
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pengiriman">Metode Pengiriman</label>
                                            <input name="pengiriman" type="text" class="form-control" id="pengiriman" value="<?php echo $pengiriman['ekspedisi']; ?> - <?php echo $pengiriman['jenis_pengiriman'] ?>" disabled="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="pembayaran">Metode Pembayaran</label>
                                            <input name="pembayaran" type="text" class="form-control" id="pembayaran" value="Transfer Bank" disabled="">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

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