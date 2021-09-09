<?php if (!empty($this->session->flashdata('error'))) : ?>
    <?php echo "<script type='text/javascript'>alert('".substr($this->session->flashdata('error'),3,-4)."');</script>" ?>;
<?php endif; ?>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Master Kota</h3>
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" title="Remove" data-toggle="modal" data-target="#myModal">Tambah Kota</button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Kota</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td><?= $row->kota ?></td>
                                    <td>
                                        <button class="btn btn-warning get-data-update-kota" data-toggle="modal" data-target="#myModalUpdate" data-id="<?= $row->id_kota; ?>">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                        ||
                                        <button class="btn btn-danger delete-kota" data-id="<?= $row->id_kota; ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('Home/createKota') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" name="kota" class="form-control" placeholder="Enter Kota" required />
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

<!-- Modal -->
<div class="modal fade" id="myModalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('Home/updateKota', 'id="form-update-kota"') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="hidden" name="id_kota">
                        <input type="text" name="kota" class="form-control" placeholder="Enter Kota" required />
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