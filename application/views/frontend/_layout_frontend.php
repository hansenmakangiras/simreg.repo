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
            <a class="brand" href="<?php echo base_url() ;?>">PMK LP3I Makassar</a>
            <!-- Navigasi Menu -->
            <?php echo $this->load->view('frontend/components/nav') ;?>

       </div>
    </div>
</div>

<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1><?=$site_title;?></h1>
	<p class="lead"><?=$deskripsi;?></p>        
    </div>
</header>
<br>
    <?php echo $this->load->view($content) ;?>
    

 <?php echo $this->load->view('frontend/components/footer');