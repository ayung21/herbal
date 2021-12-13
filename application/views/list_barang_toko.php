<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Barang Toko</h3>
                    <div class="pull-right box-tools">
                        <button class="btn btn-info btn-sm" title="create" data-toggle="modal" data-target="#myModal">Tambah Barang</button>
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
                                        <button class="btn btn-warning get-data-barang-toko" data-toggle="modal" data-target="#myModalUpdate" data-id="<?= $row->id_transaksi ?>">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                        ||
                                        <button class="btn btn-danger delete-data-barang-toko" data-id="<?= $row->id_transaksi ?>">
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
            <?php echo form_open_multipart('Home/prosesCreateBarangToko', 'id="form-create-barang-toko"') ?>
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
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" <?php if (mobile()) { ?> class="rounded-circle z-depth-1-half mobile-avatar-pic2" style="width: 290px;" <?php } else { ?> class="rounded-circle z-depth-1-half avatar-pic2" <?php } ?> alt="example placeholder avatar">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Add photo</span>
                                <input type="file" class="input-form-file2" id="tester-input" onchange="uploadFile()">
                                <input type="hidden" name="file_temp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label>Nama Barang</label>
                        <select name="barang" class="form-control select2-basic2" required>
                            <option value=""></option>
                            <?php foreach (barang() as $row) : ?>
                                <option value="<?= $row->id_barang ?>"><?= $row->nama_barang ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga" required />
                    </div>
                    <div class="form-group">
                        <label>Diskon</label>
                        <input type="number" name="diskon" class="form-control" placeholder="diskon" />
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
            <?php echo form_open_multipart('Home/prosesUpdateBarangToko', 'id="form-update-barang-toko"') ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box-body">
                    <div class="file-field">
                        <div class="mb-4">
                            <img src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" <?php if (mobile()) { ?> class="rounded-circle z-depth-1-half mobile-avatar-pic2" <?php } else { ?> class="rounded-circle z-depth-1-half avatar-pic2" <?php } ?> alt="example placeholder avatar">
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="btn btn-mdb-color btn-rounded float-left">
                                <span>Add photo</span>
                                <input type="file" class="input-form-file2">
                                <input type="hidden" name="file_asli">
                                <input type="hidden" name="file_temp">
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label>Nama Barang</label>
                        <input type="hidden" name="id_transaksi">
                        <select name="barang" class="form-control select2-basic2" required>
                            <option value=""></option>
                            <?php foreach (barang() as $row) : ?>
                                <option value="<?= $row->id_barang ?>"><?= $row->nama_barang ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga" required />
                    </div>
                    <div class="form-group">
                        <label>Diskon</label>
                        <input type="number" name="diskon" class="form-control" placeholder="diskon" />
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

<script>
    // $(document).ready(function () {
    // $("#form-create-barang-toko").on("change", "input:file", function () {
    // function uploadFile() {
        // var file_data = $(this).prop("files")[0],
        // var file_data = document.getElementById("tester-input").files[0],
        //     temp = $('input[name="file_temp"]').val(),
        //     form_data = new FormData();
            
        // form_data.append("images", file_data);
        // form_data.append("temp", temp);
        // console.log(file_data);
        // console.log(form_data);
        // $.ajax({
        //     url: base_url + "Login/uploadImageTemp",
        //     dataType: "json",
        //     cache: false,
        //     contentType: false,
        //     processData: false,
        //     data: form_data,
        //     type: "post",
        //     success: function(result) {
                // alert(file_data);
                // if(mobile == "mobile"){
                // 	$("img.mobile-avatar-pic2").attr(
                // 		"src",
                // 		base_url + "uploads/temp/" + result.img
                // 	);
                // 	$('input[name="file_temp"]').val(result.img);
                // }else{
                // 	$("img.avatar-pic2").attr(
                // 		"src",
                // 		base_url + "uploads/temp/" + result.img
                // 	);
                // 	$('input[name="file_temp"]').val(result.img);
                // }
        //     },
        // });
    // }
    // });
    // });
</script>