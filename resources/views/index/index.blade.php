@extends('master')


@section('content')

    <div id="banner">
        <div id="slogan">
            <h3>Trung Thực, Kỷ Luật, Trách Nhiệm, Dũng Khí</h3>
        </div>
        <div id="carousel">
            <img src="{{url('img/1.jpg')}}" alt="hinh 1">
            <img src="{{url('img/2.jpg')}}" alt="hinh 2">
            <img src="{{url('img/3.jpg')}}" alt="hinh 3">
            <img src="{{url('img/4.jpg')}}" alt="hinh 4">
            <img src="{{url('img/5.jpg')}}" alt="hinh 5">
        </div>
    </div>
    <div id="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 news">
                        <h6>Tìm thấy {{count($news)}} tin mới.</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="red underline">Tin mới</h5>
                                @foreach($news as $new)
                                    <a href="post/detail/{{$new->id}}">
                                        <div class="media text-muted">
                                            <img src="{{url('img/awards.jpg')}}" class="mr-3 rounded" alt="32x32">
                                            <div class="media-body text-justify mb-0 small lh-125">
                                                <div class="d-flex justify-content-between align-items-center w-100">
                                                    <strong class="text-gray-dark">{{$new->title}}</strong>
                                                </div>
                                                <span class="d-block">{{$new->content}}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <hr style="padding: 0; margin: 10px 0;">
                                @endforeach
                                <p class="text-right"><a href="{{ url('post') }}">Khác &blacktriangleright;</a></p>
                           </div>
                            <div class="col-md-6">
                                <h5 class="red underline">Sự kiện</h5>
                                @foreach($activities as $ac)
                                    <a href="#">
                                        <div class="media text-muted">
                                            <img src="{{url('img/awards.jpg')}}" class="mr-3 rounded" alt="32x32">
                                            <div class="media-body text-justify mb-0 small lh-125">
                                                <h5 class="mt-0">Media heading</h5>
                                                <strong class="text-gray-dark">{{$ac->title}}</strong>
                                                <span class="d-block">{{$ac->content}}</span>
                                            </div>
                                        </div>
                                    </a>
                                    <hr style="padding:0; margin:10px 0;">
                                @endforeach

                                <p class="text-right"><a href="{{ url('') }}">Khác &blacktriangleright;</a></p>
                            </div>
                        </div>
                    </div>
                    {{--<div class="col-md-8 news">-- HIEN HÀNG NGANG}}
                            {{--<div class="col-md-12">--}}
                                {{--<h5 class="red underline">Tin mới</h5>--}}
                                {{--<h6>Tìm thấy {{count($news)}} tin mới.</h6>--}}
                        {{--<div class="row">--}}
                               {{--@foreach($news as $new)--}}
                                   {{--<div class="col-md-6">--}}
                                       {{--<a href="post/detail/{{$new->id}}">--}}
                                           {{--<div class="media text-muted">--}}
                                               {{--<img src="{{url('img/awards.jpg')}}" class="mr-3 rounded" alt="32x32" >--}}

                                           {{--</div>--}}
                                       {{--</a>--}}
                                       {{--<div class="media-body text-justify mb-0 small lh-125">--}}
                                           {{--<div class="d-flex justify-content-between align-items-center w-100">--}}
                                               {{--<h5 class="mt-0">Media heading</h5>--}}
                                               {{--<strong class="text-gray-dark">{{$new->title}}</strong>--}}
                                           {{--</div>--}}
                                           {{--<span class="d-block">{{$new->content}}</span>--}}
                                           {{--<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>--}}
                                       {{--</div>--}}
                                   {{--</div>--}}

                                    {{--<hr style="padding: 0; margin: 10px 0;">--}}
                              {{--@endforeach--}}
                                {{--<p class="text-right"><a href="{{ url('post') }}">Khác &blacktriangleright;</a></p>--}}
                            {{--</div>--}}
                            {{--<hr style="padding: 0; margin: 10px 0;">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<h5 class="red underline">Sự kiện</h5>--}}
                                {{--@foreach($activities as $ac)--}}
                               {{--<a href="#">--}}
                                {{--<div class="media text-muted">--}}
                                    {{--<img src="{{url('img/awards.jpg')}}" class="mr-3 rounded" alt="32x32" >--}}
                                    {{--<div class="media-body text-justify mb-0 small lh-125">--}}
                                        {{--<h5 class="mt-0">Media heading</h5>--}}
                                        {{--<strong class="text-gray-dark">{{$ac->title}}</strong>--}}
                                        {{--<span class="d-block">{{$ac->content}}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                               {{--</a>--}}
                                    {{--<hr style="padding:0; margin:10px 0;">--}}
                                {{--@endforeach--}}

                                {{--<p class="text-right"><a href="{{ url('') }}">Khác &blacktriangleright;</a></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="col-md-4">
                        <h5 class="blue underline">Liên kết thường dùng</h5>

                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action"><img class="img-fluid"
                                                                                            src="{{url('img/meeting-room.png')}}"
                                                                                            alt="meeting-room"> <br>
                                <p class="card-text text-center"> Đặt phòng họp </p></a>
                            <br>
                            <a href="#" class="list-group-item list-group-item-action"> <img class="img-fluid"
                                                                                             src="{{url('img/cloud.jpg')}}"
                                                                                             alt="meeting-room"> <br>
                                <p class="card-text text-center"> Dữ liệu đám mây </p></a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection