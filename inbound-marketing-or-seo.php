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
  <div class="page-header-seo">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>Inbound Marketing Or SEO</li>
      </ol> -->
    <h2>Inbound Marketing Or SEO</h2>

  </div>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>INBOUND MARKETING AND SEO </h2>
            <p>
              Inbound marketing is a much desired and most awaited revolutionary marketing practice eliminating distances between consumers and sources. The smart data strategy enables entrepreneurs to have a high reach to enablers while making a standard PR. Inbound marketing includes activities with rapid ROI. For instance, developing marketing content strategy, marketing campaigns, and establishing services accordingly. At Digiziner we practice both SEO and inbound marketing creatively.The creativity lies in the execution of content in blogs, marketing campaigns, white papers, infographics, articles, marketing campaigns, landing pages, pay per click and other SEO.
            </p>
            <div class="text-center text-lg-start">
              <!-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Request a quote</span>
                      <i class="bi bi-arrow-right"></i>
                    </a> -->
              <button class="openmodal5 myBtn btn-read-more">Request a quote
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets\img\seo-page-main.webp" class="img-fluid" alt="">
          <style>
            section#about img {
              width: 100% !important;
            }
          </style>
        </div>

      </div>
    </div>

  </section><!-- End About Section -->


  <!-- start cta row -->


  <div class="cta-row">
    <div class="row">
      <div class="col-lg-6">
        <!-- <h1>Get in touch with us</h1> -->
        <h1 class="ml2"> We can help you in SEOs </h1>
        <style>
          h1.ml2 {
            font-size: 63px;
            width: 100%;
            margin-top: 20px !important;
          }

          @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation: landscape) {
            h1.ml2 {
              font-size: 50px !important;
              width: 140% !important;
              text-align: left !important;
            }
          }
        </style>
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

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <!-- <h2>Our Values</h2> -->
        <p>Inbound marketing: a never-ending success story!
        </p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\seo-value1.png" class="img-fluid" alt="">
            <h3>SEO </h3>
            <p>Incorporating SEO smartly means establishing a one-stop Inbound and SEO Marketing solutions for your B2B needs. This even generates the best ROI from your marketing campaigns. Revenues and Calls to action are well-balanced in our Inbound and SEO marketing services.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="assets\img\seo-value2.png" class="img-fluid" alt="">
            <h3>SERPs </h3>
            <p>Google SERPs is what we aim for. Through our intelligent SEO and inbound marketing, we keep it all in the algorithm. Google will rank your page with our fully optimized strategic plan for your business customized accordingly.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets\img\seo-value3.png" class="img-fluid" alt="">
            <h3>Smart data</h3>
            <p>Smart data enables us to design result-driven strategies for your business. Our experts' design marketing campaigns with smart data and high-standard techs to manage it all under one roof. </p>
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
<!-- ======= Footer ======= -->

<?php include 'include/footer.php' ?>