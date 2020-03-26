<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('lightGallery/css/lightgallery.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ url('fullcalendar/packages/core/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('fullcalendar/packages/daygrid/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}">
    <title>Portal JHV</title>
</head>
<body>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            {{--<a class="navbar-brand" href="#" url="{{url('img/logo.png')}}">Navbar</a>--}}
            {{--<img class="navbar-brand" url="{{url('img/logo.png')}}">Navbar</img>--}}
            <a class="navbar-brand" href="{{ url('') }}"><img src="{{ url('img/logo.png') }}"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto small">
                    <a class="nav-item nav-link active" href="{{url('')}}">Trang Chủ <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{url('/gm')}}">Ban Tổng Giám Đốc</a>

                    <div class="nav-item dropdown">
                        <a class="nav-link" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button" href="{{url('')}}"> Bộ Phận Nhân Sự </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Lưu Trình</a>
                            <a class="dropdown-item" href="#">Qui Định Công TY</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Tạp Chí</a>
                        </div>
                    </div>

                    <a class="nav-item nav-link" href="{{url('sb')}}">Hộp Thư Góp ý</a>
                    <a class="nav-item nav-link" href="{{url('post/search')}}">Tìm Kiếm</a>
                    <a class="nav-item nav-link" href="{{url('login')}}">Đăng Nhập</a>
                    {{--<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
                </div>
            </div>
         </nav>
    </div>
</header>

<div class="container">
    @yield('content')
</div>
<footer>
   <div class="container">
       <div id="slider">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                   <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               </ol>
               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="{{url('img/b1.jpg')}}" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="{{url('img/b2.jpg')}}" class="d-block w-100" alt="...">
                   </div>
               </div>
           </div>
       </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <small> &copy 2017-2019 by Jiahsin Co., Ltd.</small>
                    </div>
                    <div class="col-md-4">
                        <small>Portal Version 1.0 - Developer by Jia Hsin IT</small>
                    </div>
                </div>
            </div>
        </div>
    </div>


</footer>

<script type="text/javascript" src="{{url('jquery/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('WaterwheelCar/js/waterwheelCar.min.js')}}"></script>
<script type="text/javascript" src="{{url('lightGallery/js/lightgallery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('fullcalendar/packages/core/main.js') }}"></script>
<script type="text/javascript" src="{{ url('fullcalendar/packages/daygrid/main.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function (e) {
        $("#carousel").waterwheelCarousel({
           autoPlay:3000
       });
        $(".lightBox").lightGallery();
     });

  </script>

</body>
</html>