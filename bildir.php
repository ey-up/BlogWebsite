
<?php 		
$xs = $db->prepare ("update kontrol set kontrol_hit = kontrol_hit +1 where kontrol_id=4");
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
	
	<link rel="stylesheet" href="css/bildir.css">
	
	<!-- for eyup okur -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marck+Script&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&amp;subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis&amp;subset=latin-ext" rel="stylesheet">

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
	<header id="mainHeader" >
		<div id="headerContainer">
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
	
		<div id="copyright">
						<p id="copy"> &nbsp  &copy 2018 Eyüp OKUR</p>
				</div>

</body>
</html>