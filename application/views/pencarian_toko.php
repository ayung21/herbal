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
                    <button id="button-search">Search</button>
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