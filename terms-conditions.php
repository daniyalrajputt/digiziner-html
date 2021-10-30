<?php include 'include/header.php' ?>
<?php include 'include/menu.php' ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Terms & Conditions</li>
      </ol>
      <h2>Terms & Conditions</h2>

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
  <div class="terms-sec">
    <style>
      .terms-sec {
        padding: 30px !important;
      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (-webkit-min-device-pixel-ratio: 2) {
        section.breadcrumbs {
          margin-top: 170px;
        }

      }

      @media only screen and (min-device-width: 320px) and (max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2) {

        .terms-sec {
          padding: 20px !important;
        }
      }
    </style>
    <div class="row">
      <h2>Revision policy: </h2>
      <p>Digiziner guarantees unlimited revisions on their services packages. Customers are asked to select their package and they will be provided services according to that. The design, plan, and concept will be the same. The turnaround time will be 48 hours once the order is confirmed. </p>
      <h2>REFUND POLICY: </h2>
      <p>Digiziner promises customer satisfaction alongside unlimited free revisions. Enabling to improve the initial work or design brief (free) with your account area.
        Due to any processing error a duplicate charge, failed attempts to fulfill any of your specific designing needs, or inability to deliver designed order according to the policy, we offer a refund of your ordered design package’s amount.
      </p>
      <p>In case of dissatisfaction with any order (services) delivered by Digiziners, a refund request can be submitted. The refund request must be submitted within five days of completion of the initial design. However, after five days of delivering the initial design, an absence of refund claim/ request will be considered as approved by both parties. The combo packages and the special packages follow the refund policy applied as of the single package. </p>
      <p>Our Refund Processing Chart will help you identify the right refund request for your package. </p>
      <p>The arrangement is shared for your acknowledgment.</p>
      <ul>
        <li>Requested refund is, if made before delivery a full refund is offered to the client (Less 10% processing fee and service charges)Refund, if requested within 48 hours of the delivered initial design, a 66% refund is viable. </li>
        <li>If a request refund is submitted in between 48 – 120 hours of initial design delivery, then a 33% refund can be claimed</li>
        <li>After 120 hours of the initial design delivery, no refund request would be entertained. As we believe in our customer support you are guided and encouraged to Contact Us with your concerns.</li>
        <li>We encourage you to request refunds from our customer support department. Digiziners will reserve the right to maybe approve or disapprove your requests upon violation of user agreement. This will be managed on the case-to-case basis.</li>
      </ul>
      <h2>Want to claim your refund? </h2>
      <p>The arrangement is shared to show how we fulfill your refund requests step-by-step:</p>
      <p>When you claim a refund with your concern via phone, email, or chat </p>
      <ol>
        <li>Our first step is to resolve it under revision policy. We will send you the approval of the refund request form through email from the refund department.</li>
      </ol>
      <p>Once your claim is resolved and refund, Digiziners will obtain design rights. Any version of the design sent to you previously will no longer be displayed or shared by you. The specifications are mentioned below:</p>
      <ul>
        <li>Since design rights no longer belong to you and are transferred to the company, you will not possess them directly or indirectly. The response, the content, media, product, and also ownership interest are no longer yours.</li>
        <li>Digiziner is collaborating and following the Government Copyright Agencies and we share Copyright Acquisition information specifically for refunded projects. This limits re-use of the original product, or design in future.</li>
      </ul>
      <h2>ACCOUNT AREA:</h2>
      <p>Communication is easy this way. It is your responsibility to keep an eye on the account area to address concerns, instructions, and queries shared by our designers. To have solid grounds for claiming refunds, one is required to check the account area. In case of any uncertainty on using the account area, the customer support team can help you any time. </p>
      <h2>QUALITY ASSURANCE POLICY:</h2>
      <p>Providing satisfaction at every step our experts do not ignore or deviate specifications shared by you in the order form. </p>
      <ul>
        <li>For optimum satisfaction, quality and uniqueness, we create customized pieces after thorough research.</li>
        <li>Guaranteed success and satisfaction.</li>
        <li>Multiple free revisions according to specifications mean 100% satisfactory results in the end.</li>
        <li>Revisions upon ordered designs until you get what you want. </li>
        <li>Complete coordination means complete satisfaction. We offer coordination for free to your printing contacts (whenever required). </li>
      </ul>
      <h2>Delivery Policy: </h2>
      <p>When an ‘Order Confirmation’ on design order files is tagged, they are transferred to the Account Area with the specified date on it. A confirmation email is sent to you to inform you about the design order delivery is transferred to the account area. Our policies related to refunds and revisions are subject to specified through time and date the order delivered to your account area. </p>
      <p>All our ‘confirmed orders’ are designed customized and are delivered via emails in 48 to 72 hours. We offer an URGENT Delivery service for clients who wants their orders in less than 24 hours. For this service, you have to pay $ ___. Contact us for further support.</p>
      <h2>Ownership of the work: </h2>
      <p>Any artwork which is approved, paid and the final file is already delivered to the client is the client’s property. All rights are reserved by the client as it is fully paid. The claims and copyrights of paid projects are timely transferred to avoid last-minute hassles for both parties.</p>
      <h2>Trademarks, Ownership, and Copyrights: </h2>
      <p>Ownership is retained of all drafts, artwork, and final products to clients. We can use only the end-product for our promotional activity i.e., displaying it on our website. This makes our portfolio strong and eye-catching. The final product is not used for profits or sold to third parties by Digiziners. The only client is authorized to use it explicitly. </p>
      <p>Only the client reserves the assigned rights to use the product, content, animation, or design with his/ her discernment. However, Digiziner promises to use the designs as per rules and policies (legal) which may not harm the client’s integrity, identity, and reputation. </p>
      <h2>Record maintenance: </h2>
      <p>As we keep a record of our finalized, delivered work we will keep the final design after delivering the final files to our clients. So, whenever a client requisites final design files, we provide them at their request. </p>
      <h2>Communication Policy: </h2>
      <p>Digiziner is not responsible or liable for correspondences through emails other than our main website: <a href="digiziner.com">www.digiziner.com</a>. The toll-free numbers mentioned on our website are another way to reach us. Any damage or fraud caused by irrelevant correspondence is not our responsibility. We and our systems only recognize clients accessing through our main domain, authorized email, and toll-free numbers. </p>
      <h2>Customer Support: </h2>
      <p>We know how important it is to have a 24 hours Customer support. Your concerns and queries are welcomed anytime anywhere. </p>

    </div>
  </div>
  <!-- End privacy policy Section -->

</main><!-- End #main -->
<?php include 'include/footer.php' ?>