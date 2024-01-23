<?php $this->load->view('layouts/siswa/header') ?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?php $this->load->view('layouts/siswa/navbar') ?>

        <?php $this->load->view('layouts/siswa/sidebar') ?>


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
                                <li class="breadcrumb-item active">Edit Biodata Siswa</li>
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
                                    <!-- <a href="<?= base_url('admin/siswa') ?>" class="btn btn-default btn-sm"><span class="fa fa-arrow-left"></span> &nbsp; Kembali</a> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="" method="post" autocomplete="off">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nama">Nama</label>
                                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Ketikkan nama lengkap ..." value="<?= $siswa->nama ?>" readonly>
                                                        <?= form_error('nama', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="nis">NIS</label>
                                                        <input type="text" name="nis" id="nis" class="form-control" placeholder="Ketikkan nis ..." value="<?= $siswa->nis ?>" readonly>
                                                        <?= form_error('nis', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class=" col-6">
                                                    <div class="form-group">
                                                        <label for="kelas">Kelas</label>
                                                        <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Ketikkan kelas ..." value="<?= $siswa->kelas ?>" readonly>
                                                        <?= form_error('kelas', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class=" col-6">
                                                    <div class="form-group">
                                                        <label for="nik">NIK </label>
                                                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Ketikkan nik ..." value="<?= $siswa->nik ?>" readonly>
                                                        <?= form_error('nik', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class=" col-6">
                                                    <div class="form-group">
                                                        <label for="tempat_lahir">Tempat Lahir (*)</label>
                                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Ketikkan Tempat Lahir ..." value="<?= $siswa->tempat_lahir ?>" required>
                                                        <?= form_error('tempat_lahir', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="tgl_lahir">Tanggal Lahir (*) (Format bulan/tanggal/tahun)</label>
                                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Ketikkan Tanggal Lahir ..." value="<?= $siswa->tgl_lahir ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="jk">Jenis Kelamin (*)</label>
                                                        <select name="jk" id="jk" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                                            <option value="Laki-laki" <?= $siswa->jk == "Laki-laki" ? "selected" : "" ?>>Laki-laki</option>
                                                            <option value="Perempuan" <?= $siswa->jk == "Perempuan" ? "selected" : "" ?>>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="agama">Agama (*)</label>
                                                        <select name="agama" id="agama" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Agama</option>
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
                                                        <label for="alamat">Alamat (*)</label>
                                                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Ketikkan Alamat ..." value="<?= $siswa->alamat ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="nama_jalan">Nama Jalan (*)</label>
                                                        <input type="text" name="nama_jalan" id="nama_jalan" class="form-control" placeholder="Ketikkan Nama Jalan ..." value="<?= $siswa->nama_jalan ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label for="rt">RT (*)</label>
                                                        <input type="number" name="rt" id="rt" class="form-control" placeholder="Ketikkan RT ..." value="<?= $siswa->rt ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label for="rw">RW (*)</label>
                                                        <input type="number" name="rw" id="rw" class="form-control" placeholder="Ketikkan RW ..." value="<?= $siswa->rw ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="provinsi">Provinsi (*)</label>
                                                        <select name="provinsi" id="provinsi" class="form-control" required>
                                                            <option value="" selected disabled>Pilih Provinsi</option>
                                                            <?php foreach ($provinsi as $p) { ?>
                                                                <option value="<?= $p->id_provinces ?>" <?= $siswa->provinsi == $p->id_provinces ? "selected" : "" ?>><?= $p->name_provinces ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="kabupaten">Kabupaten / Kota (*)</label>
                                                        <select name="kabupaten" id="kabupaten" class="form-control" required>
                                                            <option value="">Pilih Kabupaten / Kota</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="kecamatan">Kecamatan (*)</label>
                                                        <select name="kecamatan" id="kecamatan" class="form-control" required>
                                                            <option value="">Pilih Kecamatan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="desa">Kelurahan / Desa (*)</label>
                                                        <select name="desa" id="desa" class="form-control" required>
                                                            <option value="">Pilih Kelurahan / Desa</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="kode_pos">Kode Pos</label>
                                                        <input type="number" name="kode_pos" id="kode_pos" class="form-control" placeholder="Ketikkan Kode Pos ..." value="<?= $siswa->kode_pos ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="telp">Nomor Hp (*)</label>
                                                        <input type="number" name="telp" id="telp" class="form-control" placeholder="Ketikkan Nomor HP ..." value="<?= $siswa->telp ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email (*)</label>
                                                        <input type="email" name="email" id="email" class="form-control" placeholder="Ketikkan Email ..." value="<?= $siswa->email ?>" required>
                                                        <?= form_error('email', '<small class="text-red ml-2">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="transportasi">Transportasi</label>
                                                        <input type="text" name="transportasi" id="transportasi" class="form-control" placeholder="Ketikkan Transportasi ..." value="<?= $siswa->transportasi ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="urutan_anak">Anak Ke (*)</label>
                                                        <input type="number" name="urutan_anak" id="urutan_anak" class="form-control" placeholder="Ketikkan Anak Ke ..." value="<?= $siswa->urutan_anak ?>" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="nama_ayah">Nama Ayah (*)</label>
                                                                <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Ketikkan Nama Ayah ..." value="<?= $siswa->nama_ayah ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan_ayah">Pekerjaan Ayah (*)</label>
                                                                <select name="pekerjaan_ayah" id="pekerjaan_ayah" class="form-control" required>
                                                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                                                    <option value="Tidak Bekerja" <?= $siswa->pekerjaan_ayah == "Tidak Bekerja" ? "selected " : "" ?>>Tidak Bekerja</option>
                                                                    <option value="Nelayan" <?= $siswa->pekerjaan_ayah == "Nelayan" ? "selected " : "" ?>>Nelayan</option>
                                                                    <option value="Petani" <?= $siswa->pekerjaan_ayah == "Petani" ? "selected " : "" ?>>Petani</option>
                                                                    <option value="Peternak" <?= $siswa->pekerjaan_ayah == "Peternak" ? "selected " : "" ?>>Peternak</option>
                                                                    <option value="PNS/TNI/POLRI" <?= $siswa->pekerjaan_ayah == "PNS/TNI/POLRI" ? "selected " : "" ?>>PNS/TNI/POLRI</option>
                                                                    <option value="Karyawan Swasta" <?= $siswa->pekerjaan_ayah == "Karyawan Swasta" ? "selected " : "" ?>>Karyawan Swasta</option>
                                                                    <option value="Pedagang Kecil" <?= $siswa->pekerjaan_ayah == "Pedagang Kecil" ? "selected " : "" ?>>Pedagang Kecil</option>
                                                                    <option value="Pedagang Besar" <?= $siswa->pekerjaan_ayah == "Pedagang Besar" ? "selected " : "" ?>>Pedagang Besar</option>
                                                                    <option value="Wiraswasta" <?= $siswa->pekerjaan_ayah == "Wiraswasta" ? "selected " : "" ?>>Wiraswasta</option>
                                                                    <option value="Wirausaha" <?= $siswa->pekerjaan_ayah == "Wirausaha" ? "selected " : "" ?>>Wirausaha</option>
                                                                    <option value="Buruh" <?= $siswa->pekerjaan_ayah == "Buruh" ? "selected " : "" ?>>Buruh</option>
                                                                    <option value="Tim Ahli / Kosultan" <?= $siswa->pekerjaan_ayah == "Tim Ahli / Kosultan" ? "selected " : "" ?>>Tim Ahli / Kosultan</option>
                                                                    <option value="Tenaga Pengajar" <?= $siswa->pekerjaan_ayah == "Tenaga Pengajar" ? "selected " : "" ?>>Tenaga Pengajar</option>
                                                                    <option value="Pimpinan / Manajerial" <?= $siswa->pekerjaan_ayah == "Pimpinan / Manajerial" ? "selected " : "" ?>>Pimpinan / Manajerial</option>
                                                                    <option value="Sudah Meninggal" <?= $siswa->pekerjaan_ayah == "Sudah Meninggal" ? "selected " : "" ?>>Sudah Meninggal</option>
                                                                    <option value="Lainnya" <?= $siswa->pekerjaan_ayah == "Lainnya" ? "selected " : "" ?>>Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penghasilan_ayah">Penghasilan Ayah (*)</label>
                                                                <select name="penghasilan_ayah" id="penghasilan_ayah" class="form-control" required>
                                                                    <option value="" selected disabled>Pilih Penghasilan</option>
                                                                    <option value="Kurang dari Rp. 500.000" <?= $siswa->penghasilan_ayah == "Kurang dari Rp. 500.000" ? "selected " : "" ?>>Kurang dari Rp. 500.000</option>
                                                                    <option value="Rp. 500.000 - Rp.999.999" <?= $siswa->penghasilan_ayah == "Rp. 500.000 - Rp.999.999" ? "selected " : "" ?>>Rp. 500.000 - Rp.999.999</option>
                                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999" <?= $siswa->penghasilan_ayah == "Rp. 1.000.000 - Rp. 1.999.999" ? "selected " : "" ?>>Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                    <option value="Rp. 2.000.000 - Rp. 4.999.999" <?= $siswa->penghasilan_ayah == "Rp. 2.000.000 - Rp. 4.999.999" ? "selected " : "" ?>>Rp. 2.000.000 - Rp. 4.999.999</option>
                                                                    <option value="Rp. 5.000.000 - Rp. 20.000.000" <?= $siswa->penghasilan_ayah == "Rp. 5.000.000 - Rp. 20.000.000" ? "selected " : "" ?>>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                    <option value="Lebih dari Rp. 20.000.000" <?= $siswa->penghasilan_ayah == "Lebih dari Rp. 20.000.000" ? "selected " : "" ?>>Lebih dari Rp. 20.000.000</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan_terakhir_ayah">Pendidikan Terakhir Ayah (*)</label>
                                                                <select name="pendidikan_terakhir_ayah" id="pendidikan_terakhir_ayah" class="form-control" required>
                                                                    <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                                                    <option value="Tidak Sekolah" <?= $siswa->pendidikan_terakhir_ayah == "Tidak Sekolah" ? "selected " : "" ?>>Tidak Sekolah</option>
                                                                    <option value="Paud" <?= $siswa->pendidikan_terakhir_ayah == "Paud" ? "selected " : "" ?>>Paud</option>
                                                                    <option value="TK / Sederajat" <?= $siswa->pendidikan_terakhir_ayah == "TK / Sederajat" ? "selected " : "" ?>>TK / Sederajat</option>
                                                                    <option value="SD / Sederajat" <?= $siswa->pendidikan_terakhir_ayah == "SD / Sederajat" ? "selected " : "" ?>>SD / Sederajat</option>
                                                                    <option value="SMP / Sederajat" <?= $siswa->pendidikan_terakhir_ayah == "SMP / Sederajat" ? "selected " : "" ?>>SMP / Sederajat</option>
                                                                    <option value="SMA / Sederajat" <?= $siswa->pendidikan_terakhir_ayah == "SMA / Sederajat" ? "selected " : "" ?>>SMA / Sederajat</option>
                                                                    <option value="Paket A" <?= $siswa->pendidikan_terakhir_ayah == "Paket A" ? "selected " : "" ?>>Paket A</option>
                                                                    <option value="Paket B" <?= $siswa->pendidikan_terakhir_ayah == "Paket B" ? "selected " : "" ?>>Paket B</option>
                                                                    <option value="Paket C" <?= $siswa->pendidikan_terakhir_ayah == "Paket C" ? "selected " : "" ?>>Paket C</option>
                                                                    <option value="D1" <?= $siswa->pendidikan_terakhir_ayah == "D1" ? "selected " : "" ?>>D1</option>
                                                                    <option value="D2" <?= $siswa->pendidikan_terakhir_ayah == "D2" ? "selected " : "" ?>>D2</option>
                                                                    <option value="D3" <?= $siswa->pendidikan_terakhir_ayah == "D3" ? "selected " : "" ?>>D3</option>
                                                                    <option value="D4" <?= $siswa->pendidikan_terakhir_ayah == "D4" ? "selected " : "" ?>>D4</option>
                                                                    <option value="S1" <?= $siswa->pendidikan_terakhir_ayah == "S1" ? "selected " : "" ?>>S1</option>
                                                                    <option value="S2" <?= $siswa->pendidikan_terakhir_ayah == "S2" ? "selected " : "" ?>>S2</option>
                                                                    <option value="S3" <?= $siswa->pendidikan_terakhir_ayah == "S3" ? "selected " : "" ?>>S3</option>
                                                                    <option value="Lainnya" <?= $siswa->pendidikan_terakhir_ayah == "Lainnya" ? "selected " : "" ?>>Lainnya</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="nama_ibu">Nama Ibu (*)</label>
                                                                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Ketikkan Nama Ibu ..." value="<?= $siswa->nama_ibu ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan_ibu">Pekerjaan Ibu (*)</label>
                                                                <select name="pekerjaan_ibu" id="pekerjaan_ibu" class="form-control" required>
                                                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                                                    <option value="Tidak Bekerja" <?= $siswa->pekerjaan_ibu == "Tidak Bekerja" ? "selected " : "" ?>>Tidak Bekerja</option>
                                                                    <option value="Nelayan" <?= $siswa->pekerjaan_ibu == "Nelayan" ? "selected " : "" ?>>Nelayan</option>
                                                                    <option value="Petani" <?= $siswa->pekerjaan_ibu == "Petani" ? "selected " : "" ?>>Petani</option>
                                                                    <option value="Peternak" <?= $siswa->pekerjaan_ibu == "Peternak" ? "selected " : "" ?>>Peternak</option>
                                                                    <option value="PNS/TNI/POLRI" <?= $siswa->pekerjaan_ibu == "PNS/TNI/POLRI" ? "selected " : "" ?>>PNS/TNI/POLRI</option>
                                                                    <option value="Karyawan Swasta" <?= $siswa->pekerjaan_ibu == "Karyawan Swasta" ? "selected " : "" ?>>Karyawan Swasta</option>
                                                                    <option value="Pedagang Kecil" <?= $siswa->pekerjaan_ibu == "Pedagang Kecil" ? "selected " : "" ?>>Pedagang Kecil</option>
                                                                    <option value="Pedagang Besar" <?= $siswa->pekerjaan_ibu == "Pedagang Besar" ? "selected " : "" ?>>Pedagang Besar</option>
                                                                    <option value="Wiraswasta" <?= $siswa->pekerjaan_ibu == "Wiraswasta" ? "selected " : "" ?>>Wiraswasta</option>
                                                                    <option value="Wirausaha" <?= $siswa->pekerjaan_ibu == "Wirausaha" ? "selected " : "" ?>>Wirausaha</option>
                                                                    <option value="Buruh" <?= $siswa->pekerjaan_ibu == "Buruh" ? "selected " : "" ?>>Buruh</option>
                                                                    <option value="Tim Ahli / Kosultan" <?= $siswa->pekerjaan_ibu == "Tim Ahli / Kosultan" ? "selected " : "" ?>>Tim Ahli / Kosultan</option>
                                                                    <option value="Tenaga Pengajar" <?= $siswa->pekerjaan_ibu == "Tenaga Pengajar" ? "selected " : "" ?>>Tenaga Pengajar</option>
                                                                    <option value="Pimpinan / Manajerial" <?= $siswa->pekerjaan_ibu == "Pimpinan / Manajerial" ? "selected " : "" ?>>Pimpinan / Manajerial</option>
                                                                    <option value="Sudah Meninggal" <?= $siswa->pekerjaan_ibu == "Sudah Meninggal" ? "selected " : "" ?>>Sudah Meninggal</option>
                                                                    <option value="Lainnya" <?= $siswa->pekerjaan_ibu == "Lainnya" ? "selected " : "" ?>>Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penghasilan_ibu">Penghasilan Ibu (*)</label>
                                                                <select name="penghasilan_ibu" id="penghasilan_ibu" class="form-control" required>
                                                                    <option value="" selected disabled>Pilih Penghasilan</option>
                                                                    <option value="Kurang dari Rp. 500.000" <?= $siswa->penghasilan_ibu == "Kurang dari Rp. 500.000" ? "selected " : "" ?>>Kurang dari Rp. 500.000</option>
                                                                    <option value="Rp. 500.000 - Rp.999.999" <?= $siswa->penghasilan_ibu == "Rp. 500.000 - Rp.999.999" ? "selected " : "" ?>>Rp. 500.000 - Rp.999.999</option>
                                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999" <?= $siswa->penghasilan_ibu == "Rp. 1.000.000 - Rp. 1.999.999" ? "selected " : "" ?>>Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                    <option value="Rp. 2.000.000 - Rp. 4.999.999" <?= $siswa->penghasilan_ibu == "Rp. 2.000.000 - Rp. 4.999.999" ? "selected " : "" ?>>Rp. 2.000.000 - Rp. 4.999.999</option>
                                                                    <option value="Rp. 5.000.000 - Rp. 20.000.000" <?= $siswa->penghasilan_ibu == "Rp. 5.000.000 - Rp. 20.000.000" ? "selected " : "" ?>>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                    <option value="Lebih dari Rp. 20.000.000" <?= $siswa->penghasilan_ibu == "Lebih dari Rp. 20.000.000" ? "selected " : "" ?>>Lebih dari Rp. 20.000.000</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu (*)</label>
                                                                <select name="pendidikan_terakhir_ibu" id="pendidikan_terakhir_ibu" class="form-control" required>
                                                                    <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                                                    <option value="Tidak Sekolah" <?= $siswa->pendidikan_terakhir_ibu == "Tidak Sekolah" ? "selected " : "" ?>>Tidak Sekolah</option>
                                                                    <option value="Paud" <?= $siswa->pendidikan_terakhir_ibu == "Paud" ? "selected " : "" ?>>Paud</option>
                                                                    <option value="TK / Sederajat" <?= $siswa->pendidikan_terakhir_ibu == "TK / Sederajat" ? "selected " : "" ?>>TK / Sederajat</option>
                                                                    <option value="SD / Sederajat" <?= $siswa->pendidikan_terakhir_ibu == "SD / Sederajat" ? "selected " : "" ?>>SD / Sederajat</option>
                                                                    <option value="SMP / Sederajat" <?= $siswa->pendidikan_terakhir_ibu == "SMP / Sederajat" ? "selected " : "" ?>>SMP / Sederajat</option>
                                                                    <option value="SMA / Sederajat" <?= $siswa->pendidikan_terakhir_ibu == "SMA / Sederajat" ? "selected " : "" ?>>SMA / Sederajat</option>
                                                                    <option value="Paket A" <?= $siswa->pendidikan_terakhir_ibu == "Paket A" ? "selected " : "" ?>>Paket A</option>
                                                                    <option value="Paket B" <?= $siswa->pendidikan_terakhir_ibu == "Paket B" ? "selected " : "" ?>>Paket B</option>
                                                                    <option value="Paket C" <?= $siswa->pendidikan_terakhir_ibu == "Paket C" ? "selected " : "" ?>>Paket C</option>
                                                                    <option value="D1" <?= $siswa->pendidikan_terakhir_ibu == "D1" ? "selected " : "" ?>>D1</option>
                                                                    <option value="D2" <?= $siswa->pendidikan_terakhir_ibu == "D2" ? "selected " : "" ?>>D2</option>
                                                                    <option value="D3" <?= $siswa->pendidikan_terakhir_ibu == "D3" ? "selected " : "" ?>>D3</option>
                                                                    <option value="D4" <?= $siswa->pendidikan_terakhir_ibu == "D4" ? "selected " : "" ?>>D4</option>
                                                                    <option value="S1" <?= $siswa->pendidikan_terakhir_ibu == "S1" ? "selected " : "" ?>>S1</option>
                                                                    <option value="S2" <?= $siswa->pendidikan_terakhir_ibu == "S2" ? "selected " : "" ?>>S2</option>
                                                                    <option value="S3" <?= $siswa->pendidikan_terakhir_ibu == "S3" ? "selected " : "" ?>>S3</option>
                                                                    <option value="Lainnya" <?= $siswa->pendidikan_terakhir_ibu == "Lainnya" ? "selected " : "" ?>>Lainnya</option>
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
                                                                <input type="text" name="nama_wali" id="nama_wali" class="form-control" placeholder="Ketikkan Nama Wali ..." value="<?= $siswa->nama_wali ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan_wali">Pekerjaan Wali</label>
                                                                <select name="pekerjaan_wali" id="pekerjaan_wali" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pekerjaan</option>
                                                                    <option value="Tidak Bekerja" <?= $siswa->pekerjaan_wali == "Tidak Bekerja" ? "selected " : "" ?>>Tidak Bekerja</option>
                                                                    <option value="Nelayan" <?= $siswa->pekerjaan_wali == "Nelayan" ? "selected " : "" ?>>Nelayan</option>
                                                                    <option value="Petani" <?= $siswa->pekerjaan_wali == "Petani" ? "selected " : "" ?>>Petani</option>
                                                                    <option value="Peternak" <?= $siswa->pekerjaan_wali == "Peternak" ? "selected " : "" ?>>Peternak</option>
                                                                    <option value="PNS/TNI/POLRI" <?= $siswa->pekerjaan_wali == "PNS/TNI/POLRI" ? "selected " : "" ?>>PNS/TNI/POLRI</option>
                                                                    <option value="Karyawan Swasta" <?= $siswa->pekerjaan_wali == "Karyawan Swasta" ? "selected " : "" ?>>Karyawan Swasta</option>
                                                                    <option value="Pedagang Kecil" <?= $siswa->pekerjaan_wali == "Pedagang Kecil" ? "selected " : "" ?>>Pedagang Kecil</option>
                                                                    <option value="Pedagang Besar" <?= $siswa->pekerjaan_wali == "Pedagang Besar" ? "selected " : "" ?>>Pedagang Besar</option>
                                                                    <option value="Wiraswasta" <?= $siswa->pekerjaan_wali == "Wiraswasta" ? "selected " : "" ?>>Wiraswasta</option>
                                                                    <option value="Wirausaha" <?= $siswa->pekerjaan_wali == "Wirausaha" ? "selected " : "" ?>>Wirausaha</option>
                                                                    <option value="Buruh" <?= $siswa->pekerjaan_wali == "Buruh" ? "selected " : "" ?>>Buruh</option>
                                                                    <option value="Tim Ahli / Kosultan" <?= $siswa->pekerjaan_wali == "Tim Ahli / Kosultan" ? "selected " : "" ?>>Tim Ahli / Kosultan</option>
                                                                    <option value="Tenaga Pengajar" <?= $siswa->pekerjaan_wali == "Tenaga Pengajar" ? "selected " : "" ?>>Tenaga Pengajar</option>
                                                                    <option value="Pimpinan / Manajerial" <?= $siswa->pekerjaan_wali == "Pimpinan / Manajerial" ? "selected " : "" ?>>Pimpinan / Manajerial</option>
                                                                    <option value="Sudah Meninggal" <?= $siswa->pekerjaan_wali == "Sudah Meninggal" ? "selected " : "" ?>>Sudah Meninggal</option>
                                                                    <option value="Lainnya" <?= $siswa->pekerjaan_wali == "Lainnya" ? "selected " : "" ?>>Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="penghasilan_wali">Penghasilan Wali</label>
                                                                <select name="penghasilan_wali" id="penghasilan_wali" class="form-control">
                                                                    <option value="" selected disabled>Pilih Penghasilan</option>
                                                                    <option value="Kurang dari Rp. 500.000" <?= $siswa->penghasilan_wali == "Kurang dari Rp. 500.000" ? "selected " : "" ?>>Kurang dari Rp. 500.000</option>
                                                                    <option value="Rp. 500.000 - Rp.999.999" <?= $siswa->penghasilan_wali == "Rp. 500.000 - Rp.999.999" ? "selected " : "" ?>>Rp. 500.000 - Rp.999.999</option>
                                                                    <option value="Rp. 1.000.000 - Rp. 1.999.999" <?= $siswa->penghasilan_wali == "Rp. 1.000.000 - Rp. 1.999.999" ? "selected " : "" ?>>Rp. 1.000.000 - Rp. 1.999.999</option>
                                                                    <option value="Rp. 2.000.000 - Rp. 4.999.999" <?= $siswa->penghasilan_wali == "Rp. 2.000.000 - Rp. 4.999.999" ? "selected " : "" ?>>Rp. 2.000.000 - Rp. 4.999.999</option>
                                                                    <option value="Rp. 5.000.000 - Rp. 20.000.000" <?= $siswa->penghasilan_wali == "Rp. 5.000.000 - Rp. 20.000.000" ? "selected " : "" ?>>Rp. 5.000.000 - Rp. 20.000.000</option>
                                                                    <option value="Lebih dari Rp. 20.000.000" <?= $siswa->penghasilan_wali == "Lebih dari Rp. 20.000.000" ? "selected " : "" ?>>Lebih dari Rp. 20.000.000</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan_terakhir_wali">Pendidikan Terakhir Wali</label>
                                                                <select name="pendidikan_terakhir_wali" id="pendidikan_terakhir_wali" class="form-control">
                                                                    <option value="" selected disabled>Pilih Pendidikan Terakhir</option>
                                                                    <option value="Tidak Sekolah" <?= $siswa->pendidikan_terakhir_wali == "Tidak Sekolah" ? "selected " : "" ?>>Tidak Sekolah</option>
                                                                    <option value="Paud" <?= $siswa->pendidikan_terakhir_wali == "Paud" ? "selected " : "" ?>>Paud</option>
                                                                    <option value="TK / Sederajat" <?= $siswa->pendidikan_terakhir_wali == "TK / Sederajat" ? "selected " : "" ?>>TK / Sederajat</option>
                                                                    <option value="SD / Sederajat" <?= $siswa->pendidikan_terakhir_wali == "SD / Sederajat" ? "selected " : "" ?>>SD / Sederajat</option>
                                                                    <option value="SMP / Sederajat" <?= $siswa->pendidikan_terakhir_wali == "SMP / Sederajat" ? "selected " : "" ?>>SMP / Sederajat</option>
                                                                    <option value="SMA / Sederajat" <?= $siswa->pendidikan_terakhir_wali == "SMA / Sederajat" ? "selected " : "" ?>>SMA / Sederajat</option>
                                                                    <option value="Paket A" <?= $siswa->pendidikan_terakhir_wali == "Paket A" ? "selected " : "" ?>>Paket A</option>
                                                                    <option value="Paket B" <?= $siswa->pendidikan_terakhir_wali == "Paket B" ? "selected " : "" ?>>Paket B</option>
                                                                    <option value="Paket C" <?= $siswa->pendidikan_terakhir_wali == "Paket C" ? "selected " : "" ?>>Paket C</option>
                                                                    <option value="D1" <?= $siswa->pendidikan_terakhir_wali == "D1" ? "selected " : "" ?>>D1</option>
                                                                    <option value="D2" <?= $siswa->pendidikan_terakhir_wali == "D2" ? "selected " : "" ?>>D2</option>
                                                                    <option value="D3" <?= $siswa->pendidikan_terakhir_wali == "D3" ? "selected " : "" ?>>D3</option>
                                                                    <option value="D4" <?= $siswa->pendidikan_terakhir_wali == "D4" ? "selected " : "" ?>>D4</option>
                                                                    <option value="S1" <?= $siswa->pendidikan_terakhir_wali == "S1" ? "selected " : "" ?>>S1</option>
                                                                    <option value="S2" <?= $siswa->pendidikan_terakhir_wali == "S2" ? "selected " : "" ?>>S2</option>
                                                                    <option value="S3" <?= $siswa->pendidikan_terakhir_wali == "S3" ? "selected " : "" ?>>S3</option>
                                                                    <option value="Lainnya" <?= $siswa->pendidikan_terakhir_wali == "Lainnya" ? "selected " : "" ?>>Lainnya</option>
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


        <?php $this->load->view('layouts/siswa/footer') ?>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('layouts/siswa/script') ?>

    <script type="text/javascript">
        // value untuk mendapat id_villages jika
        $(document).ready(function() {
            // Mendapatkan nilai dari elemen #districts saat halaman dimuat
            var id = <?php echo $siswa->provinsi; ?>;

            // Melakukan pengiriman AJAX saat halaman dimuat
            $.ajax({
                url: "<?php echo site_url('admin/siswa/get_kabupaten'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_regencies + '>' + data[i].name_regencies + '</option>';
                    }
                    $('#kabupaten').html(html);

                    // Menerapkan nilai terpilih pada elemen #villages berdasarkan id_districts yang dipilih
                    var selected = <?php echo $siswa->kabupaten; ?>;
                    $('#kabupaten').val(selected);
                }
            });
        });

        $(document).ready(function() {
            // Mendapatkan nilai dari elemen #districts saat halaman dimuat
            var id = <?php echo $siswa->kabupaten; ?>;

            // Melakukan pengiriman AJAX saat halaman dimuat
            $.ajax({
                url: "<?php echo site_url('admin/siswa/get_kecamatan'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_districts + '>' + data[i].name_districts + '</option>';
                    }
                    $('#kecamatan').html(html);

                    // Menerapkan nilai terpilih pada elemen #villages berdasarkan id_districts yang dipilih
                    var selected = <?php echo $siswa->kecamatan; ?>;
                    $('#kecamatan').val(selected);
                }
            });
        });

        $(document).ready(function() {
            // Mendapatkan nilai dari elemen #districts saat halaman dimuat
            var id = <?php echo $siswa->kecamatan; ?>;

            // Melakukan pengiriman AJAX saat halaman dimuat
            $.ajax({
                url: "<?php echo site_url('admin/siswa/get_desa'); ?>",
                method: "POST",
                data: {
                    id: id
                },
                async: true,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value=' + data[i].id_villages + '>' + data[i].name_villages + '</option>';
                    }
                    $('#desa').html(html);

                    // Menerapkan nilai terpilih pada elemen #villages berdasarkan id_districts yang dipilih
                    var selected = <?php echo $siswa->desa; ?>;
                    $('#desa').val(selected);
                }
            });
        });
    </script>

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
    </script>
</body>

</html>