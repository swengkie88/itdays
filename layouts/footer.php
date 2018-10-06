	<!-- Start footer section -->
	
	<footer>
	<!-- <div class="border-gradient"></div>	 -->
	<div class="wrapper">
		<div class="top">
			<div class="kolom3">
				<h2>Didukung oleh</h2>
				<img src="assets/img/icons/technopark.png" alt="">
			</div>
			<div class="kolom3">
				<h2>Alamat</h2>
				<p>
					Jl. Paingan, Maguwoharjo, Depok, Krodan, Maguwoharjo, Kec. Depok, Kanupaten Sleman, Daerah Istimewa Yogyakarta 55281
				</p>
			</div>
			<div class="kolom3">
				<h2>Kontak</h2>
				<ul>
					<li><a href="" title=""><i class="fab fa-facebook"></i> Facebook</a></li>
					<li><a href="" title=""><i class="fab fa-instagram"></i> Instagram</a></li>
					<li><a href="" title=""><i class="fa fa-envelope"></i> itdays8@gmail.com</a></li>
					<li><a href="" title=""><i class="fa fa-phone"></i> +6283865162416</a></li>
				</ul>
			</div>
		</div>
		<div class="bottom">
			<p>&copy; Hak Cipta <a href="" class="btn-link" title="Cek Informasi Pengembang Website!">Mantan Terindah </a>| IT Days 2018</p>
		</div>
		</div>
	</footer>
	<!-- Stop footer section -->
	<!-- Javascript section -->
	<script>
		var pageTitle = "<?php echo $title; ?>";
			var topNavLi = document.querySelectorAll('.navbar li');
			var topNavLiA = document.querySelectorAll('.navbar li a');

			for(var i = 0; i < topNavLiA.length; i++){
				if(topNavLiA[i].innerHTML == pageTitle){
					topNavLiA[i].setAttribute('class','li-active');
				}
			}

		function openMenu() {
			let mobileMenu = document.getElementById('menu-toggle');
			let overlayMenu = document.getElementById('overlayMobile');
			 mobileMenu.style.top = '0%';
			 mobileMenu.style.opacity = '1';
			 overlayMenu.style.display = 'block';
		}

		function closeMenu(){
			let mobileMenu = document.getElementById('menu-toggle');
			let overlayMenu = document.getElementById('overlayMobile');
			 mobileMenu.style.top = '-100%';
			 mobileMenu.style.opacity = '0';
			 overlayMenu.style.display = 'none';
		}
	
	</script>
</body>
</html>