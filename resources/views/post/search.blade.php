@extends('master')


@section('content')

    <div id="banner">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{url('')}}"><i class="fa fa-home" aria-hidden="true"></i>  Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tìm Bài Viết</li>
            </ol>
        </nav>
    </div>

    <div id="content">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <ul class="nav nav-tabs ">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ url('post/search/item') }}">Tìm Bài Viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('file/search/item') }}">Tìm Tập Tin</a>
                        </li>
                    </ul>
                </div>
               <form method="POST" action="{{url('')}}" class="form-horizontal searchpost">
                   <div class="row">
                       <div class="col-md-4">
                           <select class="form-control" placeholder="Tất Cả">
                               <li>mục chọn 1</li>
                               <li>mục chọn 2</li>
                           </select>
                       </div>
                       <div class="col-md-4">
                           <input class="form-control" placeholder="Tiêu Đề">
                       </div>
                       <div class="col-md-4">
                           <button class="btn btn-primary" type="submit"><i class="fa fa-search" aria-hidden="true"></i>Tìm</button>
                       </div>
                   </div>
               </form>
                </div>

            </div>
        </div>
    </div>

@endsection