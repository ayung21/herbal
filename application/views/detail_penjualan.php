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
                        <!-- <div class="specifications"> Available: <span class="blue">In stock</span><br />
                            Warranties: <span class="blue">24 months</span><br />
                            Transport: <span class="blue"> delivery services company</span><br />
                            Include :<span class="blue"> TVA</span><br />
                            Description :<span class="blue"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </span><br />
                        </div> -->
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
                <!-- <iframe src="https://ca84-182-253-70-40.ngrok.io/" style="position:relative;width:562px;height:284px;margin-top: 233px;" frameborder="0"></iframe> -->
            <?php endif; ?>
        </div>
    </row>
</section>
<script type='text/javascript'>
    function initMap() {
      // The location of Uluru
      // var uluru = {
      //     lat: -25.344,
      //     lng: 131.036
      // };
      // The map, centered at Uluru
      // var tester;
      // var map = new google.maps.Map(document.getElementById('map'), {
      //     zoom: 4,
      //     center: uluru
      // });
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var tester = {
            lat: $('input[name="latitude"]').val(),
            lng: $('input[name="longitude"]').val()
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
      // The marker, positioned at Uluru
      //   var marker = new google.maps.Marker({position: uluru, map: map});
      // var marker = new google.maps.LatLng(-25.344, 131.036);
    }
</script>