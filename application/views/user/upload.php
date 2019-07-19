<div class="card shadow">
    <div class="card-header">
        <h1 class="h3 my-2 text-gray-800">Upload Dokumen</h1>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>

        <?= form_open_multipart('user/upload_simpan'); ?>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Surat Lamaran</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="lamaran" name="lamaran">
                    <label class="custom-file-label" for="lamaran">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['lamaran'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['lamaran']
                        . '">pratinjau</a>' . $pelamar['lamaran'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">CV</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="cv" name="cv">
                    <label class="custom-file-label" for="cv">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['cv'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['cv']
                        . '">pratinjau</a>' . $pelamar['cv'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">KTP</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="ktp" name="ktp">
                    <label class="custom-file-label" for="ktp">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['ktp'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['ktp']
                        . '">pratinjau</a>' . $pelamar['ktp'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Ijazah</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="ijazah" name="ijazah">
                    <label class="custom-file-label" for="ijazah">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['ijazah'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['ijazah']
                        . '">pratinjau</a>' . $pelamar['ijazah'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">KK</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="kk" name="kk">
                    <label class="custom-file-label" for="kk">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['kk'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['kk']
                        . '">pratinjau</a>' . $pelamar['kk'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">NPWP</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="npwp" name="npwp">
                    <label class="custom-file-label" for="npwp">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['npwp'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['npwp']
                        . '">pratinjau</a>' . $pelamar['npwp'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Surat Kesehatan</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="kesehatan" name="kesehatan">
                    <label class="custom-file-label" for="kesehatan">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['kesehatan'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['kesehatan']
                        . '">pratinjau</a>' . $pelamar['kesehatan'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Surat Pencari Kerja</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="spk" name="spk">
                    <label class="custom-file-label" for="spk">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['spk'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['spk']
                        . '">pratinjau</a>' . $pelamar['spk'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Pasfoto</label>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="<?= base_url('assets/img/pasfoto/') . $pelamar['pasfoto']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                            <label class="custom-file-label" for="pasfoto">
                                <div class="text-secondary small">File: jpg/png (maks. 2 mb)</div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="float-right my-3">
            <button type="submit" class="btn btn-primary mr-0 ml-auto">Simpan</button>
        </div>
        </form>

    </div>
</div>