<!-- CONVOCATION ANNOUNCEMENT -->
<!-- <div class="convocation-bar">
    <marquee behavior="scroll" direction="left" scrollamount="5">
        <span class="announce-icon">🎓</span>

        <strong>
        Yogi Vemana University 11th, 12th, 13th & 14th Convocation Ceremony will be held on 
        Friday 13th March 2026 at DSR Paradise Function Hall, Kadapa.
        </strong>

        <a href="#" data-bs-toggle="modal" data-bs-target="#locationModal" class="location-link">
            📍 Click here for location
        </a>

        | Contact: <b>9703216198</b> for queries.
    </marquee>
</div> -->
<!-- LOCATION MODAL -->
<div class="modal fade" id="locationModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content text-center">

      <div class="modal-header">
        <h6 class="modal-title">Scan Location</h6>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
        <img src="<?= base_url() ?>assets/images/location_scaner.jpeg"
             class="img-fluid"
             style="max-width:200px;"
             alt="Location QR">
        <p class="mt-2 small">Scan to view location</p>
      </div>

    </div>
  </div>
</div>
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
      <!-- SLIDE 1 -->
      <div class="carousel-item active">
        <img src="assets/images/main-slider/175A0969.jpg"
            class="d-block hero-carousel-img"
            alt="Slide 1">

        
      </div>
      <!-- SLIDE 2 -->
      <div class="carousel-item">
        <img src="assets/images/main-slider/ceoffice1.jpg"
            class="d-block hero-carousel-img"
            alt="Slide 2">
      </div>
      <!-- SLIDE 3 -->
      <div class="carousel-item">
        <img src="assets/images/main-slider/ceoffice2.jpg"
            class="d-block hero-carousel-img"
            alt="Slide 3">
      </div>
      <!-- SLIDE 4 -->
      <div class="carousel-item">
        <img src="assets/images/main-slider/ceoffice3.jpg"
            class="d-block hero-carousel-img"
            alt="Slide 4">
      </div>
      <!-- SLIDE 5 -->
      <div class="carousel-item">
        <img src="assets/images/main-slider/ceoffice4.jpg"
            class="d-block hero-carousel-img"
            alt="Slide 5">
      </div>
  </div>

    <!-- CONTROLS -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>

</div>
<section class="py-5 bg-light">
    <div class="container">

        <!-- Heading -->
        <div class="row mb-4">
            <div class="col text-center">
                <h2 class="fw-bold">University Leadership</h2>
            </div>
        </div>

        <!-- Profiles Row -->
        <div class="row justify-content-center g-4 text-center">

            <!-- Vice Chancellor -->
            <div class="col-md-3 col-sm-6">
                <img src="assets/images/administration/vc.jpg"
                    class="img-fluid rounded-circle mb-3"
                    width="186" height="186" alt="">
                <h6 class="fw-bold mb-1">Prof. Raja Shekhar Bellamkonda</h6>
                <p class="mb-0">Vice Chancellor</p>
            </div>

            <!-- Registrar -->
            <div class="col-md-3 col-sm-6">
                <img src="assets/images/administration/Dr.N.C.Gangi_Reddy.jpeg"
                    class="img-fluid rounded-circle mb-3"
                    width="186" height="186" alt="">
                <h6 class="fw-bold mb-1">Dr. N. C. Gangi Reddy</h6>
                <p class="mb-1">Registrar (i/c)</p>
                <!-- <a href="#" class="text-decoration-none fw-semibold">
                    Message <i class="fa fa-external-link"></i>
                </a> -->
            </div>

            <!-- Director -->
            <div class="col-md-3 col-sm-6">
                <img src="assets/images/administration/ksvkrmain.png"
                    class="img-fluid rounded-circle mb-3"
                    width="186" height="186" alt="">
                <h6 class="fw-bold mb-1">Prof. K.S.V Krishna Rao</h6>
                <p class="mb-1">Controller of Examinations</p>
                <!-- <a href="director" class="text-decoration-none fw-semibold">
                    Message <i class="fa fa-external-link"></i>
                </a> -->
            </div>
        </div>
    </div>
</section>
