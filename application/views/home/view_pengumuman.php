<div style="background-color: #f8f9fc;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h4 class="font-weight-bold text-center">PENGUMUMAN</h4>
                <hr style="border-width: 5px; width: 50%;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 mx-auto">
                <div class="card shadow mb-5">
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-md-12">
                                <div class="container">
                                    <div class="small text-gray-600">Tanggal Posting : <?= date_format($date, "j F Y, H:i") . ' WIB' ?></div>
                                    <div class="h3 text-dark my-3"><?= $view_pengumuman['judul'] ?></div>
                                    <div class="text-gray-700"><?= $view_pengumuman['isi'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>