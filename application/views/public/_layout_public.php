<?php echo $this->load->view('public/partial/header'); ?>

<body>

    <div id="templatemo_wrapper">

        <?php echo $this->load->view('public/partial/nav') ;?>

        <?php echo $this->load->view('public/partial/informasi') ;?>

        <div id="templatemo_main">
            
            <?php echo $this->load->view('public/partial/main_info') ;?>
            
            <?php echo $this->load->view('public/partial/divisi') ;?>            

        </div> <!-- end of main -->

    </div> <!-- end of wrapper -->

    <?php echo $this->load->view('public/partial/footer'); ?>