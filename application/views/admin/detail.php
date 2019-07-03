<h1 class="h3 mb-4 text-gray-800">Detail Pelamar</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm small" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Kelamin</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>TTL</th>
                        <th>Jenjang</th>
                        <th>Lulus</th>
                        <th>Nilai/IPK</th>
                        <th>CV</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pelamar as $p) { ?>
                        <tr>
                            <td><img style="height: 50px;" src="<?= base_url('assets/img/pasfoto/') . $p->pasfoto ?>"></td>
                            <td><a href="#" data-toggle="modal" data-target="#DetailPelamar<?= $p->id ?>"><?= $p->nama ?></a></td>
                            <td><?= $p->nik ?></td>
                            <td><?= $p->jns_kelamin ?></td>
                            <td class="text-uppercase"><?= $p->alamat ?></td>
                            <td class="text-uppercase"><?= $p->kota ?></td>
                            <td class="text-uppercase"><?= $p->provinsi ?></td>
                            <td class="text-uppercase"><?= $p->tmp_lahir . ', ' . $p->tgl_lahir ?></td>
                            <td class="text-uppercase"><?= $p->jenjang . ', ' . $p->jurusan . ' ' . $p->sekolah ?></td>
                            <td><?= $p->thn_lulus ?></td>
                            <td><?= $p->nilai ?></td>
                            <td><a href="<?= base_url('assets/dok/') . $p->cv ?>">View</td>
                            <td>
                                <div class="btn-group"><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#EditDetail<?= $p->id ?>"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#HapusDetail<?= $p->id ?>"><i class="fa fa-lg fa-trash"></i></a></div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal Edit Akun -->
<?php foreach ($pelamar as $p) { ?>
    <div class="modal fade" id="EditDetail<?= $p->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Detail Pelamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-3 border-right">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Biodata</a>
                                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Pendidikan</a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <form method="post" action="<?= base_url('admin/detail/edit'); ?>">
                                        <input type="hidden" name="id" value="<?= $p->id ?>">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">NIK</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= $p->nik ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA LENGKAP" value="<?= $p->nama ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="EMAIL" value="<?= $p->email ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Alamat (KTP)</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control text-uppercase" id="alamat" name="alamat" placeholder="ALAMAT SESUAI KTP" value="<?= $p->alamat ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Kabupaten/Kota</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control text-uppercase" id="kota" name="kota" placeholder="KABUPATEN/KOTA" value="<?= $p->kota ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Provinsi</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control text-uppercase" id="provinsi" name="provinsi" placeholder="PROVINSI" value="<?= $p->provinsi ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control text-uppercase" id="tmp_lahir" name="tmp_lahir" placeholder="TEMPAT LAHIR" value="<?= $p->tmp_lahir ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $p->tgl_lahir ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="jns_kelamin" name="jns_kelamin">
                                                    <option selected><?= $p->jns_kelamin ?></option>
                                                    <option>PRIA</option>
                                                    <option>WANITA</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenjang</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="jenjang" name="jenjang">
                                                <option selected><?= $p->jenjang ?></option>
                                                <option>SD</option>
                                                <option>SMP</option>
                                                <option>SLTA/SMA</option>
                                                <option>D3</option>
                                                <option>D4</option>
                                                <option>S1</option>
                                                <option>S2</option>
                                                <option>S3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Sekolah/Institusi</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-uppercase" id="sekolah" name="sekolah" placeholder="SEKOLAH/INSTITUSI" value="<?= $p->sekolah ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jurusan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-uppercase" id="jurusan" name="jurusan" placeholder="JURUSAN" value="<?= $p->jurusan ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="keterangan" name="keterangan">
                                                <option selected><?= $p->keterangan ?></option>
                                                <option>LULUS</option>
                                                <option>TIDAK LULUS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-uppercase" id="thn_lulus" name="thn_lulus" placeholder="TAHUN LULUS" value="<?= $p->thn_lulus ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nilai Rata-Rata/IPK</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control text-uppercase" id="nilai" name="nilai" placeholder="NILAi RATA-RATA/IPK" value="<?= $p->nilai ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Akreditasi</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="akreditasi" name="akreditasi">
                                                <option selected><?= $p->akreditasi ?></option>
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>


<?php foreach ($pelamar as $p) { ?>
    <!-- Modal Hapus Akun -->
    <div class="modal fade" id="HapusDetail<?= $p->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Akun ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus akun <b><?= $p->nama ?></b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('admin/detail/hapus/') . $p->id ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>