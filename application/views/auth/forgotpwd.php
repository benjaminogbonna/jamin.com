<br/>
<div class="row page-content">
    <div class="col-lg-12">
       <h3 class="reg-head">Enter your email address to reset password</h3>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php if (!empty($this->input->get('msg')) && $this->input->get('msg') == 1) { ?>
            <div class="alert alert-danger">
                Please Enter Your Valid Information.
            </div>
        <?php } elseif (!empty($this->input->get('msg')) && $this->input->get('msg') == 2) { ?>
            <div class="alert alert-success">
                Your password has been reset successfully. Please check your email.
            </div>
        <?php } ?>
        <?php echo form_open('auth/actionForgotPassword'); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope-o log"></i>
                        </span>
                        <input type="text" name="forgot_email" class="form-control" id="email-forgot-pwd" placeholder="Email">
                    </div>
                </div>        
            </div>            
        </div>
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="form-group pull-left">
                    <span class="small pull-left"> </span><a href="<?php print site_url(); ?>signin" class="small pull-left">
                        <b>Back</b></a>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">                
                                    <a type="button" href="<?php print site_url();?>signin" class="btn btn  primary-btn2">
                                         <b>BACK</b>
                                    </a>
                                </div>
                    <div class="btn-group">
                        <button type="submit" class="btn btn  primary-btn" 
                            id="login" style="background-color: #D10024"><b>Reset Password</b>
                         </button>                
                    </div>           

                </div> <br/> 
                
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
<br/>