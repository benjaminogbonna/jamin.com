<br/>
<div class="row page-content">
    <div class="col-lg-12">
        <h3 class="reg-head">Enter your information to Signin</h3>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php if (!empty($this->input->get('msg')) && $this->input->get('msg') == 1) { ?>
            <div class="alert alert-danger">
                Please Enter Your Valid Information.
            </div>
        <?php } ?>
        <?php echo form_open('auth/doLogin'); ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user log"></i>
                        </span>
                        <input type="text" name="user_name" class="form-control" id="username" placeholder="User Name/Email">
                    </div>
                </div>        
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock log"></i>
                        </span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <span class="small pull-left">Not a user yet?&nbsp; </span><a href="<?php print site_url(); ?>signup" class="small pull-left"><b>Register Now</b></a>
                    <a href="<?php print site_url(); ?>forgotpwd" class="small pull-right"><b>Forgot password?</b></a>
                </div>
            </div>                
        </div><br/>
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn  primary-btn" 
                            id="login" style="background-color: #D10024"><b>Login</b>
                         </button>                
                    </div>           

                </div> <br/> 
                
            </div>
        </div>        
    </div>
    <?php echo form_close(); ?>
</div>
<br/>