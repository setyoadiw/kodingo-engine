@extends('layouts.nav')
@section('course')
<style>
.side{
    height:100%;
}
#leftCol {
    position: relative;
    width: 100%;
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
<div class="row">
    <div class="col-sm-2 row-sm" style="border:solid 2px black;padding-right:0;">
        <nav id="leftCol">
        <a class="nav-link active" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Active</a>
        <a class="nav-link" href="#">Link</a>
        <a class="nav-link" href="#">Link</a>
        </nav>
    </div>

    <div class="col-sm row-sm" style="border:solid 2px black;padding:0">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand">Video 1</span>
            <span>LARAVEL PERFROMANCE</span>
            <span>Episode 1</span>
        </nav>
        
        <div class="container">
            <div style="padding:10px 0 10px 0;margin:20px 0 20px 0;border:solid 1px black" class="d-flex justify-content-end">
                <a>video 2</a>
            </div>
            <div style="background:black;width:100%;height:100px"></div>
        </div>
    </div>
</div>

@endsection