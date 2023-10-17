<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách khóa học</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 100px;
        }
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }
        .course-card {
            background-color: #f5f5f5; /* Màu nền */
            border: 1px solid #ddd; /* Viền */
            border-radius: 5px; /* Bo viền */
            padding: 15px;
            margin-bottom: 20px;
        }
        .course-card img {
            max-width: 100%;
            height: auto;
        }
        .btn-primary{
            background-color: #2c0a49;
            color: #fff;
        }
        .nav-item {
            background-color: #007bff; /* Màu nền */
            border-radius: 5px; /* Bo tròn viền */
            margin-right: 10px; /* Khoảng cách bên phải */
        }
        .nav-item a.item {
            color: #fff; /* Màu chữ */
            text-decoration: none; /* Loại bỏ gạch chân */
            padding: 10px 15px; /* Khoảng cách giữa chữ và viền */
            display: block; /* Chuyển sang dạng block để ứng với toàn bộ phần .nav-item */
        }
        .nav-item:hover {
            background-color: #0056b3; /* Màu nền khi di chuột qua */
        }
        img.avata {
            width: 30px;
            height: 30px;
            border-radius: 30%;
            margin-right: 30px;
        }
    </style>
</head>
<body>
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img class="avata" src="/storage/media/anhdep3.jpg" alt="">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Trang Chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <a class="item" href="{{ route('login') }}">Đăng nhập</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Đăng xuất
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="container mt-5">
        <x-cart-button />
        <!-- <a href="{{ route('cart.index') }}">Giỏ hàng</a> -->
        <h1>Danh Sách Khóa Học</h1>
        <br>
        @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card course-card">
                    <img src="/storage/{{ $course->link }}" class="card-img-top" alt="{{ $course->name }}" style="max-width: 220px; max-height: 160px;">
                    <div class="card-body">
                        <h5 class="card-title">Khóa Học {{ $course->name }}</h5>
                        <h6 class="card-title">Số lượng học viên : {{ $course->view_count }}</h6>
                        <p class="card-text">Giá: ${{ $course->price }}</p>
                        <form action="{{ route('cart.store', ['id' => $course->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-block">Thêm vào giỏ hàng</button>
                            <input type="hidden" name="quantity" value="1">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
