<?php echo $this->load->view('frontend/components/header');?>

<body data-spy="scroll" data-target=".bs-docs-sidebar">

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
    <div class="container">
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

 <?php echo $this->load->view('frontend/components/footer');?>