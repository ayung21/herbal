<section>
    <row>
        <div class="center_content">
            <div class="center_title_bar" style="background-color: red;"><?= $data->nama_barang; ?></div>
            <br>
            <br>
            <div class="prod_box_big">
                <div class="center_prod_box_big" style="margin-left: -20px;">
                    <div class="product_img_big">
                        <?php if(parse_url($data->image_name, PHP_URL_SCHEME) == 'https' || parse_url($data->image_name, PHP_URL_SCHEME) == 'http'){ $image = $data->image_name;}else{ $image = base_url('uploads/img/' . $data->image_name);} ?>
                        <div class="thumbs"><img src="<?= !empty($data->image_name) ? $image : 'https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg'; ?>" style="width: 200px;margin-left: 6px;margin-top: 10px;" alt="" border="0" /></div>
                    </div>
                    <div class="details_big_box" style="margin-top: 20px;">
                        <div class="product_title_big"><?= $data->nama_barang; ?></div>
                        <div class="prod_price_big"><span class="price">Rp. <?= $data->harga; ?></span></div>
                        <!-- <a href="#" class="prod_buy">add to cart</a> <a href="#" class="prod_compare">compare</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="center_content">
            <input type="hidden" name="longitude" value="<?= $data->longitude; ?>">
            <input type="hidden" name="latitude" value="<?= $data->latitude; ?>">
            <?php if (mobile()) : ?>
                <div id="myMap" style="position:relative;width:300px;height:277px;margin-left: 23px;"></div>
            <?php else : ?>
                <div id="myMap" style="position:relative;width:562px;height:284px;"></div>
            <?php endif; ?>
        </div>
    </row>
</section>
<script type='text/javascript'>
    initMap();
    function initMap() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          // console.log(parseFloat('<?= $data->latitude; ?>'));
          var tester = {
            lat: parseFloat('<?= $data->longitude; ?>'),
            lng: parseFloat('<?= $data->latitude; ?>')
          };
          var map = new google.maps.Map(document.getElementById('myMap'), {
            zoom: 4,
            center: tester
          });
          var marker = new google.maps.Marker({
            position: tester,
            map: map
          });
        });
      }
    }
</script>