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
  <div class="page-header-portfolio">
    <!-- <ol>
        <li><a href="index.php">Home</a></li>
        <li>Portfolio</li>
      </ol> -->
    <h2>Portfolio</h2>

  </div>



  <!-- new portfolio -->
  <section id="portfolio-new" class="portfolio-new">
    <header class="section-header">
      <h2>Portfolio</h2>
      <p>Check our latest work</p>
    </header>
    <div class="p-fill">
      <div>
        <ul>
          <!-- <li class="list" data-filter="all">All</li> -->
          <li class="list active" data-filter="websites">Websites</li>
          <li class="list" data-filter="logos">Logos</li>
          <li class="list" data-filter="applications">Applications</li>
          <li class="list" data-filter="video">Video Animations</li>

        </ul>
      </div>


      <div class="recent-projects-boxes">


        <div class="itemBox1 websites">
          <div class="rp-item">

            <div class="rp-images-container">
              <div class="rp-main-image-block">
                <div class="rp-main-image-container">
                  <div class="rp-main-perspective-image"></div>
                  <div class="rp-main-image-wrapper">
                    <div class="rp-image tecnam">
                      <picture>
                        <source type="image/webp" srcset="portfolio-images\halospa-main.webp">
                        <source type="image/jpeg" srcset="portfolio-images\halospa-main.webp">
                        <noscript><img width="700" height="450" src="portfolio-images\halospa-main.webp" alt="halo" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\halospa-main.webp" alt="halo" class="lazy rp-image--bg ls-is-cached lazyloaded loaded" data-ll-status="loaded">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rp-perspective-wrap">
                <picture>
                  <source media="(min-width: 768px)" data-srcset="portfolio-images\halospa-mock.png" type="image/webp" srcset="portfolio-images\halospa-mock.png">
                  <source media="(min-width: 768px)" data-srcset="portfolio-images\halospa-mock.png" type="image/png" srcset="portfolio-images\halospa-mock.png">
                  <noscript><img class="rp-image-perspective " width="299" height="566" src="" alt="halo"></noscript><img class="rp-image-perspective ls-is-cached lazyloaded" width="299" height="566" src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20299%20566%22%3E%3C/svg%3E" data-src="" alt="halo">
                </picture>
              </div>
            </div>
            <div class="rp-item-container">
              <div class="rp-description">
                <div class="rp-top">
                  <div class="rp-logo">
                    <noscript><img width="240" height="70" src="portfolio-images\hls-logo.png" alt="skim"></noscript><img class=" ls-is-cached lazyloaded" width="240" height="70" src="portfolio-images\hls-logo.png" data-src="portfolio-images\hls-logo.png" alt="skin">
                  </div>
                  <p class="rp-item-title">BEAUTY AND AESTHETIC CLINIC</p>
                  <a href="halomediskin.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                </div>
                <div class="rp-text">
                  <p>BEAUTY AND AESTHETIC CLINIC </p>
                  <p><a href="halomediskin.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="itemBox1 websites">
          <div class="rp-item">

            <div class="rp-images-container">
              <div class="rp-main-image-block">
                <div class="rp-main-image-container">
                  <div class="rp-main-perspective-image"></div>
                  <div class="rp-main-image-wrapper">
                    <div class="rp-image knopp">
                      <picture>
                        <source type="image/webp" srcset="portfolio-images\vayomain.webp">
                        <source type="image/jpeg" srcset="portfolio-images\vayomain.webp">
                        <noscript><img width="700" height="450" src="portfolio-images\vayomain.webp" alt="vayo" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\vayomain.webp" alt="vayo" class="lazy rp-image--bg ls-is-cached lazyloaded loaded" data-ll-status="loaded">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rp-perspective-wrap">
                <picture>
                  <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\vayo-mockup.png">
                  <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\vayo-mockup.png">
                  <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="portfolio-images\vayo-mockup.png" alt="vayo"></noscript><img class="rp-image-perspective lazy ls-is-cached lazyloaded loaded" width="299" height="566" src="https://www.digitalsilk.com/wp-content/themes/digitalsilk/assets/images/seo_pages/recent-projects/Knopp-mockup-min.png" alt="vayo" data-ll-status="loaded">
                </picture>
              </div>
            </div>
            <div class="rp-item-container">
              <div class="rp-description">
                <div class="rp-top">
                  <div class="rp-logo">
                    <noscript><img width="300" height="70" src="portfolio-images\vayo-logo.png" alt="vayo"></noscript><img class=" ls-is-cached lazyloaded" width="300" height="70" src="portfolio-images\vayo-logo.png" data-src="portfolio-images\vayo-logo.png" alt="vayo">
                  </div>

                </div>
                <div class="rp-text">
                  <p> Most perfect jewellery for your needs </p>
                  <p><a href="vayo.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="itemBox1 websites">
          <div class="rp-item">
            <div class="rp-images-container">
              <div class="rp-main-image-block">
                <div class="rp-main-image-container">
                  <div class="rp-main-perspective-image"></div>
                  <div class="rp-main-image-wrapper">
                    <div class="rp-image sony">
                      <picture>
                        <source type="image/webp" srcset="portfolio-images\tomem-main.webp">
                        <source type="image/jpeg" srcset="portfolio-images\tomem-main.webp">
                        <noscript><img width="700" height="450" src="portfolio-images\tomem-main.webp" alt="tomem" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\tomem-main.webp" alt="tomem" class="lazy rp-image--bg loaded ls-is-cached lazyloaded" data-ll-status="loaded">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rp-perspective-wrap">
                <picture>
                  <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\tomem-mockup.png">
                  <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\tomem-mockup.png">
                  <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="portfolio-images\tomem-mockup.png" alt="tomem"></noscript><img class="rp-image-perspective lazy loaded ls-is-cached lazyloaded" width="299" height="566" src="portfolio-images\tomem-mockup.png" alt="tomem" data-ll-status="loaded">
                </picture>
              </div>
            </div>
            <div class="rp-item-container">
              <div class="rp-description">
                <div class="rp-top">
                  <div class="rp-logo">
                    <noscript><img width="225" height="70" src="portfolio-images\tomem-logo.png" alt="tomem"></noscript><img class=" lazyloaded" width="225" height="70" src="portfolio-images\tomem-logo.png" data-src="portfolio-images\tomem-logo.png" alt="tomem">
                  </div>
                  <!-- <p class="rp-item-title">B2C Website that Delights </p> -->
                  <a href="tomem.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                </div>
                <div class="rp-text">
                  <p>Tomem - A better way delivering affordable quality</p>
                  <p><a href="tomem.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="itemBox1 websites">
          <div class="rp-item">

            <div class="rp-images-container">
              <div class="rp-main-image-block">
                <div class="rp-main-image-container">
                  <div class="rp-main-perspective-image"></div>
                  <div class="rp-main-image-wrapper">
                    <div class="rp-image bang">
                      <picture>
                        <source type="image/webp" srcset="portfolio-images\aromatik-main.webp">
                        <source type="image/jpeg" srcset="portfolio-images\aromatik-main.webp">
                        <noscript><img width="700" height="450" src="portfolio-images\aromatik-main.webp" alt="aromatik" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\aromatik-main.webp" alt="aromatik" class="lazy rp-image--bg loaded ls-is-cached lazyloaded" data-ll-status="loaded">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rp-perspective-wrap">
                <picture>
                  <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\Aromatik-mockup.png">
                  <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\Aromatik-mockup.png">
                  <noscript><img class="rp-image-perspective lazy" width="299" height="70" src="portfolio-images\aromatik-logo.png" alt="aromatik"></noscript><img class="rp-image-perspective lazy loaded ls-is-cached lazyloaded" width="299" height="566" src="portfolio-images\aromatik-logo.png" alt="aromatik" data-ll-status="loaded">
                </picture>
              </div>
            </div>
            <div class="rp-item-container">
              <div class="rp-description">
                <div class="rp-top">
                  <div class="rp-logo">
                    <noscript><img width="225" height="70" src="portfolio-images\aromatik-logo.png" alt="aromatik"></noscript><img class=" lazyloaded" width="225" height="70" src="portfolio-images\aromatik-logo.png" data-src="portfolio-images\aromatik-logo.png" alt="aromatik">
                  </div>
                  <a href="aromatik.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                </div>
                <div class="rp-text">
                  <p>Strong and earthy aromatherapy scents.</p>
                  <p><a href="aromatik.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="itemBox1 websites">
          <div class="rp-item">

            <div class="rp-images-container">
              <div class="rp-main-image-block">
                <div class="rp-main-image-container">
                  <div class="rp-main-perspective-image"></div>
                  <div class="rp-main-image-wrapper">
                    <div class="rp-image fieldedge">
                      <picture>
                        <source type="image/webp" srcset="portfolio-images\pc-main.webp">
                        <source type="image/jpeg" srcset="portfolio-images\pc-main.webp">
                        <noscript><img width="700" height="450" src="portfolio-images\pc-main.webp" alt="pc" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\pc-main.webp" alt="pc" class="lazy rp-image--bg lazyloaded loaded" data-ll-status="loaded">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rp-perspective-wrap">
                <picture>
                  <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\pocket-change-mockup.png">
                  <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\pocket-change-mockup.png">
                  <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="portfolio-images\pocket-change-mockup.png" alt="pc"></noscript><img class="rp-image-perspective lazy lazyloaded loaded" width="299" height="566" src="portfolio-images\pocket-change-mockup.png" alt="pc" data-ll-status="loaded">
                </picture>
              </div>
            </div>
            <div class="rp-item-container">
              <div class="rp-description">
                <div class="rp-top">
                  <div class="rp-logo">
                    <noscript><img width="225" height="70" src="portfolio-images\pc-logo.png" alt="pc"></noscript><img class=" ls-is-cached lazyloaded" width="225" height="70" src="portfolio-images\pc-logo.png" data-src="portfolio-images\pc-logo.png" alt="pc">
                  </div>
                  <!-- <p class="rp-item-title">Dynamic Website Design</p> -->
                  <a href="pocketchange.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                </div>
                <div class="rp-text">
                  <p>Buy and sell your most wanted items today.</p>
                  <p><a href="pocketchange.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="itemBox1 websites">
          <div class="rp-item">

            <div class="rp-images-container">
              <div class="rp-main-image-block">
                <div class="rp-main-image-container">
                  <div class="rp-main-perspective-image"></div>
                  <div class="rp-main-image-wrapper">
                    <div class="rp-image dsbls">
                      <picture>
                        <source type="image/webp" srcset="portfolio-images\haloskin-main.webp">
                        <source type="image/jpeg" srcset="portfolio-images\haloskin-main.webp">
                        <noscript><img width="700" height="450" src="portfolio-images\haloskin-main.webp" alt="haloskin" class="lazy rp-image--bg"></noscript><img width="700" height="450" src="portfolio-images\haloskin-main.webp" alt="haloskin" class="lazy rp-image--bg lazyloaded loaded" data-ll-status="loaded">
                      </picture>
                    </div>
                  </div>
                </div>
              </div>
              <div class="rp-perspective-wrap">
                <picture>
                  <source media="(min-width: 768px)" type="image/webp" srcset="portfolio-images\halomediskin-mockup.png">
                  <source media="(min-width: 768px)" type="image/png" srcset="portfolio-images\halomediskin-mockup.png">
                  <noscript><img class="rp-image-perspective lazy" width="299" height="566" src="https://www.digitalsilk.com/wp-content/themes/digitalsilk/assets/images/seo_pages/recent-projects/DSBLS_side-min.png" alt="haloskin"></noscript><img class="rp-image-perspective lazy lazyloaded loaded" width="299" height="566" src="portfolio-images\halomediskin-mockup.png" alt="haloskin" data-ll-status="loaded">
                </picture>
              </div>
            </div>
            <div class="rp-item-container">
              <div class="rp-description">
                <div class="rp-top">
                  <div class="rp-logo">
                    <noscript><img width="240" height="80" src="portfolio-images\haloskin-logo.png" alt="haloskin"></noscript><img class=" lazyloaded" width="240" height="80" src="portfolio-images\haloskin-logo.png" data-src="portfolio-images\haloskin-logo.png" alt="haloskin">
                  </div>
                  <!-- <p class="rp-item-title">B2B Custom Website</p> -->
                  <a href="halomediskin.php" target="_blank" class="rp-link-sm"><span class="arrow-link ">Click Here </span></a>
                </div>
                <div class="rp-text">
                  <p>Skincare for everyone</p>
                  <p><a href="halomediskin.php" target="_blank" class="rp-link"><span class="arrow-link ">Click Here </span></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="recent-logos">
        <div class="itemBox logos">



          <div class="row">
            <div class="col">
              <img src="portfolio-images\logos\vayo.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\haloskin.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\pocket-exchange.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\rose-gallery.webp">
            </div>

          </div>
          <br>
          <br>
          <div class="row">
            <div class="col">
              <img src="portfolio-images\logos\stive-to-thrive.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\taxi.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\tomem.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\vayo.webp">
            </div>
          </div>
          <br>
          <br>
          <div class="row">
            <div class="col">
              <img src="portfolio-images\logos\slamskaraoke.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\aromtik.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\anumiskincare.webp">
            </div>
            <div class="col">
              <img src="portfolio-images\logos\aarohi.webp">
            </div>
          </div>
        </div>
      </div>
      <div class="recent-videos">
        <div class="itemBox video">
          <div class="row">
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\TVC AnimationJingleVoice Over.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=xXNzMYaTKFQ" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\Shopping Mall Tvc  Voice Over.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=Zb4mNiJUZXA" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\Zic Oil Animation  Voice Over.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=sja5qxhTGUE" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\Mobile App Emo Taxi Promo.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=X2Elv5xPeWU" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\Company Promo Video.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=mcjWbymgs9M" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\MacBook T2 Activation lock Product info Video.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=biTxc3ne8Jg" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\VD Tool Promo Video.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=g4mQdw0kPsk" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\Company Profile Promo Video.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=8GUDTQJk71Q" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>
            <div class="col">
              <div class="container">
                <img class="p-img" src="assets\video-thumbnails\Logo Animation.webp" alt="Snow">
                <a href="https://www.youtube.com/watch?v=SbwhH72_8XI" target="_blank"> <img height="50px" class="play" src="assets\video-thumbnails\youtube.png" alt="Snow"></a>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end new portfolio -->

  <?php include 'include/footer.php' ?>