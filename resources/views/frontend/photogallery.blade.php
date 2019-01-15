<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')

<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorGreen"> Photo Gallery</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <figure class="album-wrap">
                        <img src="{{asset('public/front/img/p1.jpg')}}" alt="img18" class="img-responsive" />
                        <figcaption>
                            <h2>Home is Future</h2>
                            <a href="photo.html">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <figure class="album-wrap">
                        <img src="{{asset('public/front/img/p2.jpg')}}" alt="img18" class="img-responsive" />
                        <figcaption>
                            <h2>Hunger Strike</h2>
                            <a href="photo.html">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <figure class="album-wrap">
                        <img src="{{asset('public/front/img/p3.jpg')}}" alt="img18" class="img-responsive" />
                        <figcaption>
                            <h2>Brother in Nepal</h2>
                            <a href="photo.html">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <figure class="album-wrap">
                        <img src="{{asset('public/front/img/p4.jpg')}}" alt="img18" class="img-responsive" />
                        <figcaption>
                            <h2>Life in Nutshell</h2>
                            <a href="photo.html">View more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <figure class="album-wrap">
                        <img src="{{asset('public/front/img/p5.jpg')}}" alt="img18" class="img-responsive" />
                        <figcaption>
                            <h2>Lorem Ipsum</h2>
                            <a href="photo.html">View more</a>
                        </figcaption>
                    </figure>
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