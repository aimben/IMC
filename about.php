<!doctype html>
<?php $pageType = "about"; ?>
<?php $pageTitle = "About IMC"; ?>

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
                <div class="medium-6 large-6 mast_info_ar columns">
                  <h3>IMC HISTORY</h3>
                  <div class="info_area">
                    <p>
                      After nearly 30 years of emergency room experience, Dr. Grover D. Hershberger knew that something was broken in the healthcare system. Long wait times, substantial facility fees and rising patient costs at the ER were symptomatic of a larger problem: a gap between primary care physicians and clinics and the ER. Where could patients go when they clearly didn’t have a medical emergency, but could not see their family doctor right away? 
                    </p>

                    <p>
                      In 2008, Dr. Hershberger decided to fill the gap by creating Immediate Medical Care (IMC), the Wichita area’s first independent, full service urgent care clinic. As area ERs have become overwhelmed — and patients pay the price for non-emergency care in the forms of significantly higher out-of-pocket costs — IMC continues to proudly serve patients of all ages who are in urgent need of quality, affordable medical attention by experienced medical doctors.
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

            <div class="small-12 mast_info_ar columns" style="margin-top:0">
              <h3>IMC HISTORY</h3>
              <div class="info_area">
                <p>
                  After nearly 30 years of emergency room experience, Dr. Grover D. Hershberger knew that something was broken in the healthcare system. Long wait times, substantial facility fees and rising patient costs at the ER were symptomatic of a larger problem: a gap between primary care physicians and clinics and the ER. Where could patients go when they clearly didn’t have a medical emergency, but could not see their family doctor right away? 
                </p>

                <p>
                  In 2008, Dr. Hershberger decided to fill the gap by creating Immediate Medical Care (IMC), the Wichita area’s first independent, full service urgent care clinic. As area ERs have become overwhelmed — and patients pay the price for non-emergency care in the forms of significantly higher out-of-pocket costs — IMC continues to proudly serve patients of all ages who are in urgent need of quality, affordable medical attention by experienced medical doctors.
                </p>
              </div>
            </div>
          </div>


          <div class="row middle_txt">
            <div class="small-12 medium-1 large-1 columns"></div>
            <div class="small-12 medium-6 medium-offset-5 large-6 large-offset-5 columns">
              <p class="main_ttl">
                Today, IMC offers Wichita area residents convenient access to healthcare services through locations in east and west Wichita, providing additional flexibility through extended evening and weekend hours.
                </p>
              <img src="img/section_divider.png" style="margin:0; padding:0" />
              <br />
              <div class="row">
                <div class="small-12 medium-12 large-12 columns">
                  <p>
                    <span class="title">Clinic Hours:</span><br />
                    <span>&bull; Monday - Saturday:</span> 9:00 am - 6:30 pm<br />
                    <span>&bull; Sunday:</span> 1:00 pm - 5:30 pm<br />
              
                    <span class="title">Contact us:</span><br />
                    <span>&bull; Email:</span> <a href="mailto:danellesommerfeld@yahoo.com">danellesommerfeld@yahoo.com</a><br />
                    <span>&bull; Phone:</span> <a href="tel:+13164402565">316-440-2565</a><br />
                    <span>&bull; Fax:</span> 316-440-2750
                  </p>
                </div>
                <div class="medium-1 large-1 colums"></div>
              </div>
            </div>
          </div>

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