@extends('frontend.includes.frontend_design')

@section('content')
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

    @if(Session::has('flashmessage'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ Session::get('flashmessage')}}</strong>
        </div>
    @endif

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="row contact-form" action="{{route('sendmail.mail')}}" method="post" role="form">

                @csrf
                <input type="hidden" name="sendemail" value="pramod.neupane21@gmail.com">
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
                        <textarea rows="8" name="message" class="form-control" placeholder="Your message"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" name="submit" class="btn btn-danger btn-big pull-right" value="SUBMIT">
                </div>
            </form>
        </div>
    </div>
</section>


@endsection