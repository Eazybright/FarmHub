<!DOCTYPE html>
<html lang="en">
<head>
    <title>FarmHub | Home</title>
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
        <!-- / header -->
        <!-- content -->
    </div>
    </div>
    <div class="body2">
    <div class="main">
        <article id="content2">
        <div class="wrapper">
            <section class="col2">
            <h2>We Want to Rise Your Crops <span>and Livestock!</span></h2>
            <div class="testimonials">
                <p class="quot">We bring to you a platform where you can sell and buy your agricultural products...<img src="<?= base_url() ;?>assets/images/quot2.png" alt=""></p>
            </div>
            <p class="pad_bot1"><em class="font1 color1">Features:</em></p>
            <div class="wrapper">
                <section class="col4">
                <ul class="list1">
                    <li><a href="#">Agricultural Produce</a></li>
                    <li><a href="#">Cereals</a></li>
                    <li><a href="#">Vegetables</a></li>
                    <li><a href="#">Fruits</a></li>
                    <li><a href="#">Application Equipment</a></li>
                </ul>
                </section>
            </div>
            </section>
            <section class="col3 pad_left2">
            <h2>Our Products</h2>
            <div class="wrapper pad_top1">
                <figure class="left marg_right1"><img src="<?= base_url() ;?>assets/images/page1_img1.jpg" alt=""></figure>
                <p><span class="font1 color2">Tomato</span><br>
                The tomato is the edible, often red, fruit/berry of the plant Solanum lycopersicum, commonly known as a tomato plant.  &nbsp; <a href="#" class="link1">Read More</a> </p>
            </div>
            <div class="wrapper">
                <figure class="left marg_right1"><img src="<?= base_url() ;?>assets/images/page1_img2.jpg" alt=""></figure>
                <p><span class="font1 color2">Sweet Pepper</span><br>
                The bell pepper is a cultivar group of the species Capsicum annuum. Cultivars of the plant produce fruits in different colors, including red, yellow, orange, green, white, and purple. Bell peppers are sometimes grouped with less pungent pepper varieties as "sweet peppers". &nbsp; <a href="#" class="link1">Read More</a> </p>
            </div>
            <div class="wrapper">
                <figure class="left marg_right1"><img src="<?= base_url() ;?>assets/images/page1_img3.jpg" alt=""></figure>
                <p><span class="font1 color2">Cucumber</span><br>
                Cucumber is a widely cultivated plant in the gourd family, Cucurbitaceae. It is a creeping vine that bears cucumiform fruits that are used as vegetables. &nbsp; <a href="#" class="link1">Read More</a></p>
            </div>
            </section>
        </div>
        </article>
        <!-- / content -->
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
</html>