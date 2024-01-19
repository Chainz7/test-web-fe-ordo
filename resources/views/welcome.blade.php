<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <!-- SASS -->
        @vite(['resources/sass/app.sass'])

    </head>
    <body>
        <div class="app">
            <div class="hero container">
                <div class="nav-container">
                    <div class="nav-left">
                        <a href="">
                            <img class="logo" src="{{URL('/images/Logo.webp')}}" alt="Graha Wisata Kita">
                        </a>
                        <a href="">Homepage</a>
                        <a href="">Tentang</a>
                        <a href="">Daftar Hotel</a>
                        <a href="">Bantuan</a>
                    </div>
                    <div class="nav-right">
                        <div class="nav-right-button">
                            <button>
                                <img class="icon-flag" src="{{URL('/images/Flag.webp')}}" alt="Flag">
                                <span>Indonesia ( ID )</span>
                                <img class="icon-down" src="{{URL('/images/Down-White.webp')}}" alt="Down">
                            </button>
                        </div>
                        <img class="image-1" src="{{URL('/images/Image-1.webp')}}" alt="City">
                    </div>
                </div>
                <div class="body-container">
                    <div class="body-left">
                        <img class="bg-image-1" src="{{URL('/images/BG-Image-1.webp')}}" alt="Background Line">
                        <div class="left-body highlight">
                            <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                            <span>HOTEL OPERATOR</span>
                        </div>
                        <div class="body-left-main">
                            <span class="text-header-hero">Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda</span>
                            <span class="text-description-hero">GWA membantu mengoperasikan keseluruhan layanan hotel, <br> menjadikan mitra lebih percaya diri dalam menjalankan bisnis.</span>
                        </div>
                        <div class="body-left-button">
                            <span>Konsultasikan Bisnis Saya</span>
                        </div>
                            {{-- <div class="body-left-scroll">
                                <span>Scroll</span>
                                <img src="{{URL('/images/1/arrow-down.webp')}}" alt="Down Arrow">
                            </div> --}}
                    </div>
                </div>
            </div>
            <div class="workflow container">
                <img class="bg-image-2" src="{{URL('/images/BG-Image-2.webp')}}" alt="Background Line">
                <div class="highlight">
                    <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                    <span>OUR WORKFLOW</span>
                </div>
                <div class="text-header">
                    Proses Kerja Kami dalam <br> Meningkatkan Kualitas Properti
                </div>
                <div class="workflow-pathway">
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-top: 18rem;">
                            <div class="pathway-circle">
                                <img class="image-2" src="{{URL('/images/Achievement-1.webp')}}" alt="Achievment">
                            </div>
                            <span class="pathway-header">Tantangan</span>
                            <span class="pathway-description">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</span>
                        </div>
                    </div>
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-left: 5rem; margin-top: 12rem; width: 40rem">
                            <div class="pathway-circle">
                                <img class="image-2" src="{{URL('/images/Achievement-2.webp')}}" alt="Achievment">
                            </div>
                            <span class="pathway-header">Rumusan</span>
                            <span class="pathway-description">Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</span>
                        </div>
                    </div>
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-left: 1rem; margin-top: 14rem; width: 43rem">
                            <div style="display: flex">
                                <div class="pathway-circle blue">
                                    <img class="image-2" src="{{URL('/images/Achievement-3.webp')}}" alt="Achievment">
                                </div>
                                <img class="ellipse" src="{{URL('/images/Ellipse.webp')}}" alt="">
                            </div>
                            <span class="pathway-header">Goals</span>
                            <span class="pathway-description">Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</span>
                        </div>
                    </div>
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-left: -12rem; margin-top: 1rem; width: 37rem">
                            <div class="pathway-circle">
                                <img class="image-2" src="{{URL('/images/Achievement-4.webp')}}" alt="Achievment">
                            </div>
                            <span class="pathway-header">Ideas</span>
                            <span class="pathway-description">Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services container">
                <img class="bg-image-3" src="{{URL('/images/BG-Image-3.webp')}}" alt="Background Line">
                <div class="highlight">
                    <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                    <span>OUR SERVICES</span>
                </div>
                <div class="text-header">
                    Apa Saja yang Bisa Kami Bantu ?
                </div>
                <div class="services-boxs">
                    <div class="services-box">
                        <div class="services-box-top">
                            <img class="image-3" src="{{URL('/images/Services-1.webp')}}" alt="Services">
                            <span>01</span>
                        </div>
                        <span class="services-box-title">
                            Revenue <br> Management Service
                        </span>
                        <button class="services-box-button">
                            <span>Saya Tertarik</span>
                            <img class="icon-arrow-right" src="{{URL('/images/Arrow-Right-Black.webp')}}" alt="Arrow Right">
                        </button>
                    </div>
                    <div class="services-box">
                        <div class="services-box-top">
                            <img class="image-3" src="{{URL('/images/Services-2.webp')}}" alt="Services">
                            <span>02</span>
                        </div>
                        <span class="services-box-title">
                            Full Manage <br> Service
                        </span>
                        <button class="services-box-button">
                            <span>Saya Tertarik</span>
                            <img class="icon-arrow-right" src="{{URL('/images/Arrow-Right-Black.webp')}}" alt="Arrow Right">
                        </button>
                    </div>
                    <div class="services-box">
                        <div class="services-box-top">
                            <img class="image-3" src="{{URL('/images/Services-3.webp')}}" alt="Services">
                            <span>03</span>
                        </div>
                        <span class="services-box-title">
                            Asset Monetize <br> Service
                        </span>
                        <button class="services-box-button">
                            <span>Saya Tertarik</span>
                            <img class="icon-arrow-right" src="{{URL('/images/Arrow-Right-Black.webp')}}" alt="Arrow Right">
                        </button>
                    </div>
                </div>
            </div>
            <div class="projects container">
                <div class="highlight-projects">
                    <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                    <span>OUR SERVICES</span>
                    <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                </div>
                <div class="text-header-projects">
                    Project Terbaru Kami
                </div>
                <div class="projects-boxs">
                    <img class="image-4" src="{{ URL('/images/Image-2.webp') }}" alt="Project">
                    <div class="projects-box">
                        <div class="box-previous">
                            <img class="icon-left" src="{{ URL('/images/Left-Black.webp') }}" alt="Left">
                        </div>
                        <div class="box-main">
                            <div class="projects-main-left">
                                <span class="projects-box-subtitle">1/4 OPERATIONAL PROJECT</span>
                                <span class="projects-box-title">Townhouse Oak</span>
                                <span class="projects-box-description">Brand tertinggi di OYO</span>
                            </div>
                            <div class="projects-main-right">
                                <div class="projects-box-right">
                                    <img class="icon-right" src="{{ URL('/images/Right-White.webp') }}" alt="Right">
                                </div>
                                <span class="projects-box-subdescription">Lihat Detail</span>
                            </div>
                        </div>
                        <div class="box-next">
                            <img class="icon-right" src="{{ URL('/images/Right-Black.webp') }}" alt="Right">
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonials container">
                <div class="testimonials-left"">
                    <div class="highlight">
                        <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                        <span>OUR TESTIMONIALS</span>
                    </div>
                    <div class="text-header">
                        Yang Klien Kami Katakan
                    </div>
                    <div class="testimonials-description-box">
                        <img class="icon-quotes-sign" src="{{ URL('/images/Quotes-Sign.webp') }}" alt="Quotes Sign">
                        <span class="testimonials-description">GWA Group membantu hotel
                            saya untuk menjangkau lebih banyak client dan memberikan saran monetisasi yang tidak pernah saya bayangkan sebelumnya
                        </span>
                    </div>
                    <div class="testimonials-clients">
                        <img class="icon-company" src="{{ URL('/images/company-1.webp') }}" alt="Company Profile">
                        <div class="testimonials-client">
                            <span class="testimonials-client-title">Chaim Desmond</span>
                            <span class="testimonials-client-subtitle">CEO of Yellow Hotel</span>
                        </div>
                    </div>
                </div>
                <div class="testimonials-right">
                    <img class="image-5" src="{{ URL('/images/Image-3.webp') }}" alt="Client Profile">
                    <div class="tesimonials-button">
                        <div class="testimonials-button-left">
                            <img class="icon-left-big" src="{{ URL('/images/Left-White.webp') }}" alt="Left">
                        </div>
                        <div class="testimonials-button-right">
                            <img class="icon-right-big" src="{{ URL('/images/Right-White.webp') }}" alt="Right">
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact container">
                <img class="bg-image-4" src="{{ URL('/images/BG-Image-4.webp') }}" alt="Background Line">
                <div class="contact-left">
                    <div class="highlight">
                        <img class="line-yellow" src="{{URL('/images/Line-Yellow.png')}}" alt="Line">
                        <span>HUBUNGI KAMI</span>
                    </div>
                    <div class="text-header contact-special-text">
                        Ingin Mendiskusikan Bisnis Pariwisata Anda ?
                    </div>
                    <img class="line-short" src="{{ URL('/images/Short-Line.png') }}" alt="Line">
                    <span class="text-description contact-special-description">
                        Ada kepentingan bisnismu yang ingin didikusikan dengan kami, yuk segera isi form disamping, konsultasinya gratis kok !
                    </span>
                </div>
                <form action="" class="contact-right">
                    <div class="form-box">
                        <div class="form-input">
                            <label for="">Nama Lengkap</label>
                            <input type="text" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-input">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" placeholder="Masukkan Nama Perusahaan">
                        </div>
                        <div class="form-input">
                            <label for="">Nomor Whatsapp Aktif</label>
                            <input type="text" placeholder="Masukkan Nomor Whatsapp">
                        </div>
                        <button class="form-button">
                            <span>Jadwalkan Konsultasi</span>
                            <img style="width: 4rem" src="{{ URL('/images/Arrow-Right-Black.webp') }}" alt="Arrow Right">
                        </button>
                    </div>
                </form>
            </div>
            <div class="footer container">
                <img class="bg-image-5" src="{{ URL('/images/BG-Image-5.webp') }}" alt="Background Line">
                <div class="footer-container">
                    <img class="logo" src="{{ URL('/images/Logo.webp') }}" alt="Logo">
                    <div class="footer-info">
                        <div class="footer-info-item">
                            <span class="footer-item-title">Halaman Utama</span>
                            <a href="" class="footer-item-subtitle">Homepage</a>
                        </div>
                        <div class="footer-info-item">
                            <span class="footer-item-title">Perusahaan</span>
                            <a href="" class="footer-item-subtitle">Tentang Kami</a>
                            <a href="" class="footer-item-subtitle">Daftar Hotel</a>
                        </div>
                        <div class="footer-info-item">
                            <span class="footer-item-title">Temukan Kami</span>
                            <a href="" class="footer-item-subtitle">Bantuan</a>
                            <a href="" class="footer-item-subtitle">Hubungi Kami</a>
                        </div>
                        <div class="footer-info-item">
                            <span class="footer-item-title">Social Media</span>
                            <div class="footer-item-social">
                                <a href="">
                                    <img class="icon-socmed" src="{{ URL('/images/Facebook.webp') }}" alt="Facebook">
                                </a>
                                <a href="">
                                    <img class="icon-socmed" src="{{ URL('/images/Youtube.webp') }}" alt="Youtube">
                                </a>
                                <a href="">
                                    <img class="icon-socmed" src="{{ URL('/images/Instagram.webp') }}" alt="Instagram">
                                </a>
                            </div>
                        </div>
                    </div>
                        <img src="{{ URL('/images/Long-Line.png') }}" alt="Line">
                        <div class="footer-info-company">
                            <div class="footer-company-left">
                                <a href="" class="footer-item-subtitle law">Pemberitahuan Privasi</a>
                                <a href="" class="footer-item-subtitle law">Syarat dan Ketentuan</a>
                            </div>
                            <div class="footer-company-right">
                                <img class="languange" src="{{ URL('/images/Languange.webp') }}" alt="Languange Logo">
                                <div class="footer-button">
                                    <span>Bahasa Indonesia</span>
                                    <img class="icon-down" src="{{URL('/images/Down-White.webp')}}" alt="Down">
                                </div>
                            </div>
                        </div>
                        <span class="info">© 2023 Graha Wisata Kita | PT Graha Wisata Kita Tbk. </span>
                    </div>
                </div>
        </div>
    </body>
</html>
