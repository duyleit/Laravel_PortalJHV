@extends('master')


@section('content')

    <div id="banner">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb small">
                <li class="breadcrumb-item"><a href="{{url('')}}"><i class="fa fa-home" aria-hidden="true"></i>  Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Hộp Thư Góp Ý</li>
            </ol>
        </nav>
    </div>

    <div id="content">
        <div class="card">
            <div class="card-body">
               <h5 class="blue underline">Hộp Thư Góp Ý</h5>
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{url('img/sb.jpg')}}">
                    </div>
                    <div class="col-md-6">
                      <form action="" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label">Email: </label>
                            <input class="form-control" name="txtEmail" type="email" required>
                        </div>
                          <div class="form-group">
                              <label class="control-label">Nội dung: </label>
                              <textarea class="form-control" name="txtArea" rows="5"></textarea>
                          </div>

                         <button type="submit" class="btn btn-primary">Gửi</button>

                      </form>
                    </div>
                </div>
        </div>
    </div>

@endsection