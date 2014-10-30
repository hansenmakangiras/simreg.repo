<!DOCTYPE html>
<head>
    
    <title>PMK LP3I Makassar</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/bootstrap-theme.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/frontend/css/bootstrap-social.css'); ?>" rel="stylesheet" type="text/css">	
    <link href="<?php echo base_url('assets/frontend/css/templatemo_style.css'); ?>" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-image-1">
    <div class="container">
        <div class="col-md-12">	
            <?php echo form_open("login",'id="login-validation" class="form-horizontal templatemo-login-form-2" role="form" method="post" ');?>
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php echo lang('login_heading');?></h1>                      
                        <?php echo lang('login_subheading');?>
                    </div>
                </div><hr>
                <div class="row">
                    <div class="templatemo-one-signin col-md-6">
                        <?php echo $message;?>
                        <div class="form-group">
                            <div class="col-md-12">		          	
                                <label for="identity" class="control-label"><?php echo lang('login_identity_label', 'identity');?></label>
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-user"></i>                                    
                                    <?php echo form_input($identity,'','placeholder="Username" class="form-control" data-trigger="change" data-required="true" type="text" name="identity" id="login_username"');?>
                                </div>		            		            		            
                            </div>              
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="password" class="control-label"><?php echo lang('login_password_label', 'password');?></label>
                                <div class="templatemo-input-icon-container">
                                    <i class="fa fa-lock"></i>                                    
                                    <?php echo form_input($password,'','placeholder="Password" class="form-control" data-trigger="keyup" data-rangelength="[6,25]" type="password" data-required="true" name="password" id="login_pass"');?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <?php echo form_checkbox('remember', '1', FALSE, 'type="checkbox" id="remember"');?>
                                        <?php echo lang('login_remember_label', 'remember');?>  
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">                                
                                <button type="submit" value="LOG IN" class="btn btn-warning">LOG IN</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                            </div>
                        </div>
                    </div>
                    <div class="templatemo-other-signin col-md-6">
                        <label class="margin-bottom-15">
                            One-click sign in using other services. Credit goes to <a rel="nofollow" href="http://lipis.github.io/bootstrap-social/">Bootstrap Social</a> for social sign in buttons.
                        </label>
                        <a class="btn btn-block btn-social btn-facebook margin-bottom-15">
                            <i class="fa fa-facebook"></i> Sign in with Facebook
                        </a>
                        <a class="btn btn-block btn-social btn-twitter margin-bottom-15">
                            <i class="fa fa-twitter"></i> Sign in with Twitter
                        </a>
                        <a class="btn btn-block btn-social btn-google-plus">
                            <i class="fa fa-google-plus"></i> Sign in with Google
                        </a>
                        
                    </div>   
                </div>				 	
            <?php echo form_close();?>		      		      
        </div>
    </div>
</body>
</html>