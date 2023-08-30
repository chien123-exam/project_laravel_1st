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
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>

            </ul>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.html"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>

                        <li class="active">
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
                        <li>
                            <a href="blank-page.html"><i class="fe fe-layout"></i> <span>Quản lý khách hàng</span></a>
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
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-sm-3 col-12">
                        <div>
                            <a href="{{ route('user.index') }}">Back</a>
                        </div>

                        <div class="card">
                            <form method="post" action="{{ $user ? route('user.update', ['user' => $user->id]) : route('user.store') }}" class="mt-6 space-y-6">
                                @csrf
                                @if (!empty($user))
                                    @method('put')
                                @endif

                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name ?? null)"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>

                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user->email ?? null)"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>

                                <div>
                                    <x-input-label for="phone" :value="__('Phone')" />
                                    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone ?? null)"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                </div>

                                <div>
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" :value="old('password')"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('password')" />
                                </div>

                                <div>
                                    <x-input-label for="password_confirm" :value="__('Password_confirm')" />
                                    <x-text-input id="password_confirm" name="password_confirm" type="password" class="mt-1 block w-full" :value="old('password_confirm')"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('password_confirm')" />
                                </div>

                                <div>
                                    <x-input-label for="address" :value="__('Address')" />
                                    <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address ?? null)"/>
                                    <x-input-error class="mt-2" :messages="$errors->get('address')" />
                                </div>

                                <div>
                                    <x-input-label for="gender" :value="__('Gender')" />

                                    <label>
                                        <input type="radio" name="gender" value="1" {{ old('gender', $user->gender ?? null) == 1 ? 'checked' : ''}} />Male
                                    </label>

                                    <label>
                                        <input type="radio" name="gender" value="2" {{ old('gender', $user->gender ?? null) == 2 ? 'checked' : ''}} />Famale
                                    </label>

                                    <x-input-error class="mt-2" :messages="$errors->get('gender')" />
                                </div>

                                <div>
                                    <x-input-label for="avatar" :value="__('Avatar')" />

                                    <label>
                                        <input type="file" name="avatar" />
                                    </label>

                                    <x-input-error class="mt-2" :messages="$errors->get('avatar')" />
                                </div>

                                <div class="flex items-center gap-4">
                                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                                </div>

                            </form>
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

