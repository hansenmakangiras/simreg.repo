<?php echo $this->load->view('admin/components/header'); ?>

<body style="overflow: hidden;">        

    <div id="login-page" class="mrg25B">

        <div id="page-header" class="clearfix">
            <div id="header-logo">
               PMK LP3I MAKASSAR <i class="opacity-80">1.0</i>
            </div>

        </div><!-- #page-header -->

    </div>
    <div class="pad20A">
        <div class="row">
            <div class="clear"></div>
           <?php echo form_open("auth/login",'id="login-validation" class="col-md-3 center-margin form-vertical mrg25T" ');?>
            <div id="login-form" class="content-box">
                <h3 class="content-box-header ui-state-default">
                    <div class="glyph-icon icon-separator">
                        <i class="glyph-icon icon-user"></i>
                    </div>
                    <span><?php echo lang('login_heading');?></span>
                </h3>
                <div class="content-box-wrapper pad20A pad0B">
                    <?php echo $message;?>
                    <div class="form-row">
                        <div class="form-label col-md-6">
                            <label for="username">
                                <?php echo lang('login_identity_label', 'identity');?>                                                           
                            </label>
                        </div>
                        <div class="form-input col-md-10">
                            <div class="form-input-icon">
                                <i class="glyph-icon icon-tag ui-state-default"></i>
                                <!--<input placeholder="Username" data-trigger="change" data-required="true" type="text" name="username" id="login_username" />-->
                                <?php echo form_input($identity,'','placeholder="Username" data-trigger="change" data-required="true" type="text" name="identity" id="login_username"');?>

                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-label col-md-2">
                            <label for="password">
                                <?php echo lang('login_password_label', 'password');?>                                
                                
                            </label>
                        </div>
                        <div class="form-input col-md-10">
                            <div class="form-input-icon">
                                <i class="glyph-icon icon-unlock-alt ui-state-default"></i>
                                <!--<input placeholder="Password" data-trigger="keyup" data-rangelength="[6,25]" type="password" data-required="true" name="password" id="login_pass" />-->
                                <?php echo form_input($password,'','placeholder="Password" data-trigger="keyup" data-rangelength="[6,25]" type="password" data-required="true" name="password" id="login_pass"');?>
                            </div>
                        </div>
                    </div>


                    <!--<div class="form-row">
                        <div class="form-label col-md-2">
                            <label for="level">
                                Level Akses:
                            </label>
                        </div>
                        <div class="form-input col-md-10 ">
                            <div class="form-input-icon">
                                <i class="glyph-icon icon-legal ui-state-default"></i>
                                <select data-required="true" name="level_akses" id="login_level">
                                    <option value="">Pilih Akses</option>
                                    <option value=1>Super Admin</option>
                                    <option value=2>Administrator</option>
                                    <option value=3>Pengurus</option>
                                    <option value=4>Alumni</option>
                                    <option value=5>Anggota</option>
                                </select>
                            </div>
                        </div>
                    </div>-->
                    <div class="form-row">
                        <div class="button-pane-top text-center">                                
                            <button type="submit" class="btn large primary-bg text-transform-upr font-size-11" onclick="javascript:$(&apos;#login-validation&apos;).parsley( &apos;validate&apos; );" onsubmit="javacript:;" title="Validate!" id="noty_top">                                
                                <span class="button-content pad20L pad20R">Masuk</span>
                            </button>                                
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="form-row"> 
                        <div class="form-checkbox-radio col-md-6">                                                            
                            <?php echo form_checkbox('remember', '1', FALSE, 'type="checkbox" id="remember"');?>
                            <?php echo lang('login_remember_label', 'remember');?>                            
                        </div>
                        <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                    </div>

                </div>
            </div>
        </div>
    <?php echo form_close();?>

</div>

</div>

<?php echo $this->load->view('admin/components/footer'); ?>
