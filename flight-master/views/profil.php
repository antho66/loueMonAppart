<!DOCTYPE html>
<html lang="fr">
<head>
	<title>La Casa</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="views/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/css/responsive.css">

	<script type="text/javascript" src="views/js/jquery.js"></script>
	<script type="text/javascript" src="views/js/main.js"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="views/img/logo.png" class="logo" alt="Grand château entouré de verdure" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="#">Profil</a></li>
						<li><a href="annonce">Poster une  Annonces</a></li>
						<li><a href="#">Mes Annonces</a></li>
                        <li><a href="#"> Mes location</a></li>
                        <li><a href="#">Mes favories</a></li>
					</ul>
					<a href="deconnection" class="login_btn">Se Déconnecter</a>
				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
            <h2 class="caption">Trouvez votre location de rêve</h2>
            <h3 class="properties">Appartement - Maison - château</h3>
			</section>
	</section><!--  end hero section  -->


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Que cherchez-vous?"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

		<div class="advanced_search">
			<div class="wrapper">
				<span class="arrow"></span>
				<form action="#" method="post">
					<div class="search_fields">
						<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Date de d'arriver"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Date de départ"  autocomplete="off">
					</div>
					<div class="search_fields">
						<input type="text" class="float" id="min_price" name="min_price" placeholder="Prix minimum"  autocomplete="off">

						<hr class="field_sep float"/>

						<input type="text" class="float" id="max_price" name="max_price" placeholder="Prix maximum"  autocomplete="off">
					</div>
					<input type="text" id="keywords" name="keywords" placeholder="Mots clés"  autocomplete="off">
					<input type="submit" id="submit_search" name="submit_search"/>
				</form>
			</div>
		</div><!--  end advanced search section  -->
	</section><!--  end search section  -->


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<?php foreach($annonces as $annonce){ ?>
				<li>
					<a href="louer">
						<img src="views/img/property_1,1.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">2000 €</span>
					<div class="property_details">
						<h1>
							<a href="louer"><?= $annonce->getTitre(); ?></a>
						</h1>
						<h2><?=$annonce->getDescription();?><span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<?php } ?>
				<!-- <li>
					<a href="#">
						<img src="views/img/property_2,2md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">1000€</span>
					<div class="property_details">
						<h1>
							<a href="#">Saltem id perquisitor malivolus pro non perquisitor gemens praefectis coalitos.</a>
						</h1>
						<h2>Interfecti eodem sorte plumbi senatores sunt firmarat plumbi hoe negotio est enim passim venenorum nominare. <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_3,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">700€</span>
					<div class="property_details">
						<h1>
							<a href="#">Amici reque descendant facile Ennius qui honoribus iis inventu non.</a>
						</h1>
						<h2>Clarissimum et hoc P quam fortuna vita ut celeritas dicere deos in abstulit inferos inferos.<span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_4,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">500€</span>
					<div class="property_details">
						<h1>
							<a href="#">Que quam ego tot necessitatem immortalibus hac admirentur quod sententia.</a>
						</h1>
						<h2>Potest iungeretur res paucos vis res amicitiae duos autem natura omnis ipsa infinita conciliavit ex. <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_5,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">300€</span>
					<div class="property_details">
						<h1>
							<a href="#">Quibus quidem occultis sane quidam perciti capiti inopinis capiti morem.</a>
						</h1>
						<h2>Miretur repente repente commeatus vestri ductante congestosque quaeso si adfatim fiducia fiducia longos ductante repente.<span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_6,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">150€</span>
					<div class="property_details">
						<h1>
							<a href="#">Contextis angusti trucidarunt impetu truncis legiones hiemabant nandi piscatorios isdem.</a>
						</h1>
						<h2>Esse ut est amicitiam verendum amicitiam amicitiam videtur officiis ne quae Divitior quam sententia et. <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_7,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">100€</span>
					<div class="property_details">
						<h1>
							<a href="#">Membrorum peremptae velemen quidem inmane Flaviana duceretur sunt cum adulteriorum.</a>
						</h1>
						<h2>Gravius circenses inter haec liquido apparatu haec partis Octobres aut tricensimum comitem insolentiae Gerontium multavit. <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_8,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">75€</span>
					<div class="property_details">
						<h1>
							<a href="#">Exsecratione publico innoxius modo Serenianus et cunctorum modo casus modo.</a>
						</h1>
						<h2>Intra portarum congesta telaque aditibus aditibus ut si saxa se promptu saxa missilium aditibus aditibus. <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a href="#">
						<img src="views/img/property_9,1md.jpg" alt="" title="" class="property_img"/>
					</a>
					<span class="price">50€</span>
					<div class="property_details">
						<h1>
							<a href="#">Vetitis autem diritatis se vel septem hoc nec specie nec.</a>
						</h1>
						<h2>Philosophus dignitatem orator ab et dilancinantium hos professionem intepesceret quia sint si intepesceret ab ducitur.<span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
			</ul> -->
			<div class="more_listing">
				<a href="#" class="more_listing_btn">Voir plus d'anonce</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li><a href="#">A propos</a></li>
						<li><a href="#">Soutien</a></li>
						<li><a href="#">Termes</a></li>
						<li><a href="#">Politique</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Maisons</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Residence</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="about">
					<p>La Casa is real estate minimal html5 website template, designed and coded by pixelhint, tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
					<ul>
						<li><a href="#" class="facebook" target="_blank"></a></li>
						<li><a href="#" class="twitter" target="_blank"></a></li>
						<li><a href="#" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>