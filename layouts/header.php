<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<title><?php echo $title;?> | IT Days 2018</title>
</head>
<body>
	<!-- Start header section -->
	<header>
		<div class="fluid-wrapper flexContainer">
			<div class="brand-logo">
				<h1><a href="index.php" title="Kembali ke halaman utama"><span id="colored-logo">IT</span>DAYS 2018</a></h1>
			</div>
			<ul class="navbar">
				<li><a href="index.php" title="Beranda">Beranda</a></li>
				<li><a href="acara.php" title="Rangkaian Acara">Rangkaian Acara</a></li>
				<li><a href="gallery.php" title="Galeri">Galeri</a></li>
				<li><a href="#loginModal"><button class="btn" onclick="">Masuk</button></a></li>
				<li><a href="#registerModal"><button class="btn" onclick="">Daftar</button></a></li>
			</ul>
			<!-- <div id="user-manager">
				<button class="btn" onclick="">Masuk</button>
				<button class="btn" onclick="">Daftar</button>
			</div> -->
			<a id="btn-toggle-wrapper">
				<!-- href="#menu-toggle"  -->
				<div id="btn-toggle" onclick="openMenu()">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>
			
			<div class="clear"></div>
		</div>
		<div id="menu-toggle" class="menu-toggle-wrapper">
			<a id="btn-toggle2-wrapper">  
			<!-- href="#close" -->
				<div id="btn-toggle2" onclick="closeMenu()">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</a>
			<ul class="navbar nav-mobile">
				<li><a href="index.php" title="Beranda">Beranda</a></li>
				<li><a href="acara.php" title="Rangkaian Acara">Rangkaian Acara</a></li>
				<li><a href="galeri.php" title="Galeri">Galeri</a></li>
				<li>
					<a href="#loginModal"><button class="btn" onclick="">Masuk</button></a>
					<a href="#registerModal"><button class="btn" onclick="">Daftar</button></a>
				</li>
			</ul>
		</div>
		<div id="overlayMobile"></div>
	</header>
	<!-- Stop header section -->