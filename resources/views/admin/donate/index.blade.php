@extends('admin.adminLayout.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Donate</h4>
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

                            <li class="breadcrumb-item active" aria-current="page">Donate</li>
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


                        <form class="m-t-30" action="{{route('admin.donate.update',$donate->id)}}" method="post" id="add_donate">
                            @csrf

                            <div class="form-group">
                                <label for="name">Organization's Name</label>
                                <input type="type" class="form-control" id="name" name="name" value="{{$donate->name}}">
                            </div>

                            <div class="form-group">
                                <label for="bank_name">Bank Name</label>
                                <input type="type" class="form-control" id="bank_name" name="bank_name" value="{{$donate->bank_name}}">
                            </div>

                            <div class="form-group">
                                <label for="bank_account">Bank_Account</label>
                                <input type="type" class="form-control" id="bank_account" name="bank_account" value="{{$donate->bank_account}}">
                            </div>

                            <div class="form-group">
                                <label class="col-md-12">Details</label>
                                <div class="col-md-12">
                                    <textarea rows="10" cols="20" class="form-control form-control-line summernote" name="body">
                                    {!! htmlspecialchars_decode($donate->body) !!}
                                    </textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Donate Info</button>
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
            $("#add_donate").validate({
                rules: {
                    name: {
                        required: true
                    },
                    bank_name: {
                        required: true
                    },
                    bank_account: {
                        required: true
                    },
                    body: {
                        required: true
                    },
                },
                messages : {
                    name: {
                        required: "<span class=text-danger>Please Enter Organization's Name</span>"
                    },
                    bank_name: {
                        required: "<span class='text-danger'> Please Enter Bank Name </span>"
                    },
                    bank_account: {
                        required: "<span class='text-danger'>Please Insert Bank Account</span>"
                    },
                    body: {
                        required: "<span class='text-danger'> Please Insert Details </span>"
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