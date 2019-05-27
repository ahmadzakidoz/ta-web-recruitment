<div class="card border-danger <?php if (empty($pelamar['nik']) || empty($pelamar['nama']) || empty($pelamar['alamat']) || empty($pelamar['kota']) || empty($pelamar['provinsi']) || empty($pelamar['tmp_lahir']) || empty($pelamar['tgl_lahir']) || empty($pelamar['jns_kelamin']) || empty($pelamar['pasfoto']) || empty($pelamar['jenjang']) || empty($pelamar['sekolah']) || empty($pelamar['jurusan']) || empty($pelamar['keterangan']) || empty($pelamar['thn_lulus']) || empty($pelamar['nilai']) || empty($pelamar['akreditasi'])) {
                                    echo '';
                                } else {
                                    echo 'd-none';
                                } ?>">
    <div class="card-header bg-danger text-white">
        Peringatan!
    </div>
    <div class="card-body">
        <h5 class="card-title">Silahkan lengkapi data pribadi dan dokumen-dokumen Anda!</h5>
        <p class="card-text">
            <?php if (empty($pelamar['nik']) || empty($pelamar['nama']) || empty($pelamar['alamat']) || empty($pelamar['kota']) || empty($pelamar['provinsi']) || empty($pelamar['tmp_lahir']) || empty($pelamar['tgl_lahir']) || empty($pelamar['jns_kelamin']) || empty($pelamar['pasfoto'])) {
                echo '<span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
                </span>';
            } else {
                echo '<span style="color: lime;">
                <i class="fas fa-fw fa-check"></i>
                </span>';
            } ?>
            <span>Biodata</span>
            <br>
            <?php if (empty($pelamar['jenjang']) || empty($pelamar['sekolah']) || empty($pelamar['jurusan']) || empty($pelamar['keterangan']) || empty($pelamar['thn_lulus']) || empty($pelamar['nilai']) || empty($pelamar['akreditasi'])) {
                echo '<span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
                </span>';
            } else {
                echo '<span style="color: lime;">
                <i class="fas fa-fw fa-check"></i>
                </span>';
            } ?>
            <span>Pendidikan</span>
            <br>
            <span style="color: red;">
                <i class="fas fa-fw fa-times"></i>
            </span>
            <span>Dokumen</span>
        </p>
    </div>
</div>