@extends('layouts.app')


@section('title')
BPR Bina Maju Usaha
@endsection


@section('content')
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Selamat datang di</div>
        <div class="masthead-heading text-uppercase">BANK PERKREDITAN RAKYAT BINA MAJU USAHA</div>

        <a class="btn btn-outline-primary btn-l text-uppercase" href="#contact">Hubungi Kami</a>
        <a class="btn btn-outline-primary btn-l text-uppercase" href="#portfolio">Produk dan Layanan</a>
    </div>
</header>
<!-- Services-->
<section class="page-section bg-light" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tentang BPR Bina Maju Usaha</h2>
            <h3 class="section-subheading text-muted">Bank Perkreditan Rakyat Bina Maju Usaha
                merupakan salah satu perusahaan perbankan swasta yang bergerak di bidang jasa keuangan yang berada di
                Kota Bandung.
            </h3>
        </div>

        <div class="row text-center">
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('frontend/assets/img/tentang1.jpg')}}" style="height: 250px;" alt="..." />
                <h4 class="my-3"></h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('frontend/assets/img/tentang2.jpg')}}" style="height: 250px;" alt="..." />
                <h4 class="my-3"></h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('frontend/assets/img/tentang3.jpg')}}" style="height: 250px;" alt="..." />
                <h4 class="my-3"></h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('frontend/assets/img/tentang4.jpg')}}" style="height: 250px;" alt="..." />
                <h4 class="my-3"></h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('frontend/assets/img/tentang5.jpg')}}" style="height: 250px;" alt="..." />
                <h4 class="my-3"></h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="{{ url('frontend/assets/img/tentang6.jpg')}}" style="height: 250px;" alt="..." />
                <h4 class="my-3"></h4>
                <p class="text-muted"></p>
            </div>
        </div>
       

    </div>
</section>

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Produk dan Layanan</h2>
            <h3 class="section-subheading text-muted">Berikut daftar produk dan layanan kami</h3>
        </div>

        <div class="row">

            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ url('frontend/assets/img/kredit.jpg')}}" style="height: 250px;"
                            alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"></div>

                    </div>
                </div>
            </div>
                
        
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ url('frontend/assets/img/tabungan.jpg')}}" style="height: 250px;"
                            alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"></div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ url('frontend/assets/img/deposito.jpg')}}" style="height: 250px;"
                            alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"></div>

                    </div>
                </div>
            </div>
            

        </div>
</section>


<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{ url('frontend/assets/img/close-icon.svg')}}"
                    alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="modal-body">

                            <!-- Project details-->
                            <h2 class="text-uppercase"></h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src="{{ url('frontend/assets/img/kredit.jpg')}}"
                                alt="..." />
                            <p>Kredit Jamian Deposito, Kredit Jaminan BPKB, Kredit Jaminan Sertifikat</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>KREDIT</strong>

                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{ url('frontend/assets/img/close-icon.svg')}}"
                    alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="modal-body">

                            <!-- Project details-->
                            <h2 class="text-uppercase"></h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src="{{ url('frontend/assets/img/tabungan.jpg')}}"
                                alt="..." />
                            <p>Tabungan Utama, Tabungan Berjangka</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>TABUNGAN</strong>
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="{{ url('frontend/assets/img/close-icon.svg')}}"
                    alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="modal-body">

                            <!-- Project details-->
                            <h2 class="text-uppercase"></h2>
                            <p class="item-intro text-muted"></p>
                            <img class="img-fluid d-block mx-auto" src="{{ url('frontend/assets/img/deposito.jpg')}}"
                                alt="..." />
                            <p>Deposito Aman, proses cepat dan bunga menarik mulai dari 6,25% - 8%</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>DEPOSITO</strong>

                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                <i class="fas fa-times me-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<section id="contact" class="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">KONTAK</h2>
        </div>

        <br><br>

        <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Lokasi:</h4>
                        <p>Jl. Dr. Setiabudi No.170A, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40141</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@bprbmu.co.id</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-telephone"></i>
                        <h4>Telepon</h4>
                        <p>+(022) 203 8582</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126766.88293644719!2d107.57208447703033!3d-6.834706262525659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6958c67f15b%3A0x7aa11e8941b27f95!2sPT.%20BPR%20Bina%20Maju%20Usaha!5e0!3m2!1sid!2sid!4v1638799423940!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 412px;" allowfullscreen></iframe>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section>



@endsection