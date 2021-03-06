<?php if (!empty($this->session->flashdata('error'))) : ?>
    <?php echo "<script type='text/javascript'>alert('".substr($this->session->flashdata('error'),3,-4)."');</script>" ?>;
<?php endif; ?>
<!-- Main content -->
<section class="content" id="pencarian-terdekat">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Jarak Terdekat</h3>
                    <div class="infor"></div>
                </div><!-- /.box-header -->
                <div class="box-header">
                    <select name="barang" id="barang">
                        <option value=""></option>
                        <?php foreach (barang() as $row) : ?>
                            <option value="<?= $row->id_barang ?>"><?= $row->nama_barang ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button class="button-search" onclick="myFunction()">Search</button>

                    <label style="float: right;">execution time <i id="executiontime"></i></label>
                </div>
                <div class="box-body">
                    <table id="table-terdekat" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Partikel</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Toko</th>
                                <th>Jarak</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Partikel</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Toko</th>
                                <th>Jarak</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
        <div class="center_content">
            <?php if (mobile()) : ?>
                <div id="myMap" style="position:relative;width:300px;height:277px;margin-left: 23px;"></div>
            <?php else : ?>
                <div id="myMap" style="position:relative;width:562px;height:284px;"></div>
            <?php endif; ?>
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->
<script>
    function myFunction() {
        if($('#barang').val() != ''){
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                //   x.innerHTML = "Geolocation is not supported by this browser.";
                $("div.infor").text("Geolocation is not supported by this browser.");
            }
        }else{
            alert('silahkan pilih barang');
        }
    }
    function showPosition(position) {
		$.ajax({
			type: "post",
			url: base_url + "Home/perhitungan",
			dataType: "json",
			data: {
				latitude    : position.coords.latitude,
				longitude   : position.coords.longitude,
                barang      : $('#barang').val()
			},
			success: function (result) {
                initMap(result.hasilGbest.latitude_partikel,result.hasilGbest.longitude_partikel);
                $('#executiontime').text(result.execution_time);
				$("table#table-terdekat").find("tbody tr").eq(0).remove();
				$("table#table-terdekat")
					.find("tbody")
					.append(
						$("<tr>")
							.append($("<td>").append(result.hasilGbest.partikel))
							.append($("<td>").append(result.hasilGbest.latitude_partikel))
							.append($("<td>").append(result.hasilGbest.longitude_partikel))
							.append($("<td>").append(result.hasilGbest.nama_toko))
							.append($("<td>").append(result.hasilGbest.hasil))
					);
			},
		});
		// $("div.infor").text(position.coords.latitude);
		// x.innerHTML = "Latitude: " + position.coords.latitude +
		// "<br>Longitude: " + position.coords.longitude;
	}
    function initMap(latitude,longitude) {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var tester = {
            lat: parseFloat(latitude),
            lng: parseFloat(longitude)
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