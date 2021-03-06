<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>Bakelicius</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans%7COswald:300,400,500,700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="dist/css/reset.css">
	<link rel="stylesheet" href="dist/css/app.css">
</head>

<body>
	<!-- BEGIN HEADER -->
	<header id="header" class="main_header">
		<div class="container">
			<div class="headerWrap">
				<div class="header_logo">
					<a href="index.php">
						<img src="dist/images/Logo.png" alt="Bakelicius Logo">
					</a>
				</div>
				<nav class="nav_wrapper">
					<ul>
					    <li><a href="logIn.php">Sign In</a></li>
						<li class="is--active"><a href="index.php">Home</a></li>
						<li><a href="#Recipes">Recipes</a></li>
						<li><a href="contact.php">contact us</a></li>
						<li><a href="Messages.php">Messages</a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="videos.php">Tutorials</a></li>
					</ul>
				</nav>
				<div class="hamburger show-mob">
					<span> </span>
					<span></span>
					<span></span>
				</div>
				<a href="tel:+383-49-374-262" class="call_button"><span>+383-49-374-262</span></a>
			</div>
		</div>
	</header>
	<!-- END HEADER -->
	<!-- BEGIN MAIN -->
	<main id="main" class="main_content">
		<div class="mainWrap">
			<section class="block_section">
				<ul class="slider block_section">
					<li class="slider_item" style="background-image: url(dist/images/slide1.jpg)">
						<div class="container">
							<div class="slider_item__content">
								<span class="label_bg">landing page template</span>
								<h3>Welcome to our Blog</h3>
								<h4>best choice for your recipes</h4>
							</div>
						</div>
					</li>
					<li class="slider_item" style="background-image: url(dist/images/slide2.jpg)">
						<div class="container">
							<div class="slider_item__contentf">
								<span class="label_bg">landing page template</span>
								<h3>Welcome to our Blog</h3>
								<h4>best choice for your recipes</h4>
							</div>
						</div>
					</li>
					<li class="slider_item" style="background-image: url(dist/images/slide3.jpg)">
						<div class="container">
							<div class="slider_item__content">
								<span class="label_bg">landing page template</span>
								<h3>Welcome to our Blog</h3>
								<h4>best choice for your recipes</h4>
							</div>
						</div>
					</li>
				</ul>
				<div class="slider_nav">
					<div class="container">
						<button class="prev" id="prev"></button>
						<button class="next" id="next"></button>
					</div>
				</div>
			</section>
			<section class="block_section trainers_section">
				<div class="container">
					<div class="main_title">
						<span id="Recipes">
							<h4>Recipes</h4>
						</span>
					</div>
					<div class="trainers_wrapper block_section">
						<div class="row">
							<div class="column-3 column-mob-12">
								<div class="box">
									<div class="box__thumb">
										<img src="dist/images/shalqiri.jpg" alt="Shalqiri">
									</div>
									<div class="box__content">
										<h4>L??ng shalqiri i fresk??t</h4>
										<span>Receta</span>
										<p>P??r t?? p??rgaditur l??ng shalqiri, zgjedhim bostanin e ??mb??l dhe t?? pjekur.
											Presim shalqirin n?? copa t?? vogla dhe e hedhim n?? grir??s elektrik.E l??m nj??
											fet?? p??r ta vendosur sip??r p??r dekor. Shtrydhim gjysm??n e limonit dhe e
											shtojm?? n?? gri??rs. Pasi t?? jet?? b??r?? n?? form?? pureje, e hedhim n?? nj?? sit??
											q?? t?? eleminojm?? farat dhe e hedhim n??p??r gota.Gotav me l??ng shalqiri i
											shtojm?? akullin e grir??. I p??rziejm dhei vendosim sip??r dy feta t?? vogla
											shalqiri. </p>
									</div>
								</div>
							</div>
							<div class="column-3 column-mob-12">
								<div class="box">
									<div class="box__thumb">
										<img src="dist/images/makarona.jpg" alt="Makarona Me mish">
									</div>
									<div class="box__content">
										<h4>Makarona me mish</h4>
										<span>Receta</span>
										<p>N?? nj?? tenxhere me 3 lug?? vaj ulliri kaurdisim mishin e qingjit t?? sp??rkatur
											me krip??. E kaurdisim nga t?? gjitha an??t dhe m?? pas e shuajm?? me ver?? t??
											bardh??.Sapo alkooli i ver??s t?? avulloj?? shtojm?? nj?? qep?? t?? grir?? im??t,
											karrot??n t?? prer?? n?? kubik?? t?? vegj??l dhe domaten t?? grir?? n?? rende.I
											trazojm?? mir?? p??rb??r??sit i rregullojm?? me pak sheqer, krip?? dhe piper dhe m??
											pas shtojm?? buljon me koncentrat pule. Ulim temperatur??n e sob??s dhe e lem??
											gatimin t?? ziej?? p??r rreth 40 minuta n?? temperatur?? t?? ul??t.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/ujisass.png" alt="Uji Sass">
								</div>
								<div class="box__content">
									<h4>Uji Sass</h4>
									<span>receta</span>
									<p><b>P??rb??r??sit:</b> litra uj??, 1 lug?? ??aji xhenxhefil t?? grir??, 1 kastravec, i
										q??ruar dhe prer?? holl??, 1 limon, i prer?? holl??, gjethe mente.
										<br><b>P??rgaditja:</b> P??rzieni t?? gjith?? p??rb??r??sit n?? nj?? brok?? t?? madhe dhe i
										lini p??rb??r??sit t?? treten gjat?? gjith?? nat??s. Konsumojeni t?? gjith?? ujin n??
										broke gjat?? gjith?? dit??s s?? nes??rme. T?? nj??jt??n gj?? b??ni ??do dit??.
										</br></p>

								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/byrek.png" alt="Byrek me Spinaq">
								</div>
								<div class="box__content">
									<h4>Byrek me spniaq</h4>
									<span>Receta</span>
									<p><b>P??rb??r??sit:</b> 400gr gjiz?? pa yndyr??, 500gr spinaq, dy patate t?? ziera, krip??
										dhe piper.<br><b>P??rgaditja:</b> Zieni spinaqin n?? pak uj??, shtrydheni dhe
										grijeni. Bashkojeni me patatet e ziera dhe gjiz??n, duke i hedhur piper dhe pak
										krip??. P??rzierjen e p??rftuar vendoseni n?? nj?? tav?? t?? mbuluar me let??r furre dhe
										futeni t?? piqet p??r rreth 40-45 minuta n?? furr?? me 200 grad??.</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/qofte.jpg" alt="Qofte">
								</div>
								<div class="box__content">
									<h4>Qofte</h4>
									<span>Receta</span>
									<p><b>P??rb??r??sit:</b> 60 gr th??rrime buke,60 ml qum??sht,400 gr mish i gir?? vi??i,1
										vez??,30 gr djath?? ka??kavall,Pak arr??myshk,1 lug?? gjelle majdanoz,1 lug?? gjelle
										nenexhik,Vaj,Krip??,Piperi zi.<br><b>P??rgaditja:</b> Shtoni th??rrimet e buk??s n??
										nj?? tas mesatar s??bashku me qum??shtin dhe l??rini p??r 10 minuta, derisa buka t??
										p??rthith?? gjith?? qum??shtin. M?? pas shtoni n?? t?? mishin e vi??it. Hidhni vez??n,
										djathin e grir??, arr??myshkun, majdanozin dhe nenexhikun e cop??tuar. Sp??rkatini
										me pak krip?? dhe piper t?? zi dhe p??rziejini mir?? t?? gjith?? p??rb??r??sit q?? t??
										p??rftoni nj?? mas?? homogjene. M?? pas merrni nga masa e p??rgatitur dhe formoni
										qoftet n?? form??n q?? d??shironi. Vendosni nj?? tigan me vaj dhe renditni qoftet n??
										t??. Skuqini p??r disa minuta nga t?? dyja an??t dhe renditini n?? nj?? pjat?? p??r
										servirje.</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/kek.jpg" alt="Kek pa miell dhe sheqer">
								</div>
								<div class="box__content">
									<h4>Kek pa miell dhe sheqer</h4>
									<span>Receta</span>
									<p><b>P??rb??r??sit:</b> 4 vez??, 2 portokall, 200 gram arra, gjys??m lug?? ??aji sod??
										buke, 100 gram ??okollat?? gatimi ,200 ml ajk?? qum??shti<br><b>P??rgaditja:</b> S??
										pari, q??rojini, grijini dhe hidhini portokajt n?? nj?? en?? t?? vog??l. Ziejini p??r
										gjysm?? ore derisa t?? zbuten. Shtojini n?? blender s?? bashku me vez??t, arrat dhe
										sod??n e buk??s .Hidheni p??rzierjen n?? nj?? form?? keku dhe vendoseni n?? furr??.
										Piqeni n?? temperatur??n 200 grad?? Celcius p??r 20 minuta. Nd??rkoh??, shkrijeni
										??okollat??n dhe ajk??n e qum??shtit p??r disa minuta. Nxirreni kekun nga furra dhe
										hidheni p??rzierjen me ??okollat?? mbi t??.</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/shkrirje.jpg" alt="Shkrir??s t?? kilogram??ve">
								</div>
								<div class="box__content">
									<h4>Shkrir??s t?? kilogram??ve</h4>
									<span>Receta</span>
									<p><b>P??rb??r??sit:</b>

										nj?? filxhan i vog??l l??ng domateje,
										?? e filxhanit l??ng limoni,
										nj?? lug?? xhenxhefil t?? grir?? n?? rende,
										nj?? spec djeg??s,
										dy deg??za selinoje (t?? madh??sis?? mesatare).

										<br><b>P??rgaditja:</b>

										P??rzijeni l??ngun e domates, l??ngun e limonit, xhenxhefilin dhe specin djeg??s. Do
										t?? p??rftoni 220 ml l??ng
										Sh??rbejeni n?? gota qelqi dhe shtoni deg??zat e selinos t?? cilat i hani nga pak
										duke pir?? pijen. Midis racioneve pini tri gota t?? k??saj pijeje. N??se b??ni m??
										shum??, pijen ruajeni n?? frigorifer
										</br></p>
								</div>
							</div>
						</div>
						<div class="column-3 column-mob-12">
							<div class="box">
								<div class="box__thumb">
									<img src="dist/images/rizoto.png" alt="Rizoto">
								</div>
								<div class="box__content">
									<h4>Rizoto</h4>
									<span>Receta</span>
									<p><b>P??rb??r??sit:</b>

										200 gram?? k??rpudha,

										100 gram?? oriz,

										1 karot?? e madhe,

										2 tufa qep?? t?? reja,

										flet?? majdanozi,

										vaj,

										krip??,

										piper.

										</br><b>P??rgaditja:</b>

										N?? vaj f??rgoni qep??n e grir?? pastaj shtoni karot??n e grir??.

										Kur t?? f??rgohet, shtoni shampinjon??t e grir?? dhe orizin t?? cilin m?? par?? e keni
										lar??, pastaj qitni pak uj?? dhe zieni n?? zjarr t?? ngadalsh??m.

										Kur orizi t?? fryhet pak, shtoni krip??n dhe piperin, pastaj qiteni n?? gjyve?? dhe
										shtoni flet??t e grira t?? majdanozit.

										Shtoni edhe pak uj?? dhe futeni n?? furr?? q?? t?? piqet n?? 200 grad?? Celsius rreth
										30 minuta.</br></p>
								</div>
							</div>
						</div>

					</div>
					
				</div>
			</section>
			
		</div>
	</main>
	<!-- END MAIN -->

	<!-- BEGIN FOOTER -->
	<footer>

		<div class="row">
			<div class="column">Copyright??2020. All Rights Reserved</div>

			<!-- END FOOTER -->

</body>
<!-- SCRIPTS -->
<script src="dist/js/jquery-1.12.4.js" type="text/javascript"></script>
<script src="dist/js/app.js" type="text/javascript"></script>

</html>