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
            <div class="hero-container">
                <div class="nav-container">
                    <div class="nav-left">
                        <a href=""><img class="header-bg-image" src="{{URL('/images/1/Group 1.png')}}" alt=""></a>
                        <a href="">Homepage</a>
                        <a href="">Tentang</a>
                        <a href="">Daftar Hotel</a>
                        <a href="">Bantuan</a>
                    </div>
                    <div class="nav-right">
                        <div class="nav-right-button">
                            <button>
                                <img src="{{URL('/images/1/image 2.png')}}" alt="Flag">
                                <span>Indonesia ( ID )</span>
                                <img src="{{URL('/images/1/down.png')}}" alt="Down Arrow">
                            </button>
                        </div>
                        <img class="body-image" src="{{URL('/images/1/image 1.png')}}" alt="City">
                    </div>
                </div>
                <div class="body-container">
                    <div class="body-left">
                        <img class="body-bg-image" src="{{URL('/images/1/Group 108.png')}}" alt="">
                        <div class="body-left-highlight">
                            <img src="{{URL('/images/1/rectangle 3.png')}}" alt="">
                            <span>Hotel Operator</span>
                        </div>
                        <div class="body-left-main">
                            <span class="main-header">Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda</span>
                            <span class="main-description">GWA membantu mengoperasikan keseluruhan layanan hotel, <br> menajadikan mitra lebih percaya diri dalam menjalankan bisnis.</span>
                        </div>
                        <div class="body-left-button">
                            <span>Konsultasikan Bisnis Saya</span>
                        </div>
                        {{-- <div class="body-left-scroll">
                            <span>Scroll</span>
                            <img src="{{URL('/images/1/arrow-down.png')}}" alt="Down Arrow">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
