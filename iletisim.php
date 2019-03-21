<?php 

	
$xs = $db->prepare ("update kontrol set kontrol_hit = kontrol_hit +1 where kontrol_id=5");
	$xs->execute(array());
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eyup Okur">
	<meta name="keywords" content="Eyup, Okur">
	<title>Eyüp Okur </title>
	
	<link rel="stylesheet" href="css/iletisim.css">
	
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis&amp;subset=latin-ext" rel="stylesheet">
	<!-- for eyup okur -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<!-- Mobile button için  -->
	<link rel="shortcut icon" href="photo/icons8-monitor-64.png">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#navMobileButton").click(function(){
				$("#ulNavMobile").toggle(200);
			})
		})
	</script>

</head>
<body>
	<header id="mainHeader2" >
		<div id="headerContainer">
			<div id="headerImage">
				<div id="BlogFont">
					<h1>İletişim </h1>
					<p> <a href="mailto:eyupokur7@gmail.com?Subject=Eyup%20Okur"><img src="photo/email-icon.png"></a></p><br>
					<p> <a href="https://twitter.com/EyupOkur"><img src="photo/twitter-icon.png"></a></p><br>
					<p><a href="#"><img src="photo//youtube.png" alt=""></a></p>
					
				</div>
			</div>

		</div>
			<nav>
				<div id="navContainer">
					<div id="navLogo"><a href="?go=anasayfa" id="isimLogo">EYUP OKUR</a></div>
					<ul id="ulNavRight">
						<li><a href="?go=anasayfa">ANASAYFA</a></li>
						<li><a href="?go=hakkimda">HAKKIMDA</a></li>
						<li><a href="?go=blog">BLOG</a></li>
						<li><a href="?go=bildir">GÖRÜŞ BİLDİR</a></li>
						<li><a href="?go=iletisim">İLETİŞİM</a></li>
					</ul>
					<div id="navMobileButton"></div>
					<ul id="ulNavMobile">
						<li><a href="?go=anasayfa">ANASAYFA</a></li>
						<li><a href="?go=hakkimda">HAKKIMDA</a></li>
						<li><a href="?go=blog">BLOG</a></li>
						<li><a href="?go=bildir">GÖRÜŞ BİLDİR</a></li>
						<li><a href="?go=iletisim">İLETİŞİM</a></li>
					</ul>
				</div>
				
			</nav>
		
			
	
	
				
	</header>
	<footer>
	
		<div id="copyright">
		
				 &nbsp  &copy 2018 Eyüp OKUR
		</div>
	</footer>
		
	

</body>
</html>