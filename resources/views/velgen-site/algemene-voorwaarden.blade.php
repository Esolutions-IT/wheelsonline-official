<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WheelsOnline</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('public/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('public/css/velgenstyle.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +010-2600601</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> info@wheelsonline.nl</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Essebaan 7, 2908 LJ Capelle aan den IJssel</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-euro"></i> EU </a></li>
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="{{asset('public/images/wheelsonline.png')}}" style="width:200px;" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<<!-- !-- SEARCH BAR -->
						<div class="col-md-6">
							 <div class="header-search">
								<!-- <form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form> -->
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Verlanglijst</span>
										<!-- <div class="qty">2</div> -->
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<!-- <div class="qty">3</div> -->
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('public/images/product01.png')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="{{asset('public/images/product02.png')}}" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div>
										</div>
										<div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="{{route('velgen_home')}}">Home</a></li>
						<li><a href="#">Assortiment</a></li>
						<li><a href="{{route('velgen_overons')}}">Over Ons</a></li>
						<li><a href="{{route('velgen_contact')}}">Contact</a></li>
						<li><a href="http://localhost/wheelsonline/">Terug naar keuzemenu</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

<!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="{{asset('public/js/jssor.slider-27.5.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,o:-0.7}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 032 css*/
        .jssorb032 {position:absolute;}
        .jssorb032 .i {position:absolute;cursor:pointer;}
        .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
        .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
        .jssorb032 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('public/images/slider/spin.svg')}}" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="{{asset('public/images/slider/bmw1.jpg')}}" />
                <!-- <div data-u="caption" data-t="0" data-ts="preserve-3d" style="position:absolute;top:120px;left:75px;width:470px;height:220px;">
                    <img style="position:absolute;top:0px;left:0px;width:470px;height:220px;max-width:470px;" src="img/c-phone-horizontal.png" />
                    <div data-ts="preserve-3d" style="position:absolute;top:4px;left:45px;width:379px;height:213px;overflow:hidden;">
                        <img data-u="caption" data-t="1" style="position:absolute;top:0px;left:0px;width:379px;height:213px;max-width:379px;" src="img/c-slide-1.jpg" />
                        <img data-u="caption" data-t="2" style="position:absolute;top:0px;left:379px;width:379px;height:213px;max-width:379px;" src="img/c-slide-3.jpg" />
                    </div>
                    <img style="position:absolute;top:4px;left:45px;width:379px;height:213px;max-width:379px;" src="img/c-navigator-horizontal.png" />
                    <img data-u="caption" data-t="3" style="position:absolute;top:476px;left:454px;width:63px;height:77px;max-width:63px;" src="img/hand.png" />
                </div> -->
            </div>
            <div>
                <img data-u="image" src="{{asset('public/images/slider/bmw2.jpg')}}" />
            </div>
            <div>
                <img data-u="image" src="{{asset('public/images/slider/bmw3.jpg')}}" />
                <div style="position:absolute;top:30px;left:30px;width:480px;height:130px;font-family:'Roboto Condensed',sans-serif;font-size:40px;color:#000000;line-height:1.5;padding:5px 5px 5px 5px;box-sizing:border-box;background-color:(255,188,5,0.8);background-clip:padding-box;">
<br />
                </div>
                <div style="position:absolute;top:300px;left:30px;width:480px;height:130px;font-family:'Roboto Condensed',sans-serif;font-size:30px;color:#000000;line-height:1.27;padding:5px 5px 5px 5px;box-sizing:border-box;background-color:(255,188,5,0.8);background-clip:padding-box;"></div>
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->


<!-- Over ons-->
<div class="section">
	<div class="container">
 		<div class="col-md-12 col-xs-6">
 			<div class="text">
 				<h3>Algemene voorwaarden</h3>
 					<p>
 					Algemene voorwaarden Wheel Online B.V.
 					<br/>
					In deze Algemene Voorwaarden wordt verstaan onder:
					<br/>
					“Webwinkel” : Wheels Online B.V., ingeschreven bij de Kamer van Koophandel te Rotterdam onder nummer 24361263.
					“Afnemer”: De (potentiële) afnemer van zaken en/of diensten van Wheels Online B.V..
					Artikel 1. Algemeen
					<br/>
					Deze Algemene Voorwaarden zijn van toepassing op alle offertes en overeenkomsten, alsmede alle geleverde producten en diensten, geleverd door Wheels Online B.V., tenzij uitdrukkelijk anders schriftelijk overeengekomen is.
					<br/>
					1.     De toepasselijkheid van enige algemene specifieke voorwaarden of bedingen van Afnemer wordt door Wheels Online B.V. uitdrukkelijk van de hand gewezen.
					<br/>
					2.     Alle prijzen worden aangegeven in Euro’s (€), inclusief omzetbelasting (BTW) en andere heffingen welke van overheidswege worden opgelegd.
					<br/>
					3.     Wheels Online B.V. is niet aansprakelijk, noch op grond van de wet, noch uit Overeenkomst, voor zogenaamde gevolgschade die Afnemer of een derde ter zake van (in het gebruik van) de Producten mocht lijden. Hieronder is mede begrepen winstverlies, bedrijfsschade, verlies van gegevens en immateriële schade.
					<br/>
					4.     Afwijkingen van en aanvullingen op enige bepaling in een Overeenkomst en/of de Algemene Voorwaarden gelden slechts, indien zij schriftelijk door Wheels Online B.V. zijn vastgelegd en hebben alleen betrekking op de betreffende Overeenkomst.
					<br/>
					Artikel 2. Offertes
					<br/>
					1.     Wheels Online B.V. is slechts aan een offerte gebonden indien de ongewijzigde aanvaarding hiervan door de Afnemer schriftelijk binnen 8 dagen wordt bevestigd, tenzij anders op de offerte/overeenkomst vermeld.
					<br/>
					Artikel 3. Overeenkomst
					<br/>
					1.     De Afnemer is in alle gevallen aan de overeenkomst gebonden. Ook indien deze mondeling of per e- mail wordt overeengekomen.
					<br/>
					2.     Wheels Online B.V. behoud zich het recht bestellingen of opdrachten zonder opgaaf van reden niet te accepteren, of slechts onder afwijkende voorwaarden. Als de opdracht slechts onder afwijkende voorwaarden kan worden uitgevoerd heeft de Afnemer het recht de opdracht kosteloos te annuleren.
					<br/>
					3.     Indien en voorzover een goede uitvoering van de overeenkomst dit vereist c.q. toelaat, heeft Wheels Online B.V. het recht bepaalde werkzaamheden te laten verrichten door derden.
					<br/>
					Artikel 4. Levertijd
					<br/>
					1.     Alle door Wheels Online B.V. genoemde (leverings-)termijnen worden bij benadering gegeven en zijn vastgesteld op grond van de gegevens en omstandigheden die bij het aangaan van de overeenkomst aan Wheels Online B.V. bekend waren. Opgegeven leveringstermijnen zullen nimmer zijn te beschouwen als een fatale termijn. Indien een wijziging in de gegevens en/of omstandigheden, ongeacht de voorzienbaarheid daarvan, vertraging tot gevolg heeft, wordt de leveringsdatum dienovereenkomstig verlaat. Bij niet tijdige levering dient Wheels Online B.V. schriftelijk in gebreke te worden gesteld, waarbij haar nog een redelijke termijn tot levering moet worden geboden.
					<br/>
					2.     Overschrijding van de door Wheels Online B.V. opgegeven leveringstermijnen, door welke oorzaak dan ook, geeft de Afnemer nimmer recht op schadevergoeding of niet-nakoming van enige op hem rustende verplichting uit de desbetreffende overeenkomst dan wel een daarmee samenhangende overeenkomst.
					<br/>
					3.     In geval Wheels Online B.V. de order geheel of gedeeltelijk ontbindt is zij gerechtigd het onbetaald gebleven deel van het geleverde terug te nemen. Ontbinding en/of terugname laat het recht van Wheels Online B.V. op schadevergoeding onverlet door hem worden afgenomen, dan worden de goederen te zijner beschikking opgeslagen voor zijn rekening en risico.
					<br/>
					4.     Bij overschrijding van de maximale levertijd van 30 werkdagen heeft u het recht de overeenkomst kosteloos te ontbinden. Hiervoor dient u een e-mail, fax of brief aan Wheels Online B.V. te sturen. Eventuele betalingen worden in dat geval binnen 30 werkdagen na de kennisgeving aan u geretourneerd.
					<br/>
					Artikel 5. Wijziging van de Overeenkomst
					<br/>
					1.     Indien tijdens de uitvoering van de overeenkomst blijkt dat voor een behoorlijke uitvoering het noodzakelijk is om de te verrichte werkzaamheden te wijzigen of aan te vullen, zullen partijen tijdig en in onderling overleg de overeenkomst dienovereenkomstig aanpassen.
					<br/>
					2.     Indien partijen overeenkomen dat de overeenkomst wordt gewijzigd of aangevuld, kan het tijdstip van voltooiing van de uitvoering daardoor worden beïnvloed. Wheels Online B.V. zal de Afnemer zo spoedig mogelijk hiervan op de hoogte brengen.
					<br/>
					3.     Indien de wijziging of aanvulling op de overeenkomst financiële en / of kwalitatieve consequenties heeft, zal Wheels Online B.V. de Afnemer hierover tevoren inlichten. Indien een vast honorarium is overeengekomen zal Wheels Online B.V. daarbij aangeven in hoeverre de wijziging of aanvulling van de overeenkomst een overschrijding van dit honorarium ten gevolge heeft.
					<br/>
					4.     In afwijking van lid 3 zal Wheel Online B.V. geen meerkosten in rekening kunnen brengen indien de wijziging of aanvulling het gevolg is van omstandigheden die aan Wheels Online B.V. kunnen worden toegerekend.
					<br/>
					Artikel 6. Opzegging/Ontbinding
					<br/>
					1.     In geval van tussentijdse opzegging heeft Wheels Online B.V. naast vergoeding van de gemaakte kosten recht op een naar redelijkheid vast te stellen deel van de totale vergoeding, met inachtneming van de reeds verrichte werkzaamheden en het voordeel dat de Afnemer daarvan heeft.
					<br/>
					2.     De vorderingen van Wheels Online B.V. op de Afnemer zijn onmiddellijk opeisbaar in de volgende gevallen: – indien na het sluiten van de overeenkomst aan Wheels Online B.V. ter kennis gekomen omstandigheden Wheels Online B.V. goede grond geven te vrezen dat de Afnemer niet aan zijn verplichtingen zal voldoen; – indien Wheels Online B.V. de Afnemer bij het sluiten van de overeenkomst gevraagd heeft zekerheid te stellen voor de nakoming en deze zekerheid uitblijft dan wel onvoldoende is.
					<br/>
					3.     In de hierboven genoemde gevallen is Wheels Online B.V. bevoegd de verdere uitvoering van de overeenkomst te beëindigen, één en ander onverminderd het recht van Wheels Online B.V. schadevergoeding te vorderen.
					<br/>
					Artikel 7. Afkoelingsperiode
					<br/>
					1.      Nadat de klant het door hem/haar bestelde product heeft ontvangen, heeft de klant de bevoegdheid om binnen zeven (7) werkdagen na de ontvangst van dit product, de onderliggende overeenkomst met Wheels Online B.V. te ontbinden. De klant hoeft hiervoor geen reden op te geven.
					<br/>
					2.     Indien de klant de overeenkomst ingevolge artikel 7.1 van deze voorwaarden wenst te ontbinden, dient de klant dit schriftelijk (via e-mail, of brief) aan Wheels Online B.V. te melden. De klant dient het product – na overleg met Wheels Online B.V. – te sturen naar een door Wheels Online B.V. vastgesteld retouradres. Dit dient te gebeuren in de originele, niet beschadigde verpakking. Geopende verpakkingen worden niet teruggenomen; het openen van de verpakking betekent dat u het product/de producten wenst te behouden. De klant dient zelf de kosten van en het risico voor het verzenden te dragen.
					<br/>
					3.     Indien de klant reeds enige betalingen heeft verricht op het moment dat de klant de overeenkomst met Wheels Online B.V. ingevolge artikel 7.1. en 7.2 van deze Koopvoorwaarden heeft herroepen, zal Wheels Online B.V. deze betalingen binnen veertien (14) werkdagen nadat Wheels Online B.V. het door de klant geretourneerde product heeft ontvangen, aan de klant terugbetalen. Wheels Online B.V. behoudt het recht om geretourneerde producten te weigeren of om slechts een gedeelte van het reeds betaalde bedrag te crediteren, wanneer het vermoeden bestaat dat het product reeds is geopend, gebruikt of door de schuld van de klant (anders dan die van Wheels Online B.V. of de leverancier van het product) is beschadigd.
					<br/>
					4.     Indien een product wordt geretourneerd dat naar het oordeel van Wheels Online B.V. schade heeft opgelopen die aan een handeling of nalatigheid van de klant te wijten is of anderszins voor risico van de klant komt, zal Wheels Online B.V. de klant hiervan schriftelijk (via brief of e-mail) in kennis stellen. Wheels Online B.V. heeft het recht om de waardevermindering van het product als gevolg van deze schade van het aan de klant terug te betalen bedrag in te houden.
					<br/>
					Artikel 8. Uitvoering
					<br/>
					1.     Wheels Online B.V. zal de overeenkomst naar beste inzicht en vermogen en overeenkomstig de eisen van goed vakmanschap uitvoeren.
					<br/>
					2.     Indien geen vaste prijs wordt overeengekomen, zal de vergoeding worden vastgesteld op grond van werkelijk bestede uren. De vergoeding wordt berekend volgens de gebruikelijke uurtarieven van Wheels Online B.V., geldende voor de periode waarin de werkzaamheden worden verricht, tenzij een daarvan afwijkend uurtarief is overeengekomen.
					<br/>
					Artikel 9. Vergoeding
					<br/>
					1.     Voor aanbiedingen en overeenkomsten waarin een vaste prijs wordt aangeboden of overeengekomen geldt het lid 2 van dit artikel. Indien geen vast honorarium wordt overeengekomen, gelden de leden 3, 4 en 5 van dit artikel.
					<br/>
					2.     Partijen kunnen bij het tot stand komen van de overeenkomst een vaste prijs overeenkomen. De vaste prijs is inclusief BTW, reisuren, reis – en verblijfskosten.
					<br/>
					3.     Eventuele kostenramingen zijn inclusief BTW, reisuren, reis- en verblijfskosten. Bij opdrachten met een looptijd van meer dan 1 maand zullen de verschuldigde kosten maandelijks in rekening worden gebracht.
					<br/>
					Artikel 10. Betaling
					<br/>
					1.     Indien niet uitdrukkelijk anders is overeengekomen geschiedt de levering uitsluitend bij vooruitbetaling.
					<br/>
					2.     Als de Afnemer een factuur van Wheels Online B.V. niet binnen 14 dagen na betalingstermijn betaald heeft, is de Afnemer in verzuim. In dat geval zijn alle vorderingen, uit welke hoofde dan ook van Wheels Online B.V. op Afnemer onmiddellijk opeisbaar.
					<br/>
					Artikel 11. Garantie
					<br/>
					1.     De garantie is vastgesteld volgens het toepasselijk recht, waarbij wij in geval van gebreken de producten desgewenst eerst omruilen. Als het omgeruilde product eveneens gebreken vertoont, kunt u de producten retourneren tegen restitutie van het volledige aankoopbedrag (exclusief verzendkosten). Zie ook Artikel 7.
					<br/>
					Artikel 12. Eigendomsvoorbehoud
					<br/>
					1.     De door Wheels Online B.V. geleverde zaken blijven het eigendom van Wheels Online B.V. totdat de koper alle navolgende verplichtingen uit alle met Wheels Online B.V. gesloten koopovereenkomsten is nagekomen:
					<br/>
					a.     de tegenprestatie(s) met betrekking tot geleverde of te leveren zaak/zaken zelf;
					<br/>
					b.     eventuele vorderingen wegens niet-nakoming door de koper van deze overeenkomst(en).
					<br/>
					2.     De goederenrechtelijke gevolgen van een voor uitvoer bestemde zaak worden beheerst door het recht van het land van bestemming van de betreffende zaak, indien het eigendomsvoorbehoud op grond van het recht van het bestemmingsland niet zijn werking verliest totdat de volledige prijs is betaald, tenzij Wheels Online B.V. anders bepaalt.
					<br/>
					3.     Door Wheels Online B.V. afgeleverde zaken, die krachtens lid 1 onder het eigendomsvoorbehoud vallen, mogen slechts in het kader van een normale bedrijfsuitoefening worden doorverkocht. Overigens is de koper niet bevoegd de zaken te verpanden of hier enig ander recht op te vestigen.
					<br/>
					4.     Op afgeleverde zaken die door betaling in eigendom van de koper zijn overgegaan en zich nog in handen van de koper bevinden, behoudt Wheels Online B.V. zich hierbij reeds nu voor alsdan de pandrechten voor als bedoeld in Artikel 3:237 BW tot meerdere zekerheid van vorderingen, anders dan de in lid 1 van dit artikel genoemde, die Wheels Online B.V. uit welke hoofde dan ook tegen de koper mocht hWheels Online B.V. hebben. De in dit lid opgenomen bevoegdheid geldt eveneens ten aanzien van door Wheels Online B.V. geleverde zaken welke door de koper zijn bewerkt of verwerkt, waardoor Wheels Online B.V. haar eigendomsvoorbehoud heeft verloren.
					<br/>
					5.     Indien de koper zijn verplichtingen niet nakomt of er gegronde vrees bestaat dat hij zulks niet zal doen is Wheels Online B.V. gerechtigd afgeleverde zaken waarop het in lid 1 bedoelde eigendomsvoorbehoud rust bij de koper of derden die de zaak voor de koper houden weg te halen of weg te doen halen. De koper is verplicht hiertoe alle medewerking te verschaffen op straffe van een boete van 10% van het door hem verschuldigde per dag.
					<br/>
					6.     Indien derden enig recht op de onder eigendomsvoorbehoud geleverde zaken willen vestigen of doen gelden, is de koper verplicht Wheels Online B.V. zo snel als redelijkerwijs verwacht mag worden op de hoogte te stellen. 
					<br/>
					7.     De koper verplicht zich op eerste verzoek van Wheels Online B.V.
					<br/>
					-     de onder eigendomsvoorbehoud geleverde zaken te verzekeren en verzekerd te houden tegen brand-, ontploffings- en   waterschade en tegen diefstal en de polis van deze verzekering ter inzage te geven;
					<br/>
					-     alle aanspraken van de koper op verzekeraars met betrekking tot de onder eigendomsvoorbehoud geleverde zaken te verpanden aan Wheels Online B.V. op de manier die wordt voorgeschreven in art. 3:239 BW;
					<br/>
					-     de vorderingen die de koper verkrijgt jegens zijn afnemers bij het doorverkopen van onder eigendomsvoorbehoud door Wheels Online B.V. geleverde zaken te verpanden aan Wheels Online B.V. op de manier die wordt voorgeschreven in art. 3:239 BW;
					<br/>
					-     de onder eigendomsvoorbehoud geleverde zaken te merken als het eigendom van Wheels Online B.V.;
					<br/>
					-     op andere manieren medewerking te verlenen aan alle redelijke maatregelen die Wheels Online B.V. ter bescherming van haar eigendomsrecht met betrekking tot de zaken wil treffen en welke de koper niet onredelijk hinderen in de normale uitoefening van haar bedrijf.
					<br/>
					Artikel 13. Overmacht
					<br/>
					1.     Indien Wheels Online B.V. door overmacht niet aan haar verplichtingen jegens Afnemer kan voldoen, wordt de nakoming van die verplichtingen opgeschort voor de duur van de overmacht toestand.
					<br/>
					2.     Ingeval van overmacht heeft Afnemer geen recht op enige (schade-)vergoeding, ook niet als Wheels Online B.V. als gevolg van de overmacht enig voordeel mocht hebben.
					<br/>
					3.     Wheels Online B.V. zal Afnemer zo spoedig mogelijk van een (dreigende) overmacht op de hoogte stellen.
					<br/>
					Artikel 14. Gebreken; Klachttermijn
					<br/>
					1.     Klachten over de verrichte werkzaamheden dienen door de Afnemer binnen acht dagen na ontdekking, doch uiterlijk binnen dertig dagen na voltooiing van de betreffende werkzaamheden schriftelijk te worden gemeld aan Wheels Online B.V..
					<br/>
					2.     Indien een klacht gegrond is zal Wheels Online B.V. de werkzaamheden alsnog verrichten zoals overeengekomen, tenzij anders overeengekomen.
					<br/>
					Artikel 15. Toepasselijk recht
					<br/>
					Op elke overeenkomst tussen Wheels Online B.V. en de Afnemer is Nederlands recht van toepassing.

 			</div>
		</div>
	</div>
</div>
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Informatie</h3>
								<ul class="footer-links">
									<li><a href="{{route('velgen_home')}}">Home</a></li>
									<li><a href="{{route('velgen_overons')}}">Over Ons</a></li>
									<li><a href="h{{route('velgen_contact')}}">Contact</a></li>
									<li><a href="{{route('velgen_privacy')}}">Privacy Policy</a></li>
									<li><a href="{{route('velgen_orders')}}">Orders and Returns</a></li>
									<li><a href="{{route('velgen_algemenevoorwaarden')}}">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Social Media</h3>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-linkedin"></i>LinkedIn</a></li>
									<li><a href="#"><i class="fa fa-facebook"></i>FaceBook</a></li>
									<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p></p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-phone"></i> +010-2600601</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i> info@wheelsonline.nl</a></li>
									<li><a href="#"><i class="fa fa-map-marker"></i> Essebaan 7, 2908 LJ Capelle aan den IJssel</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->


			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-ideal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Wheelsonline
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('public/js/jquery.min.js')}}"></script>
		<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/js/slick.min.js')}}"></script>
		<script src="{{asset('public/js/nouislider.min.js')}}"></script>
		<script src="{{asset('public/js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('public/js/main.js')}}"></script>

	</body>
</html>
