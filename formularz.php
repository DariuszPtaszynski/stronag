<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Najlepsze dania w mieście</title>
	
	<link rel="Shortcut icon" href="grafika/ikona.ico" />
	
	
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
	

  <link rel="stylesheet" href="style.css" type="text/css">
	<link rel="stylesheet" href="menu.css" type="text/css">
		
    <link rel="stylesheet" href="./formularz.css">
</head>
<body>

<div id="tresc">

<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/0064.jpg" alt="0064" title="0064" id="wows1_0"/></li>
		<li><img src="data1/images/dania_glowne__delikatna_piers_z_kurczakajpg_wxko09.jpg" alt="dania_glowne__delikatna_piers_z_kurczakajpg_wXKo09" title="dania_glowne__delikatna_piers_z_kurczakajpg_wXKo09" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/jucca_restauracja_20.jpg" alt="wow slider" title="jucca_restauracja_20" id="wows1_2"/></a></li>
		<li><img src="data1/images/restauracjadompolskidaniapotrawy3.jpg" alt="restauracja-dom-polski-dania-potrawy3" title="restauracja-dom-polski-dania-potrawy3" id="wows1_3"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<br /><br />


<?php
include("menu.inc");
?>


<br />

<form class="form" id="contactForm" method="post" novalidate action="send-script.php">
    <div class="form-row">
        <label for="field-name">Name*</label>
        <input value="marcin" type="text" name="name" required id="field-name" data-error="Wypełnij to pole" pattern="[a-zA-ZąĄććęęłŁńŃóÓśŚżŻŹŹ ]+">
    </div>
    <div class="form-row">
        <label for="field-email">Email*</label>
        <input value="email@wp.plp" type="email" name="email" required id="field-email" data-error="Wpisz poprawny email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+">
    </div>
    <div class="form-row">
        <label for="field-message">Message*</label>
        <textarea name="message" required data-error="Musisz wypełnić pole" id="field-message" pattern=".+">dasdasdsad</textarea>
    </div>
    <div class="form-row">
        <label class="checkbox-cnt">
            <input type="checkbox" required data-error="Musisz wypełnić pole" name="regulation">
            <i class="state" aria-hidden="true"></i>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In libero arcu, vulputate sit amet mattis sit amet, ultrices in erat. Aenean suscipit arcu ac lorem lacinia ut scelerisque turpis commodo.</span>
        </label>
    </div>
    <div class="form-row">
        <button type="submit" class="submit-btn">
            Wyślij
        </button>
    </div>
</form>

<div id="stopka">

<span>
Odwiedź naszego <a href="https://www.facebook.com/" target="blank">Facebooka</a>
</span>

</div>

</div>

<div id="zegar">

<!-- clock widget start -->
<script type="text/javascript"> var css_file=document.createElement("link"); css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href","//s.bookcdn.com//css/cl/bw-cl-180x170r11.css"); document.getElementsByTagName("head")[0].appendChild(css_file); </script> <div id="tw_21_1446550202"><div style="width:100px; height:120px; margin: 0 auto;"><a href="https://booked.com.pl/time/leszno-greater-poland-33133">Leszno (Greater Poland)</a><br/></div></div> <script type="text/javascript"> function setWidgetData_1446550202(data){ if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = ''; var params = data.results[i]; objMainBlock = document.getElementById('tw_'+params.widget_type+'_'+params.widget_id); if(objMainBlock !== null) objMainBlock.innerHTML = params.html_code; } } } var clock_timer_1446550202 = -1; </script> <script type="text/javascript" charset="UTF-8" src="https://widgets.booked.net/time/info?ver=2&domid=594&type=21&id=1446550202&scode=124&city_id=33133&wlangid=18&mode=2&details=0&background=ffffff&color=686868&add_background=ffffff&add_color=333333&head_color=ffffff&border=0&transparent=0"></script>
<!-- clock widget end -->



</div>

<script src="./scripts.js"></script>
</body>
</html>