

<nav class="tab-bar show-for-medium-down">
  <section class="left tab-bar-section show-for-medium" style="padding-left:25px">
    <a href="/">
      <img data-interchange="[img/imc_tab_logo.png, (default)], [img/imc_tab_logo@2x.png, (retina)]">            
      <noscript><img src="img/imc_tab_logo.png" /></noscript>      
    </a>  
  </section>

    <section class="left tab-bar-section show-for-small" style="padding-left:10px">
      <div style="width:200px">
        <a href="/">
          <img data-interchange="[img/imc_tab_logo_small.png, (default)], [img/imc_tab_logo_small@2x.png, (retina)]">            
          <noscript><img src="img/imc_tab_logo.png" /></noscript>  
        </a>
      </div>
    </a>  
  </section>

  <section class="right-small">
    <a class="right-off-canvas-toggle" >Menu &#9776;</a>
  </section>
</nav>

<div class="show-for-medium-down nav_bkg" style="margin:0; ">
  <div class="row">
    <div class="medium-6 hide-for-small columns" style="padding-top:15px; padding-bottom:10px">
      <img src="img/immediate_medical_care.png" />
    </div>

    <div class="medium-6 hide-for-small text-right columns" style="padding-top:3px; padding-bottom:4px">
      <img src="img/extended_hours_pad.png" class="show-for-medium" />
    </div>  

    <div class="small-12 show-for-small columns" style="padding-top:15px; padding-bottom:10px">  
      <img data-interchange="[img/mobile_hrsName.png, (default)], [img/mobile_hrsName@2x.png, (retina)]" >            
      <noscript><img src="img/mobile_hrsName.png" /></noscript>     
    </div>
  </div>
</div>


<aside class="right-off-canvas-menu">
  <ul class="off-canvas-list">
    <li>
      <label class="first" style="text-align:center; margin-top:0; padding-top:0">
        <img data-interchange="[img/imc_tab_logo.png, (default)], [img/imc_tab_logo@2x.png, (retina)]">            
        <noscript><img src="img/imc_tab_logo.png" /></noscript>
      </label>
    </li>
    <li><a href="/">Home</a>
    <li><a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/about" class="cont_nv<?php if ($pageType == "about") echo '_selected'; ?>">About IMC</a></li>
    <li><a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/patient-services" class="cont_nv<?php if ($pageType == "patemp") echo '_selected'; ?>">Patient Services</a></li>
    <li><a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/employer-services" class="cont_nv<?php if ($pageType == "servemp") echo '_selected'; ?>">Employer Services</a></li>
    <li><a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/location" class="cont_nv<?php if ($pageType == "location") echo '_selected'; ?>">Location/Hours</a></li>
    <li><a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/payment" class="cont_nv<?php if ($pageType == "payment") echo '_selected'; ?>">Payment</a></li>
    <li><a href="http://blog.imcwichita.com" target="_blank">Blog</a></li>
    
  </ul>
</aside>