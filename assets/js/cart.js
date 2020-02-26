// wishlist Add
    //not yet available

// cart Add
jQuery(document).on('click', '.item-add-to-cart', function () {
    var productID = jQuery(this).data('productid');
    var qty = jQuery('#add-cart-qty').val();
    if(qty){
        qty=qty;
    } else {
        qty=1;
    }
    jQuery.ajax({
        url: baseurl + 'cart/add',
        type: 'post',
        data: {productID: productID, qty:qty},
        dataType: 'json',
        beforeSend: function () {
            jQuery('button.ajax-spin-cart').button('loading');
        },
        complete: function () {
            jQuery('button.ajax-spin-cart').button('reset');
        },
        success: function (json) {
            if (json.status == 1) {
                jQuery("span#go-to-basket").html(json.counter);
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

// Cart update
jQuery(document).on('click', '.update-cart-qty', function () {
    var productID = jQuery(this).data('updproductid');
    var itemID = jQuery(this).data('itemid');
    var qty = jQuery('#update-cart-qty-' + itemID).val();
    jQuery.ajax({
        url: baseurl + 'cart/update',
        type: 'post',
        data: {productID: productID, qty: qty},
        dataType: 'json',
        beforeSend: function () {
            jQuery('button#action-cart-qty-' + productID).button('loading');
        },
        complete: function () {
            jQuery('button#action-cart-qty-' + productID).button('reset');
        },
        success: function (json) {
            jQuery('#update-cart-qty-' + itemID).val(qty);
            location.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});


// Cart remove
jQuery(document).on('click', '.remove-cart', function () {
    var productID = jQuery(this).data('rmproductid');
    var itemID = jQuery(this).data('rmitemid');
    jQuery.ajax({
        url: baseurl + 'cart/remove',
        type: 'post',
        data: {productID: productID},
        dataType: 'json',
        beforeSend: function () {
            jQuery('#remove-cart' + productID).button('loading');
        },
        complete: function () {
            jQuery('#remove-cart' + productID).button('reset');
        },
        success: function (json) {
            location.reload();
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});
