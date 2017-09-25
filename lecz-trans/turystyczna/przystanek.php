<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset ="utf-8">
	<meta name="description" content="Rozkład jazdy Łęcz-Trans dla przystanku ul.Turystyczna, godziny odjazdów, dni powszednie, sobota, niedziela" />
	<meta name="keywords" content="rozkład jazdy Łęcz-Trans, ul. Turystyczna, aktualny rozkład jazdy, lublin-łęczna">
	<meta http-equlv="X-UA-Compatibile" content="IE=edge chrome=1">
	<meta name=viewport content="width=device-width, initial-scale=1">

		<title>
			Rozklad jazdy Łęcz-Trans, przystanek: ul.Turystyczna - Lublin-Łęczna
		</title>

	<link rel="stylesheet" type="text/css" href="../../style.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	  $( function()
	  {
		$( "#tabs" ).tabs();
	  });
	</script>
</head>
<body>

	<div id="container">

		<header>

		</header>

		<section>
			<div id="okruszki">Jesteś tutaj: <a class="link" href="http://www.rozkladjazdyleczna.pl/index.html">Strona główna</a> -> Przewoźnik: <a class="link" href="http://www.rozkladjazdyleczna.pl/index.html">Łęcz-Trans</a>
			-> Kierunek: <a class="link" href="http://www.rozkladjazdyleczna.pl/lecz-trans/przystanki-lublin.html">Łęczna</a>-> Przystanek: <a class="link" href="http://www.rozkladjazdyleczna.pl/lecz-trans/przystanki-lublin.html">ul.Turystyczna</a></div><div style="clear:both;"></div>

			<div id="tabs">
				  <ul>
					<li><a href="#tabs-1">Poniedziałek-Piątek</a></li>
					<li><a href="#tabs-2">Sobota</a></li>
					<li><a href="#tabs-3">Niedziela</a></li>
				  </ul>
				<div id="tabs-1">
					<p>
						<?php
							include("../../1.php");
						?>
					</p>
				</div>
					 <div id="tabs-2">
					<p>
						<?php
							include("../../2.php");
						?>
					</p>
				 </div>
				<div id="tabs-3">
					<p>
						<?php
							include("../../3.php");
						?>
					</p>
				 </div>
			</div>
		</section>
	</div>

<footer>
<p>www.rozkladjazdyleczna.pl © 2016-2017</p>
</footer>

</body>
</html>
