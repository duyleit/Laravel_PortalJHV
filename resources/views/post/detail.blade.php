@extends('master')


@section('content')
    <div id="banner">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{url('')}}"><i class="fa fa-home" aria-hidden="true"></i>  Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>
    </div>
<div id="content">
    <div class="card">
        @foreach($post as $p)
            <div class="row">
                <div class="col-md-9">
                    <div class="blue underline card-title">
                        {{$p->title}}
                    </div>

                    <div class="card-body">
                        {{$p->content}}
                    </div>
                    <span class="text-right">{{$p->created}}</span>
                </div>
                <div class="col-md-3">
                    <img src="{{url('img/bs1.jpg')}}" class="img-fluid">
                </div>
            </div>

        @endforeach
    </div>

</div>


@endsection