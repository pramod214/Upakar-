<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')
<section class="banner-wrap">
    <div class="slider fade ita-slider">
        @foreach($slider as $s)
            <div>
                <img src="{{asset('public/adminpanel/uploads/slider/'.$s->image)}}" class="img-responsive" />
                <div class="overlay"></div>
                <div class="ita-caption hidden-xs hidden-sm">
                    <h1> <span class="colorRed logo-title">{{$s->name}}</span> </h1>
                    <p>{!! htmlspecialchars_decode($s->body) !!}</p>

                </div>
            </div>
            @endforeach

    </div>

<section class="bgGrey sect-pad-top sect-pad-bottom text-center welcome-wrap">
    <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <h2 class="colorGreen welcome-title">Hello & Welcome</h2>
            <p>Every mountain top is within reach if you just keep climbing. We affirm the power of individuals and communities to take ownership of their future. We meet them right where they are, helping them create solutions they can maintain – and build on. Lorem ipsum dolor sit amet, consectetur cing elit. Suspe ndisse suscipit sagittis leo sit met condimentum estibulum issim posuere cubilia Curae Suspendisse at consectetur massa. Curabitur non ipsum nisinec dapibus elit. Donec nec magna id lacus consequat posuere. Aenean ut diam vitae ante interdum interdum ut sit amet metus. Ut tortor nibh, gravida vitae pellentesque id, bibendum in enim. Proin ultricies elit a purus dapibus quis mollis mauris congue. Proin sit amet magna</p>
            <a href="#" title="" class="link">Continue Reading...</a>
        </div>
    </div>
</section>

<section class="bgGrey sect-pad-top sect-pad-bottom">
    <div class="row">
        <h2 class="colorBlue text-center welcome-title">Latest News</h2>
        <div class="news-wrap">
            <div class="col-sm-4 mgtop20">
                <img src="{{asset('public/front/img/p3.jpg')}}" alt="#" class="img-responsive">
                <div class="news-caption">
                    <span class="date">14-10-2016</span>
                    <h4>Nulla porttitor accumsan tincidunt nulla porttitor accumsan</h4>
                    <p>Aenean ut diam vitae ante interdum interdum ut sit amet metus...</p>
                    <a href="#" title="" class="link">More Info...</a>
                </div>
            </div>
            <div class="col-sm-4 mgtop20">
                <img src="{{asset('public/front/img/p4.jpg')}}" alt="#" class="img-responsive">
                <div class="news-caption">
                    <span class="date">14-10-2016</span>
                    <h4>Nulla porttitor accumsan tincidunt nulla porttitor accumsan</h4>
                    <p>Aenean ut diam vitae ante interdum interdum ut sit amet metus...</p>
                    <a href="#" title="" class="link">More Info...</a>
                </div>
            </div>
            <div class="col-sm-4 mgtop20">
                <img src="{{asset('public/front/img/p5.jpg')}}" alt="#" class="img-responsive">
                <div class="news-caption">
                    <span class="date">14-10-2016</span>
                    <h4>Nulla porttitor accumsan tincidunt nulla porttitor accumsan</h4>
                    <p>Aenean ut diam vitae ante interdum interdum ut sit amet metus...</p>
                    <a href="#" title="" class="link">More Info...</a>
                </div>
            </div>
        </div>
    </div>
</section>


@include('frontend.includes.footer')
@include('frontend.includes.script')
<script type="text/javascript" src="{{asset('public/front/js/slick.min.js')}}"></script>
<script type="text/javascript">
    $('.fade').slick({
        dots: false,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: true,
        cssEase: 'linear'
    });
    $('.responsive').slick({
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
</script>

</body>
</html>