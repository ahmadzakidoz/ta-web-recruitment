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
                        <option value="">--</option>
                        <option value="SD" <?php if ($pelamar['jenjang'] == 'SD') {
                                                echo 'selected';
                                            } ?>>SD</option>
                        <option value="SMP" <?php if ($pelamar['jenjang'] == 'SMP') {
                                                echo 'selected';
                                            } ?>>SMP</option>
                        <option value="SLTA" <?php if ($pelamar['jenjang'] == 'SLTA') {
                                                    echo 'selected';
                                                } ?>>SLTA</option>
                        <option value="D3" <?php if ($pelamar['jenjang'] == 'D3') {
                                                echo 'selected';
                                            } ?>>D3</option>
                        <option value="D4" <?php if ($pelamar['jenjang'] == 'D4') {
                                                echo 'selected';
                                            } ?>>D4</option>
                        <option value="S1" <?php if ($pelamar['jenjang'] == 'S1') {
                                                echo 'selected';
                                            } ?>>S1</option>
                        <option value="S2" <?php if ($pelamar['jenjang'] == 'S2') {
                                                echo 'selected';
                                            } ?>>S2</option>
                        <option value="S3" <?php if ($pelamar['jenjang'] == 'S3') {
                                                echo 'selected';
                                            } ?>>S3</option>
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
                    <select class="form-control" id="jurusan" name="jurusan">
                        <option value=""><?= $pelamar['jurusan']; ?></option>
                        <option class="SLTA">ILMU PENGETAHUAN ALAM</option>
                        <option class="SLTA">ILMU PENGETAHUAN SOSIAL</option>
                        <option class="SLTA">ILMU PENGETAHUAN BAHASA</option>
                        <optgroup label="Kesehatan" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">KEDOKTERAN</option>
                            <option class="D3 D4 S1 S2">KEDOKTERAN GIGI</option>
                            <option class="D3 D4 S1 S2">KEDOKTERAN HEWAN</option>
                            <option class="D3 D4 S1 S2">KESEHATAN MASYARAKAT</option>
                            <option class="D3 D4 S1 S2">KESEHATAN LINGKUNGAN</option>
                            <option class="D3 D4 S1 S2">ILMU GIZI</option>
                            <option class="D3 D4 S1 S2">KESELAMATAN & KESEHATAN KERJA</option>
                            <option class="D3 D4 S1 S2">ILMU KEPERAWATAN</option>
                            <option class="D3 D4 S1 S2">FARMASI</option>
                            <option class="D3 D4 S1 S2">KEDOKTERAN HEWAN</option>
                            <option class="D3 D4 S1 S2">NUTRISI DAN TEKNOLOGI PANGAN</option>
                            <option class="D3 D4 S1 S2">KEBIDANAN</option>
                            <option class="D3 D4 S1 S2">FISIOTERAFI</option>
                            <option class="D3 D4 S1 S2">ILMU KEOLAHRAGAAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK RADIODIAGNOSTIK DAN RADIOTERAPI</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN PELAYANAN RUMAH SAKIT</option>
                        </optgroup>
                        <optgroup label="Matematika & IPA (MIPA)" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">MATEMATIKA</option>
                            <option class="D3 D4 S1 S2">FISIKA</option>
                            <option class="D3 D4 S1 S2">KIMIA</option>
                            <option class="D3 D4 S1 S2">BIOLOGI</option>
                            <option class="D3 D4 S1 S2">STATISTIKA</option>
                            <option class="D3 D4 S1 S2">ASTRONOMI</option>
                            <option class="D3 D4 S1 S2">BIOTEKNOLOGI</option>
                            <option class="D3 D4 S1 S2">GEOFISIKA</option>
                            <option class="D3 D4 S1 S2">METEOROLOGI</option>
                            <option class="D3 D4 S1 S2">GEOGRAFI</option>
                            <option class="D3 D4 S1 S2">BIOKIMIA</option>
                            <option class="D3 D4 S1 S2">METROLOGI</option>
                            <option class="D3 D4 S1 S2">AKTUARIA</option>
                            <option class="D3 D4 S1 S2">STATISTIKA TERAPAN</option>
                            <option class="D3 D4 S1 S2">MIKROBIOLOGI</option>
                            <option class="D3 D4 S1 S2">BIOENTREPRENEURSHIP</option>
                            <option class="D3 D4 S1 S2">ILMU PANGAN (FOOD SCIENCE)</option>
                            <option class="D3 D4 S1 S2">MATEMATIKA BISNIS</option>
                            <option class="D3 D4 S1 S2">FISIKA MEDIS</option>
                            <option class="D3 D4 S1 S2">KARTOGRAFI DAN PENGINDERAAN JAUH</option>
                            <option class="D3 D4 S1 S2">PENGELOLAAN DAN PEMBERDAYAAN SDA DAN LINGKUNGAN</option>
                        </optgroup>
                        <optgroup label="Sosial dan Humaniora" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">ILMU POLITIK</option>
                            <option class="D3 D4 S1 S2">FILSAFAT</option>
                            <option class="D3 D4 S1 S2">KRIMINOLOGI</option>
                            <option class="D3 D4 S1 S2">PSIKOLOGI</option>
                            <option class="D3 D4 S1 S2">ILMU HUKUM</option>
                            <option class="D3 D4 S1 S2">SOSIOLOGI</option>
                            <option class="D3 D4 S1 S2">JURNALISTIK</option>
                            <option class="D3 D4 S1 S2">ANTROPOLOGI</option>
                            <option class="D3 D4 S1 S2">HUBUNGAN INTERNASIONAL (HI)</option>
                            <option class="D3 D4 S1 S2">ILMU KESEJAHTERAAN SOSIAL</option>
                            <option class="D3 D4 S1 S2">ILMU PEMERINTAHAN</option>
                            <option class="D3 D4 S1 S2">ADMINISTRASI PUBLIK</option>
                            <option class="D3 D4 S1 S2">ADMINISTRASI BISNIS</option>
                            <option class="D3 D4 S1 S2">ILMU KOMUNIKASI</option>
                            <option class="D3 D4 S1 S2">HUBUNGAN MASYARAKAT</option>
                            <option class="D3 D4 S1 S2">MARKETING COMMUNICATION</option>
                            <option class="D3 D4 S1 S2">PENYIARAN (BROADCASTING)</option>
                            <option class="D3 D4 S1 S2">PERIKLANAN (ADVERTIING)</option>
                            <option class="D3 D4 S1 S2">PERADILAN AGAMA</option>
                            <option class="D3 D4 S1 S2">POLITIK ISLAM</option>
                            <option class="D3 D4 S1 S2">PEMBANGUNAN SOSIAL DAN KESEJAHTERAAN</option>
                            <option class="D3 D4 S1 S2">BUSINESS LAW</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN KOMUNIKASI</option>
                            <option class="D3 D4 S1 S2">BRANDING</option>
                            <option class="D3 D4 S1 S2">KEARSIPAN</option>
                            <option class="D3 D4 S1 S2">SAINS KOMUNIKASI DAN PENGEMBANGAN MASYARAKAT</option>
                            <option class="D3 D4 S1 S2">ILMU KELUARGA DAN KONSUMEN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN PRODUKSI MEDIA</option>
                        </optgroup>
                        <optgroup label="Ekonomi dan Bisnis" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">AKUNTANSI</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN KEUANGAN</option>
                            <option class="D3 D4 S1 S2">MENAJEMEN SUMBER DAYA MANUSIA DAN ORGANISASI</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN OPERASI</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN PEMASARAN</option>
                            <option class="D3 D4 S1 S2">ADMINISTRASI FISKAL</option>
                            <option class="D3 D4 S1 S2">EKONOMI</option>
                            <option class="D3 D4 S1 S2">BISNIS INTERNASIONAL</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN INFORMATIKA</option>
                            <option class="D3 D4 S1 S2">EKONOMI PEMBANGUNAN</option>
                            <option class="D3 D4 S1 S2">TECHOPRENEURSHIP</option>
                            <option class="D3 D4 S1 S2">GREEN ECONOMY</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN BISNIS</option>
                            <option class="D3 D4 S1 S2">ADMINISTRASI NIAGA</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN KEUANGAN SYARIAH</option>
                            <option class="D3 D4 S1 S2">BISNIS ISLAM</option>
                            <option class="D3 D4 S1 S2">BUSINESS CREATION</option>
                            <option class="D3 D4 S1 S2">KEWIRAUSAHAAN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN BISNIS DAN PEMASARAN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN BISNIS INTERNASIONAL</option>
                            <option class="D3 D4 S1 S2">EKONOMI SYARIAH</option>
                            <option class="D3 D4 S1 S2">KEUANGAN</option>
                            <option class="D3 D4 S1 S2">PEMASARAN INTERNASIONAL</option>
                            <option class="D3 D4 S1 S2">EKONOMI BISNIS</option>
                            <option class="D3 D4 S1 S2">AKUNTANSI BISNIS</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN PARIWISATA</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN TRANSPORTASI</option>
                            <option class="D3 D4 S1 S2">AKUNTANSI SEKTOR PUBLIK</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN INDUSTRI KATERING</option>
                            <option class="D3 D4 S1 S2">ADMINISTRASI KEUANGAN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN BISNIS TELEKOMUNIKASI INFORMATIKA</option>
                        </optgroup>
                        <optgroup label="Sastra dan Budaya" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">ILMU SEJARAH</option>
                            <option class="D3 D4 S1 S2">SASTRA INGGRIS</option>
                            <option class="D3 D4 S1 S2">ARKEOLOGI</option>
                            <option class="D3 D4 S1 S2">SASTRA JAWA</option>
                            <option class="D3 D4 S1 S2">SASTRA ARAB</option>
                            <option class="D3 D4 S1 S2">SASTRA JEPANG</option>
                            <option class="D3 D4 S1 S2">SASTRA INDONESIA</option>
                            <option class="D3 D4 S1 S2">SASTRA RUSIA</option>
                            <option class="D3 D4 S1 S2">SASTRA PERANCIS</option>
                            <option class="D3 D4 S1 S2">SASTRA KOREA</option>
                            <option class="D3 D4 S1 S2">SASTRA JERMAN</option>
                            <option class="D3 D4 S1 S2">SASTRA BELANDA</option>
                            <option class="D3 D4 S1 S2">SASTRA CINA</option>
                            <option class="D3 D4 S1 S2">SASTRA SUNDA</option>
                            <option class="D3 D4 S1 S2">SASTRA BALI</option>
                            <option class="D3 D4 S1 S2">SASTRA SLAVIA</option>
                            <option class="D3 D4 S1 S2">SASTRA MINANGKABAU</option>
                            <option class="D3 D4 S1 S2">SASTRA NUSANTARA</option>
                            <option class="D3 D4 S1 S2">SEJARAH DAN KEBUDAYAAN ISLAM</option>
                        </optgroup>
                        <optgroup label="Komputer dan Teknologi" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">TEKNIK INFORMATIKA</option>
                            <option class="D3 D4 S1 S2">MOBILE APPLICATION & TECHNOLOGY</option>
                            <option class="D3 D4 S1 S2">SISTEM INFORMASI (MANAJEMEN INFORMATIKA)</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI GAME</option>
                            <option class="D3 D4 S1 S2">ILMU KOMPUTASI</option>
                            <option class="D3 D4 S1 S2">CYBER SECURITY</option>
                            <option class="D3 D4 S1 S2">BIOINFORMATIKA</option>
                            <option class="D3 D4 S1 S2">SISTEM KOMPUTER (TEKNIK KOMPUTER)</option>
                            <option class="D3 D4 S1 S2">SISTEM INFORMASI BISNIS</option>
                            <option class="D3 D4 S1 S2">SOFTWARE ENGINEERING</option>
                            <option class="D3 D4 S1 S2">SISTEM DAN TEKNOLOGI INFORMASI</option>
                            <option class="D3 D4 S1 S2">COMPUTERIZED ACCOUNTING</option>
                            <option class="D3 D4 S1 S2">INFORMATION SYSTEMS AUDIT</option>
                            <option class="D3 D4 S1 S2">ACCOUNTING INFORMATION</option>
                            <option class="D3 D4 S1 S2">AUDIO ENGINEERING</option>
                            <option class="D3 D4 S1 S2">ILMU KOMPUTER</option>
                            <option class="D3 D4 S1 S2">HUMAN COMPUTER INTERACTION</option>
                        </optgroup>
                        <optgroup label="Pendidikan" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">PENDIDIKAN GURU SEKOLAH DASAR (PGSD)</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN PENDIDIKAN</option>
                            <option class="D3 D4 S1 S2">KURIKULUM DAN TEKNOLOGI PENDIDIKAN</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN LUAR SEKOLAH</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN LUAR BIASA (PLB)</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN ANAK USIA DINI (PAUD)</option>
                            <option class="D3 D4 S1 S2">ADMINISTRASI PENDIDIKAN</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN BIMBINGAN KONSELING</option>
                            <option class="D3 D4 S1 S2">ILMU PERPUSTAKAAN</option>
                            <option class="D3 D4 S1 S2">TEOLOGI</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN KEPENDUDUKAN</option>
                            <option class="D3 D4 S1 S2">TAFSIR HADITS</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN PANCASILA DAN KEWARGANEGARAAN</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN AGAMA ISLAM</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN KEPELATIHAN OLAHRAGA</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN JASMANI KESEHATAN DAN REKREASI</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN ILMU PENGETAHUAN ALAM</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN BAHASA INGGRIS</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN BAHASA DAN SASTRA INDONESIA</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN SEJARAH</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN MATEMATIKA</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN PENDIDIKAN ISLAM</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN GEOGRAFI</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN BAHASA ARAB</option>
                        </optgroup>
                        <optgroup label="Pertanian" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">AGRONOMI DAN HORTIKULTURA</option>
                            <option class="D3 D4 S1 S2">MIKROBIOLOGI PERTANIAN</option>
                            <option class="D3 D4 S1 S2">AGRIBISNIS (SOSIAL EKONOMI PERTANIAN)</option>
                            <option class="D3 D4 S1 S2">AGROTEKNOLOGI</option>
                            <option class="D3 D4 S1 S2">ILMU KELAUTAN</option>
                            <option class="D3 D4 S1 S2">PETERNAKAN</option>
                            <option class="D3 D4 S1 S2">AGROETEKNOLOGI</option>
                            <option class="D3 D4 S1 S2">KEHUTANAN</option>
                            <option class="D3 D4 S1 S2">BUDIDAYA PERAIRAN (AKUAKULTUR)</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI PANGAN</option>
                            <option class="D3 D4 S1 S2">REKAYASA PERTANIAN</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI PASCA PANEN</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI HASIL HUTAN</option>
                            <option class="D3 D4 S1 S2">SILVIKULUTUR</option>
                            <option class="D3 D4 S1 S2">KONSERVASI SUMBERDAYA HUTAN DAN EKOWISATA</option>
                            <option class="D3 D4 S1 S2">ILMU HAMA DAN PENYAKIT TUMBUHAN (PROTEKSI TANAMAN)</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI INDUSTRI PERTANIAN (AGROINDUSTRI)</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN SUMBERDAYA LAHAN (ILMU TANAH)</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI HASIL PERIKANAN</option>
                            <option class="D3 D4 S1 S2">AGROBISNIS PERIKANAN (SOSIAL EKONOMI PERIKANAN)</option>
                            <option class="D3 D4 S1 S2">PENGELOLAAN HUTAN</option>
                            <option class="D3 D4 S1 S2">PEMANFAATAN SUMBERDAYA PERIKANAN</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI INDUSTRI BENIH</option>
                            <option class="D3 D4 S1 S2">PRODUKSI TERNAK</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI HASIL TERNAK</option>
                            <option class="D3 D4 S1 S2">REKAYASA PERTANIAN</option>
                            <option class="D3 D4 S1 S2">BUDIDAYA PERIKANAN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN SUMBER DAYA PERAIRAN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN HUTAN</option>
                            <option class="D3 D4 S1 S2">PENYULUHAN DAN KOMUNIKASI PERTANIAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK PERTANIAN</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN BISNIS UNGGAS</option>
                        </optgroup>
                        <optgroup label="Profesi dan Ilmu Terapan" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">PARIWISATA</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN KEPOLISIAN</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN MILITER</option>
                            <option class="D3 D4 S1 S2">PENERBANG (PENDIDIKAN PILOT)</option>
                            <option class="D3 D4 S1 S2">PENDIDIKAN INTELIJEN</option>
                            <option class="D3 D4 S1 S2">KOMUNIKASI PENERBANGAN</option>
                            <option class="D3 D4 S1 S2">LALU LINTAS UDARA</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN LOGISTIK</option>
                        </optgroup>
                        <optgroup label="Seni" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">DESAIN INTERIOR</option>
                            <option class="D3 D4 S1 S2">DESAIN PRODUK</option>
                            <option class="D3 D4 S1 S2">FURNITURE DESIGN</option>
                            <option class="D3 D4 S1 S2">TATA BOGA</option>
                            <option class="D3 D4 S1 S2">DESAIN GRAFIS</option>
                            <option class="D3 D4 S1 S2">ANIMASI</option>
                            <option class="D3 D4 S1 S2">DKV NEW MEDIA</option>
                            <option class="D3 D4 S1 S2">DKV CREATIVE ADVERTISING</option>
                        </optgroup>
                        <optgroup label="Teknik" class="D3 D4 S1 S2">
                            <option class="D3 D4 S1 S2">TEKNIK PERTAMBANGAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK KELAUTAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK LINGKUNGAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK METALURGI</option>
                            <option class="D3 D4 S1 S2">TEKNIK SIPIL</option>
                            <option class="D3 D4 S1 S2">ARSITEKTUR</option>
                            <option class="D3 D4 S1 S2">TEKNIK GEODESI</option>
                            <option class="D3 D4 S1 S2">TEKNIK ELEKTRO</option>
                            <option class="D3 D4 S1 S2">TEKNIK MESIN</option>
                            <option class="D3 D4 S1 S2">TEKNIK INDUSTRI</option>
                            <option class="D3 D4 S1 S2">TEKNIK PERKAPALAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK PERENCANAAN WILAYAH DAN KOTA (PLANOLOGI)</option>
                            <option class="D3 D4 S1 S2">TEKNIK PENERBANGAN (AERONAUTIKA DAN ASTRONAUTIKA)</option>
                            <option class="D3 D4 S1 S2">OSEANOGRAFI</option>
                            <option class="D3 D4 S1 S2">TEKNIK NUKLIR</option>
                            <option class="D3 D4 S1 S2">TEKNIK GEOLOGI</option>
                            <option class="D3 D4 S1 S2">TEKNIK OTOMOTIF</option>
                            <option class="D3 D4 S1 S2">TEKNOBIOMEDIK</option>
                            <option class="D3 D4 S1 S2">TEKNIK PERANCANGAN JALAN DAN JEMBATAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK REFRIGERASI DAN TATA UDARA</option>
                            <option class="D3 D4 S1 S2">TEKNIK TELEKOMUNIKASI</option>
                            <option class="D3 D4 S1 S2">TEKNOLOGI BIOPROSES</option>
                            <option class="D3 D4 S1 S2">TEKNIK GRAFIKA</option>
                            <option class="D3 D4 S1 S2">TRANSPORTASI LAUT</option>
                            <option class="D3 D4 S1 S2">TEKNIK OTOMASI MANUFAKTUR DAN MEKATRONIKA</option>
                            <option class="D3 D4 S1 S2">REKAYASA HAYATI</option>
                            <option class="D3 D4 S1 S2">TEKNIK MATERIAL</option>
                            <option class="D3 D4 S1 S2">AUTOMOTIVE AND ROBOTICS ENGINEERING</option>
                            <option class="D3 D4 S1 S2">TEKNIK TENAGA LISTRIK</option>
                            <option class="D3 D4 S1 S2">TEKNIK SISTEM KOMPUTER</option>
                            <option class="D3 D4 S1 S2">MANAJEMEN REKAYASA INDUSTRI</option>
                            <option class="D3 D4 S1 S2">TEKNIK BIOENERGI DAN KEMURGI</option>
                            <option class="D3 D4 S1 S2">INDUSTRIAL ROBOTICSDESIGN</option>
                            <option class="D3 D4 S1 S2">TEKNIK KIMIA</option>
                            <option class="D3 D4 S1 S2">TEKNIK FISIKA</option>
                            <option class="D3 D4 S1 S2">TEKNIK GEOMATIKA</option>
                            <option class="D3 D4 S1 S2">TEKNIK PERMINYAKAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK ALAT BERAT</option>
                            <option class="D3 D4 S1 S2">REKAYASA INFRASTRUKTUR LINGKUNGAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK PESAWAT UDARA</option>
                            <option class="D3 D4 S1 S2">TEKNIK TELEKOMUNIKASI DAN NAVIGASI UDARA</option>
                            <option class="D3 D4 S1 S2">TEKNIK BANGUNAN DAN LANDASAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK LISTRIK BANDARA</option>
                            <option class="D3 D4 S1 S2">TEKNIK EKONOMI KONSTRUKSI (QUANTITY SURVEYOR)</option>
                            <option class="D3 D4 S1 S2">TEKNIK SISTEM PERKAPALAN</option>
                            <option class="D3 D4 S1 S2">TEKNIK PENGAIRAN (SUMBER DAYA AIR)</option>
                            <option class="D3 D4 S1 S2">METEOROLOGI TERAPAN</option>
                            <option class="D3 D4 S1 S2">ARSITEKTUR LANSKAP</option>
                            <option class="D3 D4 S1 S2">TEKNIK KONVERSI ENERGI</option>
                            <option class="D3 D4 S1 S2">TEKNIK PERPIPAAN</option>
                        </optgroup>
                    </select>
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