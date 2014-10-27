<?php echo $this->load->view('admin/components/header'); ?>

<body style="overflow: hidden;">
    <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
        <img src="<?php echo base_url('assets/theme/assets/images/loader-dark.gif'); ?>" alt="" />
    </div>

    <div id="page-wrapper">

        <div id="page-header" class="clearfix">
            <div id="header-logo">
                <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                    <i class="glyph-icon icon-caret-left"></i>
                </a>
                <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                    <i class="glyph-icon icon-caret-right"></i>
                </a>
                <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                    <i class="glyph-icon icon-align-justify"></i>
                </a>
                SIM PMK LP3I MKS <i class="opacity-80">v1.0</i>
            </div>  
            
            <!-- Profile User Dropdown -->
            <div class="user-profile dropdown">
                <a href="#" title="" class="user-ico clearfix" data-toggle="dropdown">
                    <img width="36" src="<?php echo base_url('assets/theme/assets/images/gravatar.jpg'); ?>" alt="" />
                    <span><?php echo 'Hansen Makangiras';?></span>
                    <i class="glyph-icon icon-chevron-down"></i>
                </a>
                <ul class="dropdown-menu float-right">
                    <li>
                        <a href="<?php echo site_url('admin/user/profil')?>" title="">
                            <i class="glyph-icon icon-user mrg5R"></i>
                            Detail Akun
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/user/ubah_profil')?>" title="">
                            <i class="glyph-icon icon-cog mrg5R"></i>
                            Ubah Profil
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin/user/notifikasi')?>" title="">
                            <i class="glyph-icon icon-flag mrg5R"></i>
                            Pemberitahuan
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('logout')?>">
                            <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                            <span class="font-bold">Keluar</span>
                        </a>
                    </li>
                                       
                </ul>
            </div>
            
            <!-- Taruh Top-Icon-Bar disini -->
            <?php echo $this->load->view('admin/components/top-link') ;?>
            
        </div><!-- #page-header -->
        
        <!-- Load partial view sidebar -->
        <?php echo $this->load->view('admin/components/sidebar') ;?>
        
        <div id="page-content-wrapper">
            <div id="page-title">
                <h3>
                    Admin Dashboard
                </h3>
                <div id="breadcrumb-right">
                    <div id="sidebar-search">
                        <input type="text" placeholder="Search..." class="autocomplete-input input tooltip-button" data-placement="bottom" title="Type &apos;jav&apos; to see the available tags..." id="" name="" />
                        <i class="glyph-icon icon-search"></i>
                    </div>
                </div>                
            </div><!-- #page-title -->            
            <!-- #page-content -->
            <div id="page-content">
                <?php $this->load->view($subview); ?>
            </div><!-- #page-content -->
            
        </div><!-- #page-main -->
    </div><!-- #page-wrapper -->

    <?php echo $this->load->view('admin/components/footer');