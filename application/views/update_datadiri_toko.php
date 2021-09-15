<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open_multipart('Login/prosesInputDatadiri', 'id="form-datadiri"') ?>
                    <div class="box-body">
                        <div class="file-field">
                            <div class="mb-4">
                                <img src="<?php if(empty(user()->image_name)){ ?> https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg <?php }else{ echo base_url('/uploads/img/'.user()->image_name);} ?>" class="rounded-circle z-depth-1-half avatar-pic" alt="Photo">
                                <input type="hidden" name="file_asli" value="<?= user()->image_name ?>">
                                <input type="hidden" name="file_temp">
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-mdb-color btn-rounded float-left">
                                    <span>Add photo</span>
                                    <input type="file" class="input-form-file">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Nama Toko</label>
                            <input type="text" name="toko" class="form-control" placeholder="enter nama toko" value="<?= user()->nama_toko ?>" required/>
                        </div>
                        <div class="form-group">
                            <label >Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="alamat" value="<?= user()->alamat ?>" required/>
                        </div>
                        <div class="form-group">
                            <label >Kab / Kota</label>
                            <select name="kota" class="form-control select2-basic" required>
                                <option value=""></option>
                                <?php foreach(kota() as $row): ?>
                                <option <?php if(user()->fk_kota == $row->id_kota){echo "selected";} ?> value="<?= $row->id_kota ?>"><?= $row->kota ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="text" class="form-control" value="<?= user()->email ?>" name="email" required/>
                        </div>
                        <div class="form-group">
                            <label >No Handphone</label>
                            <input type="text" class="form-control" value="<?= user()->no_hp ?>" name="handphone" required/>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>