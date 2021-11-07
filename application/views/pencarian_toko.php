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
                    <button class="button-search" onclick="myFunction()">Search</button>
                    <div class="infor"></div>
                </div><!-- /.box-header -->
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
    </div><!-- /.row -->
</section><!-- /.content -->
<script>
    function myFunction() {
        alert();
        // if (navigator.geolocation) {
		// 	navigator.geolocation.getCurrentPosition(showPosition);
		// } else {
		// 	//   x.innerHTML = "Geolocation is not supported by this browser.";
		// 	$("div.infor").text("Geolocation is not supported by this browser.");
		// }
    }
    function showPosition(position) {
		$.ajax({
			type: "post",
			url: base_url + "Home/perhitungan",
			dataType: "json",
			data: {
				latitude: position.coords.latitude,
				longitude: position.coords.longitude,
			},
			success: function (result) {
				$("table#table-terdekat").find("tbody tr").eq(0).remove();
				$("table#table-terdekat")
					.find("tbody")
					.append(
						$("<tr>")
							.append($("<td>").append(result.partikel))
							.append($("<td>").append(result.latitude_partikel))
							.append($("<td>").append(result.longitude_partikel))
							.append($("<td>").append(result.nama_toko))
							.append($("<td>").append(result.hasil))
					);
			},
		});
		// $("div.infor").text(position.coords.latitude);
		// x.innerHTML = "Latitude: " + position.coords.latitude +
		// "<br>Longitude: " + position.coords.longitude;
	}
</script>