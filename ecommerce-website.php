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

  <div class="page-header-ecom">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>Ecommerce Website</li>
      </ol> -->
    <h2>Ecommerce Website</h2>

  </div>


  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <div class="container" data-aos="fade-up">
      <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <!-- <h3>Who We Are</h3> -->
            <h2>LOGO DESIGN</h2>
            <p>
              Digiziner specializes in Logo designing. A crux of any business is designing its logo ingeniously that it becomes an inspiration for its audiences. Online logo designing is customized, creates a brand image through exclusiveness and being creative at the same time. Digiziner’s experts help you establish that foundation for your business. We entice being elegant yet creative to make visitors your potential client. Whether it’s a start-up or a corporation, we establish your online presence and support it to sustain the competitive market.
            </p>
            <div class="text-center text-lg-start">
              <!-- <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                      <span>Give us a call</span>
                      <i class="bi bi-arrow-right"></i>
                    </a> -->
              <button class="openmodal5 myBtn btn-read-more">Request a quote
                <i class="bi bi-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets\img\logo-design.webp" class="img-fluid" alt="">
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
        <p>How we are a different logo designing service?</p>
      </header>

      <div class="row">

        <div class="col-lg-4">
          <div class="box" data-aos="fade-up" data-aos-delay="200">
            <img src="assets\img\logo-value1.png" class="img-fluid" alt="">
            <h3>Customized logo design </h3>
            <p>Digiziner is a Customized logo design service as we know how it starts and where to start from. Doing it all from scratch by taking small steps from working on an inspiration/ idea to establishing your brand distinctively. </p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="400">
            <img src="assets\img\logo-value2.png" class="img-fluid" alt="">
            <h3>Varied concepts </h3>
            <p>Dealing with varied concepts and working on developing their distinctive identity is what we aim for. Our logo designers work on developing and incorporating your details with their creativity to mark the brand across the globe.</p>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="600">
            <img src="assets\img\logo-value3.png" class="img-fluid" alt="">
            <h3>Being Minimalist </h3>
            <p>Being Minimalist is our approach! Digiziner believes in simple yet impactful logo designing that is the brand message must be conveyed clearly and easily. We endure professional logo designing service with dedication and the right expertise.</p>
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