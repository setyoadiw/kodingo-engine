@extends('layouts.nav')
@section('course')
<style>
.side{
    height:100%; 
}
#leftCol {
    position: absolute;
    width: 95%;
    height:100%;
    background-color: #DDD; 
    font-size: 21px;
    overflow-y: scroll;
    top: 0;
    bottom: 0;
}
.nav-link{
    border-bottom:solid 1px #c3c4c4;
    color:black;
    font-size:14px;
}
.nav-link:hover{
    color:black;
}
</style>
<div class="row" style="height:100%">
    <div class="col-sm-2 row-sm side" style="padding-right:0;">
        <nav id="leftCol">
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        </nav>
    </div>

    <div class="col-sm" style="padding:0">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand">Video 1</span>
            <span>LARAVEL PERFROMANCE</span>
            <span>Episode 1</span>
        </nav>
        
        <div class="container">
            <div style="padding:10px 0;margin:20px 0;border:solid 1px black" class="d-flex justify-content-end">
                <a>video 2</a>
            </div>
            <video id="video_html5_api" class="vjs-tech" src="https://player.vimeo.com/external/219608985.hd.mp4?s=084e17ed7cd8fc23d69a093f1ef7b95817dc6fe9&amp;profile_id=119"><source src="https://player.vimeo.com/external/219608985.hd.mp4?s=084e17ed7cd8fc23d69a093f1ef7b95817dc6fe9&amp;profile_id=119" type="video/mp4" data-quality="HD" label="HD"> <source src="https://player.vimeo.com/external/219608985.sd.mp4?s=2ed2db180ec053b1e10e778a4262e90c2324b9e0&amp;profile_id=165" type="video/mp4" data-quality="SD" label="SD"></video>
        </div>
    </div>
</div>

@endsection