<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}">
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
    <title>Home</title>
</head>


<body>
    <header>
        <nav class="logo">
            <h4><a href="/">Modul 3</a></h4>
            <ul class="slide">
                <li><a class="active" href="/">Home</a></li>
                <li><a href="/profile">Profile</a></li>
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
    </header>

    <div class="banner">
        <div class="namaPembuka">
            <h1>Hello World</h1>
        </div>
    </div>

    <!-- Judul -->

    <section>
        <div class="judul">
            <h3>MY LIFE FOR GOD</h3>
        </div>

        <div class="kiriBan">
            <p></p>
            <div class="gambar1">
                <i class="fas fa-laptop-code"></i>
            </div>
        </div>

        <div class="tengahBan">
            <p></p>
            <div class="gambar2">
                <i class="fas fa-globe-africa"></i>
            </div>
        </div>

        <div class="kananBan">
            <div class="gambar3">
                <i class="fas fa-paper-plane"></i>
            </div>
        </div>
    </section>

    <div class="containerIklan">
        <div class="judulIklan">
            <h1>EDUCATION</h1>

        </div>
    </div>

    <!-- MAIN / ISI -->
    <main>
        <section>
            <div class="kiri">
                <br><br><br><br>
                <div class="judulKategori">
                    <p1 class="kat">Kategori</p1>
                </div>
                <div class="kategori">
                    <ul>
                        <li><a href="#1">Penemu Bahasa Java</a></li>
                        <li><a href="#2">Belajar Java</a></li>
                        <li><a href="#3">Informasi IoT</a></li>
                    </ul>
                </div>
            </div>

            <div class="tengah">
                @yield('content');

            </div>

            <div class="kanan">
                <div class="pencarian">
                    <form>
                        Search :
                        <input type="text">
                        <br>
                        <button>Send</button>
                    </form>
                </div>

                <div class="trending">
                    <div class="judulTrending">
                        <p class="kat">Popular</p>
                    </div>
                    <div class="katTrending">
                        <ul>
                            <li><a href="#3">Informasi IoT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="ContainerLogoFot">
            <div class="logoFot">
                <h1>Modul 2</h1>
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
    @stack('script')
</body>

</html>