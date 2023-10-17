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
                            <a href="{{ route('order.index') }}"><i class="fe fe-layout"></i> <span>Đơn đặt hàng</span></a>
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
                    <div>
                        <a href="{{ route('course.create') }}">Create New</a>
                    </div>

                    <div class="form-search">
                        <form action="{{ route('course.index')}}" method="get" class="form-control" style="display: flex; align-items: center;">
                            <input type="text" placeholder="Your keyword" name="keyword" value="{{ request()->get('keyword')}}" style="padding: 8px; border: none; border-radius: 4px;">
                            <button class="" style="padding: 8px 16px; background-color: #3490dc; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Search</button>
                        </form>
                    </div>

                    <div class="card">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên khóa học</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Phương thức</th>
                                <th scope="col">Tổng số học viên</th>
                                <th scope="col">Tổng số bài học</th>
                                <th scope="col">Tổng số chương</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($coursePaginate as $course)
                                    <tr>
                                        <th scope="row">{{ $course->id }}</th>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ optional($course->category)->name }}</td>
                                        <td class="text-center {{ $course->is_online == 1 ? 'text-primary' : 'text-success'}}">{{ $course->is_online == 1 ? 'Online' : 'Offline'}}</td>
                                        <td class="text-center">{{ $course->user_count }}</td>
                                        <td class="text-center">{{ $course->lessons }}</td>
                                        <td class="text-center">{{ $course->sections }}</td>
                                        <td>
                                            <a
                                                href="{{ route('course.edit', ['course' => $course->id]) }}"class="text-info">Edit</a>
                                            <form method="POST"
                                                action="{{ route('course.destroy', ['course' => $course->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-danger" style="border: none;"
                                                    onclick="return confirm('Bạn có chắc muốn xóa khóa học {{ $course->name }}?')">
                                                    Delete
                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                            <div>
                                {{ $coursePaginate->links() }}
                            </div>
                        <br />

                        <div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </div>


    <script src="{{ asset('/template/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('/template/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/template/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('/template/js/script.js') }}"></script>
</body>

</html>

