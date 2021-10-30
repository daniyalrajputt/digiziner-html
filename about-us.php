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
  <div class="page-header-about">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>About Us</li>
      </ol> -->
    <h2>About Us</h2>

  </div>


  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>ABOUT US:</h2>
            <p>
              Established in 2015, Digiziners are surviving the competition of the global digital market. We are excelling every day, intending to boost our digital existence and to meet the challenges of the business world for our clients. We are exploring and managing varying business websites with our brilliant digital agency services package.
              At Digiziner our digital agility and user-friendly approach promises customer engagement, maximum conversion, lead increment, satisfaction, and repeated visits. Our strategic insights deliver measurable results within no time.
              We are providing SEO-friendly websites, smart social media marketing campaigns, and professional assistance for all your digital marketing queries with the right expertise. We bridge the differences one can have dealing with the B2B and B2C global digital marketplace.

            </p>
            <!-- <div class="text-center text-lg-start">
                    <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Read More</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div> -->
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets\img\team.webp" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section -->

  <!-- ======= About Section 2 ======= -->
  <section id="about" class="about">
    <style>
      section#about {
        margin-bottom: -80px !important;
      }
    </style>

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets\img\about-page.webp" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>TEAM OF EXPERTS:</h2>
            <p>
              At Digiziner we apprehend e-business challenges today. The digital solutions we provide are intelligently crafted and customized. We are a full IT support package using technology as an absolute solution for your B2B and B2C challenges. Digiziner adopts innovative ideas and skillfully transforms them into a living reality that is a long-term success! We adhere to improve to lead the market. The experts share insights into the IT operations for digital transformations through technology. With our digital marketing and brand strategizing campaigns we have become a pioneer service in the International market.
              Our proactive approach towards digitalizing your brand and making it recognized internationally is a fact we are living every day.

            </p>
            <!-- <div class="text-center text-lg-start">
                            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                              <span>Read More</span>
                              <i class="bi bi-arrow-right"></i>
                            </a>
                          </div> -->
          </div>
        </div>
      </div>
    </div>

  </section><!-- End About Section 2 -->

  <!-- ======= About Section 3 ======= -->
  <section id="about" class="about">
    <style>
      section#about {
        margin-bottom: -80px !important;
      }
    </style>

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>OUR MISSION:</h2>
            <p>
              As an International standard digital marketing agency, we aim to develop and continue to prosper with our clients and the global digital world. Our mission is to contribute to the E-commerce sector.
              Digiziner is started to develop an environment where everyone can excel and prosper in their relative niches. Here is how we manage and sustain the digital agency challenges.
            </p>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets\img\our-mission.webp" class="img-fluid" alt="">
        </div>

      </div>
    </div>

  </section><!-- End About Section 3 -->

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

  <!-- ======= Values Section ======= -->
  <!-- <section id="values" class="values">
    
          <div class="container" data-aos="fade-up">
    
            <header class="section-header">
              <h2>Key Features</h2>
              <p>Odit est perspiciatis laborum et dicta</p>
            </header>
    
            <div class="row">
    
              <div class="col-lg-4">
                <div class="box" data-aos="fade-up" data-aos-delay="200">
                  <img src="assets/img/values-1.png" class="img-fluid" alt="">
                  <h3>Standard digital marketing solutions </h3>
                  <p>Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit. Et veritatis id.</p>
                </div>
              </div>
    
              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up" data-aos-delay="400">
                  <img src="assets/img/values-2.png" class="img-fluid" alt="">
                  <h3>Sales, Support, and PR of international standard</h3>
                  <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
                </div>
              </div>
    
              <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="box" data-aos="fade-up" data-aos-delay="600">
                  <img src="assets/img/values-3.png" class="img-fluid" alt="">
                  <h3>24/7 Customer support service responsive PR </h3>
                  <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
                </div>
              </div>
    
            </div>
    
          </div> 
        </section>-->

  <!-- End Values Section -->

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