<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{$cancion->nombrecancion}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<noscript><link rel="stylesheet" href="/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                        
                        <?php
                        $url = "https://elrincondelartista.herokuapp.com/api/verartista/" . $cancion->cantante;
                        $data = json_decode(file_get_contents($url),true);
                            foreach($data as $element){
                            $cantante[] = $element['nombre'];
                            $imagen[] = $element['imagen'];
                        }
                        ?>

						<div class="content">
							<h2><?php echo $cantante[0];?></h2>
							<h3>{{$cancion->nombrecancion}}</h3>
							<p class="major">{{$cancion->letra}}</p>
							<!-- <ul class="actions stacked">
								<li><a href="#first" class="button big wide smooth-scroll-middle">Get Started</a></li>
							</ul> -->
						</div>

						<div class="image">
                            <br>
                            <br>
                            <br>
							<img src="<?php echo $imagen[0];?>" alt="" style="width: 550px !important;height: 500px;position : initial !important"/>
							<!-- <img src="images/banner.jpg" alt="" style="width: 550px !important;height: 50px ;" /> -->
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