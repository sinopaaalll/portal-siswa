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
                            <h1>Edit Profile</h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Legacy User Menu</li>
                            </ol>
                        </div> -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-header" style="background-image: url('<?= base_url('') ?>/assets/dist/img/blogpost.jpg')">
                                <div class="profile-picture">
                                    <div class="text-center">
                                        <img src="<?= base_url('assets/uploads/profile/' . $siswa->foto) ?>" alt="..." class="avatar-img rounded-circle" style="width: 200px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-profile text-center">
                                    <h4><?= $siswa->nama ?></h4>
                                    <small><?= $siswa->nis ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?= base_url('siswa/profile/edit/' . $this->session->userdata('nis')) ?>" method="post" enctype="multipart/form-data" autocomplete="off">
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="<?= $siswa->nama ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">NIS</label>
                                        <input type="text" name="nis" class="form-control" value="<?= $siswa->nis ?>" readonly>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Password (Baru)</label>
                                                <input type="password" name="password" class="form-control" placeholder="Ketikkan password ...">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="">Konfirmasi Password</label>
                                                <input type="password" name="pass_conf" class="form-control" placeholder="Ketikkan konfirmasi password ...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="hidden" name="old_foto" class="form-control" value="<?= $siswa->foto ?>">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submiit" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>

                                </form>
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
</body>

</html>