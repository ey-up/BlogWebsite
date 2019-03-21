
<?php include 'ayar.php'; 

	
$xs = $db->prepare ("update kontrol set kontrol_hit = kontrol_hit +1 where kontrol_id=3");
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
	
	<link rel="stylesheet" href="css/blog.css">
	
	<!-- view>> layout -->
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
	<header id="mainHeader" >
	
		<div id="headerContainer">
			<div id="headerImage2">
				<div id="BlogFont">
					<h1>Blog</h1>
					<p></p>
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


		<!-- sayfalama başlangıcı -->
	<?php 

			$sayfa = intval(@$_GET["sayfa"]);
				if (!$sayfa ) {
					$sayfa = 1;
				}

		$kv = $db->prepare("select * from konular");
		$kv-> execute (array());
		// toplamın içinde kaç konu olduğunun sayısı var 
		$toplam = $kv->rowCount();
		// limit: sayfada kaç konu gösterileceğini belirler
		$limit = 6; 
		// goster: Belirtilen sayfadaki gösterilmesi gereken konuları ayarlar.
		$goster = $sayfa*$limit-$limit;
		// ceil yukarı yuvarlar 
		// 10 sayfa olursa her sayfada 3konu olmasını istersek 10/3=4sayfa yapar
		$sayfa_sayisi = ceil($toplam/$limit);
		$forlimit = 3 ;


 	?>	
 	<?php 
 	// sayafalama bitiş 

	$kv  = $db->query("select * from konular order by konu_id desc limit $goster,$limit");
	$kv->execute (array());
	$x = $kv->fetchALL(PDO::FETCH_ASSOC);


	 ?>
	 <div id="blog">
	 <!-- konuların sırlanması -->
	<?php foreach ($x as $m){
			?>
		
			<div id="inBlog1">
			<div id="blogPhoto"> <img src="<?php echo $m["konu_resim"]; ?>" alt="photo"></div><br>

			<h2><?php echo $m["konu_baslik"]; ?></h2><br>
			<div> <span id="blogKonu"> Kategori:<?php echo $m["konu_kategori"]; ?></span> 
			<span id="blogTarih"><?php echo $m["konu_tarih"]; ?> </span></div><br><br>

			<p>
			<?php echo mb_substr($m["konu_aciklama"],0,99);  ?>... </p>		

			<div id="blogDevam"><a href="?go=devam&id=<?php echo $m["konu_id"]; echo $m["konu_baslik"]; echo "/"; ?>  " > Devam</a></div>
		</div>	
		
	<?php 
	} 
?>
</div>
<!-- konuların bitişi -->

<!-- sayfa numaraları html+for -->
		<div id="sayfalama">
	<?php 

		for ($i= $sayfa - $forlimit; $i <$sayfa + $forlimit +1 ; $i++) { 
			
			if ($i>0 and $i<=$sayfa_sayisi) {
					if ($i == $sayfa) {
						
						echo " <span class='aktif'>".$i."</span>";

					}
					else{
						echo "<span class='sayfa'> <a href='?go=blog&sayfa=".$i." '>".$i."</a> </span>";
					}
				}	
				?><?php	

		}
		if ($sayfa != $sayfa_sayisi) {
			echo "<span class='sayfa'> <a href='?go=blog&sayfa=".$sayfa_sayisi."'>son </a> </span>  ";
		}




	
		


	 ?></div> 













	<footer>
		<div id="copyright">
						 &nbsp  &copy 2018 Eyüp OKUR
				</div>
	</footer>
	
	
				

</body>

</html>