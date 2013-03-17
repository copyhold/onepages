<?php
if (!isset($_GET['region'])) exit;
$titlesuffix = array(
	'canada' => 'Canada',
	'california' => 'California',
	'new-york' => 'New York',
	'south-africa' => 'South Africa',
	'uk' => 'United Kingdom',
	'texas' => 'Texas'
);
$titlesuffix = isset($titlesuffix[$_GET['region']]) ? $titlesuffix[$_GET['region']] : '';
?>
<!DOCTYPE html>
<html>
	<head>
	<title>Just save lives <?php echo $titlesuffix;?></title>
		<link rel="stylesheet" href="reset.css" />
		<link rel="stylesheet" href="style.css" />
<!--[if lt IE 9]>
        <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
        document.createElement('hgroup');
        </script>
        <![endif]-->

		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>
		<script>
			$(function(){
					$('.lb').click(function(){ $(this).fadeOut() })
					$('#services nav a').click(function(){
						$('#services .pages').hide()
						$('#services .pages[rel="'+$(this).attr('href').substr(1)+'"]').show();
						//return false;
						});
					$('#rotation img:gt(0)').hide();
					setInterval(function(){
							$('#rotation :first-child')
								.fadeOut()
								.next('img').fadeIn()
								.end().appendTo('#rotation');
						}, 5000);

					$('button').click(function(){
							$('.error').removeClass('error')
							var iname = $('input[name="name"]').val();
							if (iname.length===0) $('input[name="name"]').addClass('error');
							var imail = $('input[name="liame"]').val()
							if (imail.length<5 || /\S+@\S+\.\S+/.test(imail)===false) $('input[name="liame"]').addClass('error') 
							if ($('input.error').length===0) {
								$.getJSON('send.php',{
										name: iname,
										liame: imail,
										subj: $('select').val(),
										text: $('textarea').val(),
										region: $('.flag').attr('rel')
									}, function(d) {
									if (!d.error) {
										location.href = '/thank-you.html'
										//$('.lb').text(d.reply).fadeIn().delay(3000).fadeOut()
									}

								})
								} else {
									$('.error').parent('label').addClass('error')
								}
						})
					})
		</script>
	</head>
	<body>
		<header>
			<img class="header" src="images/top.png" />
			<img class="flag" rel="<?php echo $region = filter_input(INPUT_GET, 'region', FILTER_SANITIZE_EMAIL);?>" src="images/<?php echo $region;?>.jpg" />
		</header>
		<article>
			<h1>Certified Solutions for Organs Transplantation</h1>
			<div id=rotation>
				<img src="images/picture1.jpg" />
				<img src="images/picture2.jpg" />
				<img src="images/picture3.jpg" />
				<img src="images/picture4.jpg" />
			</div>
			<div id=strip1>
				<span><b>Fill in Your Details</b>We will contact you instantly &amp; explain the legal procedure</span>
				<h2>Safeguarded Process by Experts</h2>
	    </div>
			<section>
				<div id=left>
					<h2>Our Expertise</h2>
					<span>Professional Guidance</span>
					<span>Insurance Reimbursements</span>
					<span>Locating Hospitals and Experts</span>
					<span>Legal Guidance</span>
					<hr />
					<h3>Organ Transplant</h3>
					<p>If your kidney, heart or liver has failed, and you need an organ transplant, you are in the right place!!<br>
We employ professionals and consultants, specializing in organ transplantation that will provide you with all the necessary services for organ transplants, all services are provided in accordance with the applicable law.
</p>
				</div>
				<div id=rite>
					<label>*Name<input required name="name" /></label>
					<label class='email'>*Email<input required name="mail" /></label>
					<label>*Email<input required name="liame" /></label>
					<label>*Subject	<select name="subj">
														<option>Heart Transplantation</option>
														<option>Kidney Transplantation</option>
														<option>Liver Transplantation</option>
														<option>Other</option>
													</select>
												</label>
					<label>Your Comments<textarea name="comm"></textarea></label>
					<button>Contact Me Now</button>
				</div>
				<hr />
				<div id=services>
					<nav>
						<a href="#kidney">Kidney Transplant</a>
						<a href="#heart">Heart Transplant</a>
						<a href="#liver">Liver Transplant</a>
						<a href="#about">About Us</a>
					</nav>
					<section class="pages" rel="services" style="display: block;">
						<a name="services"></a>
						<h2>Our Professional Services</h2>
						<p>
Each step of your transplant trip is planned and managed; you will not waste any time or money. Whatever your needs will be - we will do our best to satisfy them. We are with you throughout the journey to make it, easy as possible.
 <p>
We direct and guide each patient in gathering all medical documents needed for the transplant surgery and refer them to any required or missing medical examination. We also assist in collecting all the necessary material and refer the patient to a specialist physician affiliated with our company. The referred physician's authority will serve to create a comprehensive medical opinion in any language required for the purposes of the transplant, which will meet the needs of the hospital's medical staff and the hospital's requirements.
 <p>
From the arrival of the patient and his or hers family to the relevant country where will the transplant organ performed, accompanied them professional person from the company who will collect them from the airport, places at the hotel, arrange transportation, accompany each visit at the hospital to ensure that the patient receives all required services and help in translation, lender will be there for you to feel as comfortable as possible in a foreign country during such difficult period.
 <p>
Choose us, Choose life.<br>
Leshem Shamaim
					</section>
					<section rel="about" class="pages">
						<a name="about"></a>
						<h2>About Us</h2>
						<p>Leshem Shamaim - A company for saving lives and for medical tourism engages in providing consulting services and solutions regarding organ transplants, in full accordance with the organ transplantation law.
 <p>
We have over ten years of experience in the field, and to our credit are many patients whose lives were saved, and who are ready to provide their recommendation and opinion of our services to any new client who is interested.<br>
 We work with a staff of senior and highly professional physicians & well known expert professors in the field of organ transplants. In addition, we have exclusive agreements with various hospitals around the world; all authorized with the highest standards for organ transplantations.<br>
Our principle understands that we dealing with clients with medical problems, so the service they receive should be in accordance, any client who turns to us getting the highest level of service, he will receive warm and personal service by our team for the entire process (medical advice, medical summery, consulting for suitable hospitals and medical stuff and etc.).
 <p>
We will advise for solution for organ transplant from a cadaver donor or live altruistic donor at the shortest time as possible.<br>
Choose us, Choose life.<br>
Just Save Lives
					</section>
					<section class="pages" rel="liver">
						<h2>Liver Transplant</h2>
<p>Our company offers full organ transplant services for liver abroad. Each package is all inclusive and designed to accommodate your ever need.
<p>We will make all the necessary arrangements before and during the travel in the relevant country.
<p>
•  Liver transplant<br>
•  2 tickets for business flight round trip.<br>
•  Full Hotel(4/5 star) expenses.<br>
•  All the necessary medical tests and preparing before the transplant.<br>
•  Legal advice by an attorney who work for the company and responsible for the legality of the transplant in the relevant country.<br>
•  The accompaniment of a person which language relevant for the patient, the obligation of contact person to help the patient and his family whenever required for their comfort in foreign country such as translation, meeting at the airport, transportation from the hospital and back, setting appointments with doctors, support for meetings at the hospital, help orientation in restaurants, shops, tours, etc..<br>
•  Medical support of doctors in the same country where the patient supposed to pass the organ transplant, during all the stay.<br>
•  ICU'S after the transplant and during the stay in any case if necessary<br>
•  Necessary period for recovering in hospital after transplant.<br>
•  All the necessary Medications.

					</section>
<section class="pages" rel="heart">
						<h2>Heart Transplant</h2>
<p>Our company offers full organ transplant services for heart abroad. Each package is all inclusive and designed to accommodate your ever need.
<p>We will make all the necessary arrangements before and during the travel in the relevant country.
<p>
•  Heart transplant<br>
•  2 tickets for business flight round trip.<br>
•  Full Hotel(4/5 star) expenses.<br>
•  All the necessary medical tests and preparing before the transplant.<br>
•  Legal advice by an attorney who work for the company and responsible for the legality of the transplant in the relevant country.<br>
•  The accompaniment of a person which language relevant for the patient, the obligation of contact person to help the patient and his family whenever required for their comfort in foreign country such as translation, meeting at the airport, transportation from the hospital and back, setting appointments with doctors, support for meetings at the hospital, help orientation in restaurants, shops, tours, etc..<br>
•  Medical support of doctors in the same country where the patient supposed to pass the organ transplant, during all the stay.<br>
•  ICU'S after the transplant and during the stay in any case if necessary<br>
•  Necessary period for recovering in hospital after transplant.<br>
•  All the necessary Medications.
</section>

<section class="pages" rel="kidney">
						<h2>Kidney Transplant</h2>
<p>Our company offers full organ transplant services for kidney abroad. Each package is all inclusive and designed to accommodate your ever need.
<p>We will make all the necessary arrangements before and during the travel in the relevant country.
<p>
•  Kidney transplant<br>
•  2 tickets for business flight round trip.<br>
•  Full Hotel (4/5 star) expenses.<br>
•  All the necessary medical tests and preparing before the transplant.<br>
•  Legal advice by an attorney who work for the company and responsible for the legality of the transplant in the relevant country.<br>
•  The accompaniment of a person which language relevant for the patient, the obligation of contact person to help the patient and his family whenever required for their comfort in foreign country such as translation, meeting at the airport, transportation from the hospital and back, setting appointments with doctors, support for meetings at the hospital, help orientation in restaurants, shops, tours, etc..<br>
•  Medical support of doctors in the same country where the patient supposed to pass the organ transplant, during all the stay.<br>
•  Dialyze during all the stay.<br>
•  10 days of recovering in hospital after transplant.<br>
•  All the necessary Medications.

 
</section>

				</div>
			</section>
		</article>
		<footer>
			<p>
				<cite>&copy; Copyright 2013 JustSaveLives, LLC All Rights Reserved</cite><span>For more information, please visit us on <a href="http://www.justsavelives.com/" target="_blank" >our site</a></span>
			</p>
		</footer>	
		<div class="lb"></div>
<!-- Google Code for Remarketing tag -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 987646217;
var google_conversion_label = "3vioCP-F0gQQiZL51gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/987646217/?value=0&amp;label=3vioCP-F0gQQiZL51gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
	</body>
</html>
