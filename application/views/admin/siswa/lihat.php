<?php $this->load->view('layouts/header') ?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php $this->load->view('layouts/navbar') ?>

        <?php $this->load->view('layouts/sidebar') ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Siswa</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Siswa</a></li>
                                <li class="breadcrumb-item active">Lihat Data Siswa</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DETAIL BIODATA SISWA</h3>

                                <div class="card-tools">
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button> -->
                                    <a href="<?= base_url('admin/siswa') ?>" class="btn btn-default btn-sm"><span class="fa fa-arrow-left"></span> &nbsp; Kembali</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <form action="" method="post" autocomplete="off"> -->
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $siswa->nama ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="nis">NIS</label>
                                                    <input type="text" name="nis" id="nis" class="form-control" value="<?= $siswa->nis ?>" disabled>
                                                </div>
                                            </div>
                                            <div class=" col-6">
                                                <div class="form-group">
                                                    <label for="kelas">Kelas (*)</label>
                                                    <input type="text" name="kelas" id="kelas" class="form-control" value="<?= $siswa->kelas ?>" disabled>
                                                </div>
                                            </div>
                                            <div class=" col-6">
                                                <div class="form-group">
                                                    <label for="nik">NIK (*)</label>
                                                    <input type="text" name="nik" id="nik" class="form-control" value="<?= $siswa->nik ?>" disabled>
                                                </div>
                                            </div>
                                            <div class=" col-6">
                                                <div class="form-group">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $siswa->tempat_lahir ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="tgl_lahir">Tanggal Lahir (Format bulan/tanggal/tahun)</label>
                                                    <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $siswa->tgl_lahir ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="jk">Jenis Kelamin</label>
                                                    <select name="jk" id="jk" class="form-control" disabled>
                                                        <option value="" selected disabled>-</option>
                                                        <option value="Laki-laki" <?= $siswa->jk == "Laki-laki" ? "selected" : "" ?>>Laki-laki</option>
                                                        <option value="Perempuan" <?= $siswa->jk == "Perempuan" ? "selected" : "" ?>>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="agama">Agama</label>
                                                    <select name="agama" id="agama" class="form-control" disabled>
                                                        <option value="" selected disabled>-</option>
                                                        <option value="Islam" <?= $siswa->agama == "Islam" ? "selected" : "" ?>>Islam</option>
                                                        <option value="Kristen" <?= $siswa->agama == "kristen" ? "selected" : "" ?>>Kristen</option>
                                                        <option value="Katholik" <?= $siswa->agama == "Katholik" ? "selected" : "" ?>>Katholik</option>
                                                        <option value="Buddha" <?= $siswa->agama == "Buddha" ? "selected" : "" ?>>Buddha</option>
                                                        <option value="Hindu" <?= $siswa->agama == "Hindu" ? "selected" : "" ?>>Hindu</option>
                                                        <option value="Konghucu" <?= $siswa->agama == "Konghucu" ? "selected" : "" ?>>Konghucu</option>
                                                        <option value="Lainnya" <?= $siswa->agama == "Lainnya" ? "selected" : "" ?>>Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $siswa->alamat ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="nama_jalan">Nama Jalan</label>
                                                    <input type="text" name="nama_jalan" id="nama_jalan" class="form-control" value="<?= $siswa->nama_jalan ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label for="rt">RT</label>
                                                    <input type="number" name="rt" id="rt" class="form-control" value="<?= $siswa->rt ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label for="rw">RW</label>
                                                    <input type="number" name="rw" id="rw" class="form-control" value="<?= $siswa->rw ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="provinsi">Provinsi</label>
                                                    <select name="provinsi" id="provinsi" class="form-control" disabled>
                                                        <?php foreach ($provinsi as $p) {
                                                            if (empty($siswa->provinsi)) { ?>
                                                                <option value="">-</option>
                                                            <?php } else { ?>
                                                                <option value="<?= $p->id_provinces ?>" <?= $p->id_provinces == $siswa->provinsi ? "selected" : "" ?>><?= $p->name_provinces ?></option>
                                                        <?php };
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="kabupaten">Kabupaten / Kota</label>
                                                    <select name="kabupaten" id="kabupaten" class="form-control" disabled>
                                                        <?php foreach ($kabupaten as $kab) {
                                                            if (empty($siswa->kabupaten)) { ?>
                                                                <option value="">-</option>
                                                            <?php } else { ?>
                                                                <option value="<?= $kab->id_regencies ?>" <?= $kab->id_regencies == $siswa->kabupaten ? "selected" : "" ?>><?= $kab->name_regencies ?></option>
                                                        <?php };
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="kecamatan">Kecamatan</label>
                                                    <select name="kecamatan" id="kecamatan" class="form-control" disabled>
                                                        <?php foreach ($kecamatan as $kec) {
                                                            if (empty($siswa->kecamatan)) { ?>
                                                                <option value="">-</option>
                                                            <?php } else { ?>
                                                                <option value="<?= $kec->id_districts ?>" <?= $kec->id_districts == $siswa->kecamatan ? "selected" : "" ?>><?= $kec->name_districts ?></option>
                                                        <?php };
                                                        } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="desa">Kelurahan / Desa</label>
                                                    <select name="desa" id="desa" class="form-control" disabled></select>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="kode_pos">Kode Pos</label>
                                                    <input type="number" name="kode_pos" id="kode_pos" class="form-control" value="<?= $siswa->kode_pos ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="telp">Nomor Hp</label>
                                                    <input type="number" name="telp" id="telp" class="form-control" value="<?= $siswa->telp ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" id="email" class="form-control" value="<?= $siswa->email ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="transportasi">Transportasi</label>
                                                    <input type="text" name="transportasi" id="transportasi" class="form-control" value="<?= $siswa->transportasi ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="urutan_anak">Anak Ke</label>
                                                    <input type="number" name="urutan_anak" id="urutan_anak" class="form-control" value="<?= $siswa->urutan_anak ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="nama_ayah">Nama Ayah</label>
                                                            <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" value="<?= $siswa->nama_ayah ?>" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                                            <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->pekerjaan_ayah ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                                            <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->penghasilan_ayah ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah</label>
                                                            <select name="pendidikan_terakhir_ayah" id="pendidikan_terakhir_ayah" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->pendidikan_terakhir_ayah ?></option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="nama_ibu">Nama Ibu</label>
                                                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" value="<?= $siswa->nama_ibu ?>" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                                            <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->pekerjaan_ibu ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                                            <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->penghasilan_ibu ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                                                            <select name="pendidikan_terakhir_ibu" id="pendidikan_terakhir_ibu" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->pendidikan_terakhir_ibu ?></option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="nama_wali">Nama Wali</label>
                                                            <input type="text" name="nama_wali" id="nama_wali" class="form-control" value="<?= $siswa->nama_wali ?>" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                                            <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->pekerjaan_wali ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="penghasilan_wali">Penghasilan Wali</label>
                                                            <select name="penghasilan_wali" id="penghasilan_wali" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->penghasilan_wali ?></option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pendidikan_terakhir_wali">Pendidikan Terakhir Wali</label>
                                                            <select name="pendidikan_terakhir_wali" id="pendidikan_terakhir_wali" class="form-control" disabled>
                                                                <option value="" selected disabled><?= $siswa->pendidikan_terakhir_wali ?></option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <?php $this->load->view('layouts/footer') ?>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('layouts/script') ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#desa').ready(function() {
                var id = <?= $siswa->desa ?>;
                // console.log(id);
                $.ajax({
                    url: "<?= base_url('admin/siswa/get_desa_by_id'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {
                        // console.log(data);
                        var html1 = '<option value=' + data.id_villages + '>' + data.name_villages + '</option>';
                        $('#desa').html(html1);
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>