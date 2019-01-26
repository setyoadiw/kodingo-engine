@extends('layouts.nav')
@section('course')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<style>
.link-vid{
    position:relative;
    width:100%;
    height:60px;
    background:#fff;
    border-bottom:solid 1px #e3e3e3;
    color:#6677eb;
}
.link-vid:hover{
    color:#6677eb;
}
.link-vid span{
    position:relative;
    top:25%;
    bottom:25%;
    left:10%;
}
.title-vid{
    width:100%;
    height:60px;
    background:#fff;
    border-bottom:solid 1px #e3e3e3;
    color:#919095;
}
.title-vid span{
    position:relative;
    top:30%;
    bottom:30%;
    left:35%;
}
.scroll-div{
    width:100%;
    height:100%;
    padding:0;
    overflow-y:scroll;
}
</style>

<div style="width:100%;height:auto">
    <div class="row" style="width:100%;;margin:0;">
        <div class="col-md-3 scroll-div">
            <div style="width:100%;height:100%">
                <div class="title-vid">
                    <span><b>SUB JUDUL 1</b></span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 1</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 2</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 3</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 4</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 5</span>
                </div>
                <div class="title-vid">
                    <span><b>SUB JUDUL 2</b></span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 1</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 2</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 3</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 4</span>
                </div>
                <div class="link-vid" href="">
                    <span>Judul 5</span>
                </div>
            </div>
        </div>
        <div class="col-md-9" style="width:100px;height:100%;padding:0;position:relative">
            <nav class="navbar navbar-light bg-light" style="width:100%;border-bottom:solid 1px #e3e3e3">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <h2>Judul 1</h2>
                    </a>
                    <span><h6>Episode 1</h6></span>
                </div>
                <span>Sub Judul</span>
            </nav>
            <div class="container" style="padding-top:5%;width:90%;position:relative;height:100%">
                <div style="border:solid 1px #e5e5e5;padding:10px;">
                    <div class="text-right">
                        <span>Judul 2</span>
                    </div>
                </div>

                <div style="width:100%;height:100%;position:relative;padding-top:5%">
                    <iframe width="100%" height="480px" src="https://www.youtube.com/embed/Oryq_TdAyNI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                    <div style="padding-top:5%"></div>
                </div>
                        
            </div>
        </div>
    </div>
</div>
@endsection