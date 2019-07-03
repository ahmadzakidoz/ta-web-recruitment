<div style="background-color: #f8f9fc;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h4 class="font-weight-bold text-center">PENGUMUMAN</h4>
                <hr style="border-width: 5px; width: 50%;">
            </div>
        </div>
        <?php foreach ($pengumuman as $pm) {
            $date = date_create($pm->tanggal) ?>
            <div class="row my-5">
                <div class="col-md-12 px-5">
                    <div class="card border-left-primary shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md">
                                    <a class="text-decoration-none" href="<?= base_url('pengumuman/view/') . $pm->id ?>">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pm->judul ?></div>
                                        <div class="small text-gray-600">Tanggal Posting : <?= date_format($date, "j F Y, H:i") . ' WIB' ?></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>