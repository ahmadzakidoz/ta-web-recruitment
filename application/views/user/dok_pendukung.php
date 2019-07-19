<div class="card mb-3">
    <div class="card-header text-center">
        Unduh Dokumen Pendukung
    </div>
    <div class="card-body text-center">
        <p class="card-text">Sebagai persyaratan kelengkapan dokumen.</p>
        <a href="#" class="btn btn-secondary">Unduh</a>
    </div>
</div>

<div class="card shadow">
    <div class="card-header">
        <h1 class="h3 my-2 text-gray-800">Upload Dokumen Pendukung</h1>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>

        <?= form_open_multipart('user/dok_simpan'); ?>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label font-weight-bold">Surat Pernyataan Sedang Tidak Dalam Kepengurusan</label>
            <div class="col-sm">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="dok_pendukung1" name="dok_pendukung1">
                    <label class="custom-file-label" for="dok_pendukung1">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['dok_pendukung1'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['dok_pendukung1']
                        . '">pratinjau</a>' . $pelamar['dok_pendukung1'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label font-weight-bold">Surat Pernyataan Tidak Melakukan Praktek KKN</label>
            <div class="col-sm">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="dok_pendukung2" name="dok_pendukung2">
                    <label class="custom-file-label" for="dok_pendukung2">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['dok_pendukung2'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['dok_pendukung2']
                        . '">pratinjau</a>' . $pelamar['dok_pendukung2'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label font-weight-bold">Surat Pernyataan Bebas Narkoba</label>
            <div class="col-sm">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="dok_pendukung3" name="dok_pendukung3">
                    <label class="custom-file-label" for="dok_pendukung3">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['dok_pendukung3'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['dok_pendukung3']
                        . '">pratinjau</a>' . $pelamar['dok_pendukung3'];
                } ?>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-4 col-form-label font-weight-bold">Surat Pernyataan Tidak Akan Menuntut PA/KPA</label>
            <div class="col-sm">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="dok_pendukung4" name="dok_pendukung4">
                    <label class="custom-file-label" for="dok_pendukung4">
                        <div class="text-secondary small">File: docx/pdf/jpg/png (maks. 2 mb)</div>
                    </label>
                </div>
                <?php if ($pelamar['dok_pendukung4'] != null) {
                    echo '<a class="badge badge-warning" href="' . base_url('assets/dok/') . $pelamar['dok_pendukung4']
                        . '">pratinjau</a>' . $pelamar['dok_pendukung4'];
                } ?>
            </div>
        </div>

        <div class="float-right my-3">
            <button type="submit" class="btn btn-primary mr-0 ml-auto">Simpan</button>
        </div>
        </form>

    </div>
</div>