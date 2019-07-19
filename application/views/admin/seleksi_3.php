<h1 class="h3 mb-2 text-gray-800">Praktek Lapangan</h1>

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
                            <td style="vertical-align:middle;text-align:center;"><?= $p->nilai ?></td>
                            <td style="vertical-align:middle;text-align:center;">
                                <div class="btn-group"><a class="btn btn-danger" href="<?= base_url('admin/seleksi_3/remove/') . $p->id ?>"><i class="fa fa-lg fa-times"></i></a></div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>