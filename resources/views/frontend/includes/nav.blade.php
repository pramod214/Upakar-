<nav class="navbar navbar-default navbar-static-top ita-nav">
    <div class="">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('public/front/img/logo1.jpg')}}" alt="#">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('front.index')}}"><i class="ion-ios-home"></i></a></li>
                <li class="dropdown">
                    <a href="{{route('front.about')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="ion-ios-arrow-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('front.about')}}">Introduction</a></li>

                    </ul>
                </li>
                <li><a href="{{route('front.projects')}}">Projects</a></li>
                <li><a href="{{route('front.news&events')}}">News & Events</a></li>
                <li><a href="{{route('front.notice')}}">Notice</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="ion-ios-arrow-down"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('front.photogallery')}}">Photo Gallery</a></li>
                        <li><a href="video.html">Video Gallery</a></li>
                    </ul>
                </li>
                <li><a href="{{route('front.contact')}}">Contact</a></li>
                <li class="nav-btn"><a href="{{route('front.donate')}}">DONATE NOW</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>