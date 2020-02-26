<?php $this->load->view('templates/head'); ?>
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
    </div>
</div>

<!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">

                    <div class="col-md-7">
                        <!-- Billing Details -->
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Billing address</h3>
                            </div>
                <form method="post" name="checkout" id="checkout-frm">
                            <div class="form-group">               
                                <input class="form-control input-ordernow-firstname" type="text" name="firstname" id="firstname" placeholder="First Name *">
                            </div>
                            <div class="form-group">                
                                <input class="form-control input-ordernow-lastname" type="text" name="lastname" id="lastname" placeholder="Last Name *">
                            </div>
                            <div class="form-group">               
                                <input class="form-control input-ordernow-email" type="email" name="email" id="email" placeholder="Email *">
                            </div>
                            <div class="form-group">                
                                <input class="form-control input-ordernow-phone" maxlength="15"  type="text" name="phone" id="phone" placeholder="Phone *">
                            </div>
                            <div class="form-group">                
                                <input class="form-control input-ordernow-address" type="text" name="address" id="address" placeholder="Address *">
                            </div>                           
                            <div class="form-group">
                                <select title="Select Country" name="country" class="form-control input-ordernow-country">
                                    <option value="">Select Country</option>
                                    <?php $this->load->view('templates/countries'); ?>
                                </select>
                            </div>
                            <div class="form-group">                
                                <input class="form-control input-ordernow-state" type="text" name="state" id="state" placeholder="State *">
                            </div>
                            <div class="form-group">                
                                <input class="form-control input-ordernow-city" type="text" name="city" id="city" placeholder="City *">
                            </div>
                            <div class="form-group">                
                                <input class="form-control input-ordernow-zipcode" type="text" name="zipcode" id="zipcode" placeholder="ZipCode *">
                            </div> 
                </form>                           
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="create-account">
                                    <label for="create-account">
                                        <span></span>
                                        Create Account?
                                    </label>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                        <input class="input" type="password" name="password" placeholder="Enter Your Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Billing Details -->

                        <!-- Shiping Details -->
                        <div class="shiping-details">
                            <div class="section-title">
                                <h3 class="title">Shiping address</h3>
                            </div>
                            <div class="input-checkbox">
                                <input type="checkbox" id="shiping-address">
                                <label for="shiping-address">
                                    <span></span>
                                    Ship to a diffrent address?
                                </label>
                                <div class="caption">
                    <form method="post" name="checkout" id="checkout-frm">
                
                <div class="row">    
                    
                        <div class="col-sm-4">
                            <div class="form-group">               
                                <input class="form-control input-ordernow-firstname" type="text" name="firstname" id="firstname" placeholder="First Name *">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-lastname" type="text" name="lastname" id="lastname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">               
                                <input class="form-control input-ordernow-email" type="email" name="email" id="email" placeholder="Email *">
                            </div>
                        </div>
                        </div>
                        <div class="row">    
                        <div class="col-sm-4">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-phone" maxlength="15" pattern="([0-9]|[0-9]|[0-9])" type="text" name="phone" id="phone" placeholder="Phone *">
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-company" type="text" name="company" id="company" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-address" type="text" name="address" id="address" placeholder="Address">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                                        
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select title="Select Country" name="country" class="form-control input-ordernow-country">
                                    <option value="">Select Country</option>
                                    <option value="">Select Country</option>
                                    <?php $this->load->view('templates/countries'); ?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-state" type="text" name="state" id="state" placeholder="State">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-city" type="text" name="city" id="city" placeholder="City">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">                
                                <input class="form-control input-ordernow-zipcode" type="text" name="zipcode" id="zipcode" placeholder="ZipCode">
                            </div>
                        </div>            
                    </div> 
                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Shiping Details -->

                        <!-- Order notes -->
                        <div class="order-notes">
                            <textarea class="input" placeholder="Order Notes"></textarea>
                        </div>
                        <!-- /Order notes -->
                    </div>

                    <!-- Order Details -->
                    <div class="col-md-5 order-details" >
                        <div class="section-title text-center">
                            <h3 class="title">Your Order</h3>
                        </div>

                        <table class="table table-bordered table-hover table-striped print-table order-table" border="1">
                                <?php if(!empty($productInfo)) { ?>                                   
                    <thead>
                        <tr class="bg-primary" style="background-color: black">
                            <th class="text-left" style="width:10%">PRODUCT</th>
                            <th class="text-right" style="width:10%">PRICE</th>
                            <th class="text-right add-tax-th" style="width:10%">QTY</th>
                            <th class="text-right" style="width:10%">SUB TOTAL</th>                          
                        </tr>
                    </thead>
                    <tbody id="render-more-item-tr">
                        <?php 
                        $grandTotal =0;   
                        foreach($productInfo as $key=>$element) { 
                        $grandTotal  += $element['subtotal'];
                            ?>
                            <tr class="count-inv-tr" id="render-more-item<?php print $element['id'];?>">
                                <td class="border-bottom" style="word-break: keep-all;">
                                    <div class="media">                                        
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="<?php print site_url().'product/'.$element['slug'];?>">&nbsp;
                                                <b><?php print $element['name']; ?></a></b></h6>                                            
                                        </div>
                                    </div>
                                    
                                </td>
                                <td class="text-right border-bottom">
                                    <span class="currency-symbol">$</span>
                                    <span id="price0" class="dynamic-price"><?php print $element['price']; ?></span>
                                </td>
                                <td class="text-right" style="text-align: right; padding: 1px 5px;font-size: 12px; line-height: 1.5; 
                                    border-radius: 3px;">
                                        <?php print $element['qty']; ?>
                                </td>
                                <td class="text-right border-bottom">
                                    <span class="currency-symbol">$</span>
                                    <span><?php print $element['subtotal']; ?></span>
                                </td>            
                            </tr>
                             <?php } ?>
                         </tbody>

                                                 
                        <tfoot id="render-calculation">  
                            <tr>            
                                <td class="add-tax-colspan" style="text-align: right; border:0px;"></td>
                                <td class="text-left" style="width:5%; border-right: 0;" colspan="2">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="text-right" style="border-left: 0px;">
                                    <strong>
                                        <span class="currency-symbol">$ </span>
                                        <span id="sub-total"><?php print $grandTotal;?></span>
                                    </strong>
                                </td>           
                            </tr>
                               
                                                        

                            <tr id="render-tax-cgst">
                                <td style="text-align:left; border:0px;"></td>
                                <td style=" border-right: 0px;" colspan="2"><strong>TAX 2%</strong></td>
                                <td style="text-align:right; border-left: 0px;"><strong><span>$ </span><span><?php $tax = $grandTotal/100; print $tax;?></span></strong></td>
                            </tr>
                            <tr id="render-tax-sgst">
                                <td style="text-align:left; border:0px;"></td>
                                <td style=" border-right: 0px;" colspan="2"><strong>SHIPPING</strong></td>
                                <td style="text-align:right; border-left: 0px;"><strong><span> </span><span>FREE</span></strong></td>
                            </tr>
                            <tr>            
                                <td class="add-tax-colspan" style="text-align: right; border:0px;"></td>            
                                <td class="text-left" colspan="2" style="border-right: 0px;">
                                    <strong>TOTAL</strong>
                                </td>
                                <td class="border-bottom text-right" style="border-left: 0px;">
                                    <strong><h4 style="color: #D10024">
                                        <span class="currency-symbol">$ </span>
                                        <span id="final-total">
                                            <?php $grandTotal= $tax+$grandTotal; print $grandTotal;?>
                                        </span></h4>
                                    </strong>
                                </td>
                            </tr>                            

                        </tfoot>

                    <?php } else { ?>
                        <tr><td colspan="4">Cart is empty.</td></tr>
                    <?php }?>

                </table>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <?php if(!empty($productInfo)) { ?>
                        <div class="payment-method">
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-1">
                                <label for="payment-1">
                                    <span></span>
                                    Direct Bank Transfer 
                                    <i class="fa fa-cc-visa"></i>
                                    <i class="fa fa-credit-card"></i>  
                                    <i class="fa fa-cc-mastercard"></i>
                                    <i class="fa fa-cc-discover"></i>
                                    <i class="fa fa-cc-amex"></i>
                                </label>
                                <div class="caption">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                           <div class="form-group">               
                                                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Full Name *">
                                            </div>                              
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                           <div class="form-group">               
                                                <input class="form-control input-ordernow-firstname" type="text" name="firstname" id="firstname" placeholder="Card Number 1234 5678 9012 3456">
                                            </div>                              
                                        </div>
                                        
                                    </div>
                                    <div class="row">                     
                                        <div class="col-lg-7">
                                           <div class="form-group">               
                                                <input class="form-control" type="text" name="expdate" id="expdate" placeholder="Expire Date (MM-YYYY)">
                                            </div>                              
                                        </div>
                                        <div class="col-lg-5">
                                           <div class="form-group">               
                                                <input class="form-control" type="text" name="cvc" id="cvc" size="3" placeholder="CVC">
                                            </div>                              
                                        </div>                               
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-2">
                                <label for="payment-2">
                                    <span></span>
                                    Cheque Payment
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                            <div class="input-radio">
                                <input type="radio" name="payment" id="payment-3">
                                <label for="payment-3">
                                    <span></span>
                                    Paypal System 
                                    <i class="fa fa-cc-paypal"></i>
                                </label>
                                <div class="caption">
                                    <p>Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <input type="checkbox" id="terms">
                            <label for="terms">
                                <span></span>
                                I've read and accept the <a href="#"><b>terms & conditions.</b></a>
                            </label>
                        </div> <br/>                           
                            <div class="btn-group btn-group-justified">

                                <div class="btn-group">                
                                    <a type="button" href="<?php print site_url();?>cart" class="btn btn  primary-btn2">
                                         <b>&lt;&lt; BACK</b>
                                    </a>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn  primary-btn" 
                                    id="order-pay-now" style="background-color: #D10024">
                                         <i class="fa fa-money"></i> <b>PAY NOW</b>
                                     </button>                
                                </div>           

                            </div>

                        <?php } else { ?>
                            <a href="<?php print site_url();?>" class="btn btn-success">Continue Shopping</a>
                        <?php }?>
                    </div>  
                    </div>
                    <!-- /Order Details -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->



<br/>
<?php $this->load->view('templates/foot'); ?>