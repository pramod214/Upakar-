@extends('frontend.includes.frontend_design')

@section('content')
<section class="bgGrey sect-header text-wrap">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="colorBlue"> Projects</h1>

        </div>
    </div>
</section>
<section class="bgWhite sect-pad-top sect-pad-bottom text-wrap">
    <div class="row">

            <div class="row">
                @foreach($project as $pro)
                <div class="col-sm-4 mgtop20">
                    <img src="{{asset('public/adminpanel/uploads/project/'.$pro->image)}}" alt="#" class="img-responsive">
                    <div class="news-caption">
                        <span class="date">{{$pro->date}}</span>
                        <a href="#"><h4>{{$pro->title}}</h4></a>
                        <p>{{$pro->description}}</p>
                        {{--<a href="#" title="" class="link">More Info...</a>--}}
                    </div>

                </div>
                @endforeach


        </div>

        <div class="col-xs-12 text-center">
            <ul class="pagination">
               {{$project->links()}}

            </ul>
        </div>
    </div>
</section>


@endsection