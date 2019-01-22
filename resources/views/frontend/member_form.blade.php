@extends('frontend.includes.frontend_design')

@section('content')
    <section class="bgGrey sect-pad-top sect-pad-bottom text-wrap">


        <div class="row">
            <!-- Offset means: Move columns to the right using the .col-md-offset-* classes. These classes increase the left margin of a column by * column -->
            <div class="col-md-10 col-md-offset-1">
                @if(Session::has('flash_message_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{!! session('flash_message_success') !!}</strong>
                    </div>
                @endif
                <form method="post" action="{{route('front.store')}}" id="add_member">
                    @csrf
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name" class="colorBlue">Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address" class="colorBlue">Address:</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Mailing Address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone" class="colorBlue">Phone Number:</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="blood" class="colorBlue">Blood Group:</label>
                            <input type="text" name="blood" id="blood" class="form-control" placeholder="Blood Group">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="profession" class="colorBlue">Profession:</label>
                            <input type="text" name="profession" id="profession" class="form-control" placeholder="Profession">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="dob" class="colorBlue">Date Of Birth:</label>
                            <input type="text" name="dob" id="dob" class="form-control" placeholder="Date Of Birth">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email" class="colorBlue">Email:</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <input type="submit" value="Register" class="btn btn-danger btn-big pull-right">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')


    <script src="{{asset('public/js/jquery.validate.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            $("#add_member").validate({
                rules: {
                    name: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    blood: {
                        required: true
                    },
                    profession: {
                        required: true
                    },
                    dob: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                },

                messages : {
                    name: {
                        required: "<span class='text-danger'> Please Enter Your Name </span>"
                    },
                    address: {
                        required : "<span class='text-danger'> Please Enter Address </span>"
                    },
                    phone: {
                        required : "<span class='text-danger'> Please Enter Phone Number </span>"
                    },
                    blood : {
                        required : "<span class='text-danger'> Please Enter Blood Group </span>"
                    },
                    profession : {
                        required : "<span class='text-danger'> Please Enter Profession </span>"
                    },
                    dob : {
                        required : "<span class='text-danger'> Please Enter Valid Date OF Birth </span>"
                    },
                    email : {
                        required : "<span class='text-danger'> Please Enter Your Email </span>"
                    },
                }
            });
        });

    </script>

    @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}')
    @endif

    @endsection
