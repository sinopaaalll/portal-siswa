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
                                <li class="breadcrumb-item active">Tambah Data Siswa</li>
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
                                <h3 class="card-title">FORM BIODATA SISWA | Form Isian dengan tanda (*), WAJIB DIISI !</h3>

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
                                        <form action="" method="post" autocomplete="off">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nama">Nama (*)</label>
                                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Ketikkan nama lengkap ..." value="<?= set_value('nama') ?>">
                                                        <?= form_error('nama', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nis">NIS (*)</label>
                                                        <input type="text" name="nis" id="nis" class="form-control" placeholder="Ketikkan nis ..." value="<?= set_value('nis') ?>">
                                                        <?= form_error('nis', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class=" col-6">
                                                    <div class="form-group">
                                                        <label for="kelas">Kelas (*)</label>
                                                        <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Ketikkan kelas ..." value="<?= set_value('kelas') ?>">
                                                        <?= form_error('kelas', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class=" col-6">
                                                    <div class="form-group">
                                                        <label for="nik">NIK (*)</label>
                                                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Ketikkan nik ..." value="<?= set_value('nik') ?>">
                                                        <?= form_error('nik', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class=" col-6">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Ketikkan Tempat Lahir ..." value="<?= set_value('tempat_lahir') ?>">
                                                        <?= form_error('tempat_lahir', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir (Format bulan/tanggal/tahun)</label>
                                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Ketikkan Tanggal Lahir ..." value="<?= set_value('tgl_lahir') ?>">
                                                        <?= form_error('tgl_lahir', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="jk">Jenis Kelamin</label>
                                                        <select name="jk" id="jk" class="form-control">
                                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                                            <option value="Laki-laki" <?= set_value('jk') == "Laki-laki" ? "selected" : "" ?>>Laki-laki</option>
                                                            <option value="Perempuan" <?= set_value('jk') == "Perempuan" ? "selected" : "" ?>>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="agama">Agama</label>
                                                        <select name="agama" id="agama" class="form-control">
                                                            <option value="" selected disabled>Pilih Agama</option>
                                                            <option value="Islam" <?= set_value('agama') == "Islam" ? "selected" : "" ?>>Islam</option>
                                                            <option value="Kristen" <?= set_value('agama') == "kristen" ? "selected" : "" ?>>Kristen</option>
                                                            <option value="Katholik" <?= set_value('agama') == "Katholik" ? "selected" : "" ?>>Katholik</option>
                                                            <option value="Buddha" <?= set_value('agama') == "Buddha" ? "selected" : "" ?>>Buddha</option>
                                                            <option value="Hindu" <?= set_value('agama') == "Hindu" ? "selected" : "" ?>>Hindu</option>
                                                            <option value="Konghucu" <?= set_value('agama') == "Konghucu" ? "selected" : "" ?>>Konghucu</option>
                                                            <option value="Lainnya" <?= set_value('agama') == "Lainnya" ? "selected" : "" ?>>Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="alamat">Alamat</label>
                                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Ketikkan Alamat ..." value="<?= set_value('alamat') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="nama_jalan">Nama Jalan</label>
                                                        <input type="text" name="nama_jalan" id="nama_jalan" class="form-control" placeholder="Ketikkan Nama Jalan ..." value="<?= set_value('nama_jalan') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label for="rt">RT</label>
                                                        <input type="number" name="rt" id="rt" class="form-control" placeholder="Ketikkan RT ..." value="<?= set_value('rt') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label for="rw">RW</label>
                                                        <input type="number" name="rw" id="rw" class="form-control" placeholder="Ketikkan RW ..." value="<?= set_value('rw') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="provinsi">Provinsi</label>
                                                        <select name="provinsi" id="provinsi" class="form-control">
                                                            <option value="" selected disabled>Pilih Provinsi</option>
                                                            <?php foreach ($provinsi as $p) { ?>
                                                                <option value="<?= $p->id_provinces ?>"><?= $p->name_provinces ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="kabupaten">Kabupaten / Kota</label>
                                                        <select name="kabupaten" id="kabupaten" class="form-control">
                                                            <option value="">Pilih Kabupaten / Kota</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="kecamatan">Kecamatan</label>
                                                        <select name="kecamatan" id="kecamatan" class="form-control">
                                                            <option value="">Pilih Kecamatan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="desa">Kelurahan / Desa</label>
                                                        <select name="desa" id="desa" class="form-control">
                                                            <option value="">Pilih Kelurahan / Desa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="kode_pos">Kode Pos</label>
                                                        <input type="number" name="kode_pos" id="kode_pos" class="form-control" placeholder="Ketikkan Kode Pos ..." value="<?= set_value('kode_pos') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="telp">Nomor Hp</label>
                                                        <input type="number" name="telp" id="telp" class="form-control" placeholder="Ketikkan Nomor HP ..." value="<?= set_value('telp') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Ketikkan Email ..." value="<?= set_value('email') ?>">
                                                        <?= form_error('email', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="transportasi">Transportasi</label>
                                                        <input type="text" name="transportasi" id="transportasi" class="form-control" placeholder="Ketikkan Transportasi ..." value="<?= set_value('transportasi') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="urutan_anak">Anak Ke</label>
                                                        <input type="number" name="urutan_anak" id="urutan_anak" class="form-control" placeholder="Ketikkan Anak Ke ..." value="<?= set_value('urutan_anak') ?>">
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="nama_ayah">Nama Ayah</label>
                                                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Ketikkan Nama Ayah ..." value="<?= set_value('nama_ayah') ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                                                <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                                    <option value="Nelayan">Nelayan</option>
                                                                    <option value="Petani">Petani</option>
                                                                    <option value="Peternak">Peternak</option>
                                                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                                                    <option value="Wiraswasta">Wiraswasta</option>
                                                                    <option value="Wirausaha">Wirausaha</option>
                                                                    <option value="Buruh">Buruh</option>
                                                                    <option value="Tim Ahli / Kosultan">Tim Ahli / Kosultan</option>
                                                                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                                                                    <option value="Pimpinan / Manajerial">Pimpinan / Manajerial</option>
                                                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                                                    <option value="Lainnya">Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penghasilan_ayah">Penghasilan Ayah</label>
                                                                <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control">
                                                                    <option value="" selected disabled>Pilih Penghasilan</option>
                                                                    <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                    <option value="Rp. 500.000 - Rp.999.999">Rp. 500.000 - Rp.999.999</option>
                                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                    <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                                                    <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                    <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah</label>
                                                                <select name="pendidikan_terakhir_ayah" id="pendidikan_terakhir_ayah" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                                    <option value="Paud">Paud</option>
                                                                    <option value="TK / Sederajat">TK / Sederajat</option>
                                                                    <option value="SD / Sederajat">SD / Sederajat</option>
                                                                    <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                                    <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                                    <option value="Paket A">Paket A</option>
                                                                    <option value="Paket B">Paket B</option>
                                                                    <option value="Paket C">Paket C</option>
                                                                    <option value="D1">D1</option>
                                                                    <option value="D2">D2</option>
                                                                    <option value="D3">D3</option>
                                                                    <option value="D4">D4</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                    <option value="Lainnya">Lainnya</option>
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
                                                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Ketikkan Nama Ibu ..." value="<?= set_value('nama_ibu') ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                                                <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                                    <option value="Nelayan">Nelayan</option>
                                                                    <option value="Petani">Petani</option>
                                                                    <option value="Peternak">Peternak</option>
                                                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                                                    <option value="Wiraswasta">Wiraswasta</option>
                                                                    <option value="Wirausaha">Wirausaha</option>
                                                                    <option value="Buruh">Buruh</option>
                                                                    <option value="Tim Ahli / Kosultan">Tim Ahli / Kosultan</option>
                                                                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                                                                    <option value="Pimpinan / Manajerial">Pimpinan / Manajerial</option>
                                                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                                                    <option value="Lainnya">Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penghasilan_ibu">Penghasilan Ibu</label>
                                                                <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control">
                                                                    <option value="" selected disabled>Pilih Penghasilan</option>
                                                                    <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                    <option value="Rp. 500.000 - Rp.999.999">Rp. 500.000 - Rp.999.999</option>
                                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                    <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                                                    <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                    <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                                                                <select name="pendidikan_terakhir_ibu" id="pendidikan_terakhir_ibu" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                                    <option value="Paud">Paud</option>
                                                                    <option value="TK / Sederajat">TK / Sederajat</option>
                                                                    <option value="SD / Sederajat">SD / Sederajat</option>
                                                                    <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                                    <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                                    <option value="Paket A">Paket A</option>
                                                                    <option value="Paket B">Paket B</option>
                                                                    <option value="Paket C">Paket C</option>
                                                                    <option value="D1">D1</option>
                                                                    <option value="D2">D2</option>
                                                                    <option value="D3">D3</option>
                                                                    <option value="D4">D4</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                    <option value="Lainnya">Lainnya</option>
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
                                                                <input type="text" name="nama_wali" id="nama_wali" class="form-control" placeholder="Ketikkan Nama Wali ..." value="<?= set_value('nama_wali') ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                                                <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                                    <option value="Nelayan">Nelayan</option>
                                                                    <option value="Petani">Petani</option>
                                                                    <option value="Peternak">Peternak</option>
                                                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                                                    <option value="Wiraswasta">Wiraswasta</option>
                                                                    <option value="Wirausaha">Wirausaha</option>
                                                                    <option value="Buruh">Buruh</option>
                                                                    <option value="Tim Ahli / Kosultan">Tim Ahli / Kosultan</option>
                                                                    <option value="Tenaga Pengajar">Tenaga Pengajar</option>
                                                                    <option value="Pimpinan / Manajerial">Pimpinan / Manajerial</option>
                                                                    <option value="Sudah Meninggal">Sudah Meninggal</option>
                                                                    <option value="Lainnya">Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penghasilan_wali">Penghasilan Wali</label>
                                                                <select name="penghasilan_wali" id="penghasilan_wali" class="form-control">
                                                                    <option value="" selected disabled>Pilih Penghasilan</option>
                                                                    <option value="Kurang dari Rp. 500.000">Kurang dari Rp. 500.000</option>
                                                                    <option value="Rp. 500.000 - Rp.999.999">Rp. 500.000 - Rp.999.999</option>
                                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999">Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                    <option value="Rp. 2.000.000 - Rp. 4.999.999">Rp. 2.000.000 - Rp. 4.999.999</option>
                                                                    <option value="Rp. 5.000.000 - Rp. 20.000.000">Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                    <option value="Lebih dari Rp. 20.000.000">Lebih dari Rp. 20.000.000</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan_terakhir_wali">Pendidikan Terakhir Wali</label>
                                                                <select name="pendidikan_terakhir_wali" id="pendidikan_terakhir_wali" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                                                    <option value="Paud">Paud</option>
                                                                    <option value="TK / Sederajat">TK / Sederajat</option>
                                                                    <option value="SD / Sederajat">SD / Sederajat</option>
                                                                    <option value="SMP / Sederajat">SMP / Sederajat</option>
                                                                    <option value="SMA / Sederajat">SMA / Sederajat</option>
                                                                    <option value="Paket A">Paket A</option>
                                                                    <option value="Paket B">Paket B</option>
                                                                    <option value="Paket C">Paket C</option>
                                                                    <option value="D1">D1</option>
                                                                    <option value="D2">D2</option>
                                                                    <option value="D3">D3</option>
                                                                    <option value="D4">D4</option>
                                                                    <option value="S1">S1</option>
                                                                    <option value="S2">S2</option>
                                                                    <option value="S3">S3</option>
                                                                    <option value="Lainnya">Lainnya</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <button type="submit" class="btn btn-danger btn-sm"><span class="fa fa-save"></span>&nbsp; Simpan</button>
                                                </div>
                                            </div>
                                        </form>
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
            $('#provinsi').on("change", function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?= base_url('admin/siswa/get_kabupaten'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html1 = '<option value="" selected="" disabled="" >Pilih Kabupaten / Kota </option>';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html1 += '<option value=' + data[i].id_regencies + '>' + data[i].name_regencies + '</option>';
                        }
                        // console.log(html1);
                        $('#kabupaten').html(html1);
                    }
                });
                return false;
            });
        });

        $(document).ready(function() {
            $('#kabupaten').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?= base_url('admin/siswa/get_kecamatan'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html1 = '<option value="" selected="" disabled="">Pilih Kecamatan </option>';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html1 += '<option value=' + data[i].id_districts + '>' + data[i].name_districts + '</option>';
                        }
                        $('#kecamatan').html(html1);
                    }
                });
                return false;
            });
        });

        $(document).ready(function() {
            $('#kecamatan').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?= base_url('admin/siswa/get_desa'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html1 = '<option value="" selected="" disabled="">Pilih Kelurahan / Desa </option>';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html1 += '<option value=' + data[i].id_villages + '>' + data[i].name_villages + '</option>';
                        }
                        $('#desa').html(html1);
                    }
                });
                return false;
            });
        });


        $(document).ready(function() {
            $('#districts1').change(function() {
                var id = $(this).val();
                $.ajax({
                    url: "<?php echo site_url('Hublang/get_villages'); ?>",
                    method: "POST",
                    data: {
                        id: id
                    },
                    async: true,
                    dataType: 'json',
                    success: function(data) {

                        var html = '<option value="">PILIH KELURAHAN </option>';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value=' + data[i].id_villages + '>' + data[i].name_villages + '</option>';
                        }
                        $('#villages1').html(html);
                    }
                });
                return false;
            });
        });
    </script>
</body>

</html>