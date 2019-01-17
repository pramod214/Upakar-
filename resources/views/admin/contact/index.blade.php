@extends('admin.adminLayout.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Contact</h4>
                <div class="d-flex align-items-center">

                </div>
            </div>


            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-success">x</span></button>
                <strong class="text-success">{!! session('flash_message_success') !!}</strong>
            </div>
        @endif


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact</h4>


                        <form class="m-t-30" action="{{route('admin.contact.update',$contact->id)}}" method="post" id="add_contact">
                            @csrf



                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="type" class="form-control" id="name" name="name" value="{{$contact->name}}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="type" class="form-control" id="address" name="address" value="{{$contact->address}}">
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">About</label>
                                <div class="col-md-12">
                                    <textarea rows="10" cols="20" class="form-control form-control-line summernote" name="body">
                                        {{$contact->body}}
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="type" class="form-control" id="email" name="email" value="{{$contact->email}}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="type" class="form-control" id="phone" name="phone" value="{{$contact->phone}}">
                            </div>


                            <button type="submit" class="btn btn-primary">Update Contact Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('public/adminpanel/assets/libs/summernote/dist/summernote-bs4.css')}}">
@endsection

@section('script')
    <script src="{{asset('public/js/jquery.validate.js')}}"></script>
    <script src="{{asset('public/adminpanel/assets/libs/summernote/dist/summernote-bs4.min.js')}}"></script>
    <script>
        /************************************/
        //default editor
        /************************************/
        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });

        /************************************/
        //inline-editor
        /************************************/
        $('.inline-editor').summernote({
            airMode: true
        });

        /************************************/
        //edit and save mode
        /************************************/
        window.edit = function() {
            $(".click2edit").summernote()
        },
            window.save = function() {
                $(".click2edit").summernote('destroy');
            }

        var edit = function() {
            $('.click2edit').summernote({ focus: true });
        };

        var save = function() {
            var markup = $('.click2edit').summernote('code');
            $('.click2edit').summernote('destroy');
        };

        /************************************/
        //airmode editor
        /************************************/
        $('.airmode-summer').summernote({
            airMode: true
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#add_contact").validate({
                rules: {
                    name: {
                        required: true
                    },
                    body: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                },
                messages : {
                    name: {
                        required: "<span class='text-danger'> Please Enter Name </span>"
                    },
                    body: {
                        required: "<span class='text-danger'> Please Insert Content </span>"
                    },
                    address: {
                        required: "<span class='text-danger'>Please Insert Address</span>"
                    },
                    email: {
                        required: "<span class='text-danger'>Please Insert Email</span>"
                    },
                    phone: {
                        required: "<span class='text-danger'>Please Insert Phone</span>"
                    },
                }


            });
            
        });
    </script>

    <script>
        @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}')
        @endif

    </script>
    @endsection