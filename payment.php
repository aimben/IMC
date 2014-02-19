<!doctype html>
<?php $pageType = "payment"; ?>
<?php $pageTitle = "Payments | IMC"; ?>

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
                  <h3>PAYMENT OPTIONS</h3>
                  <div class="info_area">
                    <p>RECEIVED A STATEMENT?</p>
                    <p><span>&bull; Pay your bill here</span></p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="paypal">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="8WTNLCY9M8L8L">
                      <p class="inner_info">
                        <input type="hidden" name="on0" value="Account #">Account #<br />
                        <input type="text" name="os0" maxlength="200"><br />
                        <input type="hidden" name="on1" value="Patient Name">Patient Name<br />
                        <input type="text" name="os1" maxlength="200"><br />

                      <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="paypalbutton">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                      </p>
                    </form>
                  </div>
                </div>
                
                <div class="medium-6 large-6 columns" style=""></div>

              </div>


            </div>
          </div>

          <div class="row show-for-small">
            <div class="small-12 columns" style="margin:0; padding:0">
              <img src="img/patient_services_mob.png" style="width:100%" />
            </div>

            <div class="small-12 columns" style="margin-top:0">

              <h3 style="margin-bottom: 10px; padding-left:10px; text-transform:uppercase">PAYMENT OPTIONS</h3>
              <div class="info_area">
                <p>RECEIVED A STATEMENT?</p>
                <p><span>&bull; Pay your bill here</span></p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" class="paypal">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="8WTNLCY9M8L8L">
                  <p class="inner_info">
                    <input type="hidden" name="on0" value="Account #">Account #<br />
                    <input type="text" name="os0" maxlength="200"><br />
                    <input type="hidden" name="on1" value="Patient Name">Patient Name<br />
                    <input type="text" name="os1" maxlength="200"><br />

                  <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" class="paypalbutton">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </p>
                </form>                    
              </div>
            </div>
          </div>


          <div class="row middle_txt">
            <div class="small-12 medium-1 large-1 columns"></div>
            <div class="small-12 medium-6 medium-offset-5 large-6 large-offset-5 columns">
              <p class="main_ttl">IMC offers:</p>
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