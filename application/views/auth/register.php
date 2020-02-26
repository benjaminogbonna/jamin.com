<br/>

<div class="row page-content">
    
    <div class="col-lg-12">
        <h3 class="reg-head">Enter your details to sign up</h3>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>
        <?php echo form_open('auth/actionCreate'); ?>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-o log"></i>
                        </span>
                        <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-o log"></i>
                        </span>
                        <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">            			
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope-o log"></i>
                        </span>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-phone log"></i>
                        </span>
                        <input type="text" name="contact_no" class="form-control" id="contact-no" placeholder="Contact No">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock log"></i>
                        </span>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
            </div>			
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock log"></i>
                        </span>
                        <input type="password" name="confirm_password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-lg-6'>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar log"></i>
                        </span>
                        <input type='text' class="form-control" name="dob" id="dob" placeholder="DOB: DD-MM-YYYY">                    
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-marker log"></i>
                        </span>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                    </div>
                </div>
            </div>	

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-marker log"></i>
                        </span>
                        <input type="text" name="city" class="form-control" id="city" placeholder="City">
                    </div>
                </div>
            </div>          
            <div class='col-lg-6'>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-marker log"></i>
                        </span>
                        <input type='text' class="form-control" name="state" 
                        id="state" placeholder="State">                    
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-marker log"></i>
                        </span>
                        <select title="Select Country" name="country" class="form-control input-ordernow-country">
                                    <option value="">Select Country</option>
                                    <option value="">Select Country</option>
                                    <?php $this->load->view('templates/countries'); ?>
                                </select>
                    </div>
                </div>
            </div>          
            <div class='col-lg-6'>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-marker log"></i>
                        </span>
                        <input type='text' class="form-control" name="zipcode" 
                        id="zipcode" placeholder="ZipCode">                    
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">                    
                    <span class="small ">Already Registered User?</span> <a href="<?php print site_url(); ?>signin" class="small"><b>Login here</b></a>
                </div>
            </div>                
        </div>
        <div class="row">	
            <div class="col-lg-12">
                <div class="btn-group btn-group-justified">

                    <div class="btn-group">
                        <button type="submit" class="btn btn  primary-btn" 
                        id="register"
                        style="background-color: #D10024">
                             <b>Sign up</b>
                         </button>                
                    </div>           

                </div> <br/>               

            </div>
        </div>       
    </div>
    <?php echo form_close(); ?>
</div>
<br/>