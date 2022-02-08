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