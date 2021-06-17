@extends('layouts.main')
@section('title', 'home')
@section('content')


<div class="logoIsi" id="1">
    <h2>Modul 2</h2>
</div>

<br><br><br>
<div class="isiTengah">

    <h5 id="Penemu-Bahasa-Java">Penemu Bahasa Java</h5>
    <div class="conGambar1">
        <div class="gambar1">
            <img src="{{ asset('imgfront/james-gosling-java.jpg') }}" width="80%">
        </div>
    </div>
    <div class="kata1">
        <p>Sintaks Java mirip seperti C/C++, karena Java banyak terinspirasi dari keuda bahasa ini.
            Java dirancang untuk tujuan umum (general-purpose) dan sepenuhnya menganut paradigma OOP
            (Object
            Oriented Programming). OOP adalah paradigma pemrograman yang berbasis pada objek.
            Setiap kita membuat program, maka wajib hukumnya membuat objek terlebih dahulu.</p>
        <p>Ya.. namanya juga OOP, program yang berorientasikan objek.</p>
        <p>Namun, jangan khawatir..</p>
        <p>Jika kamu belum tahu apa-apa tentang OOP, saya tidak akan menggunakan pendekatan OOP dalam
            menjelaskan Java di tutorial ini. Saya akan menggunakan pendekatan prosedural, yang notabene
            lebih mudah dipahami pemula.</p>
        <p>Emang bisa?</p>
        <p>Java kan sepenuhnya menganut OOP.
            Ya bisa-bisa saja, meski terkesan dipaksakan. Namun, menurut saya inilah cara terbaik untuk
            mengenalkan Java kepada pemula.
            Oke..</p>
        <p>Sekarang mari kita bahas:</p>
        <h4>Sejarah Singkat Java</h4>
        <p>Proyek pengembangan Java dimulai pada tahun 1991 oleh James Gosling, Mike Sherida, dan
            Patrick
            Naughton. Awalnya Java bernama Oak, nama ini diambil dari nama pohon yang berada di dekat
            kantor
            James Gosling. Lalu namanya diubah menjadi Green.Pada akhirnya, diubah lagi menjadi Java.
            Nama Java dipilih karena si Gosling terinspirasi dari asal-usul kopi yang diminumnya, yakni
            Pulau Jawa.</p>
        <p>Oleh sebab itu logo Java itu bentuknya seperti secangkir kopi.. 😄</p>
        <br>
        <p>Klik <a href="https://www.petanikode.com/java-untuk-pemula/"><strong><u> disini </u></strong>
                untuk mengetahui informasi lebih lanjut</a></p>
    </div>

    <div class="logoIsi" id="2">
        <h2></h2>
    </div>

    <h5 id="Belajar-Java">Belajar Java</h5>
    <div class="conJava">
        <div class="java">
            <img src="{{ asset('imgfront/java.jpg') }}" width="80%">
        </div>
    </div>
    <h4> OOP (Object Oriented Programming)</h4>
    <div class="kata2">
        <p> OOP (Object Oriented Programming) adalah suatu metode pemrograman yang berorientasi kepada
            objek.
            Tujuan dari OOP diciptakan adalah untuk mempermudah pengembangan program dengan cara
            mengikuti
            model yang telah ada di kehidupan sehari-hari. Jadi setiap bagian dari suatu permasalahan
            adalah
            objek, nah objek itu sendiri merupakan gabungan dari beberapa objek yang lebih kecil lagi.
            Saya
            ambil contoh Pesawat, Pesawat adalah sebuah objek. Pesawat itu sendiri terbentuk dari
            beberapa
            objek yang lebih kecil lagi seperti mesin, roda, baling-baling, kursi, dll. Pesawat sebagai
            objek yang terbentuk dari objek-objek yang lebih kecil saling berhubungan, berinteraksi,
            berkomunikasi dan saling mengirim pesan kepada objek-objek yang lainnya. Begitu juga dengan
            program, sebuah objek yang besar dibentuk dari beberapa objek yang lebih kecil, objek-objek
            itu
            saling berkomunikasi, dan saling berkirim pesan kepada objek yang lain.</p>
        <h3>Class dan Object</h3>
        <p>Class sebenarnya bertugas untuk mengumpulkan prosedur/fungsi dan variabel dalam satu tempat.
        </p>
        <p>Contoh:</p>
        <p>Kita ingin membuat game sederhana, di dalamnya ada kucing dan makanan.</p>
        <br>
        <p>Klik <a href="https://www.petanikode.com/java-oop/"><strong><u> disini </u></strong> untuk
                mengetahui
                informasi lebih lanjut</a></p>
    </div>

    <div class="logoIsi" id="3">
        <h2></h2>
    </div>
    <h5 id="IoT">Informasi IoT</h5>
    <div class="VRiot">
        <div class="VR">
            <img src="{{ asset('imgfront/VRiot.png') }}" width="100%">
        </div>
    </div>
    <h4> VR yang Bisa Pertemukan Orang yang Hidup dengan yang Sudah Mati</h4>
    <div class="kata3">
        <p>Seorang pria akhirnya bisa bertemu kembali dengan sang istri yang sudah meninggal baru-baru
            ini
            menuai sorotan publik. Meski hanya dengan menggunakan teknologi virtual reality (VR), pria
            tersebut sampai tak kuasa menahan tangis, melepas rasa rindunya.</p>
        <p>Sebelumnya diketahui, teknologi Virtual Reality alias VR belakangan kian berkembang. Dari
            tujuan
            awalnya yang untuk bermain video game, kini teknologi tersebut juga sudah
            bisa untuk keperluan non hiburan. Seperti misalnya, di Korea Selatan baru-baru ini heboh
            lantaran teknologi VR digunakan untuk kebutuhan terapi.
            Adapun orang-orang yang baru kehilangan sosok yang dicintai, tapi kesulitan untuk merelakan,
            diyakini bisa terbantu dengan teknologi tersebut.</p>
        <p>Klik <a
                href="https://kumparan.com/berita_viral/viral-teknologi-vr-yang-bisa-pertemukan-orang-yang-hidup-dengan-yang-sudah-mati-1v2WZoWwuGq"><strong><u>
                        disini </u></strong> untuk
                mengetahui
                informasi lebih lanjut</a></p>
    </div>


</div>


@endsection