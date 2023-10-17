<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.head')
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="/template/img/logo.png" alt="Logo">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="/template/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fe fe-text-align-left"></i>
            </a>
            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fa fa-bars"></i>
            </a>


            <ul class="nav user-menu">

                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <i class="fa fa-bell"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/template/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has
                                                    approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/template/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">International Software
                                                        Inc</span> has sent you a invoice in the amount of <span
                                                        class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/template/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                                    a cancellation request <span class="noti-title">Apple iPhone
                                                        XR</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="/template/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Mercury Software
                                                        Inc</span> added a new product <span class="noti-title">Apple
                                                        MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="/template/img/profiles/avatar-01.jpg"
                                width="31" alt="Seema Sisty"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="/template/img/profiles/avatar-01.jpg" alt="User Image"
                                    class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6>Seema Sisty</h6>
                                <p class="text-muted mb-0">Administrator</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="general.html">My Profile</a>
                        <a class="dropdown-item" href="general.html">Account Settings</a>
                        <a class="dropdown-item" href="{{ route('users.change-password') }}">Password</a>
                        <!-- <a class="dropdown-item" href="login.html">Logout</a> -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>

                        <li class=>
                            <a href="{{ route('user.index') }}"><i class="fe fe-layout"></i> <span>User Management</span></a>
                        </li>

                        <li>
                            <a href="category.html"><i class="fe fe-layout"></i> <span>Quản lý danh mục</span></a>
                        </li>
                        <li>
                            <a href="product.html"><i class="fe fe-layout"></i> <span>Quản lý sản phẩm</span></a>
                        </li>
                        <li>
                            <a href="blank-page.html"><i class="fe fe-layout"></i> <span>Đơn đặt hàng</span></a>
                        </li>
                        <li class="active">
                            <a href="{{ route('course.index') }}"><i class="fe fe-layout"></i> <span>Quản lý khách hàng</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-users"></i> <span> Tài khoản </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="users.html">Tài khoản quản trị</a></li>
                                <li><a href="blocked-users.html">Quản lý quyền hạn</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fe fe-gear"></i> <span> Cài đặt chung </span> <span
                                    class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="general.html">Thông tin chung</a></li>
                                <li><a href="admob.html"> </a></li>
                                <li><a href="sinch-settings.html">Sinch Settings </a></li>
                                <li><a href="firebase-settings.html">Firebase Settings </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Tên khóa học</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá tiền</th>
                                <th scope="col">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>
                            @php
                            $total = 0;
                            @endphp
                            @foreach ($coursesInCart as $course)
                                @php
                                    $total += $course->price * Session::get('cart')[$course->id]['quantity'];
                                @endphp
                            <tr>
                                <td>{{ $course->name }}</td>
                                <td>{{ Session::has('cart') && is_array(Session::get('cart')) && isset(Session::get('cart')[$course->id]['quantity']) ? Session::get('cart')[$course->id]['quantity'] : 0 }}</td>
                                <td>${{ $course->price }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <form action="{{ route('cart.destroy', ['id' => $course->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Xóa</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="3" style="text-align: right;">Tổng tiền:</td>
                            <td colspan="2">{{ number_format($total, 0, ',', '.') }} VNĐ</td>
                        </tr>
                            </tbody>
                        </table>
                        <br>
                        <br />
                            <div>
                        </div>
                        <div class="mt-4" style="display:flex; justify-content:space-between">
                            <a href="{{ route('homepage.index') }}"  class="btn btn-primary back-button">Back</a>
                            <button id="show-payment-modal" class="btn btn-primary">Thanh toán</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form thanh toán -->
                    <form method="post" action="{{ route('cart.checkout') }}">
                        @csrf
                        <div class="form-group">
                            <label for="shipping_name">Tên người nhận hàng:</label>
                            <input type="text" name="shipping_name" id="shipping_name" class="form-control" required>
                        </div>

                        <!-- Trường nhập địa chỉ giao hàng -->
                        <div class="form-group">
                            <label for="shipping_address">Địa chỉ giao hàng:</label>
                            <input type="text" name="shipping_address" id="shipping_address" class="form-control" required>
                        </div>

                        <!-- Trường nhập địa chỉ email -->
                        <div class="form-group">
                            <label for="email">Địa chỉ Email:</label>
                            <input type="email" name="customer_email" id="email" class="form-control" required>
                        </div>

                        <!-- Trường nhập số điện thoại -->
                        <div class="form-group">
                            <label for="phone">Số điện thoại:</label>
                            <input type="text" name="customer_phone" id="phone" class="form-control" required>
                        </div>

                        <!-- Trường chọn phương thức thanh toán -->
                        <div class="form-group">
                            <label for="payment_method">Phương thức thanh toán:</label>
                            <select name="payment_method" id="payment_method" class="form-control" required>
                                <option value="credit_card">Thẻ tín dụng</option>
                                <option value="bidv">BIDV</option>
                                <option value="vietcombank">Vietcombank</option>
                                <option value="vpbank">VPBank</option>
                            </select>
                        </div>

                        <!-- Trường chọn phương thức giao hàng -->
                        <div class="form-group">
                            <label for="shipping_method">Phương thức giao hàng:</label>
                            <select name="shipping_method" id="shipping_method" class="form-control" required>
                                <option value="standard">Giao hàng tiêu chuẩn</option>
                                <option value="cod">Nhận hàng thanh toán</option>
                                <option value="express">Giao hàng nhanh</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Thanh toán</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn-primary.back-button {
            margin-right: 10px;
        }
    </style>
    <script src="{{ asset('/template/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('/template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/template/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/template/js/script.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            // Bắt sự kiện khi người dùng nhấn vào nút "Thanh Toán"
            $("#show-payment-modal").click(function() {
                // Hiển thị modal
                $("#paymentModal").modal("show");
            });
        });
    </script>
</body>

</html>

