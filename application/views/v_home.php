<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('partrials/header');
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="<?php echo base_url()?>https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?php echo base_url('Arsha/assets/img/hero-img.png');?>" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('Arsha/assets/img/clients/Bakti-Husada.png');?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('Arsha/assets/img/clients/satgas-covid.png');?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('Arsha/assets/img/clients/semiva.png');?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('Arsha/assets/img/clients/covid-1.png');?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('Arsha/assets/img/clients/client-5.png');?>" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('Arsha/assets/img/clients/client-6.png');?>" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Vaksin</h2>
          	<p>
		  		Pemerintah terus mempergencar pelaksanaan suntik vaksin Covid-19 untuk masyarakat. 
		  		Kenali beragam jenis vaksin Covid-19 yang digunakan di Indonesia
			</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4><strong>Vaksin Covid-19  Sinovac</strong></h4>
              	<p>
				  Vaksin Covid-19 dari perusahaan China ini merupakan yang paling pertama tersedia di Indonesia. 
				  Vaksin Covid-19 Sinovac dikembangkan dari inactivated virus dan diberikan melalui intramuskula
				</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4><strong>Vaksin Covid-19 AstraZeneca</strong></h4>
              	<p>
				  Vaksin Covid-19 AstraZeneca ini memiliki platform berupa viral vector (non replicating), dan diberikan dalam dua dosis. 
				  Vaksin Covid-19 AstraZeneca diberikan dalam interval yang paling jauh dibandingkan vaksin lainnya di Indonesia, hingga 12 minggu.
				</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4><strong>Vaksin Covid-19 Moderna</strong></h4>
              <p>
				Vaksin Covid-19 Moderna adalah vaksin berbasis messenger RNA (mRNA) yang pertama kali dipakai di Indonesia. 
				Vaksin Covid-19 Moderna ini tidak menggunakan virus yang dilemahkan, melainkan memanfaatkan komponen materi genetik yang direkayasa.
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <h4><strong>Vaksin Covid-19 Novavax</strong></h4>
            	<p>
					Vaksin Covid-19 Novavax adalah vaksin berbasis protein sub-unit buatan perusahaan kesehatan di AS. 
					Vaksin Covid-19 Novavax ini mengandung antigen protein yang dimurnikan dan tidak dapat bereplikasi, 
					serta tidak bisa menyebabkan infeksi Covid-19,
				</p>
            </div>
          </div>
        </div>
	<div>
		<a class="btn btn-outline-primary" href="<?php echo base_url('datavaksin'); ?>">Cek Daftar vaksin</a>
	</div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

  <?php $this->load->view('partrials/footer'); ?>