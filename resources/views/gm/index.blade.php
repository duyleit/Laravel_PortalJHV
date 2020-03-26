@extends('master')


@section('content')

    <div id="banner">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{url('')}}"><i class="fa fa-home" aria-hidden="true"></i>  Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ban Tổng Giám Đốc</li>
            </ol>
        </nav>
    </div>

    <div id="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                     <h5 class="blue underline">Chính Sách Công Ty</h5>

                        {{--<a href="#">--}}
                            {{--<h5> Tựa đề nội dung 1</h5>--}}
                            {{--<p>Nội dung abc ........</p>--}}
                        {{--</a>--}}

                        <a href="#">
                            <div class="media text-muted">
                               <div class="media-body text-justify mb-0 small lh-125">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        {{--<h5 class="mt-0">Media heading</h5>--}}
                                        <strong class="text-gray-dark">Tựa đề nội dung 1</strong>
                                    </div>
                                    <span class="d-block">Nội dung abc .........</span>
                                    {{--<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>--}}
                                </div>
                            </div>
                        </a>

                        <hr style="margin: 10px 0 10px 0; border:1px solid;color:#9BA2AB ">

                        <a href="#">
                            <div class="media text-muted">
                                <div class="media-body text-justify mb-0 small lh-125">
                                    <div class="d-flex justify-content-between align-items-center w-100">
                                        {{--<h5 class="mt-0">Media heading</h5>--}}
                                        <strong class="text-gray-dark">Tựa đề nội dung 2</strong>
                                    </div>
                                    <span class="d-block">Nội dung abc .........</span>
                                    {{--<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>--}}
                                </div>
                            </div>
                        </a>
                        <hr style="margin: 10px 0 10px 0; border:1px solid;color:#A5A5A5">
                        <p class="text-right"><small><a href="#"> Khác &blacktriangleright;</a></small></p>
                    </div>

                    <div class="col-md-6">
                        <h5 class="blue underline">Sơ Đồ Tổ Chức</h5>
                        <div class="lightBox">
                          <a href="{{url('img/oc-vn.jpg')}}"> <img src="{{url('img/oc-vn.jpg')}}" class="img-fluid img-thumbnail"></a>
                          <a href="{{url('img/oc-cn.jpg')}}"> <img src="{{url('img/oc-cn.jpg')}}" class="img-fluid img-thumbnail"> </a>
                        </div>

                     </div>

                </div>
                <div class="row">
                   <div class="col-md">
                       <p class="blue underline">Lịch Công Tác</p>
                       <div class="calendar"></div>
                   </div>
                 </div>
            </div>
        </div>
    </div>

@endsection