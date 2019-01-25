@extends('layouts.master')

@section('content')
<style>

</style>

<body>
    <div style="background:green;height:80%;width:100%"></div>
    
    <div style="text-align:center;padding:50px 0">
        <h2><b>Available</b> <span>Courses</span></h2>
        <hr style="width:10%;border:solid 2px orange">
    </div>

    <div class="container"  style="margin-bottom:75px;">
        <div class="row">

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="{{route('course')}}" class="btn btn-primary">GO TO COURSE</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

        </div>
    </div>

    <div style="background:green;width:100%;height:auto;padding-top:5%;padding-bottom:5%">
        
        <div class="container" style="border-radius:25px;height:980px;background:yellow;padding:0;">
        
            <div style="border-radius:25px;width:100%;background:black;height:100px;border:2px solid white;box-shadow: 0 0 10px 0 white">
            
            </div>

        </div>

    </div>

    <div class="container">

        <h1><b>Anda Seorang Guru</b></h1>
        <span>Bagaimana Arkademy bisa membantu Anda ?</span>

        <div class="row">

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
                    <div style="background:red;width:100%;height:200px;"></div>
                </div>
            </div>

            <div class="col-sm-5" style="margin:4%">
                <div class="card">
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