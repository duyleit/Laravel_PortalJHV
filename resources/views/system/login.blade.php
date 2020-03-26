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
<div class="container">
    <div class="row">
       <div class="col-md-4 offset-md-4">
            <page-header>
                Jiahsin
            </page-header>
           <form action="{{route('system.verifyacc')}}" method="post" class="form-horizontal">
                <legend>Đăng Nhập</legend>
                <div class="form-group">
                    <input type="text" class="form-control" name="name"  placeholder="MSNV">
                    <input type="password" class="form-control" name="pass"  placeholder="Mật Khẩu">
                </div>
               <div class="form-group">
                   <button type="submit" class="btn btn-primary"><i class="fa fa-clock-o" aria-hidden="true"></i>Đăng Nhập</button>
                   <br>
                   <a href="{{url('')}}" class="btn btn-primary"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ</a>
               </div>
            </form>
        </div>
     </div>

    <div class="row">
        <h5>Chú ý</h5>
        <p>Hoan nghênh bạn sử dụng hệ thống App của công ty, hệ thống này bao gồm thông tin cá nhân quan trọng hoặc bí mật kinh doanh, hãy dựa theo quyền hạn trách nhiệm được giao lưu giữ, tuân thủ các quy định liên quan và cẩn thận khi thao tác sử dụng, tránh các hành vi vi phạm pháp luật. Nếu có hành vi vi phạm các quyền hạn và trách nhiệm được công ty trao về việc thu thập, xử lý không đúng,
            lợi dụng quyền hạn từ đó gây ra bất kỳ thiệt hại nào cho công ty hoặc khách hàng, sẽ căn cứ theo chính sách của công ty và pháp luật có liên quan tiến hành xử phạt. Khi sử dụng nếu bạn có bất kỳ câu hỏi nào về chương trình này, xin vui lòng liên hệ với bộ phận IT phần mềm, số nội bộ JHV 1159 , chúc bạn sử dụng vui vẻ!</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            2017-2019 by Jiahsin Co.,Ltd.
        </div>
        <div class="col-md-6">
            User Version 1.0 - Developed by Jia Hsin IT.
        </div>
    </div>
</div>

<script type="text/javascript" src="{{url('jquery/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{url('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('WaterwheelCar/js/waterwheelCar.min.js')}}"></script>
<script type="text/javascript" src="{{url('lightGallery/js/lightgallery.min.js')}}"></script>
<script type="text/javascript" src="{{ url('fullcalendar/packages/core/main.js') }}"></script>
<script type="text/javascript" src="{{ url('fullcalendar/packages/daygrid/main.js') }}"></script>

</body>
</html>