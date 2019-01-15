<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')
<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorGreen"> Projects</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
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
        <div class="col-xs-12 text-center">
            <ul class="pagination">
                <li class="disabled"><a href="#">«</a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
            </ul>
        </div>
    </div>
</section>

@include('frontend.includes.footer')
@include('frontend.includes.script')
</body>
</html>