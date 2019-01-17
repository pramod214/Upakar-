<!DOCTYPE html>
<html lang="en">
@include('frontend.includes.head')
<body class="container">
@include('frontend.includes.nav')
<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorBlue"> Contact {{$contact->name}}</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h4 class="sub-title">{!! htmlspecialchars_decode($contact->body) !!}</h4>
        </div>
        <div class="col-sm-4 mgtop20">
            <h4 class="colorBlue">Our Location</h4>
            <p class="address-list marker">
               {{$contact->address}}
            </p>
        </div>
        <div class="col-sm-4 mgtop20">
            <h4 class="colorBlue">Email</h4>
            <p class="address-list email">
                <a href="mailto:info@creativeaction.com" title="{{$contact->email}}">{{$contact->email}}</a>
            </p>
        </div>
        <div class="col-sm-4 mgtop20">
            <h4 class="colorBlue">Phone</h4>
            <p class="address-list phone">
                {{$contact->phone}}
            </p>
        </div>
    </div>
</section>
<section class="bgGrey sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="row contact-form">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name_contact" placeholder="Full Name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" name="email_contact" class="form-control" placeholder="Enter Email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" name="phone_contact" class="form-control" placeholder="Phone number">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea rows="8" name="message_contact" class="form-control" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="#" class="btn btn-danger btn-big pull-right">SUBMIT</a>
                </div>
            </form>
        </div>
    </div>
</section>

@include('frontend.includes.footer')
@include('frontend.includes.script')


</body>
</html>