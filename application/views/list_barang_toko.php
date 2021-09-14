<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Barang Toko</h3>
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" title="Remove" data-toggle="modal" data-target="#myModal">Tambah Kota</button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $row) : ?>
                                <tr>
                                    <td><?= $row->nama_barang; ?></td>
                                    <td>Rp <?php echo number_format($row->harga, 0, ',', '.') ?></td>
                                    <td>
                                        <button class="btn btn-warning">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                        ||
                                        <button class="btn btn-danger">
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
<div class="" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <?php echo form_open('Home/createBarang') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="file-field">
                        <div class="mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic2" alt="example placeholder avatar">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Add photo</span>
                                <input type="file" class="input-form-file">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="Harga" class="form-control" placeholder="Harga" required />
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="Harga" class="form-control" placeholder="Harga" required />
                    </div>
                    <div class="form-group">
                        <label>Diskon</label>
                        <input type="text" name="Harga" class="form-control" placeholder="Harga" required />
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