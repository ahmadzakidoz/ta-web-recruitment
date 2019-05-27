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
                    <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                    <label class="custom-file-label" for="pasfoto">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">CV</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="cv" name="cv">
                    <label class="custom-file-label" for="cv">Choose file</label>
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
                    <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                    <label class="custom-file-label" for="pasfoto">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">KK</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                    <label class="custom-file-label" for="pasfoto">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">NPWP</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                    <label class="custom-file-label" for="pasfoto">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label font-weight-bold">Surat Kesehatan</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="pasfoto" name="pasfoto">
                    <label class="custom-file-label" for="pasfoto">Choose file</label>
                </div>
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
                            <label class="custom-file-label" for="pasfoto">Choose file</label>
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