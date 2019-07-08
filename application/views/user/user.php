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
                            <?php if (empty($pelamar['nik']) || empty($pelamar['nama']) || empty($pelamar['alamat']) || empty($pelamar['kota']) || empty($pelamar['provinsi']) || empty($pelamar['tmp_lahir']) || empty($pelamar['tgl_lahir']) || empty($pelamar['jns_kelamin']) || empty($pelamar['pasfoto'])) {
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
                            <?php if (empty($pelamar['jenjang']) || empty($pelamar['sekolah']) || empty($pelamar['jurusan']) || empty($pelamar['keterangan']) || empty($pelamar['thn_lulus']) || empty($pelamar['nilai']) || empty($pelamar['akreditasi'])) {
                                echo '<span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
                </span>';
                            } else {
                                echo '<span style="color: lime;">
                <i class="fas fa-fw fa-check"></i>
                </span>';
                            } ?>
                            <span><a href="<?= base_url('user/biodata'); ?>">Pendidikan</a></span>
                        </div>
                        <div class="col-sm-3">
                            <span style="color: red;">
                                <i class="fas fa-fw fa-times"></i>
                            </span>
                            <span><a href="<?= base_url('user/biodata'); ?>">Dokumen</a></span>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3"><b>Terdaftar Sejak :</b></div>
                        <div class="col-sm"><?= date('d F Y', $pelamar['tgl_daftar']); ?></div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-3"><b>Lowongan diapply :</b></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-3 mt-1">
        <div class="card">
            <div class="card-header">
                Unduh Dokumen
            </div>
            <div class="card-body">
                <p class="card-text">Sebagai persyaratan kelengkapan dokumen.</p>
                <a href="#" class="btn btn-secondary">Unduh</a>
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