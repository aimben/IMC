<!doctype html>
<?php $pageType = "idx"; ?>
<?php $pageTitle = "Doctor Appointment | Immediate Medical Care, Wichita, Kansas"; ?>

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

          <div class="center_section">
            <div class="row">
              <div class="large-12 columns first_section">
                <h2 style="margin-top:40px">EXPERT MEDICAL CARE,<br />AVAILABLE ON YOUR WATCH.</h2>
                <p style="font-size:17px">
                  Medical issues don’t follow the clock, so when care is needed<br />
                  after hours, on weekends, or when primary care physicians aren’t<br />
                  available, IMC (Immediate Medical Care) is standing by to help. 
                </p>
              </div>
            </div>
          </div>
          
          <div class="row middle_txt">
            <div class="medium-4 large-4 columns">
              <a href="" title="">
                <img src="img/desk_urgent_care.png" class="hide-for-medium" />
                <img src="img/mob_urgent_care.png" class="show-for-medium" />
              </a>
            </div>
            <div class="medium-4 large-4 columns">
              <a href="" title="">
                <img src="img/desk_location_hours.png" class="hide-for-medium" />
                <img src="img/mob_location_hours.png" class="show-for-medium" />
              </a>
            </div>
            <div class="medium-4 large-4 columns">
              <a href="" title="">
                <img src="img/desk_zip_pass.png" class="hide-for-medium" />
                <img src="img/mob_zip_pass.png" class="show-for-medium" />
              </a>
            </div>
          
            <div class="medium-12 large-12 columns" style="margin-top:30px; padding-left:58px; padding-right:50px">
              <div class="row">
                <div class="medium-12 large-12 colums" style="background:#dcd8d3; border-radius: 8px;">
                  <div class="row">
                    <div class="medium-4 large-4 columns" style="background:#cdcac5; border-radius: 8px 0 0 8px; border-right:2px solid #fff">
                      <div class="row">
                        <div class="medium-12 large-12 columns" style="background:#6f625a; margin-top:25px; font-size:20px; line-height: 24px; font-family:'Hammersmith One', sans-serif; text-align: center; color:#d7d2cb; padding-top:25px; padding-bottom:25px">
                          Dr. Hershberger’s<br />BLOG
                        </div>
    
                        <div class="medium-12 large-12 columns" style="background:#a42024; border-top:1px solid #fff; font-size:18px; font-family:'Hammersmith One', sans-serif; text-align: center; color:#d7d2cb; border-radius: 0 0 0 8px; padding-top:15px; padding-bottom:10px ">
                          View All
                         </div>
                      </div>
                      <img src="img/blog_icon.png" style="position:absolute; top:15px; left:-20px" />
                    </div>

                    <div class="medium-8 large-8 columns">
                      1212
                    </div>
                  </div>
                </div>
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