
<?php include 'ayar.php'; ?>


<?php 
	// id'yi yakalıyor.konunun devamını ona göre db'den çekiyor
	$id = $_GET["id"];
	$konu  = $db->prepare("select * from konular where konu_id=?");
	$konu-> execute(array($id));
	$x = $konu->fetchALL(PDO::FETCH_ASSOC);
	

	// konu hit bölümü

	$hit= $db->prepare ("update konular set konu_hit = konu_hit +1 where konu_id=?");
	$hit->execute(array($id));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Eyup Okur">
	<meta name="keywords" content="Eyup, Okur">
	<title>Eyüp Okur </title>
	
	<link rel="stylesheet" href="css/devam.css">
	<!-- for eyup okur -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<!-- view>> layout -->
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
		
		<?php 
		foreach ($x as $m){
			 ?>
		<div id="headerContainer">
			<div id="headerImage2"> <img src="<?php echo $m["konu_resim"]; ?>" alt=""> </div>
		</div>
		<?php 
	} 
	?>
 
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
	
	
	
	
				



<?php 
	// id'yi yakalıyor.konunun devamını ona göre db'den çekiyor
	$id = $_GET["id"];
	$konu  = $db->prepare("select * from konular where konu_id=?");
	$konu-> execute(array($id));
	$x = $konu->fetchALL(PDO::FETCH_ASSOC);

	// konu hit bölümü burayı siteye eklersin ama ekrana yansımadan kullan


	
	 foreach ($x as $m){
			?>
			
		
		</div>
		<div id="blog">
			
			
			
			<h2><?php echo $m["konu_baslik"]; ?></h2><br><br>
			<div> <span id="blogKonu"><?php echo $m["konu_kategori"]; ?></span> 
			<span id="blogTarih"><?php echo $m["konu_tarih"]; ?> </span></div><br><br><br>
			<p>
			<?php echo $m["konu_aciklama"]?></p>	
			

			
		
	<?php 
	} 


// eğer id'si bu ise burayı çalıştır diye bir çalışma yap buranın devamını 
	// html ile yazacağız gibi 
	
 ?>
</div>



 <div id="beforeFooter"></div>
	<footer>
		<div id="copyright">
						 &nbsp  &copy 2018 Eyüp OKUR
				</div>
	</footer>
	
	
