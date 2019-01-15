<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')
<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorGreen"> Notice</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <ul class="list-unstyled notice-inner-list col-xs-12">
                    <li class="row">
                        <div class="date-inner col-md-3 col-sm-3">
                            <div class="day">19</div>
                            <div class="year">
                                <span class="month">April</span>
                                <span class="yr">1990</span>
                            </div>
                        </div>
                        <div class="content-wrap col-md-6 col-sm-9">
                            <p class="h3">
                                <a href="#" title=""> <strong>Meet the Community/Pro Bono Winner From Women in Media</strong> </a> </p>
                        </div>
                        <div class="link-wrap col-md-3 col-sm-12">
                            <a href="#" class="btn btn-trans btn-big mgtop15">MORE INFO</a>
                        </div>
                    </li>
                    <li class="row">
                        <div class="date-inner col-md-3 col-sm-3">
                            <div class="day">01</div>
                            <div class="year">
                                <span class="month">July</span>
                                <span class="yr">1995</span>
                            </div>
                        </div>
                        <div class="content-wrap col-md-6 col-sm-9">
                            <p class="h3">
                                <a href="#" title=""> <strong>Women Living In Poverty Celebrated As Entrepreneurs</strong> </a> </p>
                        </div>
                        <div class="link-wrap col-md-3 col-sm-12">
                            <a href="#" class="btn btn-trans btn-big mgtop15">MORE INFO</a>
                        </div>
                    </li>
                    <li class="row">
                        <div class="date-inner col-md-3 col-sm-3">
                            <div class="day">30</div>
                            <div class="year">
                                <span class="month">April</span>
                                <span class="yr">1992</span>
                            </div>
                        </div>
                        <div class="content-wrap col-md-6 col-sm-9">
                            <p class="h3">
                                <a href="#" title=""> <strong>A powerfull life-changing experience Nulla porttitor accumsan tincidunt nulla..</strong> </a> </p>
                        </div>
                        <div class="link-wrap col-md-3 col-sm-12">
                            <a href="#" class="btn btn-trans btn-big mgtop15">MORE INFO</a>
                        </div>
                    </li>
                </ul>
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