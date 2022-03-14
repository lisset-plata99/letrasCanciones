<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Letras Canciones</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- Six -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Letras de canciones</h2>
							<div class="items style1 medium onscroll-fade-in">

                            <?php
$cancions = array(
    array('id' => '1','nombrecancion' => 'Let It Be'),
    array('id' => '2','nombrecancion' => 'Hey Jude'),
    array('id' => '3','nombrecancion' => 'And I love Her'),
    array('id' => '4','nombrecancion' => 'Codependientes'),
    array('id' => '5','nombrecancion' => 'Simplemente Pasan'),
    array('id' => '6','nombrecancion' => 'Un Millon Como Tu'),
    array('id' => '7','nombrecancion' => 'Los Malvekes'),
    array('id' => '8','nombrecancion' => 'Your Dreams Are Where the Music Takes You (Radio Edit)'),
    array('id' => '9','nombrecancion' => 'Bien Mala (Remix)'),
    array('id' => '10','nombrecancion' => 'Blinding Lights'),
    array('id' => '11','nombrecancion' => 'Save Your Tears (Remix)'),
    array('id' => '12','nombrecancion' => 'I Feel It Coming'),
    array('id' => '13','nombrecancion' => 'Paint It, Black'),
    array('id' => '14','nombrecancion' => 'I Cant Get No'),
    array('id' => '15','nombrecancion' => 'Start Me Up (Remastered 2009)'),
    array('id' => '16','nombrecancion' => 'Radiohead'),
    array('id' => '17','nombrecancion' => 'Karma Police'),
    array('id' => '18','nombrecancion' => 'Paranoid Android'),
    array('id' => '19','nombrecancion' => 'Baba ORiley'),
    array('id' => '20','nombrecancion' => 'Wont Get Fooled Again (Original Album Version)'),
    array('id' => '21','nombrecancion' => 'Behind Blue Eyes'),
    array('id' => '22','nombrecancion' => 'bad guy'),
    array('id' => '23','nombrecancion' => 'Happier Than Ever'),
    array('id' => '24','nombrecancion' => 'idontwannabeyouanymore'),
    array('id' => '25','nombrecancion' => 'God s Plan'),
    array('id' => '26','nombrecancion' => 'Hotline Bling'),
    array('id' => '27','nombrecancion' => 'One Dance'),
    array('id' => '28','nombrecancion' => 'Closer'),
    array('id' => '29','nombrecancion' => 'Without Me'),
    array('id' => '30','nombrecancion' => 'Could Have Been Me'),
    array('id' => '31','nombrecancion' => 'Rolling in the Deep'),
    array('id' => '32','nombrecancion' => 'Oh my god'),
    array('id' => '33','nombrecancion' => 'Easy On Me'),
    array('id' => '34','nombrecancion' => 'Lucid Dreams'),
    array('id' => '35','nombrecancion' => 'Hide'),
    array('id' => '36','nombrecancion' => 'All Girls Are The Same'),
    array('id' => '37','nombrecancion' => 'Ademas de Mi (Remix)'),
    array('id' => '38','nombrecancion' => 'She Dont Give A Fo'),
    array('id' => '39','nombrecancion' => 'Hablamos Mañana'),
    array('id' => '40','nombrecancion' => 'La Sinverguenza'),
    array('id' => '41','nombrecancion' => 'El Color de Tus Ojos'),
    array('id' => '42','nombrecancion' => 'Somos Los Que Somos (En Vivo)'),
    array('id' => '43','nombrecancion' => 'Ya No Somos Ni Seremos'),
    array('id' => '44','nombrecancion' => 'Botella Tras Botella'),
    array('id' => '45','nombrecancion' => 'Pa Olvidarme De Ella'),
    array('id' => '46','nombrecancion' => 'Hawai'),
    array('id' => '47','nombrecancion' => 'Sobrio'),
    array('id' => '48','nombrecancion' => 'Cada Quien'),
    array('id' => '49','nombrecancion' => 'LA CANCION'),
    array('id' => '50','nombrecancion' => 'AM Remix'),
    array('id' => '51','nombrecancion' => 'Que Mas Pues?'),
    array('id' => '52','nombrecancion' => 'La Incondicional'),
    array('id' => '53','nombrecancion' => 'Hasta Que Me Olvides'),
    array('id' => '54','nombrecancion' => 'Ahora Te Puedes Marchar'),
    array('id' => '55','nombrecancion' => 'Tu Falta De Querer'),
    array('id' => '56','nombrecancion' => 'Cancion Sin Miedo'),
    array('id' => '57','nombrecancion' => 'Mi Buen Amor'),
    array('id' => '58','nombrecancion' => 'Cancion De La Prision'),
    array('id' => '59','nombrecancion' => 'Advertencia'),
    array('id' => '60','nombrecancion' => 'Stop'),
    array('id' => '61','nombrecancion' => 'El Toxico'),
    array('id' => '62','nombrecancion' => 'En Tu Perra Vida'),
    array('id' => '63','nombrecancion' => 'Se Fue La Pantera (En Vivo)'),
    array('id' => '64','nombrecancion' => 'Diles'),
    array('id' => '65','nombrecancion' => 'Pepas'),
    array('id' => '66','nombrecancion' => 'Si Me Dices Que Si')
  );
  
  for ($i = 0; $i < count($cancions); $i++) {
   echo "<section>";
    echo "<span class='fas fa-music'></span>";
    echo "<h3><a href='/verCancion/".$cancions[$i]['id']."'>".$cancions[$i]['nombrecancion']."</a></h3>";
	echo "</section>";
    
    };
                        ?>
	                	</div>
					</section>
	
				<!-- Footer -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands style2 fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
							</ul>
							<p>&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/jquery.scrollex.min.js"></script>
			<script src="/js/jquery.scrolly.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>