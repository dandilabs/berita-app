@extends('template.index')
@section('content')
<div class=" container">
    <div class=" bg-white my-5" style="border-radius: 20px;" >
        <br/>
			<p class="judul2 text-center">Hiburan</p>
		<br/>
        <div class="row">
            <div class="col-8">        
                        </div>
            <div class="col-4 mt-3">
                <div class="row mr-3">
                    <h4 class="mb-3" style="font-weight: bold;">Topik Populer</h4>
                     
                    <div class="row mr-5">
                        <img src="{{asset('assets/img/berita/wapres.jpeg')}}" style="height: 160px; width: 100%;">
                    </div>
                    <div class="row mt-1 mr-3">
                        <a href="konten.php?id_berita=78"><h5 style="font-weight: bold;">Isu Reshuffle Kabinet, Wapres Ma’ruf: Kita Tunggu Saja </h5></a>
                    </div>
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Politik </p> <p class="ml-2" style="color:black;"> 2022-12-27 </p>
                    </div>
                 
                    <div class="row mr-5">
                        <img src="{{asset('assets/img/berita/kroasia.jpeg')}}" style="height: 160px; width: 100%;">
                    </div>
                    <div class="row mt-1 mr-3">
                        <a href="konten.php?id_berita=71"><h5 style="font-weight: bold;">Momen Kroasia Cukur Argentina 3-0 di Piala Dunia</h5></a>
                    </div>
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Olahraga </p> <p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                 
                    <div class="row mr-5">
                        <img src="{{asset('assets/img/berita/sambo.jpg')}}" style="height: 160px; width: 100%;">
                    </div>
                    <div class="row mt-1 mr-3">
                        <a href="konten.php?id_berita=62"><h5 style="font-weight: bold;">Richard Eliezer Berikan Pistol HS Milik Brigadir Yosua Ke FS Sebelum Pembunuhan</h5></a>
                    </div>
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Kriminal </p> <p class="ml-2" style="color:black;"> 2022-12-13 </p>
                    </div>
                                </div>
                <div class="row mt-3 mr-3">
                    <h4 class="mb-3" style="font-weight: bold;">Berita Terkini</h4>
                     
                    <div class="row mr-5">
                        <img src="{{asset('assets/img/berita/pemilu.jpeg')}}" style="height: 160px; width: 100%;">
                    </div>
                    <div class="row mt-1 mr-3">
                        <a href="konten.php?id_berita=88"><h5 style="font-weight: bold;">KPU Tetap Pakai Kotak Suara Kardus di Pemilu 2024, tapi Versi Upgrade</h5></a>
                    </div>
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Politik </p> <p class="ml-2" style="color:black;"> 2022-12-28 </p>
                    </div>
                 
                    <div class="row mr-5">
                        <img src="{{asset('assets/img/berita/bajak.jpeg')}}" style="height: 160px; width: 100%;">
                    </div>
                    <div class="row mt-1 mr-3">
                        <a href="konten.php?id_berita=87"><h5 style="font-weight: bold;">Cara Baru Pulihkan Akun Instagram yang Dibajak</h5></a>
                    </div>
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Teknologi </p> <p class="ml-2" style="color:black;"> 2022-12-20 </p>
                    </div>
                 
                    <div class="row mr-5">
                        <img src="{{asset('assets/img/berita/tekno.jpg')}}" style="height: 160px; width: 100%;">
                    </div>
                    <div class="row mt-1 mr-3">
                        <a href="konten.php?id_berita=79"><h5 style="font-weight: bold;">IDC Perkirakan Pengapalan Perangkat Wearable Capai 539 juta Unit Pada 2023</h5></a>
                    </div>
                    <div class="row">
                        <p style="color:black; font-weight:bold;"> Teknologi </p> <p class="ml-2" style="color:black;"> 2022-12-27 </p>
                    </div>
                                </div>
            </div>
        </div>
            </div>     
</div>
@endsection