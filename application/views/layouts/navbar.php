<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?= base_url('assets/uploads/profile/' . $this->session->userdata('foto')) ?>" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?= $this->session->userdata('nama') ?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-secondary">
                    <img src="<?= base_url('assets/uploads/profile/' . $this->session->userdata('foto')) ?>" class="img-circle elevation-2" alt="User Image">
                    <p>
                        <?= $this->session->userdata('nama') ?>
                        <small><?= $this->session->userdata('email') ?></small>
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="<?= base_url('admin/profile/edit/' . $this->session->userdata('id')) ?>" class="btn btn-default btn-flat">Profile</a>
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->