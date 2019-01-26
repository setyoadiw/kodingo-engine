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
}
</style>
<div class="row" style="height:100%">
    <div class="col-sm-2 row-sm side" style="border:solid 2px black;padding-right:0;">
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

    <div class="col-sm" style="border:solid 2px black;padding:0">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand">Video 1</span>
            <span>LARAVEL PERFROMANCE</span>
            <span>Episode 1</span>
        </nav>
        
        <div class="container">
            <div style="padding:10px 0 10px 0;margin:20px 0 20px 0;border:solid 1px black" class="d-flex justify-content-end">
                <a>video 2</a>
            </div>
            <iframe style="width:100%;height:75%">
            </iframe>
        </div>
    </div>
</div>

@endsection