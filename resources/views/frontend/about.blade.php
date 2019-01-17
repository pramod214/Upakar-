<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')
<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorGreen"> About {{$about->name}}</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-xs-12 text-justify">
            <p>{!! htmlspecialchars_decode($about->details) !!}</p>
            <div class="about-img col-md-5">
                <img src="{{asset('public/adminpanel/uploads/about/'.$about->image)}}" alt="" class="img-responsive">
            </div>
            <p></p>
            <h3></h3>
            <p></p>
        </div>

    </div>
</section>

@include('frontend.includes.footer')
@include('frontend.includes.script')
</body>
</html>