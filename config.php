<?php
    define ('BASEURL',$_SERVER['DOCUMENT_ROOT'].'/shopstore/');
    define ('CART_COOKIE','SBwi72UCKLwiqzz2');
    define ('CART_COOKIE_EXPIRE', time() + (86400 * 30));
    define ('TAXRATE', 0.087);

    define ('CURRENCY','usd');
    define ('CHECKOUTMODE', 'TEST');

    if (CHECKOUTMODE == 'TEST') {
      define ('STRIPE_PRIVATE', 'insertyourownstripkey');
      define ('STRIPE_PUBLIC', 'insertyourownstripkey');
    }

    if (CHECKOUTMODE == 'LIVE') {
      define ('STRIPE_PRIVATE', 'insertyourownstripkey');
      define ('STRIPE_PUBLIC', 'insertyourownstripkey');
    }
 ?>
