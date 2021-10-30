<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">


    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">We integrates strategies for the ultimate digital impact.</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">We believe in taking new initiatives in the digital world. From development to integration, we are strong impact creators to offer maximum conversions and on-site engagement.
                </h2>
                <div data-aos="fade-up" data-aos-delay="600">
                    <div class="text-center text-lg-start">
                        <div class="modal-btn">
                            <button class="openmodal2 myBtn">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Request a Quote
                            </button>
                            <!-- <button class="openmodal2 myBtn">Request a Quote</button> -->
                            <!-- <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets\img\banner-test3.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section>

<!-- End Hero -->

<main id="main">

    <!-- quote form -->
    <!-- The Modal -->
    <!-- <div id="myModal" class="modal"> -->
    <div class="modal myModal">

        <!-- Modal content -->
        <div class="modal-content">


            <form action="assets\js\quote-form\quote.php" class="form-quote" method="post">
                <span class="close">&times;</span>
                <h1 class="text-center">Request a Quote</h1>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Personal Details"></div>
                    <div class="progress-step" data-title="Service Required"></div>
                    <!-- <div class="progress-step" data-title=""></div> -->
                    <div class="progress-step" data-title="Note"></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="introd">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-next width-50 ml-auto">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="cont">
                        <div class="input-group">
                            <label for="service">Select your service:</label>
                            <select name="service" id="service">
                                <option value="web">Web</option>
                                <option value="mobile">Mobile</option>
                                <option value="animation">Animation</option>
                                <option value="seo">SEO</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="budget">Select your budget:</label>
                            <select name="budget" id="budget">
                                <option value="0-500">0-500</option>
                                <option value="500-1000">500-1000</option>
                                <option value="1000-1500">1000-1500</option>
                                <option value="1500-2000">1500-2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <a class="btn btn-next">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="note">
                        <div class="input-group">
                            <label for="note">Describe your need</label>
                            <input type="text" name="note" id="note" />
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <input type="submit" value="Submit" class="btn" />
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- modal btn2 -->
    <div class="modal myModal">

        <!-- Modal content -->
        <div class="modal-content">


            <form action="assets\js\quote-form\quote.php" class="form-quote" method="post">
                <span class="close">&times;</span>
                <h1 class="text-center">Request a Quote</h1>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Personal Details"></div>
                    <div class="progress-step" data-title="Service Required"></div>
                    <!-- <div class="progress-step" data-title=""></div> -->
                    <div class="progress-step" data-title="Note"></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="introd">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-next width-50 ml-auto">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="cont">
                        <div class="input-group">
                            <label for="service">Select your service:</label>
                            <select name="service" id="service">
                                <option value="web">Web</option>
                                <option value="mobile">Mobile</option>
                                <option value="animation">Animation</option>
                                <option value="seo">SEO</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="budget">Select your budget:</label>
                            <select name="budget" id="budget">
                                <option value="0-500">0-500</option>
                                <option value="500-1000">500-1000</option>
                                <option value="1000-1500">1000-1500</option>
                                <option value="1500-2000">1500-2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <a class="btn btn-next">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="note">
                        <div class="input-group">
                            <label for="note">Describe your need</label>
                            <input type="text" name="note" id="note" />
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <input type="submit" value="Submit" class="btn" />
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- end modal btn2 -->

    <!-- modal btn3 -->
    <div class="modal myModal">

        <!-- Modal content -->
        <div class="modal-content">


            <form action="assets\js\quote-form\quote.php" class="form-quote" method="post">
                <span class="close">&times;</span>
                <h1 class="text-center">Request a Quote</h1>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Personal Details"></div>
                    <div class="progress-step" data-title="Service Required"></div>
                    <!-- <div class="progress-step" data-title=""></div> -->
                    <div class="progress-step" data-title="Note"></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="introd">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-next width-50 ml-auto">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="cont">
                        <div class="input-group">
                            <label for="service">Select your service:</label>
                            <select name="service" id="service">
                                <option value="web">Web</option>
                                <option value="mobile">Mobile</option>
                                <option value="animation">Animation</option>
                                <option value="seo">SEO</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="budget">Select your budget:</label>
                            <select name="budget" id="budget">
                                <option value="0-500">0-500</option>
                                <option value="500-1000">500-1000</option>
                                <option value="1000-1500">1000-1500</option>
                                <option value="1500-2000">1500-2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <a class="btn btn-next">Next</a>
                    </div>
                </div>
                <!-- <div class="form-step">
        <div class="input-group">
          <div class="form-radio">
            <p>Choose yoyr budget.</p>
<input type="radio" id="html" name="fav_language" value="HTML"/><label for="html">0-500</label><br> 
<input type="radio" id="html" name="fav_language" value="HTML"/><label for="html">500-1000</label><br>
      </div>
    </div>
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>
      </div> -->
                <div class="form-step">
                    <div class="note">
                        <div class="input-group">
                            <label for="note">Describe your need</label>
                            <input type="text" name="note" id="note" />
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <input type="submit" value="Submit" class="btn" />
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- end modal btn3 -->

    <!-- modal btn4 -->
    <div class="modal myModal">

        <!-- Modal content -->
        <div class="modal-content">


            <form action="assets\js\quote-form\quote.php" class="form-quote" method="post">
                <span class="close">&times;</span>
                <h1 class="text-center">Request a Quote</h1>
                <!-- Progress bar -->
                <div class="progressbar">
                    <div class="progress" id="progress"></div>

                    <div class="progress-step progress-step-active" data-title="Personal Details"></div>
                    <div class="progress-step" data-title="Service Required"></div>
                    <!-- <div class="progress-step" data-title=""></div> -->
                    <div class="progress-step" data-title="Note"></div>
                </div>

                <!-- Steps -->
                <div class="form-step form-step-active">
                    <div class="introd">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" name="firstname" id="firstname" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <a class="btn btn-next width-50 ml-auto">Next</a>
                    </div>
                </div>
                <div class="form-step">
                    <div class="cont">
                        <div class="input-group">
                            <label for="service">Select your service:</label>
                            <select name="service" id="service">
                                <option value="web">Web</option>
                                <option value="mobile">Mobile</option>
                                <option value="animation">Animation</option>
                                <option value="seo">SEO</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="budget">Select your budget:</label>
                            <select name="budget" id="budget">
                                <option value="0-500">0-500</option>
                                <option value="500-1000">500-1000</option>
                                <option value="1000-1500">1000-1500</option>
                                <option value="1500-2000">1500-2000</option>
                            </select>
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <a class="btn btn-next">Next</a>
                    </div>
                </div>
                <!-- <div class="form-step">
        <div class="input-group">
          <div class="form-radio">
            <p>Choose yoyr budget.</p>
<input type="radio" id="html" name="fav_language" value="HTML"/><label for="html">0-500</label><br> 
<input type="radio" id="html" name="fav_language" value="HTML"/><label for="html">500-1000</label><br>
      </div>
    </div>
    <div class="btns-group">
      <a href="#" class="btn btn-prev">Previous</a>
      <a href="#" class="btn btn-next">Next</a>
    </div>
      </div> -->
                <div class="form-step">
                    <div class="note">
                        <div class="input-group">
                            <label for="note">Describe your need</label>
                            <input type="text" name="note" id="note" />
                        </div>
                    </div>
                    <div class="btns-group">
                        <a class="btn btn-prev">Previous</a>
                        <input type="submit" value="Submit" class="btn" />
                    </div>
                </div>
            </form>
        </div>

    </div>

    <!-- end modal btn4 -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="content">
                        <h3>Who We Are</h3>
                        <h2>We build brands, designed carefully for a multi-channel digital approach.</h2>
                        <p>
                            With our creative experts and Information Architects, we are strategic in providing digital solutions to our prestigious clients 24/7.
                            We work on creating awareness for your brand by developing B2B and B2C Lead Generation and localized precision.

                        </p>
                        <div class="text-center text-lg-start">
                            <a href="about-us.php" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="assets\img\whoweare.webp" class="img-fluid" alt="">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Services</h2>
                <p>Services We Offer
                </p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-box blue">
                        <i class="bi bi-globe"></i>
                        <h3>Website Development</h3>
                        <p>Digiziner is a fast, result-oriented, and standard Web Development service for B2B purposes. The presence and interactions add value to your brand or service so, we create websites for corporate and competitive businesses through our website development model. </p>
                        <a href="website-development.php" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-box blue">
                        <img class="media-img" src="assets\img\mobile-application.png"></img>
                        <h3>Mobile Application Development</h3>
                        <p>Mobile App Development starts to kick off with an idea. We support the idea with our strategy, design, and development experts.</p>
                        <a href="mobile-app-development.php" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-box blue">
                        <!-- <i class="bi bi-megaphone"></i> -->
                        <img class="media-img" src="assets\img\bullhorn.png"></img>
                        <h3>Social Media Marketing</h3>
                        <p>Digiziner is a Social Media marketing agency you are looking for. We design digital media strategies for multi-channel campaigns.</p>
                        <a href="social-media-marketing.php" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-box blue">
                        <img class="media-img" src="assets\img\video.png"></img>
                        <h3>Video Animation</h3>
                        <p>Animation plays a subsequent role in keeping your visitors interested and holding their attention for a long. We have 3D animation experts to launch or brand your business globally. </p>
                        <a href="animation.php" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-box blue">
                        <img class="media-img" src="assets\img\graphic.png"></img>
                        <h3>Graphic Designing</h3>
                        <p>Graphic designing is an impression creator that says it all! The impression created through visuals and designing accompanied with the right type of logo is a professional deal.</p>
                        <a href="graphic-designing.php" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="service-box blue">
                        <img class="media-img" src="assets\img\seo.png"></img>
                        <h3>Inbound Marketing or SEO</h3>
                        <p>Inbound marketing is a much desired and most awaited revolutionary marketing practice eliminating distances between consumers and sources.</p>
                        <a href="inbound-marketing-or-seo.php" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Services Section -->

    <!-- start cta row -->


    <div class="cta-row">
        <div class="row">
            <div class="col-lg-6">
                <!-- <h1>Get in touch with us</h1> -->
                <h1 class="ml2">Start your project now</h1>
            </div>
            <div class="col-lg-6">

                <!-- <a href="tel:12345678"><i class="bi bi-telephone"></i>&nbsp;&nbsp;Give us a call</a> -->
                <a href="tel:12345678">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Give us a call
                </a>
            </div>

        </div>
    </div>

    <!-- end cta row -->

    <!-- new portfolio -->
    <section id="portfolio-new" class="portfolio-new">
        <header class="section-header">
            <h2>Portfolio</h2>
            <p>Check our latest work</p>
        </header>
        <div class="p-fill">
            <div>
                <ul>
                    <!-- <li class="list" data-filter="all">All</li> -->
                    <li class="list active" data-filter="websites">Websites</li>
                    <li class="list" data-filter="logos">Logos</li>
                    <li class="list" data-filter="applications">Applications</li>
                    <li class="list" data-filter="video">Video Animations</li>

                </ul>
            </div>


            <div class="recent-projects-boxes">


                <div class="itemBox1 websites">
                    <div class="rp-item">

                        <div class="rp-images-container">
                            <div class="rp-main-image-block">
                                <div class="rp-main-image-container">
                                    <div class="rp-main-perspective-image"></div>
                                    <div class="rp-main-image-wrapper">
                                        <div class="rp-image tecnam">
                                            <picture>
                                                <source type="image/webp" srcset="portfolio-images\halospa-main.webp">
                                                <source type="image/jpeg" srcset="portfolio-images\halospa-main.webp">
                                                <noscript><img width="700" height="450" src="portfolio-images\halospa-main.webp" alt="halo" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\halospa-main.webp" alt="halo" class="lazy rp-image--bg ls-is-cached lazyloaded loaded" data-ll-status="loaded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rp-perspective-wrap">
                                <picture>
                                    <source media="(min-width: 768px)" data-srcset="portfolio-images\halospa-mock.png" type="image/webp" srcset="portfolio-images\halospa-mock.png">
                                    <source media="(min-width: 768px)" data-srcset="portfolio-images\halospa-mock.png" type="image/png" srcset="portfolio-images\halospa-mock.png">
                                    <noscript><img class="rp-image-perspective " width="299" height="566" src="" alt="halo"></noscript><img class="rp-image-perspective ls-is-cached lazyloaded" width="299" height="566" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20299%20566%22%3E%3C/svg%3E" data-src="" alt="halo">
                                </picture>
                            </div>
                        </div>
                        <div class="rp-item-container">
                            <div class="rp-description">
                                <div class="rp-top">
                                    <div class="rp-logo">
                                        <noscript><img width="240" height="70" src="portfolio-images\hls-logo.png" alt="skim"></noscript><img class=" ls-is-cached lazyloaded" width="240" height="70" src="portfolio-images\hls-logo.png" data-src="portfolio-images\hls-logo.png" alt="skin">
                                    </div>
                                    <p class="rp-item-title">BEAUTY AND AESTHETIC CLINIC</p>
                                    <a href="halomediskin.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                                </div>
                                <div class="rp-text">
                                    <p>BEAUTY AND AESTHETIC CLINIC </p>
                                    <p><a href="halomediskin.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="itemBox1 websites">
                    <div class="rp-item">

                        <div class="rp-images-container">
                            <div class="rp-main-image-block">
                                <div class="rp-main-image-container">
                                    <div class="rp-main-perspective-image"></div>
                                    <div class="rp-main-image-wrapper">
                                        <div class="rp-image knopp">
                                            <picture>
                                                <source type="image/webp" srcset="portfolio-images\vayomain.webp">
                                                <source type="image/jpeg" srcset="portfolio-images\vayomain.webp">
                                                <noscript><img width="700" height="450" src="portfolio-images\vayomain.webp" alt="vayo" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\vayomain.webp" alt="vayo" class="lazy rp-image--bg ls-is-cached lazyloaded loaded" data-ll-status="loaded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rp-perspective-wrap">
                                <picture>
                                    <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\vayo-mockup.png">
                                    <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\vayo-mockup.png">
                                    <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="portfolio-images\vayo-mockup.png" alt="vayo"></noscript><img class="rp-image-perspective lazy ls-is-cached lazyloaded loaded" width="299" height="566" src="https://www.digitalsilk.com/wp-content/themes/digitalsilk/assets/images/seo_pages/recent-projects/Knopp-mockup-min.png" alt="vayo" data-ll-status="loaded">
                                </picture>
                            </div>
                        </div>
                        <div class="rp-item-container">
                            <div class="rp-description">
                                <div class="rp-top">
                                    <div class="rp-logo">
                                        <noscript><img width="300" height="70" src="portfolio-images\vayo-logo.png" alt="vayo"></noscript><img class=" ls-is-cached lazyloaded" width="300" height="70" src="portfolio-images\vayo-logo.png" data-src="portfolio-images\vayo-logo.png" alt="vayo">
                                    </div>

                                </div>
                                <div class="rp-text">
                                    <p> Most perfect jewellery for your needs </p>
                                    <p><a href="vayo.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="itemBox1 websites">
                    <div class="rp-item">
                        <div class="rp-images-container">
                            <div class="rp-main-image-block">
                                <div class="rp-main-image-container">
                                    <div class="rp-main-perspective-image"></div>
                                    <div class="rp-main-image-wrapper">
                                        <div class="rp-image sony">
                                            <picture>
                                                <source type="image/webp" srcset="portfolio-images\tomem-main.webp">
                                                <source type="image/jpeg" srcset="portfolio-images\tomem-main.webp">
                                                <noscript><img width="700" height="450" src="portfolio-images\tomem-main.webp" alt="tomem" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\tomem-main.webp" alt="tomem" class="lazy rp-image--bg loaded ls-is-cached lazyloaded" data-ll-status="loaded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rp-perspective-wrap">
                                <picture>
                                    <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\tomem-mockup.png">
                                    <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\tomem-mockup.png">
                                    <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="portfolio-images\tomem-mockup.png" alt="tomem"></noscript><img class="rp-image-perspective lazy loaded ls-is-cached lazyloaded" width="299" height="566" src="portfolio-images\tomem-mockup.png" alt="tomem" data-ll-status="loaded">
                                </picture>
                            </div>
                        </div>
                        <div class="rp-item-container">
                            <div class="rp-description">
                                <div class="rp-top">
                                    <div class="rp-logo">
                                        <noscript><img width="225" height="70" src="portfolio-images\tomem-logo.png" alt="tomem"></noscript><img class=" lazyloaded" width="225" height="70" src="portfolio-images\tomem-logo.png" data-src="portfolio-images\tomem-logo.png" alt="tomem">
                                    </div>
                                    <!-- <p class="rp-item-title">B2C Website that Delights </p> -->
                                    <a href="tomem.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                                </div>
                                <div class="rp-text">
                                    <p>Tomem - A better way delivering affordable quality</p>
                                    <p><a href="tomem.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="itemBox1 websites">
                    <div class="rp-item">

                        <div class="rp-images-container">
                            <div class="rp-main-image-block">
                                <div class="rp-main-image-container">
                                    <div class="rp-main-perspective-image"></div>
                                    <div class="rp-main-image-wrapper">
                                        <div class="rp-image bang">
                                            <picture>
                                                <source type="image/webp" srcset="portfolio-images\aromatik-main.webp">
                                                <source type="image/jpeg" srcset="portfolio-images\aromatik-main.webp">
                                                <noscript><img width="700" height="450" src="portfolio-images\aromatik-main.webp" alt="aromatik" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\aromatik-main.webp" alt="aromatik" class="lazy rp-image--bg loaded ls-is-cached lazyloaded" data-ll-status="loaded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rp-perspective-wrap">
                                <picture>
                                    <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\Aromatik-mockup.png">
                                    <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\Aromatik-mockup.png">
                                    <noscript><img class="rp-image-perspective lazy" width="299" height="70" src="portfolio-images\aromatik-logo.png" alt="aromatik"></noscript><img class="rp-image-perspective lazy loaded ls-is-cached lazyloaded" width="299" height="566" src="portfolio-images\aromatik-logo.png" alt="aromatik" data-ll-status="loaded">
                                </picture>
                            </div>
                        </div>
                        <div class="rp-item-container">
                            <div class="rp-description">
                                <div class="rp-top">
                                    <div class="rp-logo">
                                        <noscript><img width="225" height="70" src="portfolio-images\aromatik-logo.png" alt="aromatik"></noscript><img class=" lazyloaded" width="225" height="70" src="portfolio-images\aromatik-logo.png" data-src="portfolio-images\aromatik-logo.png" alt="aromatik">
                                    </div>
                                    <a href="aromatik.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                                </div>
                                <div class="rp-text">
                                    <p>Strong and earthy aromatherapy scents.</p>
                                    <p><a href="aromatik.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="itemBox1 websites">
                    <div class="rp-item">

                        <div class="rp-images-container">
                            <div class="rp-main-image-block">
                                <div class="rp-main-image-container">
                                    <div class="rp-main-perspective-image"></div>
                                    <div class="rp-main-image-wrapper">
                                        <div class="rp-image fieldedge">
                                            <picture>
                                                <source type="image/webp" srcset="portfolio-images\pc-main.webp">
                                                <source type="image/jpeg" srcset="portfolio-images\pc-main.webp">
                                                <noscript><img width="700" height="450" src="portfolio-images\pc-main.webp" alt="pc" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\pc-main.webp" alt="pc" class="lazy rp-image--bg lazyloaded loaded" data-ll-status="loaded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rp-perspective-wrap">
                                <picture>
                                    <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\pocket-change-mockup.png">
                                    <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\pocket-change-mockup.png">
                                    <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="portfolio-images\pocket-change-mockup.png" alt="pc"></noscript><img class="rp-image-perspective lazy lazyloaded loaded" width="299" height="566" src="portfolio-images\pocket-change-mockup.png" alt="pc" data-ll-status="loaded">
                                </picture>
                            </div>
                        </div>
                        <div class="rp-item-container">
                            <div class="rp-description">
                                <div class="rp-top">
                                    <div class="rp-logo">
                                        <noscript><img width="225" height="70" src="portfolio-images\pc-logo.png" alt="pc"></noscript><img class=" ls-is-cached lazyloaded" width="225" height="70" src="portfolio-images\pc-logo.png" data-src="portfolio-images\pc-logo.png" alt="pc">
                                    </div>
                                    <!-- <p class="rp-item-title">Dynamic Website Design</p> -->
                                    <a href="pocketchange.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                                </div>
                                <div class="rp-text">
                                    <p>Buy and sell your most wanted items today.</p>
                                    <p><a href="pocketchange.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="itemBox1 websites">
                    <div class="rp-item">

                        <div class="rp-images-container">
                            <div class="rp-main-image-block">
                                <div class="rp-main-image-container">
                                    <div class="rp-main-perspective-image"></div>
                                    <div class="rp-main-image-wrapper">
                                        <div class="rp-image dsbls">
                                            <picture>
                                                <source type="image/webp" srcset="portfolio-images\haloskin-main.webp">
                                                <source type="image/jpeg" srcset="portfolio-images\haloskin-main.webp">
                                                <noscript><img width="700" height="450" src="portfolio-images\haloskin-main.webp" alt="haloskin" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\haloskin-main.webp" alt="haloskin" class="lazy rp-image--bg lazyloaded loaded" data-ll-status="loaded">
                                            </picture>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rp-perspective-wrap">
                                <picture>
                                    <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\halomediskin-mockup.png">
                                    <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\halomediskin-mockup.png">
                                    <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="https://www.digitalsilk.com/wp-content/themes/digitalsilk/assets/images/seo_pages/recent-projects/DSBLS_side-min.png" alt="haloskin"></noscript><img class="rp-image-perspective lazy lazyloaded loaded" width="299" height="566" src="portfolio-images\halomediskin-mockup.png" alt="haloskin" data-ll-status="loaded">
                                </picture>
                            </div>
                        </div>
                        <div class="rp-item-container">
                            <div class="rp-description">
                                <div class="rp-top">
                                    <div class="rp-logo">
                                        <noscript><img width="240" height="80" src="portfolio-images\haloskin-logo.png" alt="haloskin"></noscript><img class=" lazyloaded" width="240" height="80" src="portfolio-images\haloskin-logo.png" data-src="portfolio-images\haloskin-logo.png" alt="haloskin">
                                    </div>
                                    <!-- <p class="rp-item-title">B2B Custom Website</p> -->
                                    <a href="halomediskin.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                                </div>
                                <div class="rp-text">
                                    <p>Skincare for everyone</p>
                                    <p><a href="halomediskin.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            =

            <div class="recent-logos">
                <div class="itemBox logos">



                    <div class="row">
                        <div class="col">
                            <img src="portfolio-images\logos\vayo.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\haloskin.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\pocket-exchange.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\rose-gallery.webp">
                        </div>

                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <img src="portfolio-images\logos\stive-to-thrive.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\taxi.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\tomem.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\vayo.webp">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <img src="portfolio-images\logos\slamskaraoke.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\aromtik.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\anumiskincare.webp">
                        </div>
                        <div class="col">
                            <img src="portfolio-images\logos\aarohi.webp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-videos">
                <div class="itemBox video">
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\TVC AnimationJingleVoice Over.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=xXNzMYaTKFQ" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\Shopping Mall Tvc  Voice Over.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=Zb4mNiJUZXA" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\Zic Oil Animation  Voice Over.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=sja5qxhTGUE" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\Mobile App Emo Taxi Promo.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=X2Elv5xPeWU" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\Company Promo Video.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=mcjWbymgs9M" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\MacBook T2 Activation lock Product info Video.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=biTxc3ne8Jg" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\VD Tool Promo Video.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=g4mQdw0kPsk" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\Company Profile Promo Video.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=8GUDTQJk71Q" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="container">
                                <img class="p-img" src="assets\video-thumbnails\Logo Animation.webp" alt="Snow">
                                <a href="https://www.youtube.com/watch?v=SbwhH72_8XI" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <!-- </div>
</div> -->
        </div>
    </section>

    <!-- end new portfolio -->
    <!-- start cta row -->

    <div class="cta-row2">
        <div class="row">
            <h1 class="ml14">
                <span class="text-wrapper">
                    <span class="letters">Get in touch with us</span>
                    <span class="line"></span>
                </span>
            </h1>
            <!-- <h1>Get in touch with us</h1> -->
            <button class="openmodal3 myBtn">Request a Quote&nbsp;&nbsp;<i class="bi bi-arrow-right-circle"></i></button>
        </div>
    </div>

    <!-- end cta row -->

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Our Values</h2>
                <p>We Believe In </p>
            </header>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/values-1.png" class="img-fluid" alt="">
                        <h3>Timely Delivery</h3>
                        <p>Timely delivery is our attitude! Your time is precious and so is our commitment. Digiziners are always on-time to cater clientele.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <img src="assets\img\values2-1.png" class="img-fluid" alt="">
                        <h3>Standard Digital Marketing Solutions </h3>
                        <p>Standard digital marketing solutions with Digiziner means only quality. We have experts of digital niche and we are leading the future.</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="fade-up" data-aos-delay="600">
                        <img src="assets\img\values3-1.png" class="img-fluid" alt="">
                        <h3> Customer Support and PR</h3>
                        <p>Expect the standard services for PR, Sales and Customer support at Digiziner. We are a call away to provide you with the best.</p>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Values Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-headset" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    <!-- start cta row -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Testimonials</h2>
                <p>What they are saying about us</p>
            </header>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Digiziner is a professional service and they are on time.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T1.webp" class="testimonial-img" alt="">
                                <h3>Adriana M</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I like that they are highly responsive and are professional in their approach. My work was on time and of quality, I asked.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T2.webp" class="testimonial-img" alt="">
                                <h3>Lee Sen</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I ordered a small task earlier, they did a great job! Now it’s my second time to work with them and they amused me with their professionalism and work ethics.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T3.webp" class="testimonial-img" alt="">
                                <h3>Maria Tailor</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I have things piled up a week ago, outsourced it to Digiziner and there we go! I am thankful to their team as they have cooperated with me at every level.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T4.webp" class="testimonial-img" alt="">
                                <h3>Robert. T. Adams</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Great work, energetic team, and right expertise is how I will define Digiziners. They were a great help to my website development project.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T5.webp" class="testimonial-img" alt="">
                                <h3>Lisa Tee</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Highly recommend the digital agency, they have accumulated everything a digital agency should have on one platform. No hassle, no worries, no excuses, and no delays.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T6.png" class="testimonial-img" alt="">
                                <h3>Albert Sean Paul</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Digiziner was a recommendation and I was looking for someone who can take responsibility for my Social Media Campaigns. I am happy I met them and how efficiently they are managing my work. Fabulous!’
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T7.webp" class="testimonial-img" alt="">
                                <h3>Ryan D. Kid</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “They took my logo design to the next level. It was an average before but they did a marvelous job and since then I have become their regular client.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T2.webp" class="testimonial-img" alt="">
                                <h3>Martha Mc Ken</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I was facing an issue with my mobile app and I communicated my issues with Digiziners. They were a great help and guide. I am now a satisfied customer for a lifetime.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T8.webp" class="testimonial-img" alt="">
                                <h3>Sean. P. G</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “The best service I have ever experienced online. I got stuck in my inbound SEO and marketing order, I approached them for support and they handled it skillfully. Now, I can outsource my jobs whenever I need to. Thank Digiziners!”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T6.png" class="testimonial-img" alt="">
                                <h3>Charlie. P</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I am an e-business entrepreneur, was launching my business and needs a logo and a website alongside SEO services for better ranking. I got that all done on time, of optimum quality and highly supportive and expert personnel are taking care of my work now.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T9.webp" class="testimonial-img" alt="">
                                <h3>Jane Adams De Costa</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I was a bit skeptical about them initially. They explained everything to me and I felt relieved. They are good at what they do and knows exactly how to cater to different clients and their needs. We had numerous discussions and I am now 100% sure my work is in professional hands. Recommendable service.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T6.png" class="testimonial-img" alt="">
                                <h3>Paul Smith</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “As a newbie in the business world, I have planned to expand my work by going online. Digiziners were not my first choice, but when I approach them they were responsive, supportive, answered my questions skillfully and I was astonished to see how fast they are! They handed over my work like a pro and all I can do is to recommend them in my contacts.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T10.webp" class="testimonial-img" alt="">
                                <h3>Bella Alex</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Hi. I am Michelle and I run my small coffee shop. They designed a great logo for me. Now it has become my identity globally.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T11.webp" class="testimonial-img" alt="">
                                <h3>Michelle Richards</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “They are best! I mean what else you would ask for: affordable, timely, professional, supportive, and most of all they are providing a complete package as a digital agency. Love them!”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T12.webp" class="testimonial-img" alt="">
                                <h3>Lee Kim Shuang</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “My dad was looking for someone to run his e-business operations. I found Digiziners as an affordable option and gave them details. They designed a package according to our specifications and Walla!!! They did it. I am happy to have them beside me. Thank You Digiziners.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T13.webp" class="testimonial-img" alt="">
                                <h3>Max Adams</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “My work was according to my needs and I feel good to have it on time. Thanks, Digiziner”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T12.webp" class="testimonial-img" alt="">
                                <h3>Michael </h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “My story is pretty short. It’s a win-win outcome with Digiziners”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T6.png" class="testimonial-img" alt="">
                                <h3>Rhea Sinha</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “I am thankful that they have managed to meet my tough deadline.”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T14.png" class="testimonial-img" alt="">
                                <h3>Wayne T</h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                “Hi, I am Peter and I approached Digiziners for a professional web designing task. I have lost my hope though as I have wasted a lot of money previously. But Digiziners saved me a lot. Nice Job!”
                            </p>
                            <div class="profile mt-auto">
                                <img src="testimonial-img/T15.webp" class="testimonial-img" alt="">
                                <h3>Peter </h3>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->


    <div class="cta-row3">
        <div class="card">

            <h1>Get in touch with us</h1>
            <!-- <a href="tel:12345678"><i class="bi bi-telephone"></i>&nbsp;&nbsp;Give us a call</a> -->
            <a href="tel:12345678">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Give us a call
            </a>
            <!-- <button class="openmodal4 myBtn">Request a Quote&nbsp;&nbsp;<i class="bi bi-arrow-right-circle"></i></button>  -->
        </div>
    </div>

    <!-- end cta row -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </header>

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p>Bradford,<br>UK</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+44 20 8144 0322</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@digiziner.com<br>contact@digiziner.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form id="contact-form" method="post" action="assets\js\contact-form\contact.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_name"><i class="bi bi-person"></i>&nbsp;First name *</label>

                                        <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_lastname"><i class="bi bi-person"></i>&nbsp;Last name *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_email"><i class="bi bi-envelope"></i>&nbsp;Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!-- <div class="form-group">
                              <label for="form_need">Please specify your need *</label>
                              <select id="form_need" name="need" class="form-control" placeholder="Please specify your need *" required="required"  data-error="Please specify your need.">
                                  <option value=""></option>
                                  <option value="Request quotation">Request quotation</option>
                                  <option value="Request order status">Request order status</option>
                                  <option value="Request copy of an invoice">Request copy of an invoice</option>
                                  <option value="Other">Other</option>
                              </select>
                              <div class="help-block with-errors"></div>
                          </div> -->
                                    <div class="form-group">
                                        <label for="form_phone"><i class="bi bi-telephone"></i>&nbsp;Phone *</label>
                                        <input id="form_phone" type="phone" name="phone" class="form-control" required="required" data-error="Valid phone is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message"><i class="bi bi-chat-left-text"></i>&nbsp;Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <!-- <div class="row">
                      <div class="col-md-12">
                          <p class="text-muted">
                              <strong>*</strong> These fields are required. Contact form template by
                              <a href="https://bootstrapious.com/p/how-to-build-a-working-bootstrap-contact-form" target="_blank">Bootstrapious</a>.</p>
                      </div>
                  </div> -->
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section><!-- End Contact Section -->



</main><!-- End #main -->
<?php include 'include/footer.php' ?>