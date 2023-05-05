<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .register-link {
            margin-top: 20px;
            text-align: center;
        }

        .transparent-form {
            background-color: #ffffff;
            opacity: 0.8;
            /* border-radius: 30px; */
        }
    </style>
</head>



<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>D'Max Fitness<span></span></h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#testimonials">Testimoni</a></li>
                    <li><a href="#chefs">Class</a></li>
                    <li><a href="#events">Price</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <a class="btn-book-a-table" href="#login">Login</a>
                </ul>
            </nav>
            <a class="" href="#login"></a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center section-bg">
        <div class="container">
            <div class="row justify-content-between gy-5">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                    <h2 data-aos="fade-up">Best Fitness Gym<br>MAKE TIME WITH US, Get your body fit</h2>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="https://api.whatsapp.com/send?phone=[+6282286197750]&text= Halo! Terima kasih atas minat kamu untuk mendaftar sebagai anggota gym kami. Silakan masukkan informasi berikut untuk proses registrasi Name Lengkap, email, dan keanggotaan" target="_blank" class="btn-book-a-table">Join Now</a>

                        <!-- <input type="hidden" name="noWa" value="+6282177818018">
                        <div>
                            <a href="https://api.whatsapp.com/send?phone=[+6282286197750]&text= Halo! Terima kasih atas minat kamu untuk mendaftar sebagai anggota gym kami. Silakan masukkan informasi berikut untuk proses registrasi Name Lengkap, email, dan keanggotaan" class="btn btn-success" target="_blank">Send</a>
                        </div> -->
                        <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                    <img src="assets/img/fitnes.jpg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>Learn More <span>About Us</span></p>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/club.jpg) ;" data-aos="fade-up" data-aos-delay="150">
                        <!-- <div class="call-us position-absolute">
                            <h4>Book a Table</h4>
                            <p>+1 5589 55488 55</p>
                        </div> -->
                    </div>
                    <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
                        <div class="content ps-0 ps-lg-5">
                            <p class="fst-italic">
                                D'Max Sports
                                yang beralamatkan di jl. Doktor Wahidin, Sawahan Timur,Padang Timur,Kota Padang, Sumatera Barat 25171.
                                Adalah tempat fitnes yang sangat strategis di kota padang dengan fasilitas lengkap dan modern,dengan harga terjangkau dan pelayanan yang ramah.
                            </p>
                            <!-- <ul>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                            </ul>
                            <p>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                            </p> -->

                            <div class="position-relative mt-4">
                                <img src="assets/img/gym2.jpg" class="img-fluid" alt="">
                                <a href="https://www.youtube.com/watch?v=4wkNwp5Orqo" class="glightbox play-btn"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="why-box">
                            <h3>Why Choose Dmax fitness?</h3>
                            <p>
                                Mau badan sehat dan berotot
                                di D'MAX SPORT solusinya.
                                jangan ragu kami disini melayani dengan apa yg anda butuhkan.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Why Box -->

                    <div class="col-lg-8 d-flex align-items-center">
                        <div class="row gy-4">

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-clipboard-data"></i>
                                    <h4>Pelatih yang berkualitas</h4>
                                    <p>Pelatih kami sudah teredukasi dengan baik dan berpengalaman dalam berbagai jenis kebugaran dan olahraga.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-gem"></i>
                                    <h4>Kelas Beragam</h4>
                                    <p>Kelas yang dapat diakses setiap harinya sesuai dengan kebutuhan baik itu latihan kekuatan, daya tahan, kardio bahkan pikiran.</p>
                                </div>
                            </div><!-- End Icon Box -->

                            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                                    <i class="bi bi-inboxes"></i>
                                    <h4>Peralatan modren</h4>
                                    <p>Kami bekerjasama dengan suplier alat fitness terkemuka untuk memberikan anda hasil yang lebih unggul.</p>
                                </div>
                            </div><!-- End Icon Box -->

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Stats Counter Section ======= -->

        <!-- ======= Menu Section ======= -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>What Are They <span>Saying About Us</span></p>
                </div>

                <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Tempat saya Fitness.... Belum sempat berphoto... Nanti di tag deh... Tempat nya nyaman... Alat lengkap... Ada wifi.... Bersih... SPA lagi rusak, lagi perbaikan.. hehehehe..... Instruktur nya rahmah... Pelayanannya baik... Pokoknya ok....
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>zulya a</h3>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Sara Wilsson</h3>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-2.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>Jena Karlis</h3>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-3.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="row gy-4 justify-content-center">
                                    <div class="col-lg-6">
                                        <div class="testimonial-content">
                                            <p>
                                                <i class="bi bi-quote quote-icon-left"></i>
                                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                                <i class="bi bi-quote quote-icon-right"></i>
                                            </p>
                                            <h3>John Larson</h3>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-center">
                                        <img src="assets/img/testimonials/testimonials-4.jpg" class="img-fluid testimonial-img" alt="">
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
        <section id="chefs" class="chefs section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <p>Our <span>Class</span></p>
                </div>
                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/zumba.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Zumba</h4>
                                <!-- <span>Master Chef</span> -->
                                <p>kelas tari-latihan yang energik dan menyenangkan, menggunakan gerakan tari-latihan yang dirancang untuk membakar kalori dan meningkatkan kebugaran</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/yoga.jpg" class="img-fluid" alt="">
                                <!-- <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div> -->
                            </div>
                            <div class="member-info">
                                <h4>Yoga</h4>
                                <!-- <span>Patissier</span> -->
                                <p>Menawarkan berbagai gaya yoga seperti Hatha, Vinyasa, atau Yin yoga. Kelas ini bertujuan untuk meningkatkan fleksibilitas, kekuatan, dan keseimbangan tubuh</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                        <div class="chef-member">
                            <div class="member-img">
                                <img src="assets/img/chefs/pumb.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4>Body Bump</h4>
                                <!-- <span>Cook</span> -->
                                <p>kelas latihan kekuatan yang melibatkan penggunaan barbell, beban, dan alat latihan kekuatan lainnya. Kelas ini bertujuan untuk meningkatkan kekuatan, kebugaran, dan membakar lemak.</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->

                </div>

            </div>
        </section><!-- End Chefs Section -->
        <!-- ======= Events Section ======= -->
        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p><span>Join now</span> In Dmax Fitnes</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/gym.jpg)">
                            <h3>Platinum</h3>
                            <div class="price align-self-start">Rp.1.500.000</div>
                            <p class="description">
                                1 Tahun + 5x Personal Trainer
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/gym.jpg)">
                            <h3>Gold</h3>
                            <div class="price align-self-start">Rp.550.000</div>
                            <p class="description">
                                6 Bulan + 3x Personal Trainer
                            </p>
                        </div><!-- End Event item -->

                        <div class="swiper-slide event-item d-flex flex-column justify-content-end" style="background-image: url(assets/img/gym.jpg)">
                            <h3>Silver</h3>
                            <div class="price align-self-start">Rp.195.000</div>
                            <p class="description">
                                1 Bulan + 1x Personal Trainer
                            </p>
                        </div><!-- End Event item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Events Section -->

        <!-- ======= Chefs Section ======= -->

        <section id="login" class="chefs section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p><span>Login </span>Now</p>
                </div>
                <div id="app">
                    <section class="section" style="background-image: url(assets/img/club.jpg); background-size: 100%">

                        <div class="container mt-5">
                            <div class="row">

                                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                                    <!-- <div class="login-brand">
                                        <img src="/template/assets/img/avatar/gym.png" alt="logo" width="100" class="shadow-light rounded-circle">
                                    </div> -->


                                    <div class="card card-primary transparent-form"">
                                        <div class=" card-header">
                                        <h4>LOGIN</h4>
                                    </div>
                                    <div class="card-body">
                                        <?php if (session()->getFlashdata('error')) : ?>
                                            <div class="alert alert-danger alert-dismissible show fade">
                                                <div class="alert-body">
                                                    <button class="close" data-dismiss="alert">x</button>
                                                    <b>Error</b>
                                                    <?= session()->getFlashdata('error') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <form method="POST" action="<?= site_url('auth/loginProcess') ?>" class="needs-validation" novalidate="">
                                            <?= csrf_field() ?>

                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                                <div class="invalid-feedback">
                                                    Please fill in your email
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="d-block">
                                                    <label for="password" class="control-label">Password</label>
                                                    <div class="float-right">
                                                        <!-- <a href="auth-forgot-password.html" class="text-small">
                                                                Forgot Password?
                                                            </a> -->
                                                    </div>
                                                </div>
                                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                                <div class="invalid-feedback">
                                                    please fill in your password
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                                        <label class="custom-control-label" for="remember-me">Remember Me</label>
                                                    </div>
                                                </div> -->

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                    Login
                                                </button>
                                            </div>
                                            <div class="register-link">
                                                Don't have an account? <a href="<?= site_url('auth/register') ?>">Register Here</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="mt-5 text-muted text-center">
                                    Don't have an account? <a href="">Create One</a>
                                </div> -->
                                <!-- <div class="simple-footer">
                                        Copyright &copy; hafis 2023
                                    </div> -->
                            </div>
                        </div>
                </div>
        </section>
        </div>
        </div>
        </section><!-- End Chefs Section -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p>Check <span>Our Gallery</span></p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/1.jpg"><img src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/2.jpg"><img src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/3.jpg"><img src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/4.jpg"><img src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/5.jpg"><img src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <p><span>Location Us</span></p>
                </div>
                <div class="mb-3">
                    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2751127812803!2d100.36937671453816!3d-0.9454724993102939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8a0fab03625%3A0xc6215ff6e447351f!2sD&#39;MAX%20FITNESS%20AND%20POOL%20CENTRE!5e0!3m2!1sid!2smy!4v1680320229083!5m2!1sid!2smy" frameborder="0" allowfullscreen></iframe>
                </div><!-- End Google Maps -->
                <!-- <form action="send.php" method="post" target="_blank">
                    <div class="form-group">
                        <label><B>Name</B></label>
                        <input type="text" name="name" class="form-control" placeholder="Your name" required>
                    </div>

                    <div class="form-group">
                        <label><B>Phone</B></label>
                        <input type="text" name="phone" class="form-control" placeholder="Your phone" required>
                    </div>

                    <div class="form-group">
                        <label><B>Email</B></label>
                        <input type="text" name="email" class="form-control" placeholder="Your Email" required>
                    </div>

                    <div class="form-group">
                        <label><B>Package</B></label>                     
                        <input type="text" name="package" class="form-control" placeholder="Your Package" required>
                    </div>
                    <input type="hidden" name="noWa" value="+6282177818018">
                    <div>
                        <a href="https://api.whatsapp.com/send?phone=[+6282286197750]&text= Halo! Terima kasih atas minat kamu untuk mendaftar sebagai anggota gym kami. Silakan masukkan informasi berikut untuk proses registrasi Name Lengkap, email, dan keanggotaan" class="btn btn-success" target="_blank">Send</a>
                    </div>
                </form> -->
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-3 col-md-6 d-flex">
                    <i class="bi bi-geo-alt icon"></i>
                    <div>
                        <h4>Address</h4>
                        <p>
                            Jl. Dr. Wahidin No.3, Sawahan, Kec. Padang Tim., Kota Padang,<br>
                            Sumatera Barat 25125<br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-telephone icon"></i>
                    <div>
                        <h4>Contact</h4>
                        <p>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> hafis2608@gmail.com<br>
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links d-flex">
                    <i class="bi bi-clock icon"></i>
                    <div>
                        <h4>Opening Hours</h4>
                        <p>
                            <strong>Mon-Sat: 6AM</strong> - 10PM<br>
                            Sunday: Closed
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Follow Us</h4>
                    <div class="social-links d-flex">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Dmax Fitness </span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Hafis Hidayatullah</a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

</body>

</html>
<?= $this->endSection(); ?>