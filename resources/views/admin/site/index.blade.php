@extends('admin.adminLayout.admin_design')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Site </h4>
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

                            <li class="breadcrumb-item active" aria-current="page">Site </li>
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
                        <h4 class="card-title">Site</h4>


                        <form class="m-t-30" action="{{route('admin.site.update',$sites ->id)}}" method="post" >
                            @csrf



                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="type" class="form-control" id="facebook" name="facebook" value="{{$sites->facebook}}" >
                            </div>

                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="type" class="form-control" id="twitter" name="twitter" value="{{$sites->twitter}}">
                            </div>

                            <div class="form-group">
                                <label for="google">Google</label>
                                <input type="type" class="form-control" id="google" name="google" value="{{$sites->google}}">
                            </div>

                            <div class="form-group">
                                <label for="insta">Instagram</label>
                                <input type="type" class="form-control" id="insta" name="insta" value="{{$sites->insta}}">
                            </div>


                            <button type="submit" class="btn btn-primary">Update Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        </form>
    </div>
@endsection