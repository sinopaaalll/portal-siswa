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
                            <h1>Dashboard</h1>
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
                    <div class="col-md-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Siswa</span>
                                <span class="info-box-number"><?= $siswa->total ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="far fa-user"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Admin</span>
                                <span class="info-box-number"><?= $siswa->total ?></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
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