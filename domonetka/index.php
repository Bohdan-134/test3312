<?php
$cms = require_once $_SERVER['DOCUMENT_ROOT'] . '/init.php';
$cms->landing( 1, 2 );
?>

<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>ERONEX</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link
		href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid-3.3.1.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<?php $cms->header(); ?>
</head>

<body>
	<div class="wrapper">
		<div class="top-panel">
			<div class="container">
				<div class="header-top-block clearfix">
					<div class="logo-block left"><a href="#header"><img style="margin: 10px 0 0 0;" src="images/logo.png" alt="logo"></a></div>
					<nav class="navigation left">
						<i class="fa fa-bars"></i>
						<ul class="menu">
							<li class="menu_item"><a href="#action">Działanie</a></li>
							<li class="menu_item"><a href="#advice">Praktyczna porada</a></li>
							<li class="menu_item"><a href="#feedback">Opinie</a></li>
						</ul>
					</nav>
					<div class="btn-fix-wrap">
						<div class="btn-block btn right js-to-form"><span>Zamówić</span></div>
					</div>
					<div class="block_1 timer-header">
						<p class="timer__text">Przed zakończeniem promocji pozostało</p>
						<div class="countbox"></div>
					</div>
				</div>
			</div>
		</div>
		<header class="header" id="header">
			<div class="container">
				<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
					<div class="sm-center">
						<div class="header-txt-sm">Obudź <span class="color_white">w sobie</span><br>samca alfa</div>
						<div class="header-img-wrap"><img style="max-width: 400px;" class="header-img header-img1" src="images/product-main.png"
								alt=""> <img class="header-img header-img2" src="images/product-main2.png" alt=""> <img
								class="header-img header-img3"  style="max-width: 200px;" src="images/product-main3.png" alt=""></div>
						<div class="header-txt">
							<div class="header-txt-main">Obudź<br><span class="color_white">w sobie</span><br>samca alfa
							</div>
							<div class="price-block">
								<div class="old-price al-cost-promo">274 PL</div>
								<div class="new-price al-cost">137 PL</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
					<form class="form form-lg al-form" method="POST" action="../order/cu.php?sub1={sub1}&sub2=1166&sub3=PL&caid={campaign_name}&pixel={pixel}&sub_id={subid}&ak={ak}">
						<?=$cms->params();?>
						<select name="country" class="al-country" style="display:none"></select><span
							class="form-title">WYPEŁNIJ FORMULARZ<br>A MY SIĘ Z TOBĄ SKONTAKTUJEMY </span>
						<div><input type="text" name="name" class="input-name" placeholder="Imię" required></div>
						<div><input type="text" name="phone" class="input-phone" placeholder="Telefon" required></div> <button
							type="submit" class="btn btn-form js-submit btn-point point"><span>ZAMÓW</span></button>
						<div class="secure-block clearfix">
							<div class="norton left"><img src="images/Norton_av_logo.png" alt=""></div>
							<div class="macafea right"><img src="images/mcafee-logo.png" alt=""></div>
						</div>
					</form>
				</div>
			</div>
		</header>
		<section class="form-section-xs">
			<form class="form form-sm al-form" method="POST" action="../order/cu.php?sub1={sub1}&sub2=1166&sub3=PL&caid={campaign_name}&pixel={pixel}&sub_id={subid}&ak={ak}">
				<select name="country" class="al-country" style="display:none"></select><span
					class="form-title">WYPEŁNIJ FORMULARZ<br>A MY SIĘ Z TOBĄ SKONTAKTUJEMY </span>
				<div><input type="text" name="name" class="input-name" placeholder="Imię" required></div>
				<div><input type="text" name="phone" class="input-phone" placeholder="Telefon" required></div> <button
					type="submit"
					class="btn btn-form js-submit btn-point point-xs botton-lg"><span>ZAMÓW</span></button>
				<div class="secure-block clearfix">
					<div class="norton left"><img src="images/Norton_av_logo.png" alt=""></div>
					<div class="macafea right"><img src="images/mcafee-logo.png" alt=""></div>
				</div>
			</form>
		</section>
		<section class="libido-section" id="action">
			<div class="container">
				<div class="col-lg-12">
					<div class="libido-section-title">Zwiększa libido i potencję</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="libido-block libido-block1">
						<div class="libido-block-txt libido-block-txt1">Codzienna<br>erekcja</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="libido-block libido-block2">
						<div class="libido-block-txt libido-block-txt2">Wielogodzinny<br>seks</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="libido-block libido-block3">
						<div class="libido-block-txt libido-block-txt3">Aktywizacja<br>testosteronu</div>
					</div>
				</div>
			</div>
		</section>
		<section class="choise">
			<div class="container">
				<div class="col-lg-12">
					<div class="steps-title choise-title">Twój wybór to ERONEX!</div>
				</div>
			</div>
			<div class="container">
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="choise-item choise-item-bad">
						<div class="choise-item-title choise-item-title-bad">Syntetyczne środki na erekcję szkodzą
							zdrowiu</div>
						<div class="choise-item-txt">
							<div class="choise-item-txt-item bad">deprymują serce i naczynia krwionośne</div>
							<div class="choise-item-txt-item bad">zawierają szkodliwą chemię</div>
							<div class="choise-item-txt-item bad">powodują uzależnienie</div>
							<div class="choise-item-txt-item bad">tłumią ogólny stan zdrowia</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 hidden-md hidden-sm hidden-xs"><img class="choise-img" src="images/mens.png"
						alt=""></div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="choise-item choise-item-good">
						<div class="choise-item-title choise-item-title-good">Naturalny środek na erekcję ERONEX jest
							całkowicie bezpieczny</div>
						<div class="choise-item-txt">
							<div class="choise-item-txt-item good">Zawiera ekologiczne komponenty</div>
							<div class="choise-item-txt-item good">można kupić bez recepty</div>
							<div class="choise-item-txt-item good">nie ma efektów ubocznych</div>
							<div class="choise-item-txt-item good">wzmacnia cały organizm</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="blogger" id="advice">
			<div class="container">
				<div class="blogger-block">
					<div class="blogger-title">Porady od najlepszych: tylko ERONEX!</div>
					<p class="blogger-txt">Dlaczego śmiało polecam ERONEX wszystkim mężczyznom?<br>Ponieważ
						<strong>wpływa na wszelkie przyczyny zaburzeń erekcji </strong>– czy to nerwowość, niewydolność
						hormonalna, konsekwencje nadciśnienia czy zapalenie gruczołu krokowego.</p>
					<p class="blogger-txt">Wiem o tym nie przez pogłoski, ponieważ podróżowałem po całym świecie i
						zdałem sobie sprawę, że składniki kapsułek są szeroko rozpowszechnione w różnych częściach
						naszej planety - od Syberii do południowoamerykańskich wiosek.</p>
					<p class="blogger-name">Jan Świątek, bloger podróżniczy<br>odwiedził ponad 50 krajów na całym
						świecie</p>
					<a href="#footer" class="btn blogger-btn"><span>spróbuj!</span></a>
				</div>
			</div>
		</section>
		<section class="attention">
			<div class="container">
				<div class="col-md-3 col-sm-12">
					<div><img class="attention_img right" src="images/attention-img.png" alt=""></div>
				</div>
				<div class="col-md-9 col-sm-12">
					<div class="attention_txt">Przepis wykorzystuje pantogematogen wyekstrahowany<br>ekologiczną metodą
						ochrony przyrody, która pozwala<br>na wyprodukowanie nie więcej niż <span
							class="att_size">3000</span> opakowań ERONEX <span class="att_size">rocznie</span></div>
				</div>
			</div>
		</section>
		<section class="howuse">
			<div class="container">
				<div class="col-lg-12">
					<div class="libido-section-title libido-sm">Metoda aplikacji ERONEX</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-4">
					<div class="howuse-item">
						<img class="howuse-img" src="images/intersex-icon.png" alt="">
						<div class="howuse-txt"><span class="color-main">Bierz kapsułki</span><br>codziennie i,
							oczywiście, bezpośrednio przed seksem</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="howuse-item">
						<img class="howuse-img" src="images/calendar-icon.png" alt="">
						<div class="howuse-txt"><span class="color-main">Zalecany kurs</span><br>ustalane indywidualnie,
							przedawkowania nie zauważono</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="howuse-item">
						<img class="howuse-img" src="images/chili-pepper-icon.png" alt="">
						<div class="howuse-txt"><span class="color-main">Potencja zostanie przywrócona</span><br>od
							pierwszego tygodnia, a pod koniec kursu stabilizuje się erekcja</div>
					</div>
				</div>
			</div>
		</section>
		<section class="response" id="feedback">
			<div class="container">
				<h3 class="title-response">Recenzje szczęśliwych mężczyzn</h3>
			</div>
			<div class="container comment">
				<div class="col-md-4 col-xs-12 p0">
					<div class="comment-item">
						<div class="coment__time">16:45</div>
						<div class="comment__right">Dzięki za zamówienie. Proszę oczekiwać informacji na temat
							szczegółów dostawy.</div>
						<div class="comment__right">Będziemy wdzięczni za opinie pozostawione po użyciu ERONEX.</div>
						<div class="comment__left">Dziękuję również.</div>
						<div class="comment__left">Kapsułki już kupowałem, od tego czasu jestem zawsze gotowy na
							regularny seks ;-) <i class="comment__ava ava1"></i></div>
						<div class="comment__right">Dzięki za opinie, Jan!</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 p0">
					<div class="comment-item">
						<div class="coment__time">12:37</div>
						<div class="comment__right">Zamówił pan ERONEX. Czy może pan wyrazić opinię na temat
							zastosowania ERONEX?</div>
						<div class="comment__left">Dzień dobry! Oczywiście, że mogę! Ale bez szczegółów)</div>
						<div class="comment__left">ERONEX pocieszył mnie i ceną, i jakością. Jestem zadowolony :-) I
							moja dziewczyna też! <i class="comment__ava ava2"></i></div>
						<div class="comment__right">Dzięki za opinie, Andrzeju! Czy możemy anonimowo zamieścić ją na
							stronie?</div>
						<div class="comment__left">Tak, oczywiście. <i class="comment__ava ava2"></i></div>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 p0">
					<div class="comment-item">
						<div class="coment__time">14:12</div>
						<div class="comment__right">Dzięki za zamówienie. Czy mógłby pan wyrazić opinię na temat
							zastosowania ERONEX?</div>
						<div class="comment__left">Ok.</div>
						<div class="comment__left">Środek naprawdę działa. Nie spodziewałem się. Po raz pierwszy coś
							takiego stosuję. Jestem bardzo zadowolony z wyników) <i class="comment__ava ava3"></i></div>
						<div class="comment__right">Dzięki za pańską opinie, panie Jakubie! Czy ma pan coś przeciwko,
							jeśli opublikujemy ją na stronie?</div>
						<div class="comment__left">Owszem :-) <i class="comment__ava ava3"></i></div>
						<div class="comment__right">Dziękuję!</div>
					</div>
				</div>
			</div>
		</section>
		<section class="steps">
			<div class="container">
				<div class="col-lg-12">
					<div class="steps-title">4 kroki do zdrowej erekcji</div>
				</div>
			</div>
			<div class="container">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="steps-item steps-item1">
						<span class="steps-item-title">Dogodnie</span>
						<p class="steps-item-txt">Wypełnij wniosek na stronie, a nasz operator oddzwoni w celu
							załatwienia szczegółów</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="steps-item steps-item2">
						<span class="steps-item-title">Szybko</span>
						<p class="steps-item-txt">Zapewniamy najszybszą dostawę pod wskazany adres</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="steps-item steps-item3">
						<span class="steps-item-title">Anonimowo</span>
						<p class="steps-item-txt">Nikt, z wyjątkiem odbiorcy, nie dowie się o zawartości nieprzejrzystej
							paczki</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="steps-item steps-item4">
						<span class="steps-item-title">Bezpiecznie</span>
						<p class="steps-item-txt">Zapłata za towar następuje dopiero po jego otrzymaniu, więc żadnego
							ryzyka</p>
					</div>
				</div>
			</div>
		</section>
		<footer class="header" id="footer">
			<div class="container">
				<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
					<div class="header-txt-sm footer-txt-sm">Obudź <span class="color_white">w sobie</span><br>samca
						alfa</div>
					<div class="header-img-wrap footer-img-wrap"><img class="header-img header-img1"
							src="images/product-main.png" alt="" style="max-width: 400px;"> <img class="header-img header-img2"
							src="images/product-main2.png" alt=""> <img class="header-img header-img3"
							src="images/product-main3.png" alt="" style="max-width: 200px;"></div>
					<div class="header-txt">
						<div class="header-txt-main">Obudź<br><span class="color_white">w sobie</span><br>samca alfa
						</div>
						<div class="price-block">
							<div class="old-price al-cost-promo">274 PL</div>
							<div class="new-price al-cost">137 PL</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
					<div class="block_1 block-lg">
						<p class="timer__text">Przed zakończeniem promocji pozostało</p>
						<div class="countbox"></div>
					</div>
					<form class="form form-lg footer-form al-form" method="POST" action="../order/cu.php?sub1={sub1}&sub2=1166&sub3=PL&caid={campaign_name}&pixel={pixel}&sub_id={subid}&ak={ak}">
						<select name="country" class="al-country" style="display:none"></select><span
							class="form-title">WYPEŁNIJ FORMULARZ<br>A MY SIĘ Z TOBĄ SKONTAKTUJEMY </span>
						<div><input type="text" name="name" class="input-name" placeholder="Imię" required></div>
						<div><input type="text" name="phone" class="input-phone" placeholder="Telefon" required></div> <button
							type="submit" class="btn btn-form js-submit btn-point point2"><span>ZAMÓW</span></button>
						<div class="secure-block clearfix">
							<div class="norton left"><img src="images/Norton_av_logo.png" alt=""></div>
							<div class="macafea right"><img src="images/mcafee-logo.png" alt=""></div>
						</div>
					</form>
				</div>
			</div>
		</footer>
		<section class="form-section-xs">
			<div class="block_1 block-sm">
				<p class="timer__text">Przed zakończeniem promocji pozostało</p>
				<div class="countbox"></div>
			</div>
			<form class="form form-sm al-form" method="POST" action="../order/cu.php?sub1={sub1}&sub2=1166&sub3=PL&caid={campaign_name}&pixel={pixel}&sub_id={subid}&ak={ak}">
				<select name="country" class="al-country" style="display:none"></select><span
					class="form-title">WYPEŁNIJ FORMULARZ<br>A MY SIĘ Z TOBĄ SKONTAKTUJEMY </span>
				<div><input type="text" name="name" class="input-name" placeholder="Imię" required></div>
				<div><input type="text" name="phone" class="input-phone" placeholder="Telefon" required></div> <button
					type="submit"
					class="btn btn-form js-submit btn-point botton-xs point2-xs"><span>ZAMÓW</span></button>
				<div class="secure-block clearfix">
					<div class="norton left"><img src="images/Norton_av_logo.png" alt=""></div>
					<div class="macafea right"><img src="images/mcafee-logo.png" alt=""></div>
				</div>
			</form>
		</section>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/count.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
	<?php $cms->footer(); ?>

</body>

</html>