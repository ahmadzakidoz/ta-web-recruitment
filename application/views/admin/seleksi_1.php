<h1 class="h3 mb-2 text-gray-800">Hasil Seleksi Administrasi</h1>
<p class="mb-4">Daftar Pelamar yang telah melengkapi form Biodata, Pendidikan dan Dokumen dinyatakan lulus Seleksi Administrasi</p>

<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="text-center"><a href="<?= base_url('admin/seleksi_1/umumkan'); ?>" class="btn btn-primary mb-2">Umumkan</a></div>
        <div class="table-responsive">
            <table class="table table-bordered table-sm small text-dark" id="Seleksi1" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Lamaran</th>
                        <th>CV</th>
                        <th>KTP</th>
                        <th>Ijazah</th>
                        <th>KK</th>
                        <th>NPWP</th>
                        <th>Ket. Sehat</th>
                        <th>SPK</th>
                        <th>Dok. Pndukng 1</th>
                        <th>Dok. Pndukng 2</th>
                        <th>Dok. Pndukng 3</th>
                        <th>Dok. Pndukng 4</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelamar as $p) { ?>
                        <tr style="<?php if ($p->status_lamaran == 'LOLOS') {
                                        echo 'background-color:#a8e6a5;';
                                    } elseif ($p->status_lamaran == 'TIDAK') {
                                        echo 'background-color:#edbebe;';
                                    } ?>">
                            <td style="vertical-align:middle;text-align:center;"><?= $p->id ?></td>
                            <td style="vertical-align:middle;text-align:center;"><img style="width: 50px;" src="<?= base_url('assets/img/pasfoto/') . $p->pasfoto ?>"></td>
                            <td style="vertical-align:middle;text-align:center;"><?= $p->nama ?></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->lamaran ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->cv ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->ktp ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->ijazah ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->kk ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->npwp ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->kesehatan ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->spk ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->dok_pendukung1 ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->dok_pendukung2 ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->dok_pendukung3 ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;"><a href="<?= base_url('admin/seleksi_1/view/') . $p->dok_pendukung4 ?>" target="_blank">View</a></td>
                            <td style="vertical-align:middle;text-align:center;">
                                <div class="btn-group"><a class="btn btn-success <?php if ($p->status_lamaran == 'LOLOS') {
                                                                                        echo 'disabled';
                                                                                    } ?>" href="<?= base_url('admin/seleksi_1/lolos/') . $p->id ?>"><i class="fa fa-lg fa-check"></i></a><a class="btn btn-danger <?php if ($p->status_lamaran == 'TIDAK') {
                                                                                                                                                                                                                            echo 'disabled';
                                                                                                                                                                                                                        } ?>" href="<?= base_url('admin/seleksi_1/remove/') . $p->id ?>"><i class="fa fa-lg fa-times"></i></a></div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>