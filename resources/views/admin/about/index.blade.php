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

                            <li class="breadcrumb-item active" aria-current="page">About</li>
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
                                <h4 class="card-title">About</h4>
                                @if(Session::has('flash_message_info'))
                                    <div class="alert alert-info" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="text-danger">x</span></button>
                                        <strong class="text-info">{!! session('flash_message_info') !!}</strong>
                                    </div>
                                @endif

                                <form class="m-t-30" action="{{route('admin.about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  value="{{$about->name}}" >

                                    </div>



                                    <div class="form-group">
                                        <label for="body">Content</label>
                                        <div class="col-md-12">
                                                  <textarea rows="10" colunm="20 " class="form-control form-control-line summernote" id="body" name="details">
                                                    {!! htmlspecialchars_decode($about->details) !!}
                                                  </textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label >Image</label>
                                        <input type="file" class="form-control"  name="image">
                                        <img src="{{asset('public/adminpanel/uploads/about/'.$about->image)}}" alt="" height="200px" class="img-responsive">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update Info</button>
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

    <script>
        @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}')
        @endif
    </script>
@endsection