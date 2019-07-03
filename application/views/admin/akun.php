<h1 class="h3 mb-4 text-gray-800">Akun Pelamar</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Aktivasi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelamar as $p) { ?>
                        <tr>
                            <td><img style="height: 50px;" src="<?= base_url('assets/img/pasfoto/') . $p->pasfoto ?>"></td>
                            <td><?= $p->nama ?></td>
                            <td><?= $p->email ?></td>
                            <td><?= ellipsize($p->password, 20, .5); ?></td>
                            <td><?= $p->aktivasi ?></td>
                            <td>
                                <div class="btn-group"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#EditAkun<?= $p->id ?>"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#HapusAkun<?= $p->id ?>"><i class="fa fa-lg fa-trash"></i></a></div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal Edit Akun -->
<?php foreach ($pelamar as $p) { ?>
    <div class="modal fade" id="EditAkun<?= $p->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Akun Pelamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('admin/akun/edit'); ?>
                    <input type="hidden" name="id" value="<?= $p->id ?>">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="<?= $p->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $p->email ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password Lengkap" value="<?= $p->password ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pasfoto</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="<?= base_url('assets/img/pasfoto/') . $p->pasfoto ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                                        <label class="custom-file-label" for="pasfoto">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>

<!-- Modal Hapus Akun -->
<?php foreach ($pelamar as $p) { ?>
    <div class="modal fade" id="HapusAkun<?= $p->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Akun ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus akun <b><?= $p->nama ?></b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('admin/akun/hapus/') . $p->id ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>