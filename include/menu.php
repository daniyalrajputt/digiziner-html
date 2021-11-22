<!-- Begin: Header -->
<header class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="topBar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>Get Upto 50% OFF on Your First Purchase </p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="tel:+6765765765765"><i class="fas fa-phone-alt"></i>+67 65765765765</a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigate">
        <div class="an-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg p-0">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="services.php">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="portfolio.php">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>
                        <div class="form-inline">
                            <a href="#" class="themeBtn" data-toggle="modal" data-target="#requestModal">Request a Quote</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="requestModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" class="form-quote" method="post">
                <span class="close" data-dismiss="modal" aria-label="Close">&times;</span>
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
</div>
<!-- END: Header -->