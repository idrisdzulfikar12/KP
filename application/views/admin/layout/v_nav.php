               <!-- /.navbar-top-links -->

               <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?= base_url('admin')?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Layanan Publik<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('form_pengaduan')?>">Form Pengaduan</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('sop')?>">Standar Operasional Prosedur</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-edit fa-fw"></i> Publikasi<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?= base_url('artikel')?>">Artikel</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('berita')?>">Berita</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('book')?>">E-Book</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('galeri')?>">Galeri</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('glosary')?>"> Glosary</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('dok')?>">Dokumen Perencanaan</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="<?= base_url('kontak')?>"><i class="fa fa-phone fa-fw"></i> Kontak</a>
                            </li>
                            <li class="active">
                                <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?= $title ?></h1>