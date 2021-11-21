<?php include 'include/header.php' ?>
<title>Digiziner</title>
</head>

<body>
    <?php include 'include/menu.php' ?>

    <!-- Begin: Main Slider -->


    <div class="main-slider innerSlider">
        <img class="img-fluid w-100" src="images/contact-pt.webp" alt="image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-md-12">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END: Main Slider -->




    <section class="contactSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5 text-center">
                    <h2 class="secHeading"><span>CONTACT</span>Contact Us</h2>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="fal fa-map-marker-alt"></i>
                                <h3>Address</h3>
                                <p>Bradford,<br>UK</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box top">
                                <i class="fal fa-phone-alt"></i>
                                <h3>Call Us</h3>
                                <p>+44 20 8144 0322</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="fal fa-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@digiziner.com<br>contact@digiziner.com</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box top">
                                <i class="fal fa-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_name"><i class="fal fa-user-alt"></i>&nbsp;First name *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_lastname"><i class="fal fa-user-alt"></i>&nbsp;Last name *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_email"><i class="fal fa-envelope"></i>&nbsp;Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="form_phone"><i class="fal fa-phone-alt"></i>&nbsp;Phone *</label>
                                        <input id="form_phone" type="phone" name="phone" class="form-control" required="required" data-error="Valid phone is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message"><i class="fal fa-comment-alt-lines"></i>&nbsp;Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="themeBtn">Send message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <?php include 'include/footer.php' ?>