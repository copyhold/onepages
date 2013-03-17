<!DOCTYPE html>
<html lang="he-IL">
	<head>
	<meta http-equiv=Content-Type content="text/html;charset=UTF-8">
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
ייעוץ ותמיכה בתהליך השתלות איברים בחו"ל
</h1>
			<div id=rotation>
				<img src="images/picture1.jpg" />
				<img src="images/picture2.jpg" />
				<img src="images/picture3.jpg" />
				<img src="images/picture4.jpg" />
			</div>
			<div id=strip1>
				<span><b>
מלא/י את פרטיך
</b>מומחה יצור איתך קשר ויפרט את המשך התהליך</span>
				<h2>ייעוץ וליווי על ידי מומחים</h2>
	    </div>
			<section>
				<div id=left>
					<h2>פתרונות מלאים לתהליך ההשתלה</h2>
					<span>ליווי מקצועי</span>
					<span>הדרכה משפטית</span>
					<span>איתור רופאים מומחים</span>
					<span>החזרי ביטוח</span>
					<hr />
					<h3>הכוונה מקצועית מלאה</h3>
					<p>אנשים הזקוקים להשתלת איברים לעתים צריכים לחכות זמן רב . רופאים חייבים להתאים תורמים לנמענים כדי להפחית את הסיכון לדחיית השתלה.  כאשר הגוף של הנמען מתנגד לקלוט האיבר החדש, זה גורם להשתלה להיכשל. אנשים שעברו השתלה צריכים לקחת תרופות כל חייהם כדי לסייע לשמור על גופם מדחיית האיבר החדש.
<br>
החברה שלנו יכולה לתת לך פתרון בהשתלת כליות, לב, כבד.
</p>
				</div>
				<div id=rite>
					<label>* שם<input required name="name" /></label>
					<label class='email'>*אימייל<input dir="ltr" required name="mail" /></label>
					<label>* אימייל<input required name="liame" /></label>
					<label>* נושא<select name="subj">
														<option>השתלת לב</option>
														<option>השתלת כליה</option>
														<option>השתלת כבד</option>
														<option>אחר</option>
													</select>
												</label>
					<label>מידע נוסף<textarea name="comm"></textarea></label>
					<button>צרו איתי קשר עכשיו</button>
				</div>
				<hr />
				<div id=services>
					<nav>
						<a href="#about">אודות</a>
                        <a href="#liver">השתלת כבד</a>
                        <a href="#heart">השתלת לב</a>
                        <a href="#kidney">השתלת כליה</a>
					</nav>
					<section class="pages" rel="services" style="display: block;">
						<a name="services"></a>
						<h2>שירות</h2>
				<p>החברה תכוון, תדריך ותלווה את החולה באיסוף כל החומר הנדרש, תפנה לרופא מומחה מטעם החברה, אשר יחבר חוות דעת רפואית מקיפה בכל שפה הנדרשת לצורך ההשתלה, התענה על דרישות הצוות הרפואי בבית החולים. <p>
                        בנוסף מרגע הגעת החולה ומשפחתו למדינה הרלוונטית שבה יעבור את ניתוח השתלת האיבר, יתלווה אליהם אדם מקצועי מטעם החברה אשר ידאג לאיסוף משדה התעופה, ימקם בבית המלון, ידאג להסעות, יתלווה בכל ביקור בבית החולים על מנת לוודא שהחולה יקבל את כל השירותים הנדרשים ויעזור בתרגומים, המלווה יהיה שם בשבילכם על מנת שתרגישו נוח ככל האפשר במדינה זרה ולהקל עליכם לעבור הליך לא קל ומרגש זה. 
					</section>
					<section rel="about" class="pages">
						<a name="about"></a>
						<h2>על החברה</h2>
						<p>חברת "לשם שמיים -החברה הישראלית להצלת חיים ותיירות מרפא בע"מ" עוסקת במתן שירותי ייעוץ ופתרון בנוגע להשתלות איברים בחו"ל ,והכל רק על פי המותר בחוק השתלת איברים. לחברה ניסיון בתחום של יותר מ-10 שנים. ולזכותה חולים רבים אשר חייהם ניצלו,ומוכנים לתת המלצות וחוות דעת על שירותי החברה לכל לקוח חדש המעוניין בכך.<br>
החברה עובדת עם צוות רופאים בכירים ברמה מקצועית גבוהה.<br>
יועץ של החברה הוא פרופסור ומומחה בעל שם בתחום להשתלות איברים.<br>
בנוסף לחברה  הסכמים בלעדיים עם בתי חולים בעולם ורופאים בין המובילים בתחום השתלות בעולם.<br>
עיקרון החברה הוא הבנה שהעיסוק מתבצע מול לקוחות עם בעיות רפואיות ולכן היחס צריך להיות בהתאם,כל לקוח אשר פונה אלינו מקבל שירות ברמה הגבוהה ביותר,שירות חם ומבין הכולל ליווי צמוד ע"י צוות שלנו למשך כל התהליך(הסעות,סיכום רפואי,יעוץ רפואי ומשפטי...).<br>
החברה מתחייבת לתת פתרון להשתלה מתורם מן המת או מתורם אלטרואיסטי בזמן הקצר ביותר במידת האפשר.</p>
					</section>
					<section class="pages" rel="liver">
						<h2>השתלת כבד</h2>
						<p>השתלת כבד היא השתלת איברים שמטרתה החלפתו של כבד חולה באלוגרפט כבד בריא.
הטכניקה הנפוצה ביותר הנמצאת כיום בשימוש היא השתלה אורתוטופית בה הכבד החולה מוצא מגוף המושתל, והאיבר הנתרם מושם במיקום האנטומי המדויק ממנו הוצא הכבד המקורי. השתלת כבד היא כיום אופציית טיפול מקובלת עבור מחלות כבד בשלב סופי וכשל תפקודי מוחלט של הכבד<p>
מרבית החולים המחכים להשתלה הינם חולים עם שחמת כתוצאה ממחלת כבד אלכוהולית, הפטיטיס ויראלי כרוני של הכבד, וסרטן הכבד. חולים עם שחמת כבד אלכוהולית חייבים להיגמל מאלכוהול לצורך ההשתלה. חולים עם הפטיטיס ויראלי לעתים צריכים לקבל תרופות אנטי ויראליות כדרך להימנע מהדבקה חוזרת אשר בחלק מן המקרים נובעת מהישארות הוירוס ברקמות אחרות מלבד הכבד. לגבי חולים עם סרטן ראשוני של הכבד, התוצאות הינן פחות טובות בהשתלת כבד מאשר תוצאות ההשתלה על רקע מחלת כבד אחרת- ועל כן יש קריטריונים באשר לגודל הגידול אשר תחתיו יש אינדיקציה לעבור השתלה.

					</section>
<section class="pages" rel="heart">
						<h2>השתלת לב</h2>
<p>ניתוח השתלת לב הינו טיפול המבוצע במצבי אי ספיקת לב קשים שגורמים לכך שהלב בקושי מתפקד, ואין הזרמת דם טובה לרקמות השונות. השתלת הלב מבוצעת בכל טווח הגילאים, החל מיילודים ועד אנשים מבוגרים וקשישים. המצבים הנפוצים ביותר המובילים להשתלת לב הם קרדיומיופתיה, אוטמים מרובים, מחלות מסתמים, מחלות לב מולדות, הפרעות קצב קטלניות וגידולי לב.<p>
לעיתים, לא תמיד ניתן להשתיל לב, או צריך להמתין לפני ביצוע ההשתלה, בשל בעיות רפואיות שונות. במצב זה מבצעים השתלת לב מלאכותי זמני עד לביצוע ההשתלה. בנוסף, לעיתים קיימים גם גורמים המהווים באופן כללי התוויה נגד השתלות, כמו לדוגמא זיהום, גידולים ממאירים ומחלות מרובות. התוויה ייחודית נגד השתלת לב היא לחץ דם ריאתי גבוה – מצב נפוץ הגורם לאי ספיקת לב, אך גם עלול להוביל לאי ספיקת לב ימין גם לאחר ההשתלה – במצבים אלו, לא מבצעים השתלת לב.
			
</section>

<section class="pages" rel="kidney">
						<h2>השתלת כליה</h2>
<p>השתלת כליה היא תחליף לדיאליזה וישנן כמה סיבות לכך שהשתלת הכליה עדיפה על פני דיאליזה:
ההשתלה משפרת בהרבה את איכות החיים יחסית לדיאליזה, חולים המטופלים בדיאליזה צריכים להגיע שלוש פעמים בשבוע לטיפול, לעומתם אצל מושתלי כליה החיים כמעט רגילים.<br>
השתלה עשויה להאריך את חיי המושתל, אנשים שעברו השתלה נשארו בחיים יותר מאשר אלו שנשארו ברשימת ההמתנה.<br>
מסיבה כלכלית: ההשתלה עם תרופות מדכאות חיסון עולה פחות מאשר דיאליזה לכל החיים.
		
</section>

				</div>
			</section>
		</article>
		<footer>
			<p>
				<cite>&copy; Copyright 2013 JustSaveLives, LLC All Rights Reserved</cite><span>למידע נוסף בקר <a href="http://www.justsavelives.com/" target="_blank" >באתר שלנו</a></span>
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
