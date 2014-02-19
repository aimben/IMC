<!doctype html>
<?php $pageType = "contact"; ?>
<?php $pageTitle = "Contact Immediate Medical Care"; ?>

  <?php include("helper/header.php"); ?> 

  </head>


  <body>

    <div class="off-canvas-wrap">
      <div class="inner-wrap">

        <!--desktop-->
        <?php include("helper/desk_head.php"); ?> 
        

        <!--mobile-->
        <?php include("helper/mob_head.php"); ?> 

        <a class="exit-off-canvas" href="#"></a>

        <!--body-->
        <section role="main">
          <div class="row hide-for-small">
            <div class="large-12 page_hd_bk columns">
              <div class="row">
                <div class="medium-6 large-6 columns" style="margin-top:40px;">
                  <h3>Contact</h3>
                  <div class="info_area">
                    <h5>EMAIL ADDRESS</h5>
                    <p>
                      <span>&bull; <a href="mailto:info@imcwichita.com">Info@IMCwichita.com</a></span><br />
                    </p>

                    <h5>MAILING ADDRESS</h5>
                    <p>
                      <span>&bull; West IMC</span><br />
                      4722 W. Kellogg Dr., Wichita, KS 67209<br />
                      316-440-2565
                    </p>

                    <p>
                      <span>&bull; East IMC - Coming Soon</span><br />
                      5838 E. Central Ave., Wichita, KS 67208<br />
                      Coming Soon
                    </p>

                    <p class="inner_info">
                      <span class="title">Clinic Hours:</span><br />
                      <span>&bull; Monday - Saturday:</span> 9:00 am - 6:30 pm<br />
                      <span>&bull; Sunday:</span> 1:00 pm - 5:30 pm<br />
                      <span class="title">Main Office:</span><br />
                      <span>&bull; <a href="mailto:info@imcwichita.com">Info@IMCwichita.com</a></span><br />
                      <span>&bull; Phone:</span> <a href="tel:+13164402565">316-440-2565</a><br />
                      <span>&bull; Fax:</span> 316-440-2750
                    </p>
                  </div>
                </div>
                
                <div class="medium-6 large-6 columns" style=""></div>

              </div>


            </div>
          </div>

          <div class="row show-for-small">
            <div class="small-12 columns" style="margin:0; padding:0">
              <img src="img/locations_bkg_mob.jpg" style="width:100%" />
            </div>

            <div class="small-12 columns" style="margin-top:0">
              <h3>Contact</h3>
              <div class="info_area">
                <h5>EMAIL ADDRESS</h5>
                <p>
                  <span>&bull; <a href="mailto:info@imcwichita.com">Info@IMCwichita.com</a></span><br />
                </p>

                <h5>MAILING ADDRESS</h5>
                <p>
                  <span>&bull; West IMC</span><br />
                  4722 W. Kellogg Dr., Wichita, KS 67209<br />
                  316-440-2565
                </p>

                <p>
                  <span>&bull; East IMC - Coming Soon</span><br />
                  5838 E. Central Ave., Wichita, KS 67208<br />
                  Coming Soon
                </p>

                <p class="inner_info">
                  <span class="title">Clinic Hours:</span><br />
                  <span>&bull; Monday - Saturday:</span> 9:00 am - 6:30 pm<br />
                  <span>&bull; Sunday:</span> 1:00 pm - 5:30 pm<br />
                  <span class="title">Main Office:</span><br />
                  <span>&bull; <a href="mailto:info@imcwichita.com">Info@IMCwichita.com</a></span><br />
                  <span>&bull; Phone:</span> <a href="tel:+13164402565">316-440-2565</a><br />
                  <span>&bull; Fax:</span> 316-440-2750
                </p>
              </div>
              
              <br />
              <h3 class="heading zip">Check in Now</h3>
              <p class="zip_pass_cnt">
                <a href="" target="_blank">
                  <img src="img/mobile_zip_pass_full.png" />
                </a>
              </p>


            </div>
          </div>


          <div class="row hide-for-small middle_txt">          
            <div class="small-12 medium-1 large-1 columns"></div>
            <div class="small-12 medium-6 medium-offset-5 large-6 large-offset-5 columns">
              <a href="">
                <img data-interchange="[img/zip_pass_locationpg.png, (default)], [img/zip_pass_locationpg@2x.png, (retina)]">            
                <noscript><img src="img/zip_pass_locationpg.png"></noscript><br />
              </a>

            </div>


          </div>

          <?php /*
          <div class="row middle_txt">
            <div class="small-12 medium-1 large-1 columns"></div>
            <div class="small-12 medium-6 medium-offset-5 large-6 large-offset-5 columns">
              <p style="margin-bottom:2px; color:#6f625a; font-weight: 500; font-size:16px">IMC offers:</p>
              <img src="img/section_divider.png" style="margin:0; padding:0" />
              <br />
              <div class="row">
                <div class="medium-5 large-5 hide-for-small columns">
                  <ul class="section_points">
                    <li>At least one to three doctors on duty at any given time</li>
                    <li>In-house lab services</li>
                  </ul>
                </div>

                <div class="small-12 medium-6 large-6 columns">
                  <ul class="section_points">
                    <li class="hide-for-medium-up">At least one to three doctors on duty at any given time</li>
                    <li class="hide-for-medium-up">In-house lab services</li>                  
                    <li>Digital x-rays </li>
                    <li>Extended hours</li>
                    <li>Convenient walk-in service</li>
                  </ul>
                </div>
                <div class="medium-1 large-1 colums"></div>
              </div>
            </div>
          </div>
          */ ?>

       
          <?php include("helper/footer.php"); ?> 
          
        </section>
      </div>
    </div>   



    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
    $(document).foundation();
    </script>
  </body>
</html>