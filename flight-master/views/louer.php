<html <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Appartement </title>
	
	<link rel="stylesheet" type="text/css" href="views/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/css/responsive.css">

	<script type="text/javascript" src="views/js/jquery.js"></script>
	<script type="text/javascript" src="views/js/carouFredSel-jQuery-master/jquery.carouFredSel-6.2.1.js"></script>
	<script type="text/javascript" src="views/js/main.js"></script>
	<script src="views/js/bootstrap.min.js"></script>

</head>
<body>
    
	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="views/img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="inscription">Devenir Un Hote / inscription</a></li>
					</ul>
					<a href="login" class="login_btn">Login</a>
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


	    <div class="structure">
	          <h1> St olivier les eaux </h1> <h2> Nom du créateur  <h2>

		<div class="flex">
			<div id="cfs-carrousel">
			<div id="wrapper">
			<div id="carrousel">
			<img src="views/img/property_1,1.jpg" alt="Cuisine en bois avec baie vitré et trie chaisse " width="600" height="400">
			<img src="views/img/property_1,2.jpg" alt="Salon avec deux canaper deux chaise une table basse et une téle puis deux vase " width="600" height="400">
			<img src="views/img/property_1,3.jpg" alt="salle de bain , baignoire" width="600" height="400">
			</div>
			</div>
			<div id="pagination">
			<div id="thumbnails">
			<img src="views/img/property_1,1.jpg" alt="Cuisine en bois avec baie vitré et trie chaisse" width="100" height="100">
			<img src="views/img/property_1,2.jpg" alt="Salon avec deux canaper deux chaise une table basse et une téle puis deux vase " width="100" height="100">
			<img src="views/img/property_1,3.jpg" alt="salle de bain , baignoire" width="100" height="100">
			</div>
			</div>
			</div>


			

			<div class "description">
				
			<p> Quae quasi animadverti utilitatis quae potius congruamus perspicere res quibusdam 
			eis utilitatis et tempus ita animadverti sensus ut primum congruamus in habitura 
			indigentia inter quoddam animi indigentia eo natos quae quale tempus probitatis a 
			caritate multo videtur et cogitatione amandi amantur est ab natura ex amant quam moribus lumen ut.
			  </p>
			  
			</div>
		</div>


		<form action=""  method="post">
		   Arriver :	<input type="date"  name="arriver"> 
		  Départ :	<input type="date"  name=" depart"> 

		   Nombre de Voyager :
		  <input type="number" name="voyageur"> 

		  <input type="submit" name="confirmer"> 
		  <input type="reset" name="effacer">

		</form>

		

</div>





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