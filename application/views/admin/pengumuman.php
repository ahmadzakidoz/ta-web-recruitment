<h1 class="h3 mb-4 text-gray-800">Pengumuman</h1>

<div class="card shadow mb-4">
    <div class="card-body">
        <?= $this->session->flashdata('pesan'); ?>
        <div class="table-responsive">
            <table class="table table-bordered table-sm small" id="pm" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pengumuman as $pm) { ?>
                        <tr>
                            <td><?= word_limiter($pm->tanggal, 1, ''); ?></td>
                            <td><?= $pm->judul ?></td>
                            <td><?= word_limiter($pm->isi, 20); ?></td>
                            <td>
                                <div class="btn-group"><a class="btn btn-primary" href="<?= base_url('admin/pengumuman/edit/') . $pm->id ?>"><i class="fa fa-lg fa-edit"></i></a><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#HapusPengumuman<?= $pm->id ?>"><i class="fa fa-lg fa-trash"></i></a></div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal Hapus Pengumuman -->
<?php foreach ($pengumuman as $pm) { ?>
    <div class="modal fade" id="HapusPengumuman<?= $pm->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pengumuman ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus <b><?= $pm->judul ?></b>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('admin/pengumuman/hapus/') . $pm->id ?>" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>