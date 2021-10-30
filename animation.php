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
  <div class="page-header-animation">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>Animation</li>
      </ol> -->
    <h2>Animation</h2>

  </div>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>ANIMATION</h2>
            <p>
              Animation plays a subsequent role in keeping your visitors interested and holding their attention for a long. We have 3D animation experts to launch or brand your business globally. Why make them settle for less? Animation is completely customized and consistent to allure them to visit again and again. Animation introduces your views, objectives and communicates your business needs before even the reader reads the content. 3D Animation is essential for entrepreneurs today.
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
          <img src="assets\img\animation-main.webp" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- start cta row -->


  <div class="cta-row">
    <div class="row">
      <div class="col-lg-6">
        <!-- <h1>Get in touch with us</h1> -->
        <h1 class="ml2">Start your project now</h1>
        <style>
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
      </div>

    </div>
  </div>

  <!-- end cta row -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <!-- <h2>Our Values</h2> -->
        <p>Animation; impactful, powerful, and successful
        </p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\animation-value1.png" class="img-fluid" alt="">
            <h3>Consistent progress and approach </h3>
            <p>Consistent progress and approach define us as creative animation services at Digiziner. We range explainer videos, commercial videos, testimonial videos, and internal videos. For businesses, we have company stories to build their B2B image.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="assets\img\animation-value2.png" class="img-fluid" alt="">
            <h3>3 step production process </h3>
            <p>We have 3 step production process for creating masterpieces 100% customized. In each round, we offer amendments as per your requirement</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets\img\animation-value3.png" class="img-fluid" alt="">
            <h3>Build a brand image</h3>
            <p>We create a benchmark with our standard 3D animation services and video animation services. We design your persona in the marketplace for a B2B and B2C brand image. </p>
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