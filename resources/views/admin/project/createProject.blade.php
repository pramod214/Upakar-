@extends('admin.adminLayout.admin_design')

@section('content')

    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">

            </div>



            <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('admin.dashboard')}}">Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Project</h4>
                                @if(Session::has('flash_message_info'))
                                    <div class="alert alert-info" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-danger">x</span></button>
                                        <strong class="text-info">{!! session('flash_message_info') !!}</strong>
                                    </div>
                                @endif

                                <form class="m-t-30" action="{{route('storeProject')}}" method="post" enctype="multipart/form-data" id="add_project">
                                    @csrf
                                    <div class="form-group">
                                        <label for="date">Date</label>
                                        <input type="text" class="form-control" id="date" name="date"   >
                                    </div>

                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"   >
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                                  <textarea rows="10" cols="20" class="form-control form-control-line summernote" name="description">

                                                  </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label >Image</label>
                                        <input type="file" class="form-control"  name="image">
                                        <img src="" alt="" height="200px">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Insert Project</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>

    </div>
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
            $("#add_project").validate({
                rules: {
                    date: {
                        required: true
                    },
                    title: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                    image: {
                        required: true
                    },
                },
                messages : {
                    date: {
                        required: "<span class='text-danger'> Please Enter Date </span>"
                    },
                    title: {
                        required: "<span class='text-danger'> Please Enter Title </span>"
                    },
                    description: {
                        required: "<span class='text-danger'>Please Enter Description</span>"
                    },
                    image: {
                        required: "<span class='text-danger'>Please Insert Image</span>"
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
