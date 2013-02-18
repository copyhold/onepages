<!DOCTYPE html>
<html lang="he-IL">
	<head>
		<title>Just save lives</title>
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
	<body class="he">
		<header dir=ltr>
			<img class="header" src="images/top-rtl.png" />
			<img class="flag" rel="<?php echo $region = filter_input(INPUT_GET, 'region', FILTER_SANITIZE_EMAIL);?>" src="images/<?php echo $region;?>.jpg" />
		</header>
		<article>
			<h1>
פתרונות להשתלות איברים
</h1>
			<div id=rotation>
				<img src="images/picture1.jpg" />
				<img src="images/picture2.jpg" />
				<img src="images/picture3.jpg" />
				<img src="images/picture4.jpg" />
			</div>
			<div id=strip1>
				<span><b>
הרשם עכשיו! חינם
</b>נספק מענה לכל שאלותיך</span>
				<h2>אנו מספקים פתרונות</h2>
	    </div>
			<section>
				<div id=left>
					<h2>תמיכה וייעוץ כל הדרך</h2>
					<span>נקודת זכות</span>
					<span>נקודת זכות</span>
					<span>נקודת זכות</span>
					<span>נקודת זכות</span>
					<hr />
					<h3>הדרכה מקצועית</h3>
					<p>People who need an organ transplant often have to wait a long time for one. Doctors must match donors to recipients to reduce the risk of transplant rejection. This is when the recipient's body turns against the new organ, causing it to fail. People who have transplants must take drugs the rest of their lives to help keep their bodies from rejecting the new organ. Our company can give you solution in kidney, heart, liver transplant.</p>
				</div>
				<div id=rite>
					<label>* שם<input required name="name" /></label>
					<label class='email'>*אימייל<input dir="ltr" required name="mail" /></label>
					<label>* אימייל<input required name="liame" /></label>
					<label>* נושא<select name="subj">
														<option>Heart Transplantation</option>
														<option>Kidney Transplantation</option>
														<option>Liver Transplantation</option>
														<option>Other</option>
													</select>
												</label>
					<label>* תגובתך<textarea name="comm"></textarea></label>
					<button>הצתרף</button>
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
						<h2>Services</h2>
						<p>will explain the legal procedure to the client, answer any questions, and make sure the client is knowingly signing and executing this contract, without any coercion and after having fully understood the consequences will explain the legal procedure to the client, answer any questions, and make sure the client is knowingly signing and executing this contract, without any coercion and after will explain the legal procedure to the client, answer any questions, and make sure the client is knowingly signing and executing this contract, without any coercion and after</p>
					</section>
					<section rel="about" class="pages">
						<a name="about"></a>
						<h2>About Us</h2>
						<p>Company "Leshem Shamaim" -  the Israeli Company for Saving Lives and for Medical Tourism Ltd." Engages in providing consulting services and solutions regarding organ transplants abroad, in full accordance with the Organ Transplantation Law.<br>
						The company has over ten years of experience in the field, and to its credit are many patients whose lives were saved, and who are ready to provide their recommendation and opinion of the company's services to any new client who is interested.<br>
						The company works with a staff of senior and highly professional physicians. One of our main advisors is a professor and a renowned expert in the field of organ transplants. In addition, the company has exclusive agreements with various hospitals around the world.</p>
					</section>
					<section class="pages" rel="liver">
						<h2>Liver Transplant</h2>
						<p>The liver is a resilient, maintenance-free organ that's easy to ignore - until something goes wrong. Because of its wide-ranging responsibilities, the liver often comes under attack by viruses, toxic substances (including alcohol), contaminants and disease.
							<p>Even when it is under siege however, the liver is very slow to complain. Often, people with liver problems will be completely unaware because they may have few, if any, symptoms. The liver is such a stalwart organ that it will continue working even when two thirds of it has been damaged by scarring (cirrhosis).
							 
								<p>While there have been major advances in treating liver diseases, there are no cures. That's why it's important to take steps to prevent liver disease, such as making healthy lifestyle choices and getting immunized against viruses that can cause liver disease.
									<p>To learn more about how your liver works and how you can prevent some of the most common forms of liver disease, click on the links to the left.
					</section>
<section class="pages" rel="heart">
						<h2>Heart Transplant</h2>
<p>Our company will make all the necessary arrangements before and during the travel in the relevant country.
<p>
liver/heart transplant<br>
2 tickets for business flight round trip.<br>
 
Hotel(4/5 star) expenses on basis of bed and breakfast for 2,5 month.<br>
 
All the necessary medical tests and preparing before the transplant.<br>
 
Legal advice by an attorney who work for the company and responsible for the legality of the transplant in the relevant country.<br>
 
The accompaniment of a person which language relevant for the patient, the obligation of contact person to help the patient and his family whenever required for their comfort in foreign country such as translation, meeting at the airport, transportation from the hospital and back, setting appointments with doctors, support for meetings at the hospital, help orientation in restaurants, shops, tours, etc..<br>
 
Medical support of doctors in the same country where the patient supposed to pass the organ transplant, during all the stay.<br>
 
ICU'S after the transplant and during the stay any case if necessary<br>
 
Necessary period for recovering in hospital after transplant.<br>
 
All the necessary Medications.
 <p>
From statistic the average waiting time for suitable organ, from the moment the patient came to the relevant country is 1.5 month.					
</section>

<section class="pages" rel="kidney">
						<h2>Kidney Transplant</h2>
<p>Our company will make all the necessary arrangements before and during the travel in the relevant country.
<p>kidney transplant<br>
2 tickets for business flight round trip.<br>
Hotel(4/5 star) expenses on basis of bed and breakfast for 1 month.<br>
All the necessary medical tests and preparing before the transplant.<br>
Legal advice by an attorney who work for the company and responsible for the legality of the transplant in the relevant country.<br>
The accompaniment of a person which language relevant for the patient, the obligation of contact person to help the patient and his family whenever required for their comfort in foreign country such as translation, meeting at the airport, transportation from the hospital and back, setting appointments with doctors, support for meetings at the hospital, help orientation in restaurants, shops, tours, etc..<br>
Medical support of doctors in the same country where the patient supposed to pass the organ transplant, during all the stay.<br>
Dialyze during all the stay.<br>
10 days of recovering in hospital after transplant.<br>
All the necessary Medications.<br>			
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
