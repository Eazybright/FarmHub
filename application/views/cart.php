<!DOCTYPE html>
<html lang="en">
<head>
    <title>FarmHub | Cart</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= base_url() ;?>assets/css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ;?>assets/css/layout.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?= base_url() ;?>assets/css/style.css" type="text/css" media="all">
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/jquery-1.6.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/tms-0.3.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/tms_presets.js"></script>
    <script type="text/javascript" src="<?= base_url() ;?>assets/js/script.js"></script>
</head>
<body id="page1">
    <div class="body1">
    <div class="main">
        <!--header -->
        <header>
        <div class="wrapper">
            <h1>FarmHub</h1>
            <h1><a href="<?= base_url('home/index');?>" id="logo"></a></a></h1>
            <nav>
            <ul id="menu">
                <li class="active"><a href="<?= base_url('home/index'); ?>">Home</a></li>
                <li><a href="<?= base_url('home/display_products') ;?>">Products</a></li>
                <li><a href="<?= base_url() ;?>pricing.html">Pricing</a></li>
                <li><a href="<?= base_url() ;?>contact.html">Contact</a></li>
                <li><a href="<?= base_url('home/login') ;?>">Login</a></li>
            </ul>
            </nav>
        </div>
        </header>
        <div class="body2">
        <div class="main">
            <div style="margin: 50px auto; width:600px; margin-top: 0;" >
                <div style="padding-bottom:10px">
                    <h1 align="center">Your Shopping Cart</h1><br />
                    <input type="button" value="Continue Shopping" onclick="window.location='home/display_products'" />
                </div>
                <div style="color:#F00"><?php echo $message?></div>
                <table border="0" cellpadding="5px" cellspacing="1px" style="font-family:Verdana, Geneva, sans-serif; font-size:11px;  width:100%">
                    <?php if ($cart = $this->cart->contents()): ?>
                    <tr bgcolor="#FFFFFF" style="font-weight:bold">
                        <td>Serial</td>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Qty</td>
                        <td>Amount</td>
                        <td>Options</td>
                    </tr>
                    <?php
                    echo form_open('cart/update_cart');
                    $grand_total = 0; $i = 1;

                    foreach ($cart as $item):
                        echo form_hidden('cart['. $item['id'] .'][id]', $item['id']);
                        echo form_hidden('cart['. $item['id'] .'][rowid]', $item['rowid']);
                        echo form_hidden('cart['. $item['id'] .'][name]', $item['name']);
                        echo form_hidden('cart['. $item['id'] .'][price]', $item['price']);
                        echo form_hidden('cart['. $item['id'] .'][qty]', $item['qty']);
                    ?>
                    <tr bgcolor="#FFFFFF">
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $item['name']; ?>
                        </td>
                        <td>
                            $ <?php echo number_format($item['price'],2); ?>
                        </td>
                        <td>
                            <?php echo form_input('cart['. $item['id'] .'][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                        </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <td>
                            $ <?php echo number_format($item['subtotal'],2) ?>
                        </td>
                        <td>
                            <?php echo anchor('cart/remove/'.$item['rowid'],'Cancel'); ?>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><b>Order Total: $<?php echo number_format($grand_total,2); ?></b></td>
                        <td colspan="5" align="right"><input type="button" value="Clear Cart" onclick="clear_cart()">
                                <input type="submit" value="Update Cart">
                                <?php echo form_close(); ?>
                                <input type="button" value="Place Order" onclick="window.location='billing'"></td>
                    </tr>
                    <?php endif; ?>
                </table>

            </div>
        </div>
        </div>
        <div class="main">
        <!-- footer -->
        <footer>
            <div class="wrapper">
            <section class="col2">
                <div class="wrapper">
                <section class="col4">
                    <h3>Follow Us </h3>
                    <ul id="icons">
                    <li><a href="#"><img src="<?= base_url() ;?>assets/images/icon1.jpg" alt=""><span>Facebook</span></a></li>
                    <li><a href="#"><img src="<?= base_url() ;?>assets/images/icon2.jpg" alt=""><span>Twitter</span></a></li>
                    <li><a href="#"><img src="<?= base_url() ;?>assets/images/icon3.jpg" alt=""><span>Linked In</span></a></li>
                    </ul>
                </section>
                <section class="col4 pad_left1">
                    <h3>Why Us </h3>
                    <ul id="why_us">
                    <li><a href="#">Buy and Sell</a></li>
                    <li><a href="#">Online Transaction</a></li>
                    <li><a href="#">Safe and Secure Payment Gateway</a></li>
                    </ul>
                </section>
                </div>
                <div id="footer_link">Copyright &copy; 2018 All Rights Reserved<br></div>
            </section>
            <section class="col3 pad_left2">
                <h3>Email Us</h3>
                <form id="ContactForm" action="#">
                <div>
                    <div class="wrapper"> <span>Your Name:</span>
                    <div class="bg">
                        <input type="text" class="input">
                    </div>
                    </div>
                    <div class="wrapper"> <span>Your E-mail:</span>
                    <div class="bg">
                        <input type="text" class="input">
                    </div>
                    </div>
                    <div class="textarea_box"> <span>Your Message:</span>
                    <div class="bg2">
                        <textarea name="textarea" cols="1" rows="1"></textarea>
                    </div>
                    </div>
                    <a href="#">Submit</a> </div>
                </form>
            </section>
            </div>
            <!-- {%FOOTER_LINK} -->
        </footer>
        <!-- / footer -->
        </div>
</body>
<script>
    function clear_cart() {
    	var result = confirm('Are you sure want to clear all bookings?');

    	if(result) {
    		window.location = "<?php echo base_url(); ?>cart/remove/all";
    	}else{
    		return false; // cancel button
    	}
    }
</script>
</html>