<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

@include('layouts.master')

<div class="container" style="padding:75px 0 75px 0;">
    <div class="row">

        <div class="col-sm-6">
            <div class="card">
                <img src="https://courses.serversforhackers.com/img/courses/shipping-docker.png">
                <div class="card-body">
                    <h5 class="card-title">Scaling Laravel </h5>
                    <p class="card-text">Server optimization, horizontal scaling, and Laravel!</p>
                    <a href="{{route('scaling')}}" class="btn btn-primary">GO TO COURSE</a>
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

@include('layouts.footer')