<div class="row page-content">
    <div class="col-lg-12">
        <h2>Profile</h2>
        <div class="form-group text-right">
            <a class="btn btn-primary btn-xs" href="<?php print site_url() ?>profile"><i class="fa fa-user"></i> Profile</a>
            <a class="btn btn-info btn-xs" href="<?php print site_url() ?>profile/edit"><i class="fa fa-edit"></i> Edit</a>
            <a class="btn btn-warning btn-xs" href="<?php print site_url() ?>setting"><i class="fa fa-gear"></i> Settings</a>
            <a class="btn btn-danger btn-xs" href="<?php print site_url() ?>auth/logout"><i class="fa fa-power-off"></i> Log Out</a>
        </div>
        <?php if (validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php } ?>        
        <?php echo form_open('auth/editUser'); ?>        
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-o"></i>
                        </span>
                        <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First Name" value="<?php print $userInfo['first_name']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-user-o"></i>
                        </span>
                        <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name" value="<?php print $userInfo['last_name']; ?>">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">            			
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                        <input type="text" disabled="disabled" name="email" class="form-control" id="email" placeholder="Email" value="<?php print $userInfo['email']; ?>">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </span>
                        <input type="text" name="contact_no" class="form-control" id="contact-no" placeholder="Contact No" value="<?php print $userInfo['contact_no']; ?>">
                    </div>
                </div>
            </div>
        </div>        
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-map-marker"></i>
                        </span>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?php print $userInfo['address']; ?>">
                    </div>
                </div>
            </div>			
            <div class='col-lg-6'>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </span>
                        <input type='text' class="form-control" name="dob" id="dob" placeholder="DOB: DD-MM-YYYY" value="<?php print $userInfo['dob']; ?>">                    
                    </div>
                </div>
            </div>

        </div>
        <div class="row">	
            <div class="col-lg-12">
                <div class="form-group pull-right">
                    <button type="submit" id="register" class="btn btn-info">Update</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>	
</div>
