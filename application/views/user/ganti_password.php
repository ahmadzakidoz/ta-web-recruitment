<div class="card shadow">
    <div class="card-header">
        <h1 class="h3 my-2 text-gray-800">Ganti Password</h1>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?= base_url('user/ganti_password'); ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Password Lama</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="old_password" name="old_password">
                    <?= form_error('old_password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Password Baru</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="new_password1" name="new_password1">
                    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Ulangi Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <div class="float-right">
                        <button type="submit" class="btn btn-primary mr-0 ml-auto">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>