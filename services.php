<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>
<div class="page-header-services">
  <!-- <ol>
      <li><a href="index.php">Home</a></li>
      <li>About Us</li>
    </ol> -->
  <h2>Services</h2>

</div>
<!-- ======= Breadcrumbs ======= -->
<!-- <section class="breadcrumbs">
        <div class="container">
  
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Services</li>
          </ol>
          <h2>Services</h2>
  
        </div>
      </section> -->

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
<!-- End Breadcrumbs -->
<br>
<br>
<header class="section-header">
  <h2>Services</h2>
  <p>Veritatis et dolores facere numquam et praesentium</p>
</header>
<br>
<br>
<div class="services">
  <div class="bg-circle">
    <div class="container">
      <div class="services-list">

        <div class="services-list--item -odd aos-init" data-aos="slide-services" data-title="Website Development">
          <div class="services-list--content">
            <a class="services-list--link" href="website-development.php">
              <h4 class="services-list--title hide-tablet">Website Development</h4>
              <p class="services-list--text">Digiziner is a fast, result-oriented, and standard Web Development service for B2B purposes. The presence and interactions add value to your brand or service so, we create websites for corporate and competitive businesses through our website development model. </p>
              <span class="arrow-link -dark services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>CMS development & deployment</li>
                <li>Creating Impressive landing pages</li>
                <li>Creating Facebook pages</li>
                <li>Designing and development of Micro sites</li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="assets\img\web-dev.webp"></img>
            </div>
          </div>
        </div>

        <div class="services-list--item -even aos-init aos-animate" data-aos="slide-services" data-title="Mobile App Development">
          <div class="services-list--content">
            <a class="services-list--link" href="mobile-app-development.php">
              <h4 class="services-list--title hide-tablet">Mobile App Development</h4>
              <p class="services-list--text">Mobile App Development starts to kick off with an idea. We support the idea with our strategy, design, and development experts. </p>
              <span class="arrow-link services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>iOS App Development
                </li>
                <li>Android App Development
                </li>
                <li>Prototyping & Concept Development
                </li>
                <li>Bot and Conversational Interface Development
                </li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="services-images\app-dev.webp"></img>
            </div>
          </div>
        </div>


        <div class="services-list--item -odd aos-init" data-aos="slide-services" data-title="Social Media Marketing">
          <div class="services-list--content">
            <a class="services-list--link" href="social-media-marketing.php">
              <h4 class="services-list--title hide-tablet">Social Media Marketing</h4>
              <p class="services-list--text">Digiziner is a Social Media marketing agency you are looking for. We design digital media strategies for multi-channel campaigns. </p>
              <span class="arrow-link -dark services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>Facebook</li>
                <li>Twitter</li>
                <li>Instagram</li>
                <li>LinkedIn</li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="services-images\social-med.webp"></img>
            </div>
          </div>
        </div>


        <div class="services-list--item -even aos-init aos-animate" data-aos="slide-services" data-title="Animation">
          <div class="services-list--content">
            <a class="services-list--link" href="animation.php">
              <h4 class="services-list--title hide-tablet">Animation</h4>
              <p class="services-list--text">Animation plays a subsequent role in keeping your visitors interested and holding their attention for a long. We have 3D animation experts to launch or brand your business globally. </p>
              <span class="arrow-link services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>Fully customized videos
                </li>
                <li>Consistent communication with our friendly team
                </li>
                <li>Rounds of corrections in each stage of the process
                </li>
                <li>A simple 3-step production process
                </li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="services-images\anime.webp"></img>
            </div>
          </div>
        </div>


        <div class="services-list--item -odd aos-init" data-aos="slide-services" data-title="Graphic Designing">
          <div class="services-list--content">
            <a class="services-list--link" href="graphic-designing.php">
              <h4 class="services-list--title hide-tablet">Graphic Designing</h4>
              <p class="services-list--text">Graphic designing is an impression creator that says it all! The impression created through visuals and designing accompanied with the right type of logo is a professional deal. </p>
              <span class="arrow-link -dark services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>3D designing</li>
                <li>Sketching</li>
                <li>Brochure designing</li>
                <li>Poster designing</li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="services-images\graphic-des.webp"></img>
            </div>
          </div>
        </div>


        <div class="services-list--item -even aos-init aos-animate" data-aos="slide-services" data-title="Ecommerce Website">
          <div class="services-list--content">
            <a class="services-list--link" href="ecommerce-website.php">
              <h4 class="services-list--title hide-tablet">Logo Design</h4>
              <p class="services-list--text">Digiziner specializes in Logo designing. A crux of any business is designing its logo ingeniously that it becomes an inspiration for its audiences. </p>
              <span class="arrow-link services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>3D Logos
                </li>
                <li>Typography Logos
                </li>
                <li>Minimalist Logos
                </li>
                <li>Mascot Logos
                </li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="services-images\e-commerce.webp"></img>
            </div>
          </div>
        </div>


        <div class="services-list--item -odd aos-init" data-aos="slide-services" data-title="Inbound Marketing Or SEO">
          <div class="services-list--content">
            <a class="services-list--link" href="inbound-marketing-or-seo.php">
              <h4 class="services-list--title hide-tablet">Inbound Marketing Or SEO</h4>
              <p class="services-list--text">Inbound marketing is a much desired and most awaited revolutionary marketing practice eliminating distances between consumers and sources. The smart data strategy enables entrepreneurs to have a high reach to enablers while making a standard PR.</p>
              <span class="arrow-link -dark services-list--more">VIEW MORE</span>
            </a>
          </div>
          <div class="services-list--animations">
            <div class="services-list--module">
              <ul class="services-list--features">
                <li>Smart Data – orientated strategies</li>
                <li>Rapid sales enablement</li>
                <li>High Scale PR</li>
                <li>Increased Marketing ROI</li>
              </ul>
            </div>
            <div class="services-list--media">
              <img src="services-images\seo.webp"></img>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<?php include 'include/footer.php' ?>