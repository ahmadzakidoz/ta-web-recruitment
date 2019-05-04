<div class="card shadow">
    <div class="card-header">
        <h1 class="h3 my-2 text-gray-800">Biodata</h1>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?= base_url('user/biodata_simpan'); ?>">
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
                    <input type="text" class="form-control text-uppercase" id="alamat" name="alamat" placeholder="ALAMAT SESUAI KTP" value="<?= $pelamar['alamat'] ?>">
                    <?php if ($pelamar['alamat'] == null) {
                        echo '<small class="text-danger">*Alamat harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Kabupaten/Kota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="kota" name="kota" placeholder="KABUPATEN/KOTA" value="<?= $pelamar['kota'] ?>">
                    <?php if ($pelamar['kota'] == null) {
                        echo '<small class="text-danger">*Kabupaten/kota harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Provinsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="provinsi" name="provinsi" placeholder="PROVINSI" value="<?= $pelamar['provinsi'] ?>">
                    <?php if ($pelamar['provinsi'] == null) {
                        echo '<small class="text-danger">*Provinsi harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="tmp_lahir" name="tmp_lahir" placeholder="TEMPAT LAHIR" value="<?= $pelamar['tmp_lahir'] ?>">
                    <?php if ($pelamar['tmp_lahir'] == null) {
                        echo '<small class="text-danger">*Tempat lahir harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $pelamar['tgl_lahir'] ?>">
                    <?php if ($pelamar['tgl_lahir'] == null) {
                        echo '<small class="text-danger">*Tanggal lahir harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select class="form-control" id="jns_kelamin" name="jns_kelamin">
                        <option selected><?= $pelamar['jns_kelamin'] ?></option>
                        <option>PRIA</option>
                        <option>WANITA</option>
                    </select>
                    <?php if ($pelamar['jns_kelamin'] == null) {
                        echo '<small class="text-danger">*Jenis kelamin harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="float-right my-3">
                <button type="submit" class="btn btn-primary mr-0 ml-auto">Simpan</button>
            </div>
        </form>
    </div>
</div>