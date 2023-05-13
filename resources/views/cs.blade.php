

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Newszone.com</title>
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/gambar.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/me.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/tes.css')}}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{asset('assets/css/autocomplete.css')}}">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet"></link>
        <script type="text/javascript" src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    </head>
    <body>
        @include('template.navbar')
        <div class="container-fluid bg-white">
            <div class="row">
                <div>
                    <h1 class="display-4 text-center mx-5 my-5">Layanan Kritik dan Saran</h1>
                    <p class="lead my-5">
                    <p class="lead  mx-5 mb-4">
                       Hubungi kami melalui WA: 
                    </p>
                    <p class="lead mx-5">
                       Yeni Aulia Sinaga: 0813-7293-0758
                    </p>
                    <p class="lead mx-5">
                       Denice Matthew: 0853-7959-6940
                    </p>
                    <p class="lead mx-5">
                       Devandra: 0811-6270-373
                    </p>
                    <p class="lead mx-5">
                       Ghalbi: 0819-9082-2665
                    </p>
                    <p class="lead mx-5">
                       Aliya Afifa: 0812-6280-3212
                    </p>
                    </p>
                </div>
            </div>
        </div>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <footer>
        <div class="jumbotron footer mb-auto" style="color: sagegreen;">
            <div class="container">
                <div class="row mb-2">
                    <img src="{{asset('assets/img/logo/c.png')}}" alt="Logo" style="width: 150px;" class="mx-auto">
                </div>
                <div class="row mb-3">
                    <p class="mx-auto">Copyright © 2022 Kelompok 3 KOM C </p>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h4 class="mb-2 text-center hitam ">Kategori</h4>
                        <a class="hitam text-center tambah" href="dunia"><h6 style="font-weight:400;">Dunia</h6></a>
                        <a class="hitam text-center tambah" href="olahraga"><h6 style="font-weight:400;">Olahraga</h6></a>
                        <a class="hitam text-center tambah" href="hiburan"><h6 style="font-weight:400;">Hiburan</h6></a>
                        <a class="hitam text-center tambah" href="bisnis"><h6 style="font-weight:400;">Bisnis</h6></a>
                        <a class="hitam text-center tambah" href="teknologi"><h6 style="font-weight:400;">Teknologi</h6></a>
                        <a class="hitam text-center tambah" href="politik"><h6 style="font-weight:400;">Politik</h6></a>
                        <a class="hitam text-center tambah" href="wisata"><h6 style="font-weight:400;">Wisata</h6></a>
                        <a class="hitam text-center tambah" href="kriminal"><h6 style="font-weight:400;">Kriminal</h6></a>
                    </div>
                    <div class="col-4">
                        <h4 class="mb-2 text-center hitam">Tentang</h4>
                        <a class="hitam" href="intro"><h6 class="mb-2 text-center tambah" style="font-weight: 400;">Tentang Website</h6></a>
                        <a class="hitam" href="cs"><h6 class="mb-2 text-center tambah" style="font-weight: 400;">Pengembang</h6></a>
                    </div>
                    <div class="col-4">
                        <h4 class="mb-2 text-center hitam " >Urutan</h4>
                        <!--
                        <a class="putih" href="terpopuler.php"><h6 class="mb-2 text-center" style="font-weight: 400;">Topik Populer</h6></a>
                                -->
                        <a class="putih" href="terkini"><h6 class="mb-2 text-center tambah" style="font-weight: 400;">Terkini</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>