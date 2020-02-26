<?php $this->load->view('templates/primary_header'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
        <?php if(!empty($breadcrumbs) && count($breadcrumbs)>0) {?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <?php 
            foreach($breadcrumbs as $key=>$element) {    
                ?>
                <li class="breadcrumb-item"><a href="<?php print $element;?>"><?php print $key;?></a></li>
            <?php } ?>
          </ol>
        </nav>
        <?php } ?>

        </div>
        <div class="col-md-12 col-sm-12">
            <h1>Your Order Has Been Placed. Thank You!</h1>
            <p>Your order number is : <strong> #<?php print $order_id;?></strong></p>
            <p>You can access your order details anytime in your account section</p>
            <p>Thank you for ordering from TechArise. Your item(s) will be with you shortly...</p>
        </div>
    </div>
</div>
<?php $this->load->view('templates/primary_footer'); ?>
