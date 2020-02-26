<?php $this->load->view('templates/head'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <?php if(!empty($breadcrumbs) && count($breadcrumbs)>0) {?>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <?php foreach($breadcrumbs as $key=>$element) {?>
                <li class="breadcrumb-item"><a href="<?php print $element;?>"><?php print $key;?></a></li>
            <?php } ?>
          </ol>
        </nav>
        <?php } ?>

            <table class="table table-bordered table-hover table-striped print-table order-table">
                <?php if(!empty($productInfo)) { ?>
                    <thead>
                        <tr class="bg-primary" style="background-color: black">
                            <th class="text-left" style="width:10%">Product</th>
                            <th class="text-right" style="width:10%">Price</th>
                            <th class="text-right add-tax-th" style="width:10%">QTY</th>
                            <th class="text-right" style="width:10%">Sub Total</th>                          
                        </tr>
                    </thead>
                    <tbody id="render-more-item-tr">
                        <?php 
                        $grandTotal =0;
                        foreach($productInfo as $key=>$element) { 
                        $grandTotal  += $element['subtotal'];
                            ?>
                            <tr class="count-tr" id="render-more-item<?php print $element['id'];?>">
                                <td class="border-bottom" style="word-break: keep-all;">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="<?php print HTTP_CATALOG_IMAGE_PATH.$element['image'];?>" style="width: 50px; height: 50px;"></a>
                                        <div class="media-body">
                                            <h6 class="media-heading"><a href="<?php print site_url().'product/'.$element['slug'];?>">&nbsp;<b><?php print $element['name']; ?></a></b></h6>
                                            <span style="font-size: 11px;">&nbsp;Status: </span><span class="text-success" style="font-size: 11px;"><strong>In Stock</strong></span>
                                        </div>
                                    </div>
                                    
                                </td>
                                <td class="text-right border-bottom">
                                    <span class="currency-symbol">$</span>
                                    <span id="price0" class="dynamic-price"><?php print $element['price']; ?></span>
                                </td>
                                <td class="text-right" style="text-align: right; padding: 1px 5px;font-size: 12px; line-height: 1.5; 
                                    border-radius: 3px;">
                                        <input type="number" name="qty" value="<?php print $element['qty']; ?>" id="update-cart-qty-<?php print $element['id'];?>" maxlength="3" size="1" style="width:40px; border: 1px solid #CCC; border-radius: 3px;text-align: center;height: 35px;" min="0">
                                        <button type="button" data-updproductid="<?php print $element['rowid'];?>" data-itemid="<?php print $element['id'];?>" id="action-cart-qty-<?php print $element['id'];?>" class="update-cart-qty btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>
                                </td>
                                <td class="text-right border-bottom">
                                    <span class="currency-symbol">$</span>
                                    <span><?php print $element['subtotal']; ?></span> <span style="cursor: pointer;" class="remove-cart" data-rmitemid="<?php print $element['id']; ?>"" data-rmproductid="<?php print $element['rowid']; ?>"><i class="text-danger fa fa-times"></i></span>
                                </td>            
                            </tr>
                             <?php } ?>
                         </tbody>

                                                 
                        <tfoot id="render-calculation">

                            <tr>            
                                <td class="add-tax-colspan" style="text-align: right; border:0px;"></td>
                                <td class="text-left" style="width:20%; border-right: 0;" colspan="2">
                                    <strong>Subtotal</strong>
                                </td>
                                <td class="text-right" style="border-left: 0px;">
                                    <strong>
                                        <span class="currency-symbol">$ </span>
                                        <span id="sub-total"><?php print $grandTotal;?></span>
                                    </strong>
                                </td>           
                            </tr>
<!-- I'll need this block of code later, down to line 105 -->
                               
                                                      <!--   <tr id="render-tax">
                                <td style="text-align:left; border:0px;"></td>
                                <td style="text-align:left; border-right: 0px;" colspan="2"><strong id="change-tax-label">-Tax @ 0%</strong></td>
                                <td style="text-align:right; border-left: 0px;">
                                    <span id="tax-total" style="visibility: hidden;">0.00</span>
                                </td>
                            </tr>

                            <tr id="render-tax-cgst">
                                <td style="text-align:left; border:0px;"></td>
                                <td style=" border-right: 0px;" colspan="2"><strong>- Tax @ 0%</strong></td>
                                <td style="text-align:right; border-left: 0px;"><strong><span>$ </span><span>0.00</span></strong></td>
                            </tr>
                            <tr id="render-tax-sgst">
                                <td style="text-align:left; border:0px;"></td>
                                <td style=" border-right: 0px;" colspan="2"><strong>- SGST @ 0%</strong></td>
                                <td style="text-align:right; border-left: 0px;"><strong><span>$ </span><span>0.00</span></strong></td>
                            </tr>
                            <tr>            
                                <td class="add-tax-colspan" style="text-align: right; border:0px;"></td>            
                                <td class="text-left" colspan="2" style="border-right: 0px;">
                                    <strong>Total</strong>
                                </td>
                                <td class="border-bottom text-right" style="border-left: 0px;">
                                    <strong>
                                        <span class="currency-symbol">$ </span>
                                        <span id="final-total"><?php print $grandTotal;?></span>
                                    </strong>
                                </td>
                            </tr> -->

                        </tfoot>
                    <?php } else { ?>
                        <tr><td colspan="4">Cart is empty.</td></tr>
                    <?php }?>
                </table>

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
            <a href="<?php print site_url();?>" class="btn btn-success">Continue Shopping</a>
            <?php if(!empty($productInfo)) { ?>
                <a href="<?php print site_url();?>checkout" class="btn btn-warning">Place Order</a>
            <?php } ?>
        </div>
    </div>
</div>
<br/>
<?php $this->load->view('templates/foot'); ?>
