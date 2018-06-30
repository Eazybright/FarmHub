<!DOCTYPE html>
<html lang="en">
<head>
    <title>FarmHub | Products</title>
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
                <li><a href="<?= base_url('home/index'); ?>">Home</a></li>
                <li class="active" ><a href="<?= base_url() ;?>products.html">Products</a></li>
                <li><a href="<?= base_url() ;?>pricing.html">Pricing</a></li>
                <li><a href="<?= base_url() ;?>contact.html">Contact</a></li>
                <li><a href="<?= base_url('home/login') ;?>">Login</a></li>
            </ul>
            </nav>
        </div>
        <div class="slider_bg">
            <div class="slider">
            <ul class="items">
                <li><img src="<?= base_url() ;?>assets/images/img1.jpg" alt=""></li>
                <li><img src="<?= base_url() ;?>assets/images/img2.jpg" alt=""></li>
                <li><img src="<?= base_url() ;?>assets/images/img3.jpg" alt=""></li>
            </ul>
            </div>
        </div>
        </header>
    </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <?php
                foreach ($products as $product){
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = $product['price'];
                    $description = $product['description'];
            ?>

            <img src="<?= base_url($product['picture']);?>"  class="img-responsive" style="width: 10%; height: 10%; border-radius: 50%;"/>
            <br>
                <b style="color: #999;"><?php echo $name; ?></b><br /><?php echo $description; ?><br />
                        <b style="color: #999;">Price:</b><big style="color: red; font-weight: bold; clear: both;">
                        $<?php echo $price; ?></big>
                        <?php
                        echo form_open('Cart/add');
                        echo form_hidden('id', $id);
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        echo form_submit('action', 'Add to cart');
                        echo form_close()."<br /><br />";
                        ?>
            <?php } ?>
        </div>
    </div>

   
</body>
</html>