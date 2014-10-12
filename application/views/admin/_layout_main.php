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
                SIMAKAD <i class="opacity-80">v1.0</i>
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
                        <a href="<?php echo site_url('admin/user/logout')?>">
                            <i class="glyph-icon icon-signout font-size-13 mrg5R"></i>
                            <span class="font-bold">Keluar</span>
                        </a>
                    </li>
                                       
                </ul>
            </div>
            <div class="dropdown dash-menu">
                <a href="" data-toggle="dropdown" data-placement="left" class="medium btn primary-bg float-right popover-button-header hidden-mobile tooltip-button" title="Example menu">
                    <i class="glyph-icon icon-th"></i>
                </a>
                <div class="dropdown-menu float-right">
                    <div class="small-box">
                        
                        <div class="bg-gray text-transform-upr font-size-12 font-bold font-gray-dark pad10A">Link Menu</div>
                        <div class="pad10A dashboard-buttons clearfix">
                            <a href="<?php echo base_url();?>" class="btn vertical-button remove-border bg-blue" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                </span>
                                <span class="button-content">Dashboard</span>
                            </a>
                            <a href="javascript:;" class="btn vertical-button remove-border bg-red" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                </span>
                                <span class="button-content">Berita</span>
                            </a>
                            <a href="javascript:;" class="btn vertical-button remove-border bg-purple" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-reorder opacity-80 font-size-20"></i>
                                </span>
                                <span class="button-content">Informasi</span>
                            </a>
                            <a href="javascript:;" class="btn vertical-button remove-border bg-azure" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-bar-chart opacity-80 font-size-20"></i>
                                </span>
                                <span class="button-content">Pesan</span>
                            </a>
                            <a href="javascript:;" class="btn vertical-button remove-border bg-yellow" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                </span>
                                <span class="button-content">Setting</span>
                            </a>
                            <a href="javascript:;" class="btn vertical-button remove-border bg-orange" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                </span>
                                <span class="button-content">Upload</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Taruh Top-Icon-Bar disini -->

        </div><!-- #page-header -->

        <div id="page-sidebar" class="scrollable-content">
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="<?php base_url('admin/backend');?>" title="Dashboard">
                            <i class="glyph-icon icon-dashboard"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" title="Components">
                            <i class="glyph-icon icon-code"></i>
                            Akademik
                        </a>
                        <ul>
                            <li>
                                <a href="<?php site_url('admin/berita')?>" title="Berita">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Instruktur
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Informasi">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Taruna
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pendaftaran">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Pendaftaran
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Alumni">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Mata Pelajaran
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pengurus">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Penetapan Kelas
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pesan">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Jadwal Mengajar
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/user');?>" title="Managemen User">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Monitoring Ujian
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" title="Components">
                            <i class="glyph-icon icon-code"></i>
                            Kepegawaian
                        </a>
                        <ul>
                            <li>
                                <a href="<?php site_url('admin/berita')?>" title="Berita">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Pegawai
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Informasi">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Golongan
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pendaftaran">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Gaji dan Honor
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Alumni">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Data Pangkat
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pengurus">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Monitoring Pegawai
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Pesan">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Monitoring Gaji
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/user');?>" title="Managemen User">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Monitoring Status
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" title="Components">
                            <i class="glyph-icon icon-code"></i>
                            Setting
                        </a>
                        <ul>
                             <li>
                                <a href="<?php echo site_url('admin/user');?>" title="Managemen User">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Managemen User
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Informasi">
                                    <i class="glyph-icon icon-chevron-right"></i>
                                    Maintenance
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- #page-sidebar -->
        <div id="page-content-wrapper">
            <div id="page-title">
                <h3>
                    Managemen User
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