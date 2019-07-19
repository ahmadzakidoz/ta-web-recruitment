<?= $this->session->flashdata('pesan'); ?>
<div class="row">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                Dashboard
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3"><b>Kelengkapan Data :</b></div>
                        <div class="col-sm-3">
                            <?php if (empty($pelamar['nik']) || empty($pelamar['nama']) || empty($pelamar['alamat']) || empty($pelamar['kota']) || empty($pelamar['provinsi']) || empty($pelamar['kecamatan']) || empty($pelamar['kelurahan']) || empty($pelamar['tmp_lahir']) || empty($pelamar['tgl_lahir']) || empty($pelamar['jns_kelamin']) || empty($pelamar['status']) || empty($pelamar['agama']) || empty($pelamar['telp']) || empty($pelamar['pasfoto'])) {
                                echo '<span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
                </span>';
                            } else {
                                echo '<span style="color: lime;">
                <i class="fas fa-fw fa-check"></i>
                </span>';
                            } ?>
                            <span><a href="<?= base_url('user/biodata'); ?>">Biodata</a></span>
                        </div>
                        <div class="col-sm-3">
                            <?php if (empty($pelamar['jenjang']) || empty($pelamar['sekolah']) || empty($pelamar['jurusan']) || empty($pelamar['thn_lulus']) || empty($pelamar['nilai']) || empty($pelamar['akreditasi'])) {
                                echo '<span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
                </span>';
                            } else {
                                echo '<span style="color: lime;">
                <i class="fas fa-fw fa-check"></i>
                </span>';
                            } ?>
                            <span><a href="<?= base_url('user/pendidikan'); ?>">Pendidikan</a></span>
                        </div>
                        <div class="col-sm-3">
                            <?php if (empty($pelamar['lamaran']) || empty($pelamar['cv']) || empty($pelamar['ktp']) || empty($pelamar['ijazah']) || empty($pelamar['kk']) || empty($pelamar['npwp']) || empty($pelamar['kesehatan']) || empty($pelamar['spk']) || empty($pelamar['dok_pendukung1']) || empty($pelamar['dok_pendukung2']) || empty($pelamar['dok_pendukung3']) || empty($pelamar['dok_pendukung4'])) {
                                echo '<span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
                </span>';
                            } else {
                                echo '<span style="color: lime;">
                <i class="fas fa-fw fa-check"></i>
                </span>';
                            } ?>
                            <span><a href="<?= base_url('user/upload'); ?>">Dokumen</a></span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3"><b>No. Pendaftaran :</b></div>
                        <div class="col-sm"><?= $pelamar['id']; ?></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3"><b>Status Lamaran :</b></div>
                        <div class="col-sm">
                            <?php if ($seleksi_5['keterangan'] == null) {
                                if ($seleksi_4['keterangan'] == null) {
                                    if ($seleksi_3['keterangan'] == null) {
                                        if ($seleksi_2['keterangan'] == null) {
                                            if ($seleksi_1['keterangan'] == null) {
                                                echo '';
                                            } else {
                                                echo '<div class="alert alert-' . $seleksi_1['alert'] . ' font-weight-bold text-center p-0 m-0">' . $seleksi_1['keterangan'] . '</div>';
                                            }
                                        } else {
                                            echo '<div class="alert alert-' . $seleksi_2['alert'] . ' font-weight-bold text-center p-0 m-0">' . $seleksi_2['keterangan'] . '</div>';
                                        }
                                    } else {
                                        echo '<div class="alert alert-' . $seleksi_3['alert'] . ' font-weight-bold text-center p-0 m-0">' . $seleksi_3['keterangan'] . '</div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-' . $seleksi_4['alert'] . ' font-weight-bold text-center p-0 m-0">' . $seleksi_4['keterangan'] . '</div>';
                                }
                            } else {
                                echo '<div class="alert alert-' . $seleksi_5['alert'] . ' font-weight-bold text-center p-0 m-0">' . $seleksi_5['keterangan'] . '</div>';
                            } ?>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 mt-1">
        <div class="card">
            <div class="card-header">
                <b>Tanda Terima</b>
            </div>
            <div class="card-body">
                <p class="card-text">Sebagai Bukti pendaftaran dan kelengkapan dokumen.</p>
                <a href="<?= base_url('tanda_terima') ?>" class="btn btn-secondary">Cetak Disini</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-sm">
        <div class="card">
            <div class="card-header">
                Pengumuman
            </div>
            <ul class="list-group list-group-flush">
                <?php foreach ($pengumuman as $pm) {
                    $date = date_create($pm->tanggal); ?>
                    <li class="list-group-item">(<?= date_format($date, "d/m/Y") ?>) <a href="<?= base_url('pengumuman/view/') . $pm->id ?>" target="_blank"><span class="text-dark"><?= $pm->judul ?></span></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>