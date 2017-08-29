<html <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> Appartement </title>
	
	<link rel="stylesheet" type="text/css" href="views/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="views/css/annonce.css">

	<script type="text/javascript" src="views/js/jquery.js"></script>
	<script type="text/javascript" src="views/js/carouFredSel-jQuery-master/jquery.carouFredSel-6.2.1.js"></script>
	<script type="text/javascript" src="views/js/main.js"></script>

</head>
<body>
    
	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="casa"><img src="views/img/logo.png" class="logo" alt="" titl=""/></a>
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


	 <div class="annonce" >

	 <form action="serviceannonce" method="post" enctype="multipart/form-data" >
               
		   Titre :  <br /> <br />
		    <input type="text" name="titre" class="titre">

		   <br />
		   <br />
		   
		   Description : <br /> <br />
		   <input type="text"  name="description" id="description">
			
		   <br />
		   <br />

		   
				
		   prix : <br /> <br />
		   <input type="number"  name="prix" >
			
		   <br />
		   <br />

		   Surface : 
		   <br /> <br />
		   <input type="number"  name="surface" >


		   <br />
		   <br />

			Image : <br /> <br />
					<input type="file" name="image" accept="image/*">
						
					<br />
					<br />

		   <input type="submit" value = "envoyer" >
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