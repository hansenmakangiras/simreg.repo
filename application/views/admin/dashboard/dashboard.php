<?php echo $this->load->view('admin/components/header');?>


<body>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="brand" href="./index.html">PMK LP3I Makassar</a>

                <!-- Navigasi Menu -->
                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="">
                            <a href="<?php echo site_url() ?>">Beranda</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('welcome/message'); ?>">Get started</a>
                        </li>
                        <li class="">
                            <a href="./scaffolding.html">Scaffolding</a>
                        </li>
                        <li class="">
                            <a href="./base-css.html">Base CSS</a>
                        </li>
                        <li class="">
                            <a href="./components.html">Components</a>
                        </li>
                        <li class="">
                            <a href="./javascript.html">JavaScript</a>
                        </li>
                        <li class="">
                            <a href="./customize.html">Customize</a>
                        </li>
                    </ul>
                </div><!-- End Navigasi Menu -->

            </div>
        </div>
    </div>

    <!-- Subhead
    ================================================== -->
    <header class="jumbotron subhead" id="overview">
        <div class="container">
            <h1>PMK LP3I Makassar</h1>
            <p class="lead">Sistem Informasi Pendaftaran Anggota Baru PMK LP3I Makassar Tahun 2014</p>

        </div>
    </header>
    <br>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3" >
                <div class="nav-collapse" >
                    <ul class="nav nav-list">
                        <li class="nav-header">INPUT</li>
                        <li><a href="#">Input Data Pribadi</a></li>
                        <li><a href="#">Input Berkas </a></li>
                        <li><a href="#">Pengambilan Foto</a></li>
                        <li><a href="#">Link</a></li>
                        <li class="nav-header">LIHAT DATA</li>
                        <li><a href="#">Lihat Jumlah Pendaftar</a></li>
                        <li><a href="#">Lihat Pendaftar Lulus Berkas</a></li>
                        <li><a href="#">Lihat Peserta Ujian</a></li>
                        <li><a href="#">Lihat Peserta Lulus Ujian</a></li>
                        <li><a href="#">Proses Pendaftaran Ulang</a></li>
                        <li><a href="#">Informasi Ujian</a></li>
                        <li class="nav-header">INFORMASI</li>
                        <li><a href="#">Batas Waktu Pendaftaran</a></li>
                        <li><a href="#">Informasi Ujian Test Masuk</a></li>
                        <li><a href="#">Informasi Pembayaran</a></li>
                    </ul>
                </div><!--/.well -->
            </div><!--/span-->

            <div class="span9">
                <div class="hero-unit">
                    <h1>Selamat Datang !</h1>
                    <p>Ini merupakan layanan pendaftaran online calon taruna pada BP2IP Barombong Makassar untuk memberikan kemudahan dalam pelayanan pendaftaran calon taruna baru tahun 2014. Silahkan membuat akun terlebih untuk dapat mendaftar, dan mengupload kelengkapan berkas. </p>
                    <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
                </div>
                <div class="row-fluid">
                    <div class="span6">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn" href="#">View details &raquo;</a></p>
                    </div><!--/span-->
                    <div class="span6">
                        <h2>Heading</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <p><a class="btn" href="#">View details &raquo;</a></p>
                    </div><!--/span-->
                </div><!--row-fluid-->
            </div><!-- Container -->
        </div>
    </div><!--/.fluid-container-->


<?php echo $this->load->view('admin/components/footer');?>