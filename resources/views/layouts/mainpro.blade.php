<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/frontend/style2.css') }}">
    <!-- CRETE ROUND -->
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
    <!-- Bee Serif -->
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <!-- Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Pacifico -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <!-- M Plus 1p -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500&display=swap" rel="stylesheet">
    <!-- Lobster -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    @stack('css')
    <title>Profile</title>
</head>


<body>
    <header>
        <nav class="logo">
            <h4><a href="/">Modul 3</a></h4>
            <ul class="slide">
                <li><a href="/">Home</a></li>
                <li><a class="active" href="/profile">Profile</a></li>
                <li><a href="/blog">Blog</a></li>
            </ul>

            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span> <!-- Buat gasis -->
                <span></span> <!-- Buat gasis -->
                <span></span> <!-- Buat gasis -->

            </div>
        </nav>
        <script src="{{ asset('js/script.js') }}"></script>

        <!-- Mode -->
        <div>
            <input type="checkbox" class="checkbox" id="chk" />
            <label class="label" for="chk">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>
            </label>
        </div>
        <script src="{{ asset('js/mode.js') }}"></script>

    </header>


    <div class="containerBanner">
        <div class="banner">
            <div class="fotoProfile">
                <img src="{{ asset('imgfront/GUE.jpg') }}" width="110%" height="110%">
                <h5>Fahmi Ali Husni</h5>
            </div>
        </div>
    </div>

    <!-- Judul -->


    <!-- MAIN - SECTION -->
    <main>
        <section>
            <div class="kiri">
                <!-- KOSONG -->
            </div>

            <div class="tengah">
                @yield('content');
            </div>


            <div class="kanan">
                <!-- KOSONG -->
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="ContainerLogoFot">
            <div class="logoFot">
                <h1>Modul 3</h1>
            </div>

            <div class="aboutFot">
                <p>Pengetahuan disini sangat menyenangkan, selalu terupdate, program sangat kompleks</p>
                <p>Jangan lupa semangat ngoding</p>
            </div>
        </div>
        <div class="ContainerSosmedFot">
            <ul class="sosmed">
                <li><a href="https://www.facebook.com/LARE.USING.13/"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/fahmi_ali13/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCpuJBYMaQCZht85hw5N1CBw"><i
                            class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>