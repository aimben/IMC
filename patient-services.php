<!doctype html>
<?php $pageType = "patemp"; ?>
<?php $pageTitle = "Patient Services | IMC"; ?>

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
                  <h3>Available Services</h3>
                  <div class="info_area">
                    <p>
                      Some of the many medical issues treated at Immediate Medical Care include:
                    </p>
                    <ul>
                      <li>Coughs, colds &amp; flu </li>
                      <li>Sore throats and sinus infections </li>
                      <li>Cuts and scratches </li>
                      <li>Broken bones </li>
                      <li>Allergies and asthma  </li>
                      <li>Sprains and strains </li>
                      <li>Headaches </li>
                      <li>Urinary tract infections </li>
                      <li>Ear and eye infections </li>
                      <li>Abdominal pain  </li>
                      <li>Breathing difficulties </li>
                    </ul>

                    <p class="inner_info">
                      Preventive care services include:<br />
                      &bull; <b>Camp, sports &amp; school physicals</b><br />
                      &bull; <b>Flu shots &amp; immunizations</b><br />
                      &bull; <b>General checkups</b>
                    </p>
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

              <h3 style="margin-bottom: 10px; padding-left:10px; text-transform:uppercase">Available Services</h3>
                  <div class="info_area">
                    <p>
                      Some of the many medical issues treated at Immediate Medical Care include:
                    </p>
                    <ul>
                      <li>Coughs, colds &amp; flu </li>
                      <li>Sore throats and sinus infections </li>
                      <li>Cuts and scratches </li>
                      <li>Broken bones </li>
                      <li>Allergies and asthma  </li>
                      <li>Sprains and strains </li>
                      <li>Headaches </li>
                      <li>Urinary tract infections </li>
                      <li>Ear and eye infections </li>
                      <li>Abdominal pain  </li>
                      <li>Breathing difficulties </li>
                    </ul>

                    <p class="inner_info">
                      Preventive care services include:<br />
                      &bull; <b>Camp, sports &amp; school physicals</b><br />
                      &bull; <b>Flu shots &amp; immunizations</b><br />
                      &bull; <b>General checkups</b>
                    </p>
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
                    <li>One to three doctors on duty at all times</li>
                    <li>In-house lab services</li>
                  </ul>
                </div>

                <div class="small-12 medium-6 large-6 columns">
                  <ul class="section_points">
                    <li class="hide-for-medium-up">One to three doctors on duty at all times</li>
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