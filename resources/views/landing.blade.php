@extends ('layouts.patient.master')

@section('content')   
<div class="hero hero-slider">
				<ul class="slides">
					<li data-bg-image="images/images.jpg">
						<div class="container">
							<div class="slide-title">
								<span>RS TADIKA MESRA</span> <br>
							</div>
						</div>
					</li>
					<li data-bg-image="images/dok.jpg">
						<div class="container">
							<div class="slide-title">
								<span>Dokter Terpercaya</span> <br>
							</div>
						</div>
					</li>
					<li data-bg-image="images/konsul.jpg">
						<div class="container">
							<div class="slide-title">
								<span>Fasilitas Konsultasi Dokter</span> <br>
							</div>
						</div>
					</li>
					<li data-bg-image="images/farmasi.jpg">
						<div class="container">
							<div class="slide-title">
								<span>Instalasi Farmasi Lengkap</span> <br>
							</div>
						</div>
					</li>
				</ul> <!-- .slides -->
			</div> <!-- .hero-slider -->

			<main class="main-content">
				<div class="fullwidth-block latest-projects-section">
					<div class="container">
						<h2 class="section-title">RS TADIKA MESRA</h2>
						<div class="row">
							<div class="col-sm-6 col-md-5">
								<div class="project">
									<figure class="project-thumbnail"><img src="images/gigi.jpg" alt="Project 1"></figure>
									<h3 class="project-title"><a href="#">IGD</a></h3>
									<small class="project-subtitle">Semakin sehat</small>
									<p>Rumah sakit ini memiliki tenaga medis yang sangat berkompeten, dokter spesial terlengkapn dan ahli dibidangya.  Kami dapat menyelenggarakan pelayanan kesehatan terbaik, bermutu, profesional dan terjangkau bagi semua masyarakat dan sistem pengelolaan dan sumber daya yang efien, efektif dan akuntabel.</p>
									<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
							<div class="col-sm-6 col-md-5">
								<div class="project">
									<figure class="project-thumbnail"><img src="images/lab.jpg" alt="Project 2"></figure>
									<h3 class="project-title"><a href="#">laboratorium</a></h3>
									<small class="project-subtitle">Terlengkap</small>
									<p>Rumah sakit Tadika mesra ini merupakan rumah sakit yang memiliki beberapa fasilitas, terdapat beberapa poli yang tersedia, memiliki banyak  alat  yang dapat mediagnosa keluhan pasien seperti CT-Scan, X-Ray, Panoramic, dan fasilitas lainnya.</p>
									<a href="#" class="more-link"><img src="images/arrow.png" alt=""></a>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.latest-projects-section -->

				<div class="fullwidth-block image-block" data-bg-image="dummy/section-img.png"></div>

				<div class="fullwidth-block">
					<div class="container">
						<hr class="separator">
						<div class="row">
							<div class="col-md-6">
								<h2 class="section-title">Kesan Pesan</h2>
								<div class="testimonial-slider">
									<ul class="slides">
										<li>
											<blockquote>
												<p>RS dengan alat terlengkap dan fasilitas yang memadai</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Pelayanan Yang ramah dan dokter yang adli pada bidangnya</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
										<li>
											<blockquote>
												<p>Fasilitas RS yang lengkap dan dan menggunakan jaminan bpjs maupun asuransi</p>
												<cite>Jessica Waton</cite>
											</blockquote>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<h2 class="section-title">Info</h2>
								<ul class="news">
									<li>
										<div class="date">30.09.2020</div>
										<h3 class="entry-title"><a href="#">Menyediakan tes PCR Swab dan swab antigen</a></h3>
									</li>
									<li>
										<div class="date">30.09.2020</div>
										<h3 class="entry-title"><a href="#">Terdapat kamr untuk isolasi bagi yang terpapar covid</a></h3>
									</li>
								</ul>
							</div>
						</div> <!-- .row -->
						
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->
			</main> <!-- .main-content -->
    @endsection