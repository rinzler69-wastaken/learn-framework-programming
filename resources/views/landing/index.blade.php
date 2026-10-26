@extends('layouts.landing')

{{-- judul halaman --}}
@section('title', 'Beranda Fitness - Home Gym & Workout')

{{-- konten utama index.blade.php --}}
@section('content')
<!-- Carousel Start -->
        <div class="header-carousel owl-carousel overflow-hidden bg-dark">
            <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-1"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">SELAMAT DATANG DI FITNESS CENTER</h4>
                                    <h1 class="display-1 text-white mb-4">Pusat Kebugaran Modern & Terlengkap di Kota Anda</h1>
                                    <p class="mb-5 fs-5">Fasilitas gym modern, alat beban berstandar internasional, locker room ber-AC, dan pelatih profesional siap membantu Anda mencapai bentuk tubuh ideal dan stamina prima. 
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Lihat Fasilitas</span></a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Gabung Sekarang</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item hero-section">
                <div class="hero-bg-half-2"></div>
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-primary text-uppercase fw-bold mb-4">SELAMAT DATANG DI FITNESS CENTER</h4>
                                    <h1 class="display-2 text-white mb-4">Wujudkan Body Goals & Pola Hidup Sehat Bersama Kami</h1>
                                    <p class="mb-5 fs-5">Fasilitas gym modern, alat beban berstandar internasional, locker room ber-AC, dan pelatih profesional siap membantu Anda mencapai bentuk tubuh ideal dan stamina prima. 
                                    </p>
                                    <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                        <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> <span>Lihat Fasilitas</span></a>
                                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Gabung Sekarang</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-fluid about pt-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-content h-100">
                            <h4 class="text-primary">About Fitness Center</h4>
                            <h1 class="display-4 text-white mb-4">Wadah Terbaik Untuk Meraih Potensi Fisik & Target Tubuh Ideal Anda.</h1>
                            <p class="mb-4">Kami menghadirkan ruang kebugaran berfasilitas lengkap dengan suasana yang nyaman, bersih, dan memotivasi untuk mendukung setiap langkah latihan Anda.</p>
                            <div class="tab-class pb-4">
                                <ul class="nav d-flex mb-2">
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                            <span style="width: 150px;">Misi Kami</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                            <span style="width: 150px;">Visi Kami</span>
                                        </a>
                                    </li>
                                    <li class="nav-item mb-3">
                                        <a class="d-flex py-2" data-bs-toggle="pill" href="#tab-3">
                                            <span style="width: 150px;">Target Kami</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Menyediakan sarana latihan modern, higienis, dan terjangkau untuk membangun kebiasaan hidup sehat masyarakat dengan peralatan berstandar tinggi.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-eye text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Menjadi studio kebugaran terdepan yang mengedepankan metode latihan berbasis sains, ramah bagi pemula, dan berdampak nyata bagi kesehatan.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane fade show p-0">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center border-top border-bottom py-4">
                                                    <span class="fas fa-bullseye text-white fa-4x me-4"></span>
                                                    <p class="mb-0">Mendampingi setiap member bertransformasi secara fisik dan mental menuju versi terbaik diri mereka dengan bimbingan pelatih bersertifikat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-4 align-items-center">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary py-3 px-5"> <span>Daftar Konsultasi</span></a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex flex-shrink-0 ps-4">
                                        <a href="#" class="btn btn-light btn-lg-square position-relative wow tada" data-wow-delay=".9s">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                            <div class="position-absolute" style="top: 5px; right: 5px;">
                                                <span><i class="fa fa-comment-dots text-dark"></i></span>
                                            </div>
                                        </a>
                                        <div class="d-flex flex-column ms-3">
                                            <span>Hubungi Trainer Kami</span>
                                            <a href="tel:+ 0123 456 7890"><span class="text-white">(+62) 812-3456-7890</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-img h-100">
                            <div class="about-img-inner d-flex h-100">
                                <img src="{{ asset('landing/img/about-2.png') }}" class="img-fluid w-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Fitness Goal start -->
        <div class="container-fluid goal pt-5">
            <div class="container pt-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="goal-content">
                            <h4 class="text-primary">Fitness Goal</h4>
                            <h1 class="display-4 mb-4">Complete your possibilities, Achieve Your Fitness Goals.</h1>
                            <div class="goal-item d-flex p-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('landing/img/icon-1.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Sesi Trial Gratis Member Baru</h4>
                                    <p class="text-white mb-0">Dapatkan 1 sesi pengenalan alat dan konsultasi body fat bersama Personal Trainer.</p>
                                </div>
                            </div>
                            <div class="goal-item d-flex p-4 mb-4">
                                <div class="d-flex me-4">
                                    <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                        <img src="{{ asset('landing/img/icon-6.png') }}" class="img-fluid" alt="">
                                    </div>
                                </div>
                                <div>
                                    <h4>Latihan Kardio & Pembentukan Otot</h4>
                                    <p class="text-white mb-0">Kombinasi latihan beban dan kardiovaskular untuk pembakaran lemak serta definisi otot.</p>
                                </div>
                            </div>
                            <div class="ms-1">
                                <a href="#" class="btn btn-primary py-3 px-5 ms-2"> <span>Pelajari Program</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="h-100">
                            <img src="{{ asset('landing/img/fitness-goal-banner.png') }}" class="img-fluid h-100" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitness Goal End -->

        <!-- Features Start -->
        <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary"> Mengapa Memilih Kami?</h4>
                    <h1 class="display-4 mb-4">Keunggulan Utama Fitness Center</h1>
                    <p class="mb-0">Fasilitas gym lengkap dengan sirkulasi udara ber-AC, alat beban terawat, dan jadwal kelas variatif.
                    </p>
                </div>
                <div class="feature-carousel owl-carousel">
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-img">
                            <img src="{{ asset('landing/img/feature-1.jpg') }}" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Latihan Kardio & Ketahanan</h4>
                            <p class="mb-4">Peralatan treadmill, elliptical, dan rowers modern untuk melatih kesehatan jantung dan stamina.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-img">
                            <img src="{{ asset('landing/img/feature-2.jpg') }}" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Kelas Zumba & Aerobik</h4>
                            <p class="mb-4">Kelas Zumba dan Aerobik berenergi tinggi dipandu instruktur berpengalaman dengan iringan musik seru.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                        </div>
                    </div>
                    <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-img">
                            <img src="{{ asset('landing/img/feature-3.jpg') }}" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Latihan Beban & Strength</h4>
                            <p class="mb-4">Area free weights lengkap dengan dumbell, barbell olimpiade, squat rack, dan smith machine.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-img">
                            <img src="{{ asset('landing/img/feature-4.jpg') }}" class="img-fluid w-100"  alt="">
                        </div>
                        <div class="feature-content p-4">
                            <h4 class="mb-3">Fasilitas Locker & Sauna</h4>
                            <p class="mb-4">Locker room privat yang bersih, shower air hangat, dan sauna relaksasi pasca-latihan intensif.
                            </p>
                            <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                        </div>
                    </div>
                </div>
                <div class="feature-shaps"></div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Courses Start -->
        <div class="container-fluid courses overflow-hidden py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Pilihan Kelas Latihan</h4>
                    <h1 class="display-4 text-white mb-4">Keunggulan Utama Fitness Center</h1>
                    <p class="text-white mb-0">Fasilitas gym lengkap dengan sirkulasi udara ber-AC, alat beban terawat, dan jadwal kelas variatif.
                    </p>
                </div>
                <div class="row gy-4 gx-0 justify-content-center">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('landing/img/icon-1.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Coach Rian</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Kelas Kebugaran Gym</a>
                                <p class="mb-4">Fokus pada teknik pengangkatan yang benar, postur tubuh, dan pembentukan massa otot.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('landing/img/icon-2.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Coach Rian</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Powerlifting & Strength</a>
                                <p class="mb-4">Tingkatkan kekuatan maksimal pada squat, bench press, dan deadlift dengan aman.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('landing/img/icon-3.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Coach Rian</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Bodybuilding & Hypertrophy</a>
                                <p class="mb-4">Program pembentukan otot estetis dengan variasi repetisi dan time-under-tension optimal.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('landing/img/icon-4.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Coach Rian</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Aerobik & Skipping Kardio</a>
                                
                                <p class="mb-4">Latihan intensitas sedang-tinggi untuk meningkatkan kelincahan dan stamina tubuh.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('landing/img/icon-5.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Coach Rian</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Boxing & Self Defense</a>
                                <p class="mb-4">Kombinasi pukulan tinju, footwork, dan latihan ketangkasan untuk membakar kalori.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="courses-item">
                            <div class="courses-item-inner p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <div class="courses-icon-img p-3">
                                        <img src="{{ asset('landing/img/icon-6.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="data-info d-flex flex-column">
                                        <div class="courses-trainer d-flex align-items-center mb-1">
                                            <div class="me-2" style="width: 25px; height: 25px;">
                                                <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <p class="mb-0">Coach Rian</p>
                                        </div>
                                        <div class="courses-date">
                                            <p class="mb-1">Date: Saturday</p>
                                            <p class="mb-0">Time: 06.00 - 07.00</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="d-inline-block h4 mb-3"> Cardio Rush & Fat Burning</a>
                                <p class="mb-4">Sesi kardio dinamis untuk membakar lemak membandel dalam waktu singkat.
                                </p>
                                <a href="#" class="btn btn-primary py-2 px-4"> <span>Selengkapnya</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                        <a href="#" class="btn btn-primary py-3 px-5"> <span>Lihat Semua Jadwal Kelas</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses End -->

        <!-- Blog Start -->
        <div class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Artikel & Tips</h4>
                    <h1 class="display-4 mb-4">Tips Edukasi Gaya Hidup Sehat</h1>
                    <p class="mb-0">Fasilitas gym lengkap dengan sirkulasi udara ber-AC, alat beban terawat, dan jadwal kelas variatif.
                    </p>
                </div>
                <div class="blog-carousel owl-carousel">
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="{{ asset('landing/img/feature-4.jpg') }}" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Panduan Latihan Beban Pemula</a>
                            <p class="mb-3">Cara memulai angkat beban tanpa takut cedera serta rekomendasi split latihan mingguan yang ideal.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Baca Artikel</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="{{ asset('landing/img/feature-3.jpg') }}" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Strategi Nutrisi Fat Loss Sehat</a>
                            <p class="mb-3">Kunci defisit kalori bergizi seimbang tanpa merasa lemas berlebihan saat beraktivitas harian.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Baca Artikel</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="{{ asset('landing/img/feature-2.jpg') }}" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Latihan Otot Perut (Core) Efektif</a>
                            <p class="mb-3">Variasi gerakan plank, leg raise, dan crunches untuk memperkuat stabilitas otot inti tubuh.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Baca Artikel</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img p-4 pb-0">
                            <a href="#">
                                <img src="{{ asset('landing/img/feature-1.jpg') }}" class="img-fluid w-100" alt="">
                            </a>
                        </div>
                        <div class="blog-content p-4">
                            <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                                <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                                <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Panduan Latihan Beban Pemula</a>
                            <p class="mb-3">Cara memulai angkat beban tanpa takut cedera serta rekomendasi split latihan mingguan yang ideal.</p>
                            <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Baca Artikel</span>  <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Explore Fitness Start -->
        <div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
            <div class="container py-5 text-center">
                <h1 class="display-1 text-white mb-0"> Jelajahi Studio Fitness Kami</h1>
                <a class="btn btn-primary py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/embed/DWRcNpR6Kdc"><i class="fas fa-play-circle me-2"></i> <span>Lihat Fasilitas</span></a>
            </div>
        </div>
        <!-- Explore Fitness End -->


        <!-- Team Start -->
        <div class="container-fluid team py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Instruktur & Pelatih</h4>
                    <h1 class="display-4 mb-4">Kenalan Dengan Coach Profesional Kami</h1>
                    <p class="mb-0">Fasilitas gym lengkap dengan sirkulasi udara ber-AC, alat beban terawat, dan jadwal kelas variatif.
                    </p>
                </div>
                <div class="row gy-5 gy-lg-4 gx-4">
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('landing/img/team-1.jpg') }}" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Bambang Prakoso</h4>
                                <p class="mb-0">Head Coach & Strength Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('landing/img/team-2.jpg') }}" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Sarah Anindya</h4>
                                <p class="mb-0">Certified Yoga & Pilates Master</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('landing/img/team-3.jpg') }}" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Rian Hendrawan</h4>
                                <p class="mb-0">Personal Trainer & Bodybuilding</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('landing/img/team-4.jpg') }}" class="img-fluid w-100" alt="Image">
                                <div class="team-icon">
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                                    <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h4>Maya Oktavia</h4>
                                <p class="mb-0">Zumba & HIIT Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial bg-dark py-5" style="margin-bottom: 90px;">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Testimonial</h4>
                    <h1 class="display-4 text-white">Apa Kata Member yang Sudah Bertransformasi?</h1>
                </div>
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{ asset('landing/img/testimonial-1.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">"Awalnya ragu bisa konsisten turun berat badan, tapi setelah 3 bulan dibimbing personal trainer di sini, berat badan turun 12kg dan tubuh terasa jauh lebih fit!"
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Andi Pratama</h4>
                            <p class="m-0 pb-3">Pekerja Kantoran (32 Thn)</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{ asset('landing/img/testimonial-2.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">"Fasilitas gym paling bersih dan nyaman di Semarang. Alat latihannya lengkap, suasananya seru, dan kelas zumbanya ampuh buat lepas stres pulang kerja."
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Dina Permatasari</h4>
                            <p class="m-0 pb-3">Wiraswasta (27 Thn)</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item mx-auto" style="max-width: 900px;">
                        <span class="fa fa-quote-left fa-3x quote-icon"></span>
                        <div class="testimonial-img mb-4">
                            <img src="{{ asset('landing/img/testimonial-3.jpg') }}" class="img-fluid" alt="Image">
                        </div>
                        <p class="fs-4 text-white mb-4">"Komunitas latihannya saling support. Para coach ramah banget dan selalu koreksi postur kalau gerakan kita keliru, jadi aman dari cedera."
                        </p>
                        <div class="d-block">
                            <h4 class="text-white">Fajar Nugroho</h4>
                            <p class="m-0 pb-3">Mahasiswa (22 Thn)</p>
                            <div class="d-flex">
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection
