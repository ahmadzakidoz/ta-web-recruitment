<div class="card shadow">
    <div class="card-header">
        <h1 class="h3 my-2 text-gray-800">Pendidikan</h1>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <form method="post" action="<?= base_url('user/pendidikan_simpan'); ?>">
        <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Jenjang</label>
                <div class="col-sm-10">
                    <select class="form-control" id="jenjang" name="jenjang">
                        <option selected><?= $pelamar['jenjang'] ?></option>
                        <option>SD</option>
                        <option>SMP</option>
                        <option>SLTA/SMA</option>
                        <option>D3</option>
                        <option>D4</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                    </select>
                    <?php if ($pelamar['jenjang'] == null) {
                        echo '<small class="text-danger">*Jenjang harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Sekolah/Institusi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="sekolah" name="sekolah" placeholder="SEKOLAH/INSTITUSI" value="<?= $pelamar['sekolah'] ?>">
                    <?php if ($pelamar['sekolah'] == null) {
                        echo '<small class="text-danger">*Sekolah/institusi harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="jurusan" name="jurusan" placeholder="JURUSAN" value="<?= $pelamar['jurusan'] ?>">
                    <?php if ($pelamar['jurusan'] == null) {
                        echo '<small class="text-danger">*Jurusan harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Keterangan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="keterangan" name="keterangan">
                        <option selected><?= $pelamar['keterangan'] ?></option>
                        <option>LULUS</option>
                        <option>TIDAK LULUS</option>
                    </select>
                    <?php if ($pelamar['keterangan'] == null) {
                        echo '<small class="text-danger">*Keterangan harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Tahun Lulus</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="thn_lulus" name="thn_lulus" placeholder="TAHUN LULUS" value="<?= $pelamar['thn_lulus'] ?>">
                    <?php if ($pelamar['thn_lulus'] == null) {
                        echo '<small class="text-danger">*Tahun lulus harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Nilai Rata-Rata/IPK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-uppercase" id="nilai" name="nilai" placeholder="NILAi RATA-RATA/IPK" value="<?= $pelamar['nilai'] ?>">
                    <?php if ($pelamar['nilai'] == null) {
                        echo '<small class="text-danger">*nilai harus diisi!</small>';
                    } ?>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label font-weight-bold">Akreditasi</label>
                <div class="col-sm-10">
                    <select class="form-control" id="akreditasi" name="akreditasi">
                        <option selected><?= $pelamar['akreditasi'] ?></option>
                        <option>A</option>
                        <option>B</option>
                        <option>C</option>
                    </select>
                </div>
            </div>
            <div class="float-right my-3">
                <button type="submit" class="btn btn-primary mr-0 ml-auto">Simpan</button>
            </div>
        </form>
    </div>
</div>