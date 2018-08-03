<!doctype html>
<html lang="en">
    <head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
   
	
    <!-- Jquery Mobile -->
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <link href="css/my-style.css" rel="stylesheet">
	
    <style>
		@media (min-width: 720px) {
			#main{
				width: 50%;
				margin: auto;
			}
		}
    </style>
	
    <!-- jQuery  -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Real State Multi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="image/logo111.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="properties.php">House Design</a></li>
								<li class="nav-item"><a class="nav-link" href="agents.php">Team</a></li>
								<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
								
								
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a><br><a href="login.php"><li>Login</a></li>
							</ul>
							
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content">
						<h5>The joy of home owning</h5>
						<h3>Temukan Rumah Impian Anda</h3>
						<a class="main_btn" href="blog.php">Learn More</a>
					</div>
				</div>
            </div>
            <div class="container">
				<div class="advanced_search">
					<h3>Cari Kategori</h3>
					<div class="search_select">
						<select class="s_select">
							<option value="1">Pilih Lokasi</option>
							<option value="2">Pekanbaru</option>
							<option value="4">Jakarta</option>
							<option value="4">Bandung</option>
							
						</select>
						<select class="s_select">
							<option value="1">Fasilitas Tambahan</option>
							<option value="2">Gazebo</option>
							<option value="4">Kolam Renang</option>
						</select>
						<select class="s_select">
							<option value="1">Arah Rumah</option>
							<option value="2">Timur</option>
							<option value="4">Selatan</option>
							<option value="2">Utara</option>
							<option value="4">Barat</option>
							<option value="2">Barat Daya</option>
							<option value="4">Barat Laut</option>
							<option value="2">Timur Laut</option>
							<option value="4">Tenggara</option>
						</select>
						<select class="s_select">
							<option value="1">Jumlah Kamar</option>
							<option value="2">1<option>
							<option value="2">2<option>
							<option value="4">3</option>
							<option value="2">4<option>
							<option value="4">5</option>
							<option value="4">6</option>
						</select>
					</div>
					<div class="search_range">
						<div class="range_item">
							<h5>Kisaran Harga</h5>
							<div id="slider-range"></div>
							<span class="d_text">$200</span>
							<input type="text" id="amount" readonly style="border:0;" class="amount">
						</div>
						<div class="range_item">
							<h5>Ukuran</h5>
							<div id="slider-range2"></div>
							<span class="d_text2">50m</span>
							<input type="text" id="amount2" readonly style="border:0;" class="amount2">
						</div>
					</div>
					<br><a class="main_btn" href="properties.php">Cari</a>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
       
        	
        <!--================End Welcome Area =================-->
        
        <!--================Properties Area =================-->
        <section class="properties_area">
        	<div class="container">
        		<div class="main_title">
        			<h2>Properti Teratas Kami</h2>
        			<p>JRD menghadirkan cluster nuansa alami dengan danau dan landscape tropis</p>
        		</div>
        		<div class="row properties_inner">
        			<div class="col-lg-4">
        				<div class="properties_item">
        					<div class="pp_img">
        						<img class="img-fluid" src="img/properties/pp-11.jpg" alt="">
        					</div>
        					<div class="pp_content">
        						<a href="#"><h4>Medium</h4></a>
        						<div class="tags">
        							<a href="#">05 Beds</a>
        							<a href="#">06 Baths</a>
        							<a href="#">950 m</a>
        							<a href="#"><i class="fa fa-check" aria-hidden="true"></i>Kolam Renang</a>
        							<a href="#"><i class="fa fa-check" aria-hidden="true"></i>Bar</a>
        							<a href="#"><i class="fa fa-check" aria-hidden="true"></i>Gazebo</a>
        						</div>
        						<div class="pp_footer">
        							<h5>Total: $2.5M</h5>
        							
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="properties_item">
        					<div class="pp_img">
        						<img class="img-fluid" src="img/properties/pp-22.jpg" alt="">
        					</div>
        					<div class="pp_content">
        						<a href="#"><h4>Small</h4></a>
        						<div class="tags">
        							<a href="#">03 Beds</a>
        							<a href="#">04 Baths</a>
        							<a href="#">750 m</a>
        							<a href="#"><i class="fa fa-check" aria-hidden="true"></i>Kolam Renang</a>
        							<a href="#"><i class="fa fa-times" aria-hidden="true"></i>Bar</a>
        							<a href="#"><i class="fa fa-times" aria-hidden="true"></i>Gazebo</a>
        						</div>
        						<div class="pp_footer">
        							<h5>Total: $1.3M</h5>
        							
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="properties_item">
        					<div class="pp_img">
        						<img class="img-fluid" src="img/properties/pp-33.jpg" alt="">
        					</div>
        					<div class="pp_content">
        						<a href="#"><h4>Big</h4></a>
        						<div class="tags">
        							<a href="#">07 Beds</a>
        							<a href="#">08 Baths</a>
        							<a href="#">1150 m</a>
        							<a href="#"><i class="fa fa-check" aria-hidden="true"></i>Kolam Renang</a>
        							<a href="#"><i class="fa fa-check" aria-hidden="true"></i>Bar</a>
        							<a href="#"><i class="fa fa-times" aria-hidden="true"></i>Gazebo</a>
        						</div>
        						<div class="pp_footer">
        							<h5>Total: $3.8M</h5>
        							
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Properties Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="row testimonials_inner">
        			<div class="col-lg-4">
        				<div class="testi_left_text">
        					<h4>Client’s Feedback</h4>
        					<p>Kepuasan klien adalah perhatian utama kami.
								Kami bertujuan untuk memberikan layanan terbaik dan selalu memberikan kualitas tinggi untuk klien kami,
								seperti yang tercermin pada reputasi pasar kami. </p>
        				</div>
        			</div>
        			<div class="col-lg-8">
        				<div class="testi_slider owl-carousel">
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/a.jpg" alt="">
									<p>Saya mendapatkan fasilitas terbaik sesuai dengan rumah impian saya. Design rumahnya membuat saya terpukau.</p>
									<h4>Siska Dwi Yulianti</h4>
									<h6>CEO at Indofood</h6>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/s.jpg" alt="">
									<p>Luar Biasa! Benar-benar berkualitas dengan fasilitas yang sangat lengkap dan di lokasinya berada di tempat yang sangat startegis.</p>
									<h4>Bella Venisa</h4>
									<h6>CEO at Samsung</h6>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/d.jpg" alt="">
									<p>Menurut saya designya sangat bagus, di lengkapi dengan meeting room sehingga saya tidak perlu melalukan meeting di kantor saya.</p>
									<h4>Sonia Ulmaira</h4>
									<h6>CEO at Google</h6>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/f.jpg" alt="">
									<p>Menurut saya designnya sangat bagus sesuai denga keinginan konsumen untuk sebuah rumah indaman. </p>
									<h4>Zamriyao Ananda</h4>
									<h6>CEO at Yahoo</h6>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/e.jpg" alt="">
									<p>Pencahayaan dan sirkulasi udara yang baik pada sekitar rumah. Di lengkapi dengan design kolam renang yang sangat menarik </p>
									<h4>Chalista Zee Chelia</h4>
									<h6>CEO at Google</h6>
								</div>
							</div>
							<div class="item">
								<div class="testi_item">
									<img src="img/testimonials/g.jpg" alt="">
									<p>Perkarangannya sangat luas dan lokasinya sangat nyaman karena berada di daerah laut sehingga sangat nyaman untuk di huni</p>
									<h4>Chalief Zee Attaris</h4>
									<h6>CEO at Bing</h6>
								</div>
							</div>
						</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        
        
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Mengapa Kami yang Terbaik</h2>
        			<p>Kepuasan klien adalah perhatian utama kami.</p>
        		</div>
        		<div class="row feature_inner">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-user"></i>Teknisi Ahli</h4>
        					<p>Kami menghadirkan teknisi yang profesional di bidangnya dari beberapa negara maju.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-license"></i>Jasa profesional</h4>
        					<p>Saat ini kami menghadirkan beberapa dari jasa profesional dunia yang ahli di bidangnya.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-phone"></i>Dukungan Luar Biasa</h4>
        					<p>Kinerja kami di dukung oleh beberapa perusahaan ternama seperti Boston Properties, Amerika Serikat.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-rocket"></i>Keterampilan teknis</h4>
        					<p>Keterampilan teknis yang sangat baik dan sangat teliti. Membuat design sesuai dengan perkembangan.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-diamond"></i>Sangat Direkomendasikan</h4>
        					<p>Perumahan kami sangat di rekomendasikan untuk anda yang menginginkan sebuah rumah impian </p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<h4><i class="lnr lnr-bubble"></i>Ulasan Positif</h4>
        					<p>Dari beberapa client, kami banyak mendapatkan banyak ulasan positif tentang kepuasan dengan designnya.</p>
        				</div>
        			</div>
        		</div>
				 <script type='text/javascript'>
		var temp;
		$(document).ready(function (){
			$('#form-pencarian').submit(function(event) {
				
				/* stop form from submitting normally */
				event.preventDefault();
				
				$('#result .ui-body').html('');
				
				var url = $(this).attr('action');
				
				$.ajax({
					type: $(this).attr('method'),
					url: url,
					data: $(this).serialize(),
					dataType: "JSON",
					success: function(data){
//						alert(data);
						if (data == null){
							$('#result .ui-body').html('Data tidak ditemukan');
						}else{
							$('#result .ui-body').html(data[0].tipe+' memiliki tipe '+data[0].harga);
						}
						$('#result').show();
					}
				});
			});
		});
	</script>
	<div data-role="page" class="jqm-demos jqm-home">		
		<div style="margin-top: 50px; margin-bottom: 30px;" id="main" role="main" class="ui-content">						
			<div id="result" style="margin-bottom: 20px; display: none">
			  <h3 class="ui-bar ui-bar-a ui-corner-all">Hasil Pencarian</h3>
			  <div class="ui-body ui-body-a ui-corner-all">
				
			  </div>
			</div>
			
			<div id="pencarian">
			  <h3 class="ui-bar ui-bar-a ui-corner-all">Form Pencarian</h3>
			  <div class="ui-body ui-body-a ui-corner-all">
				<form id="form-pencarian" action="get_hobi.php" method="post">
					<label for="search-1">Masukkan Tipe anda:</label>
					<input name="tipe" id="nama" value="" placeholder="Cari Harga dari tipe rumah  " type="search">
					<input value="C A R I" data-theme="a" type="submit">
				</form>
			  </div>
			</div>
		</div><!-- /content -->
	</div>
	</section>
	
	
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_img">
        					<img class="img-fluid" src="img/welcome-2.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4><center>JRD</center></h4>
        					<p>JRD berada dilokasi yang strategis dan telah menjadi ikon premium di kawasan Asia.
							Merupakan lokasi yang potensial untuk berinvestasi.
							Kawasan eksklusif yang menyimbangkan kehidupan modern dan natural dengan berbagai fasilitas entertaintment
							yang unik dan lengkap seperti Mall dan Hotel, Family Park, dan fasilitas lainnya seperti 
							Sarana ibadah dan Sistem keamanan Electronik Gate.</p>
        					<div class="row">
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>$1.2M</h4>
        								<p>Total Donasi</p>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>1065</h4>
        								<p>Total Project</p>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>1977</h4>
        								<p>Sukarelawan</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
		
		
        <!--================End Feature Area =================-->
        
        
        
        <!--================Welcome Area =================-->
        <section class="welcome_area p_120">
        	<div class="container">
        		<div class="row welcome_inner">
        			<div class="col-lg-6">
        				<div class="welcome_img">
        					<img class="img-fluid" src="img/welcome-2.jpg" alt="">
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="welcome_text">
        					<h4><center>JRD</center></h4>
        					<p>JRD berada dilokasi yang strategis dan telah menjadi ikon premium di kawasan Asia.
							Merupakan lokasi yang potensial untuk berinvestasi.
							Kawasan eksklusif yang menyimbangkan kehidupan modern dan natural dengan berbagai fasilitas entertaintment
							yang unik dan lengkap seperti Mall dan Hotel, Family Park, dan fasilitas lainnya seperti 
							Sarana ibadah dan Sistem keamanan Electronik Gate.</p>
        					<div class="row">
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-database"></i>
        								<h4>$1.2M</h4>
        								<p>Total Donasi</p>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-book"></i>
        								<h4>1065</h4>
        								<p>Total Project</p>
        							</div>
        						</div>
        						<div class="col-sm-4">
        							<div class="wel_item">
        								<i class="lnr lnr-users"></i>
        								<h4>1977</h4>
        								<p>Sukarelawan</p>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        </div>
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Us</h6>
                            <p>Perusahaan kami berdiri pada tahun 2002 yang berlokasi di jl. Paus ujung, Pekanbaru, Indonesia. Perusahaan kami sudah 
							memiliki cabang di Jakarta, Bandung, Semarang.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">Newsletter</h6>
                            <p>Stay updated with our latest trends</p>		
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>		
                                    </div>									
                                    <div class="mt-10 info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h6 class="footer_title">Instagram Feed</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/instagram/Image-01.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-02.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-03.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-04.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-05.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-06.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-07.jpg" alt=""></li>
                                <li><img src="img/instagram/Image-08.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>	
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget f_social_wd">
                            <h6 class="footer_title">Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="f_social">
                            	<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>						
                </div>
                
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>