@extends('layouts.master')

@section('content')
<style>

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

    <div style="text-align:center;padding:50px 0">
        <h2><b>Available</b> <span>Courses</span></h2>
        <hr style="width:10%;border:solid 2px orange">
    </div>

    <div class="container"  style="margin-bottom:75px;">
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

    <div style="background:blue;height:100%;width:100%;margin-bottom:75px;"></div>

    <div class="container" style="margin-bottom:75px">
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

    <div style="background:#1e3a56;width:100%;height:auto;padding-top:5%;padding-bottom:5%">
        
        <div class="container" style="border-radius:25px;height:980px;background:white;padding:0;">
            <h1 class="text-center"><b>Arkademy telah dipercaya oleh SMK untuk meningkatkan kompetensi guru dan siswanya</b></h1>
            <div style="border-radius:25px;width:100%;background:#1e3a56;height:100px;border:2px solid white;box-shadow: 0 0 10px 0 white">
            
            </div>

        </div>

    </div>

    <div class="container">

        <h1><b>Anda Seorang Guru</b></h1>
        <span>Bagaimana Arkademy bisa membantu Anda ?</span>

        <div class="row">

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <img src="https://www.arkademy.com/asset/v3/img/icon-sertifikasi.svg" alt="" class="img-fluid mb-3">
                    <div style="background:red;width:100%;height:200px;"></div>
                    
                </div>
            </div>

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <img src="https://www.arkademy.com/asset/v3/img/icon-search.svg" alt="" class="img-fluid mb-3">
                    <div style="background:red;width:100%;height:200px;"></div>

                </div>
            </div>

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <img src="https://www.arkademy.com/asset/v3/img/icon-books.svg" alt="" class="img-fluid mb-3">
                    <div style="background:red;width:100%;height:200px;"></div>

                </div>
            </div>
            
            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <img src="https://www.arkademy.com/asset/v3/img/icon-hiring.svg" alt="" class="img-fluid mb-3">
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

        </div>

        <center>
        <button type="button" class="btn btn-primary">Primary</button>
        <center>

    </div>

    <div style="background:#1E3A56;margin-top:5%;width:100%;height:50%;padding:2%">
        <div class="container" style="background:white;height:100%;border-radius:20px"></div>
    </div>

    <div style="width:100%;height:auto;background:silver">
        <div class="container" style="padding-top:5%;padding-bottom:5%;height:auto">
            <div style="background:black;width:100%;height:80%;"></div>
        </div>
    </div>
</body>

    @component('layouts.footer')
    @endcomponent
@endsection