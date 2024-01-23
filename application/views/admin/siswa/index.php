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
                                <li class="breadcrumb-item active">Siswa</li>
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
                                <h3 class="card-title">Data Siswa</h3>

                                <div class="card-tools">
                                    <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button> -->
                                    <a href="<?= base_url('admin/siswa/tambah') ?>" class="btn btn-default btn-sm"><span class="fa fa-plus-circle"></span> &nbsp; Tambah Data</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="dataTables" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td width="7%">No</td>
                                            <td>NIS</td>
                                            <td>Nama</td>
                                            <td>Kelas</td>
                                            <td width="20%">Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($siswa as $s) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $s->nis ?></td>
                                                <td><?= $s->nama ?></td>
                                                <td><?= $s->kelas ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/siswa/lihat/' . $s->id) ?>" class="btn btn-default btn-sm"><span class="fa fa-eye"></span> &nbsp; Lihat</a>
                                                    <a href="<?= base_url('admin/siswa/edit/' . $s->id) ?>" class="btn btn-default btn-sm"><span class="fa fa-edit"></span> &nbsp; Edit</a>
                                                    <a href="<?= base_url('admin/siswa/hapus/' . $s->id) ?>" class="btn btn-default btn-sm btn-hapus"><span class="fa fa-trash"></span> &nbsp; Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
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
</body>

</html>