<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <style>
      .privacy-sec {
        padding: 30px !important;
      }

      .terms-sec ul li {
        list-style-type: circle !important;
      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) {
        section.breadcrumbs {
          margin-top: 170px;
        }

      }

      @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {

        .privacy-sec {
          padding: 20px !important;
        }
      }
    </style>
    <div class="container">

      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Privacy & Policy</li>
      </ol>
      <h2>Privacy & Policy</h2>

    </div>
  </section><!-- End Breadcrumbs -->

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
  <!-- ======= privacy policy Section ======= -->
  <div class="privacy-sec">
    <div class="row">
      <div class="col">
        <h2>What information is required?</h2>
        <p>The information we require is personally identifiable information for signing up on our website. Else, fill the form fields with your provided information; Name, Contact number, Email address, and mailing address. </p>
        <h2>How do we use this information?</h2>
        <p>Your shared details are used for the following:</p>
        <strong>For personalizing experience:</strong>
        <p>Your information is processed to cater to your needs individually and for better response. </p>
        <strong>For making our website responsive: </strong>
        <p>We aim to progress every time you reach us. We use your information for a better service experience. Your response means a lot!</p>
        <strong>Better customer support: </strong>
        <p>means better service. Your information is used for our immediate support and response. </p>
        <strong>Promotional emails and other information: </strong>
        <p>Your email address is a GATEWAY for us to connect with you any time anywhere! You will get promotional emails and special offers through it.</p>
        <strong>Staying connected: </strong>
        <p>To makes it easy to contact you or respond to your requests timely. </p>
        <strong>Keeping your information safe: </strong>
        <p>We have adopted various methods to maintain and safeguard your details. We access your information and store the password in the encrypted database.</p>
        <strong>How do we use utilize cookies? </strong>
        <p>Cookies are files that are transmitted (with your permission) to your hard drive through the browser. Once transferred, your browser is identified and certain information is recorded. Cookies are used to track, understand and remember your preferences for your next visit. The site traffic and interaction together enhance the site experience. We record such information anonymously which means this does not have any of your personally identifiable data which is only submitted through fill-in-form.</p>
        <strong>Remarketing Advertisement: </strong>
        <p>is another use of cookies to track user’s visits to the website. With Google’s display-ads remarketing advertisements are visibly shown.</p>
        <strong>Privacy by every means: </strong>
        <p>We have standard privacy rules i.e., we do not trade, transfer, distribute and sell any of your information to third parties and outsiders. Your personally identifiable information is not disclosed to third parties and entities managing and operating our website. If required, then keeping the details confidential is what they are bound to. We have site policies and laws to comply with to safeguard your and our property, information, and rights. However, the non-personal identifiable details are shared for promotion or advertising purposes with distinctive, but concerned parties. </p>
        <strong>Third-party involvement: </strong>
        <p>is allowed to introduce their services or products on our website. As they follow distinctive policies and rules, we are not responsible for third-party activities, their content, and third-party sites. </p>
        <strong>We follow the Online Privacy Policy: </strong>
        <p>to information collected from websites i.e., online. This may not include details gathered offline.</p>
        <strong>Our Terms and Conditions: </strong>
        <p>guide you to get familiarize with our disclaimers. Terms and conditions will inform you about the limitations and the site’s usage.<br>Visit our <a href="">terms & conditions </a>page.</p>
        <strong>Your Consent: </strong>
        <p>is shown through your agreement to the privacy policy displayed on our website. </p>
        <strong>Privacy Policy Alterations: </strong>
        <p>We keep our users and visitors informed in case of alterations in the privacy policy. We appreciate visiting our page more often to stay updated. </p>
        <strong>We use Google AdWords: </strong>
        <p>Our website uses Google AdWords remarketing services for advertisement on third-party websites. This involves Google too. It means we can advertise even to those who haven’t finished any task on our website. For instance, if we use the contact form to ask any query or have an inquiry, this will be saved as an ad on the Google search result page. It may be present in the Google Display Network. The third-party vendors access cookies and ads on someone else’s previous visit to our website. The data gathered is used as our Privacy Policy and even Google’s privacy policy. By visiting Network Advertising Initiative opt-out page a third party can use the vendor’s cookies.</p>
        <strong>Contact Us: </strong>
        <p>please reach us in case of any query or concerns in our privacy policy. Below are the details to reach us. </p>
        <br>
        <strong>Website:</strong>
        <a href="digiziner.com">digiziner.com</a>
        <strong>Email:</strong><a href="mailto:info@digiziner.com">info@digiziner.com</a>

      </div>
    </div>
  </div>
  <!-- End privacy policy Section -->

</main><!-- End #main -->

<?php include 'include/footer.php' ?>