<div class="card shadow">
    <div class="card-header">
        <h1 class="h3 my-2 text-gray-800">Biodata</h1>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?= base_url('user/biodata_simpan'); ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">No. KK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nkk" name="nkk" placeholder="No. Kartu Keluarga" value="<?= $pelamar['nkk'] ?>">
                    <?php if ($pelamar['nkk'] == null) {
                        echo '<small class="text-danger">*No. KK harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= $pelamar['nik'] ?>">
                    <?php if ($pelamar['nik'] == null) {
                        echo '<small class="text-danger">*NIK harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA LENGKAP" value="<?= $pelamar['nama'] ?>">
                    <?php if ($pelamar['nama'] == null) {
                        echo '<small class="text-danger">*Nama harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" placeholder="EMAIL" value="<?= $pelamar['email'] ?>" readonly>
                    <?php if ($pelamar['email'] == null) {
                        echo '<small class="text-danger">*Email harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Alamat (KTP)</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="ALAMAT SESUAI KTP" value="<?= $pelamar['alamat'] ?>">
                    <?php if ($pelamar['alamat'] == null) {
                        echo '<small class="text-danger">*Alamat harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Provinsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="PROVINSI" value="<?= $pelamar['provinsi'] ?>" readonly>
                    <?php if ($pelamar['provinsi'] == null) {
                        echo '<small class="text-danger">*Provinsi harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Kabupaten/Kota</label>
                <div class="col-sm-10">
                    <select class="form-control" id="kota" name="kota">
                        <option value="">--</option>
                        <?php foreach ($kota as $kt) {
                            $value = url_title($kt->kota, '-') ?>
                            <option value="<?= $value ?>" <?php if ($pelamar['kota'] == $kt->kota) {
                                                                echo 'selected';
                                                            } ?>><?= $kt->kota ?></option>
                        <?php } ?>
                    </select>
                    <?php if ($pelamar['kota'] == null) {
                        echo '<small class="text-danger">*Kabupaten/kota harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Kecamatan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="kecamatan" name="kecamatan">
                        <option value="">--</option>
                        <?php

                        $queryKec = "SELECT `kota`.`kota`, `kecamatan`.`kecamatan`
                                       FROM `kota` JOIN `kecamatan` 
                                         ON `kota`.`id` = `kecamatan`.`id_kota`";
                        $kecamatan = $this->db->query($queryKec)->result();

                        foreach ($kecamatan as $kc) {
                            $value = url_title($kc->kecamatan, '-');
                            $class = url_title($kc->kota, '-'); ?>
                            <option value="<?= $value ?>" class="<?= $class ?>" <?php if ($pelamar['kecamatan'] == $kc->kecamatan) {
                                                                                    echo 'selected';
                                                                                } ?>><?= $kc->kecamatan ?></option>
                        <?php } ?>
                    </select>
                    <?php if ($pelamar['kecamatan'] == null) {
                        echo '<small class="text-danger">*Kecamatan harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Kelurahan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="kelurahan" name="kelurahan">
                        <option value="">--</option>
                        <?php

                        $queryKel = "SELECT `kecamatan`.`kecamatan`, `kelurahan`.`kelurahan`
                                       FROM `kecamatan` JOIN `kelurahan` 
                                         ON `kecamatan`.`id` = `kelurahan`.`id_kecamatan`";
                        $kelurahan = $this->db->query($queryKel)->result();

                        foreach ($kelurahan as $kl) {
                            $valuekel = url_title($kl->kelurahan, '-');
                            $classkel = url_title($kl->kecamatan, '-'); ?>
                            <option value="<?= $valuekel ?>" class="<?= $classkel ?>" <?php if ($pelamar['kelurahan'] == $kl->kelurahan) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $kl->kelurahan ?></option>
                        <?php } ?>
                    </select>
                    <?php if ($pelamar['kelurahan'] == null) {
                        echo '<small class="text-danger">*Kelurahan harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="TEMPAT LAHIR" value="<?= $pelamar['tmp_lahir'] ?>">
                    <?php if ($pelamar['tmp_lahir'] == null) {
                        echo '<small class="text-danger">*Tempat lahir harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="datepicker" name="tgl_lahir" value="<?= $pelamar['tgl_lahir'] ?>">
                    <?php if ($pelamar['tgl_lahir'] == null) {
                        echo '<small class="text-danger">*Tanggal lahir harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" id="jns_kelamin" name="jns_kelamin">
                        <option value="">--</option>
                        <option value="PRIA" <?php if ($pelamar['jns_kelamin'] == 'PRIA') {
                                                    echo 'selected';
                                                } ?>>PRIA</option>
                        <option value="WANITA" <?php if ($pelamar['jns_kelamin'] == 'WANITA') {
                                                    echo 'selected';
                                                } ?>>WANITA</option>
                    </select>
                    <?php if ($pelamar['jns_kelamin'] == null) {
                        echo '<small class="text-danger">*Jenis kelamin harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Agama</label>
                <div class="col-sm-10">
                    <select class="form-control" id="agama" name="agama">
                        <option value="">--</option>
                        <option value="ISLAM" <?php if ($pelamar['agama'] == 'ISLAM') {
                                                    echo 'selected';
                                                } ?>>ISLAM</option>
                        <option value="HINDU" <?php if ($pelamar['agama'] == 'HINDU') {
                                                    echo 'selected';
                                                } ?>>HINDU</option>
                        <option value="BUDDHA" <?php if ($pelamar['agama'] == 'BUDDHA') {
                                                    echo 'selected';
                                                } ?>>BUDDHA</option>
                        <option value="KATOLIK" <?php if ($pelamar['agama'] == 'KATOLIK') {
                                                    echo 'selected';
                                                } ?>>KATOLIK</option>
                        <option value="PROTESTAN" <?php if ($pelamar['agama'] == 'PROTESTAN') {
                                                        echo 'selected';
                                                    } ?>>PROTESTAN</option>
                        <option value="KHONGHUCU" <?php if ($pelamar['agama'] == 'KHONGHUCU') {
                                                        echo 'selected';
                                                    } ?>>KHONGHUCU</option>
                        <option value="LAIN-LAIN" <?php if ($pelamar['agama'] == 'LAIN-LAIN') {
                                                        echo 'selected';
                                                    } ?>>LAIN-LAIN</option>
                    </select>
                    <?php if ($pelamar['agama'] == null) {
                        echo '<small class="text-danger">*Agama harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Status Perkawinan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="status" name="status">
                        <option value="">--</option>
                        <option value="LAJANG" <?php if ($pelamar['status'] == 'LAJANG') {
                                                    echo 'selected';
                                                } ?>>LAJANG</option>
                        <option value="MENIKAH" <?php if ($pelamar['status'] == 'MENIKAH') {
                                                    echo 'selected';
                                                } ?>>MENIKAH</option>
                        <option value="DUDA/JANDA" <?php if ($pelamar['status'] == 'DUDA/JANDA') {
                                                        echo 'selected';
                                                    } ?>>DUDA/JANDA</option>
                    </select>
                    <?php if ($pelamar['status'] == null) {
                        echo '<small class="text-danger">*Status harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">No. Telp/HP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telp" name="telp" placeholder="NO. TELP/HP LAHIR" value="<?= $pelamar['telp'] ?>">
                    <?php if ($pelamar['telp'] == null) {
                        echo '<small class="text-danger">*No. telp/hp harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="float-right my-3">
                <button type="submit" class="btn btn-primary mr-0 ml-auto">Simpan</button>
            </div>
        </form>
    </div>
</div>