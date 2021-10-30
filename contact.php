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

  <div class="page-header-contact">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>Contact</li>
      </ol> -->
    <h2>Contact</h2>

  </div>
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
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
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
          <form id="contact-form" method="post" action="contact.php" role="form">

            <div class="messages"></div>

            <div class="controls">

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="form_name"><i class="bi bi-person"></i>&nbsp;Firstname *</label>

                    <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="form_lastname"><i class="bi bi-person"></i>&nbsp;Lastname *</label>
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

  <?php include 'include/footer.php' ?>