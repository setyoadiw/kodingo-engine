@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<style>
body{
    background:url('https://www.arkademy.com//asset/v4/img/bg-guru.png')  no-repeat fixed center;
    background-size:cover;
}
</style>

<body>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.arkademy.com/asset/img/header1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.arkademy.com/asset/img/header2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.arkademy.com/asset/v4/img/car_Bootcampweb.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div style="background:white">
        <div style="text-align:center;padding:50px 0">
            <h2><b>Available</b> <span>Courses</span></h2>
            <hr style="width:10%;border:solid 2px orange">
        </div>

        <div class="container"  style="padding-bottom:75px;">
            <div class="row">

                <div class="col-sm-6">
                    <div class="card">
                        <img src="https://courses.serversforhackers.com/img/courses/shipping-docker.png">
                        <div class="card-body">
                            <h5 class="card-title">Scaling Laravel </h5>
                            <p class="card-text">Server optimization, horizontal scaling, and Laravel!</p>
                            <a href="{{route('course')}}" class="btn btn-primary">GO TO COURSE</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <img src="https://courses.serversforhackers.com/img/courses/scaling-laravel.png">
                        <div class="card-body">
                            <h5 class="card-title">Shipping Docker </h5>
                            <p class="card-text">A deep dive on Docker, from development, to CI, to production.</p>
                            <a href="{{route('course')}}" class="btn btn-primary">GO TO COURSE</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div style="background:#1e3a56;color:white;height:auto;width:100%;padding:10%">
        <div class="container">
            <div class="row" style="padding-bottom:10%">
                <div class="col col-md-6">
                    <h2><b>CV</b> Online</h2>
                    <hr style="width:10%;border:solid 2px orange; float:left">
                    <p style="float:right">Arkademy memudahkan kamu untuk membuat CV
                    agar terlihat profesional dengan skill yang terupdate
                    secara real-time sesuai dengan kemampuan
                    pemrograman yang kamu miliki. </p>
                </div>
                <div class="col col-md-6">
                    <img style="width:95%" src="https://www.arkademy.com/asset/v3/img/forum.svg">
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6">
                    <img style="width:95%" src="https://www.arkademy.com/asset/v3/img/forum.svg">
                </div>
                <div class="col col-md-6">
                    <h2><b>CV</b> Online</h2>
                    <hr style="width:10%;border:solid 2px orange;" class="float-left">
                    <p style="float:right">Arkademy memudahkan kamu untuk membuat CV
                    agar terlihat profesional dengan skill yang terupdate
                    secara real-time sesuai dengan kemampuan
                    pemrograman yang kamu miliki. </p>
                </div>
            </div>
        </div>
    </div>
    
    <div style="background:white;">
        <div class="container" style="padding-bottom:75px;padding-top:75px">
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <img src="https://www.arkademy.com/asset/v4/img/bootcamp-1.png">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img src="https://www.arkademy.com/asset/v4/img/bootcamp-2.png">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <img src="https://www.arkademy.com/asset/v4/img/bootcamp-3.png">
                    </div>
                </div>

            </div>
            <div style="text-align:center;margin:80px 0 10px 0">
                <h2><b>Beasiswa</b><span> Bootcamp</span></h2>
                <hr style="border:solid 2px orange;width:20%">
                <p> Arkademy menyediakan beasiswa bootcamp belajar bahasa pemrograman gratis bagi siswa Kelas 3 (Tiga) SMA/SMK yang sudah lulus.</p>
                <button type=button class="btn btn-lg" style="color:orange;border-radius:20px;border:solid 2px orange">Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </div>

    <div style="background:#1e3a56;width:100%;height:auto;padding-top:5%;padding-bottom:5%">
        
        <div class="container" style="border-radius:25px;height:auto;background:white;padding:20px;">
            <div style="row mb-5">
                <h1 class="text-center" style="padding-bottom:75px">
                    <b>Arkademy telah dipercaya oleh SMK untuk meningkatkan kompetensi guru dan siswanya</b>
                </h1>
            </div>

            <div class="row mb-5 text-center">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-3">
                    <img src="https://www.arkademy.com/asset/v4/img/school-partner/mokletmalang.png" class="img-fluid" style="height: 50px;margin-bottom: 40px;">
                </div>
            </div>

            <div class="row mb-5 text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center"style="border-radius:25px;background:#1e3a56;border:2px solid white;box-shadow: 0 0 10px 0 white; padding:50px;color:white">
                <h1><b>1.000.000</b></h1>
                <h2>Siswa Telah Bergabung</h2>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                        <b>Jaringan Perusahaan Rekanan Arkademy</b>
                    </h2>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-2 offset-lg-1 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-2">
                    <img src="https://www.arkademy.com/asset/v4/img/hiring/true-money.png" style="max-width:100%;height:120px">
                </div>
            </div>

        </div>

    </div>

    <div style="background:rgba(255,255,255,0.4);width:100%;padding-bottom:5%;">
        <div class="container">
            <div class="row mb-5" style="padding-top:75px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-wrapper">
                    <h1><b>Anda Seorang Guru</b></h1>
                    <p>Bagaimana Arkademy bisa membantu Anda ?</p>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-5" style="margin:4%">
                    <div class="card" style="border-radius:20px">
                        <img src="https://www.arkademy.com/asset/v3/img/icon-sertifikasi.svg" style="padding:40px 20px 20px 20px">
                        <center><hr style="width:90%;"><center>
                        <div class="text-center" style="font-size: 1.25rem;font-weight: 300;">
                            <p style="margin-bottom=1rem">Temukan berbagai course untuk mendapatkan kesempatan sertifikasi</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5" style="margin:4%">
                    <div class="card" style="border-radius:20px">
                        <img src="https://www.arkademy.com/asset/v3/img/icon-search.svg" style="padding:40px 20px 20px 20px">
                        <center><hr style="width:90%;"><center>
                        <div class="text-center" style="font-size: 1.25rem;font-weight: 300;">
                            <p style="margin-bottom=1rem">Dashboard Skill Siswa untuk memantau perkembangan Siswa secara online</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5" style="margin:4%">
                    <div class="card" style="border-radius:20px">
                        <img src="https://www.arkademy.com/asset/v3/img/icon-books.svg" style="padding:40px 20px 20px 20px">
                        <center><hr style="width:90%;"><center>
                        <div class="text-center" style="font-size: 1.25rem;font-weight: 300;">
                            <p style="margin-bottom=1rem">Bank Soal yang berisi Bahan Soal Rekrutmen Perusahaan untuk Tugas Siswa</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5" style="margin:4%">
                    <div class="card" style="border-radius:20px">
                        <img src="https://www.arkademy.com/asset/v3/img/icon-hiring.svg" style="padding:40px 20px 20px 20px">
                        <center><hr style="width:90%;"><center>
                        <div class="text-center" style="font-size: 1.25rem;font-weight: 300;">
                            <p style="margin-bottom=1rem">Daftar Perusahaan Rekanan Arkademy untuk pengajuan Prakerin/Magang</p>
                        </div>
                    </div>
                </div>

            </div>

            <center>
            <button type="button" class="btn btn-primary">Pelajari Lebih Lanjut</button>
            <center>

        </div>
    </div>

    <div style="background:#1E3A56;width:100%;height:50%;padding:2%">
        <div class="container" style="background:white;height:100%;border-radius:20px">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row d-block w-100">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                                <div class="row mt-5">
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                        <div style="background:black;width:150px;height:150px;border-radius:50%;"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 mt-3 text-center">
                                        <p>
                                            <q>Ini Quotes</q>
                                        </p>
                                        <p>
                                        Nama orang
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-block w-100">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                                <div class="row mt-5">
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                        <div style="background:blue;width:150px;height:150px;border-radius:50%;"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 mt-3 text-center">
                                        <p>
                                            <q>Ini Quotes</q>
                                        </p>
                                        <p>
                                        Nama orang
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row d-block w-100">
                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mx-auto">
                                <div class="row mt-5">
                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mx-auto">
                                        <div style="background:red;width:150px;height:150px;border-radius:50%;"></div>
                                    </div>
                                    <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 mt-3 text-center">
                                        <p>
                                            <q>Ini Quotes</q>
                                        </p>
                                        <p>
                                        Nama orang
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div style="width:100%;height:auto;background:white">
        <div class="container" style="padding-top:5%;padding-bottom:5%;height:auto">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>
                    <b>Arkademy telah diliput oleh berbagai media online:</b>
                    </h2>
                </div>
            </div>

            <div class="row  text-center mt-5">
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                    <img src="https://www.arkademy.com/asset/v4/img/as-seen-on/logo-goodnews.png" class="img-fluid" style="height: 40px;margin-bottom: 30px;">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                    <img src="https://www.arkademy.com/asset/v4/img/as-seen-on/logo-goodnews.png" class="img-fluid" style="height: 40px;margin-bottom: 30px;">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                    <img src="https://www.arkademy.com/asset/v4/img/as-seen-on/logo-goodnews.png" class="img-fluid" style="height: 40px;margin-bottom: 30px;">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                    <img src="https://www.arkademy.com/asset/v4/img/as-seen-on/logo-goodnews.png" class="img-fluid" style="height: 40px;margin-bottom: 30px;">
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                    <img src="https://www.arkademy.com/asset/v4/img/as-seen-on/logo-goodnews.png" class="img-fluid" style="height: 40px;margin-bottom: 30px;">
                </div>
            </div>

            <div class="sponsored-wrapper mt-5">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <h2>
                                <b>Didukung Oleh :</b>
                            </h2>
                        </div>
                    </div>

                    <div class="row  text-center mt-5">
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                            <img src="https://www.arkademy.com/asset/v4/img/Partners/Indigo-k24Lh.png" class="img-fluid">
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                            <img src="https://www.arkademy.com/asset/v4/img/Partners/impactbyte_horizontal_color-trans.svg" class="img-fluid custom-sponsored">
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                            <img src="https://www.arkademy.com/asset/v4/img/Partners/dw-favicon-final.png" alt="" class="img-fluid custom-sponsored">
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mb-3 mx-auto">
                            <img src="https://www.arkademy.com/asset/v4/img/Partners/logo-code-plain.png" alt="" class="img-fluid custom-sponsored">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

    @component('layouts.footer')
    @endcomponent
@endsection