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
                        <a href=""><img class="header-bg-image" src="{{URL('/images/Logo.png')}}" alt=""></a>
                        <a href="">Homepage</a>
                        <a href="">Tentang</a>
                        <a href="">Daftar Hotel</a>
                        <a href="">Bantuan</a>
                    </div>
                    <div class="nav-right">
                        <div class="nav-right-button">
                            <button>
                                <img src="{{URL('/images/Flag.png')}}" alt="Flag">
                                <span>Indonesia ( ID )</span>
                                <img class="down-image" src="{{URL('/images/Down.png')}}" alt="Down Arrow">
                            </button>
                        </div>
                        <img class="body-image" src="{{URL('/images/Image-1.png')}}" alt="City">
                    </div>
                </div>
                <div class="body-container">
                    <div class="body-left">
                        <img class="body-bg-image" src="{{URL('/images/BG-Line-1.png')}}" alt="">
                        <div class="left-body highlight">
                            <img src="{{URL('/images/Line.png')}}" alt="">
                            <span>HOTEL OPERATOR</span>
                        </div>
                        <div class="body-left-main">
                            <span class="text-header">Membantu Menjalankan <br> Operasi Bisnis Pariwisata Anda</span>
                            <span class="text-description">GWA membantu mengoperasikan keseluruhan layanan hotel, <br> menjadikan mitra lebih percaya diri dalam menjalankan bisnis.</span>
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
            <div class="workflow container">
                <img class="workflow-bg" src="{{URL('/images/BG-Line-2.png')}}" alt="">
                <div class="highlight">
                    <img src="{{URL('/images/Line.png')}}" alt="">
                    <span>OUR WORKFLOW</span>
                </div>
                <div class="text-header">
                    Proses Kerja Kami dalam <br> Meningkatkan Kualitas Properti
                </div>
                <div class="workflow-pathway">
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-top: 15rem;">
                            <div class="pathway-circle">
                                <img src="{{URL('/images/Achievement-1.png')}}" alt="">
                            </div>
                            <span class="pathway-header">Tantangan</span>
                            <span class="pathway-description">Setiap property memiliki tantangan tersendiri dan GWA sangat memahami hal tersebut.</span>
                        </div>
                    </div>
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-left: 5rem; margin-top: 9rem; width: 40rem">
                            <div class="pathway-circle">
                                <img src="{{URL('/images/Achievement-2.png')}}" alt="">
                            </div>
                            <span class="pathway-header">Rumusan</span>
                            <span class="pathway-description">Setiap tantangan akan dirumuskan menjadi sebuah hal yang harus dicari jalan keluarnya oleh kami</span>
                        </div>
                    </div>
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-left: 1rem; margin-top: 11rem; width: 43rem">
                            <div style="display: flex">
                                <div class="pathway-circle blue">
                                    <img src="{{URL('/images/Achievement-3.png')}}" alt="">
                                </div>
                                <img class="pathway-pointer" src="{{URL('/images/Pointer.png')}}" alt="">
                            </div>
                            <span class="pathway-header">Goals</span>
                            <span class="pathway-description">Dari rumusan masalah, kami memberikan respon cepat dan jalan keluar jangka pendek - menengah - panjang.</span>
                        </div>
                    </div>
                    <div class="workflow-1">
                        <div class="pathway-1" style="margin-left: -12rem; margin-top: -2rem; width: 37rem">
                            <div class="pathway-circle">
                                <img src="{{URL('/images/Achievement-4.png')}}" alt="">
                            </div>
                            <span class="pathway-header">Ideas</span>
                            <span class="pathway-description">Setiap rumusan menjadikan ide-ide kreatif bagi kami untuk meningkatkan kualitas property mitra.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services container">
                asd
            </div>
        </div>
    </body>
</html>
