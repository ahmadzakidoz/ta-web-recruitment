<h1 class="h3 mb-2 text-gray-800">Pengalaman Kerja</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <a href="#" class="btn btn-primary mb-2" data-toggle="modal" data-target="#Umumkan">Umumkan</a>
        <a href="#" class="btn btn-success mb-2" data-toggle="modal" data-target="#InputNilai">Masukkan Nilai</a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm small text-dark" id="Seleksi1" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nilai</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelamar as $p) { ?>
                        <tr style="<?php if ($p->status_lamaran == 'LANJUT') {
                                        echo 'background-color:#a8e6a5;';
                                    } elseif ($p->status_lamaran == 'GUGUR') {
                                        echo 'background-color:#edbebe;';
                                    } ?>">
                            <td style="vertical-align:middle;text-align:center;"><?= $p->id ?></td>
                            <td style="vertical-align:middle;text-align:center;"><img style="width: 50px;" src="<?= base_url('assets/img/pasfoto/') . $p->pasfoto ?>"></td>
                            <td style="vertical-align:middle;text-align:center;"><?= $p->nama ?></td>
                            <td style="vertical-align:middle;text-align:center;"><?= $p->email ?></td>
                            <td style="vertical-align:middle;text-align:center;"><?= $p->nilai2 ?></td>
                            <td style="vertical-align:middle;text-align:center;">
                                <div class="btn-group"><a class="btn btn-danger" href="<?= base_url('admin/seleksi_2/remove/') . $p->id ?>"><i class="fa fa-lg fa-times"></i></a></div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Modal Input Nilai -->
<div class="modal fade" id="InputNilai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/seleksi_2/input'); ?>">
                    <div class="form-row my-1">
                        <div class="col-5">
                            <input type="text" class="form-control" id="np1" name="np1" placeholder="Nomor Pendaftaran">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="nilai1" name="nilai1" placeholder="Nilai">
                        </div>
                        <div class="col">
                            <label>Skala 1 - 100</label>
                        </div>
                    </div>
                    <div class="form-row my-1">
                        <div class="col-5">
                            <input type="text" class="form-control" id="np2" name="np2" placeholder="Nomor Pendaftaran">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="nilai2" name="nilai2" placeholder="Nilai">
                        </div>
                    </div>
                    <div class="form-row my-1">
                        <div class="col-5">
                            <input type="text" class="form-control" id="np3" name="np3" placeholder="Nomor Pendaftaran">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="nilai3" name="nilai3" placeholder="Nilai">
                        </div>
                    </div>
                    <div class="form-row my-1">
                        <div class="col-5">
                            <input type="text" class="form-control" id="np4" name="np4" placeholder="Nomor Pendaftaran">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="nilai4" name="nilai4" placeholder="Nilai">
                        </div>
                    </div>
                    <div class="form-row my-1">
                        <div class="col-5">
                            <input type="text" class="form-control" id="np5" name="np5" placeholder="Nomor Pendaftaran">
                        </div>
                        <div class="col-3">
                            <input type="number" class="form-control" id="nilai5" name="nilai5" placeholder="Nilai">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Umumkan -->
<div class="modal fade" id="Umumkan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Umumkan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Umumkan pada pelamar?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" href="<?= base_url('admin/seleksi_2/umumkan'); ?>">Umumkan</a>
            </div>
        </div>
    </div>
</div>