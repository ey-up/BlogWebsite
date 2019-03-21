
	<?php include 'ayar.php'; 

	$go =$_GET["go"];

		switch ($go) {
			case 'iletisim':
					include 'iletisim.php';
				break;

			// default:
			// 	include 'blog.php';
			// 	break;

			// case 'page':
			// 	include "blog.php";
			// 	break;
			case 'hakkimda':
				include 'hakkimda.php';
				break;

			case "devam":
				
				include 'devam.php';
				break;
			case 'blog':
				include 'blog.php';
				break;
			case 'bildir':
				include 'bildir.php';
				break;

			case 'anasayfa':
				include 'anasayfa.php';
				break;

			default:
				include 'anasayfa.php';
				break;
		}


	 ?>
	 