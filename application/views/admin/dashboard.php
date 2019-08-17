<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Statistik Pelamar Mendaftar</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Hari Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM pelamar WHERE DATE_FORMAT(tgl_daftar, '%d')=DATE_FORMAT(CURDATE(), '%d')")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Minggu Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM pelamar WHERE tgl_daftar>DATE_SUB(CURDATE(), INTERVAL 1 WEEK)")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Bulan Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM pelamar WHERE DATE_FORMAT(tgl_daftar, '%y%m')=DATE_FORMAT(CURDATE(), '%y%m')")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Tahun Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM pelamar WHERE DATE_FORMAT(tgl_daftar, '%y')=DATE_FORMAT(CURDATE(), '%y')")->num_rows();
                        ?> <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Statistik Visitor</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Hari Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM visitor WHERE DATE_FORMAT(tanggal, '%d')=DATE_FORMAT(CURDATE(), '%d')")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Minggu Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM visitor WHERE tanggal>DATE_SUB(CURDATE(), INTERVAL 1 WEEK)")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Bulan Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM visitor WHERE DATE_FORMAT(tanggal, '%y%m')=DATE_FORMAT(CURDATE(), '%y%m')")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <p class="float-left">Tahun Ini</p>
                        <?php
                        $jml = $this->db->query("SELECT * FROM visitor WHERE DATE_FORMAT(tanggal, '%y')=DATE_FORMAT(CURDATE(), '%y')")->num_rows();
                        ?>
                        <span class="float-right"><?= $jml ?></span>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>