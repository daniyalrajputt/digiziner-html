<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<?= ($activePage == '') ? 'active' : ''; ?>
<!-- Begin: Header -->
<header id="header" class="header fixed-top">
    <style>
        .header {
            background: transparent !important;
        }
    </style>
    <div class="top-bar">
        <div class="row">
            <!-- <div class="col-lg-2">
          <div class="top-icon">
          <i class="bi bi-instagram"></i>&nbsp;<i class="bi bi-facebook"></i>&nbsp;<i class="bi bi-linkedin"></i>&nbsp;<i class="bi bi-twitter"></i>
        </div>
        </div> -->

            <div class="col-lg-10">
                <span class="blink">
                    <h3><i class="bi-stars"></i> &nbsp; &nbsp;Get Uptp 50% OFF on Your First Purchase &nbsp; &nbsp;<i class="bi-stars"></i></h3>
                </span>
            </div>
            <div class="col-lg-2">

                <i class="bi bi-telephone">+67 65765765765</i>
            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets\img\DIGIZINER LOGO.png" alt="">
            <span></span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="about-us.php">About</a></li>
                <li class="dropdown"><a href="services.php"><span>Services</span><i class="bi bi-chevron-down"></i> </a>
                    <ul>
                        <li><a href="website-development.php">Website Development</a></li>
                        <li><a href="mobile-app-development.php">Mobile App Development</a></li>
                        <li><a href="graphic-designing.php">Graphic Designing</a></li>
                        <li><a href="social-media-marketing.php">Social Media Marketing</a></li>
                        <li><a href="ecommerce-website.php">Ecommerce Website</a></li>
                        <li><a href="animation.php">Animation</a></li>
                        <li><a href="inbound-marketing-or-seo.php">Inbound Marketing Or SEO</a></li>
                    </ul>
                    <!-- </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> -->
                </li>
                <li><a class="nav-link scrollto" href="portfolio.php">Portfolio</a></li>
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <!-- <li><a href="blog.php">Blog</a></li> -->

                <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                <!-- <li><a class="getstarted scrollto">Request a Quote</a></li> -->
                <li><button class="openmodal myBtn">Request a Quote</button></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- End Header -->