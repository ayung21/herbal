<section class="content">
    <row>
        <div class="center_content">
            <?php foreach ($data as $row) : ?>
                <?php if (mobile()) : ?>
                    <div class="prod_box_mobile">
                        <div class="center_prod_box_mobile">
                            <div class="product_title_mobile"><a href="#"><?= $row->nama_barang ?></a></div>
                            <div class="product_img_mobile"><a href="#"><img class="img_barang_herbal_mobile" src="<?= !empty($row->image_name) ? base_url('uploads/img/' . $row->image_name) : 'https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg'; ?>" alt="" border="0" height="215px" /></a></div>
                            <div class="prod_price"><span class="reduce"></span> <span class="price">Rp <?= $row->harga ?></span></div>
                        </div>
                        <div class="prod_details_tab">
                            <!-- <a href="#" class="prod_buy">Add to Cart</a> -->
                            <a href="#" class="prod_details_mobile">Details</a>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="prod_box">
                            <div class="center_prod_box">
                                <div class="product_title"><a href="#"><?= $row->nama_barang ?></a></div>
                                <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= !empty($row->image_name) ? base_url('uploads/img/' . $row->image_name) : 'https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg'; ?>" alt="" border="0" height="215px" /></a></div>
                                <div class="prod_price"><span class="reduce"></span> <span class="price">Rp <?= $row->harga ?></span></div>
                            </div>
                            <div class="prod_details_tab">
                                <!-- <a href="#" class="prod_buy">Add to Cart</a> -->
                                <a href="#" class="prod_details">Details</a>
                            </div>
                        </div>
                <?php endif; ?>
            <?php endforeach; ?>
            <!-- <div class="center_title_bar">Latest Products</div> -->
            <!-- <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">Makita 156 MX-VL</a></div>
                    <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= base_url(); ?>assets/dist/img/p1.jpg" alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce">Rp 140.000 </span> <span class="price">Rp 120.000</span></div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
            </div>
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">Bosch XC</a></div>
                    <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= base_url(); ?>assets/dist/img/p2.jpg" alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce"></span> <span class="price">Rp 120.000</span></div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
            </div>
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">Lotus PP4</a></div>
                    <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= base_url(); ?>assets/dist/img/p4.jpg" alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce"></span> <span class="price">Rp 120.000</span></div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
            </div>
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">Makita 156 MX-VL</a></div>
                    <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= base_url(); ?>assets/dist/img/p3.jpg" alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce"></span> <span class="price">Rp 120.000</span></div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
            </div>
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">Bosch XC</a></div>
                    <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= base_url(); ?>assets/dist/img/p5.jpg" alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce"></span> <span class="price">Rp 120.000</span></div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
            </div>
            <div class="prod_box">
                <div class="center_prod_box">
                    <div class="product_title"><a href="#">Lotus PP4</a></div>
                    <div class="product_img"><a href="#"><img class="img_barang_herbal" src="<?= base_url(); ?>assets/dist/img/p6.jpg" alt="" border="0" /></a></div>
                    <div class="prod_price"><span class="reduce"></span> <span class="price">Rp 120.000</span></div>
                </div>
                <div class="prod_details_tab"> <a href="#" class="prod_buy">Add to Cart</a> <a href="#" class="prod_details">Details</a> </div>
            </div> -->
        </div>
    </row>
</section>