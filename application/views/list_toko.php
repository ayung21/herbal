<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Toko</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Toko</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr id="data_<?= $row->id_user; ?>">
                                    <td><?= $row->nama_toko; ?></td>
                                    <td><?= $row->kota; ?></td>
                                    <td class="status"><?php switch ($row->status) {
                                            case '0':
                                                echo '<span style="color: red;">&#10005;</span><i>Not Verified</i>';
                                                break;

                                            case '1';
                                                echo '<span style="color: green;">&#10003;</span> <i>Verified</i>';

                                            default:
                                                # code...
                                                break;
                                        } ?>
                                    </td>
                                    <td class="tombol">
                                    <?php switch ($row->status) {
                                            case '0':
                                                echo '<button class="btn btn-success accept-toko" data-id="'.$row->id_user.'"><i class="fa fa-check" aria-hidden="true"></i></button>';
                                                break;

                                            case '1';
                                                echo '<button class="btn btn-default" disabled><i class="fa fa-check" aria-hidden="true"></i></button>';

                                            default:
                                                # code...
                                                break;
                                        } ?>
                                        ||
                                        <button class="btn btn-warning edit-long-lat" data-id="<?= $row->id_user; ?>" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama Toko</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('Home/prosesUpdateLatLong', 'id="form-update-lat-long"') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Latitude Longitude</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group" style="margin-top: 10px;">
                        <label id="nama_toko"></label>
                        <!-- <input type="text" id="nama_toko"> -->
                        <input type="hidden" name="id_user">
                    </div>
                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="latitude" class="form-control" placeholder="Latitude" required />
                    </div>
                    <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" name="longitude" class="form-control" placeholder="longitude" required />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>