<footer>
    <div class="row text-center">
        <div class="col-xs-12 footer-inner">
            <ul class="list-unstyled inline-list">
                <li><a href="{{route('front.index')}}">News &amp; Events</a></li>
                <li><a href="{{route('front.notice')}}">Notice</a></li>
                <li><a href="{{route('front.photogallery')}}">Photo Gallery</a></li>
                <li><a href="video.html">Video Gallery</a></li>
                <li><a href="{{route('front.contact')}}">Contact</a></li>
                <li><a href="{{route('front.donate')}}">Donate</a></li>
            </ul>
        </div>
        <div class="col-xs-12 footer-inner">
            <ul class="social-list inline-list">
                <li>
                    <a href="{{$site->facebook}}" title="" target="_blank"> <i class="ion-social-facebook"></i> FACEBOOK </a>
                </li>
                <li>
                    <a href="" title=""> <i class="ion-social-twitter" target="_blank"></i> TWITTER </a>
                </li>
                <li>
                    <a href="#" title=""> <i class="ion-social-googleplus" target="_blank"> </i> GOOGLE+ </a>
                </li>

                <li>
                    <a href="{{$site->insta}}" title="" target="_blank"> <i class="ion-social-instagram-outline"></i> INSTAGRAM</a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 footer-inner">
            <span> ©2019 Upakar Foundation Nepal  All rights reserved, Designed &amp; Developed by <a title="IT Advisors Nepal" href="#">IT Advisors Nepal</a> </span>
        </div>
    </div>
</footer>