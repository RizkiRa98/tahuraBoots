<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:#864741" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="logo">
                    <img src="<?php echo $this->config->item('base_url'); ?>assets/pict/logo.png" alt="Logo" style="width:70px;height:80px">
                </div>
                <div class="sidebar-brand-text "> </div>
            </a>

            <!-- Divider -->


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
                <a class="nav-link" href="<?= base_url('admin/dashboard_admin'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data Admin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/order') ?>">
                    <i class="fas fa-cart-plus"></i>
                    <span>Order</span>
                </a>

            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url('admin/pegawai') ?>">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Data Pegawai</span>
                </a>

            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MENU BARANG
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Barang</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Sepatu :</h6>
                        <a class="collapse-item" href="<?= base_url('admin/model'); ?>">Model</a>
                        <a class="collapse-item" href="<?= base_url('admin/upper'); ?>">Upper</a>
                        <a class="collapse-item" href="<?= base_url('admin/lining'); ?>">Lining</a>
                        <a class="collapse-item" href="<?= base_url('admin/outsole'); ?>">Outsole</a>
                        <a class="collapse-item" href="<?= base_url('admin/leather'); ?>">Leather Sole</a>
                        <a class="collapse-item" href="<?= base_url('admin/heels'); ?>">Heels</a>
                        <a class="collapse-item" href="<?= base_url('admin/construction'); ?>">Construction</a>
                        <a class="collapse-item" href="<?= base_url('admin/weltcolour'); ?>">Welt Colour</a>
                        <a class="collapse-item" href="<?= base_url('admin/edgecolour'); ?>">Edge Colour</a>
                        <a class="collapse-item" href="<?= base_url('admin/weltstite'); ?>">Welt Stite</a>
                        <a class="collapse-item" href="<?= base_url('admin/toebox'); ?>">Toebox</a>
                        <a class="collapse-item" href="<?= base_url('admin/etc'); ?>">Etc</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Product -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('admin/produk'); ?>">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Data Product</span></a>
            </li>
            <!-- Nav Item - Register -->


            <!-- Nav Item - Register -->
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#7F7C82">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small">Hello Admin!</span>

                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->