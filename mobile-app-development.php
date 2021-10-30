<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <!-- <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section> -->

  <!-- End Breadcrumbs -->

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
  <div class="page-header-mobile-app">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>Mobile App Development</li>
      </ol> -->
    <h2>Mobile App Development</h2>

  </div>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>MOBILE APP DEVELOPMENT</h2>
            <p>
              Mobile App Development starts to kick off with an idea. We support the idea with our strategy, design, and development experts. Our Mobile App Development services are integrated with the latest technologies to create revolutionary services and products. Businesses today need transparent, tactful, and imperative apps. Mobile App development service connects you more broadly. It maximizes business potential incorporated with the latest programming languages.
              Digiziner offers premium and exclusive Mobile app development mediums to choose from.

            </p>
            <div class="text-center text-lg-start">
              <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Give us a call</span>
                <i class="bi bi-arrow-right"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets\img\mobile-app-main.webp" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->


  <!-- start cta row -->


  <div class="cta-row">
    <div class="row">
      <div class="col-lg-6">
        <!-- <h1>Get in touch with us</h1> -->
        <h1 class="ml2">We Are Available For You</h1>
        <style>
          h1.ml2 {
            font-size: 63px;
            width: 120%;
            margin-top: 20px !important;
          }

          @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {

            h1.ml2 {
              font-size: 24px !important;
              width: 100% !important;
              margin-top: 0px !important;
              text-align: center !important;
            }
          }

          @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) {
            h1.ml2 {
              font-size: 40px !important;
              margin-top: 30px !important;
            }

          }
        </style>
      </div>
      <div class="col-lg-6">

        <!-- <a href="tel:12345678"><i class="bi bi-telephone"></i>&nbsp;&nbsp;Give us a call</a> -->
        <!-- <a href="tel:12345678">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    Request a quote
  </a> -->
        <button class="openmodal6 myBtn">Request a quote
          <i class="bi bi-arrow-right"></i>
        </button>
        <!-- <button class="openmodal6 myBtn">Request a Quote&nbsp;&nbsp;<i class="bi bi-arrow-right-circle"></i></button>  -->
      </div>

    </div>
  </div>

  <!-- end cta row -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <!-- <h2>Our Values</h2> -->
        <p>WHAT TO CHOOSE FROM?</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\webapp-value1.png" class="img-fluid" alt="">
            <h3>Android, iOS apps </h3>
            <p>Android, iOS apps are direct and user-friendly, and intuitive. Digiziner offers innovatory ideas to ‘change the game’ with their distinctive business approach. Our Android and iOS apps are competent, technically sound, and ranks high on App Store.
            </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="assets\img\webapp-value2.webp" class="img-fluid" alt="">
            <h3>Progressive web apps</h3>
            <p>Progressive web apps at Digiziners are enhanced with capabilities, installability, and reliability and are highly accessible. This is an ultimate fusion combo for an ultimate experience for B2B needs.
            </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets\img\webapp-value3.png" class="img-fluid" alt="">
            <h3>Hybrid Apps </h3>
            <p>Digiziner’s Hybrid Apps balances the scales of apps for its users. A careful blend of Native and Progressive apps that we offer at Digiziners. HTML, JavaScript, CSS and HTML5 are techs incorporated in mobile WebView.
            </p>
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
</main><!-- End #main -->

<?php include 'include/footer.php' ?>