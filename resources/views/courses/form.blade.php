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

                        <li>
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
                    <div class="">
                        <div>
                            <a href="{{ route('course.index') }}">Back</a>
                        </div>

                        <div class="card">
                        <form method="post" action="{{ isset($course) ? route('course.update', ['course' => $course->id]) : route('course.store')}}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf

                        @if(!empty($course))
                            @method('put')
                        @endif

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="form-input" :value="old('name', $course->name ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="slug" :value="__('Slug')" />
                            <x-text-input id="slug" name="slug" type="text" class="form-input" :value="old('slug', $course->slug ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('slug')" />
                        </div>

                        <div>
                            <x-input-label for="link" :value="__('Link')" />
                            <x-text-input id="link" name="link" type="text" class="form-input" :value="old('link', $course->link ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('link')" />
                        </div>

                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="price" type="text" class="form-input" :value="old('price', $course->price ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('price')" />
                        </div>

                        <div>
                            <x-input-label for="old_price" :value="__('Old Price')" />
                            <x-text-input id="old_price" name="old_price" type="text" class="form-input" :value="old('old_price', $course->old_price ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('old_price')" />
                        </div>

                        <div>
                            <x-input-label for="created_by" :value="__('Created By')" />
                            <x-text-input id="created_by" name="created_by" type="text" class="form-input" :value="old('created_by', $course->created_by ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('created_by')" />
                        </div>

                        <div>
                            <x-input-label for="category_id" :value="__('Category ID')" />
                            <x-text-input id="category_id" name="category_id" type="text" class="form-input" :value="old('category_id', $course->category_id ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
                        </div>

                        <div>
                            <x-input-label for="lessons" :value="__('Lessons')" />
                            <x-text-input id="lessons" name="lessons" type="text" class="form-input" :value="old('lessons', $course->lessons ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('lessons')" />
                        </div>

                        <div>
                            <x-input-label for="sections" :value="__('Sections')" />
                            <x-text-input id="sections" name="sections" type="text" class="form-input" :value="old('sections', $course->sections ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('sections')" />
                        </div>

                        <div>
                            <x-input-label for="view_count" :value="__('View count')" />
                            <x-text-input id="view_count" name="view_count" type="text" class="form-input" :value="old('view_count', $course->view_count ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('view_count')" />
                        </div>

                        <div>
                            <x-input-label for="benefits" :value="__('Benefits')" />
                            <x-text-input id="benefits" name="benefits" type="text" class="form-input" :value="old('benefits', $course->benefits ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('benefits')" />
                        </div>

                        <div>
                            <x-input-label for="fqa" :value="__('FQA')" />
                            <x-text-input id="fqa" name="fqa" type="text" class="form-input" :value="old('fqa', $course->fqa ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('fqa')" />
                        </div>


                        <div>
                            <x-input-label for="is_feature" :value="__('Is feature')" />
                            <x-text-input id="is_feature" name="is_feature" type="text" class="form-input" :value="old('is_feature', $course->is_feature ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('is_feature')" />
                        </div>

                        <div>
                            <x-input-label for="is_online" :value="__('Is online')" />
                            <x-text-input id="is_online" name="is_online" type="text" class="form-input" :value="old('is_online', $course->is_online ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('is_online')" />
                        </div>

                         <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <x-text-input id="description" name="description" type="text" class="form-input" :value="old('description', $course->description ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div>
                            <x-input-label for="content" :value="__('Content')" />
                            <x-text-input id="content" name="content" type="text" class="form-input" :value="old('content', $course->content ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('content')" />
                        </div>

                        <div>
                            <x-input-label for="meta_title" :value="__('Meta title')" />
                            <x-text-input id="meta_title" name="meta_title" type="text" class="form-input" :value="old('meta_title', $course->meta_title ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('meta_title')" />
                        </div>

                        <div>
                            <x-input-label for="meta_desc" :value="__('Meta desc')" />
                            <x-text-input id="meta_desc" name="meta_desc" type="text" class="form-input" :value="old('meta_desc', $course->meta_desc ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('meta_desc')" />
                        </div>


                        <div>
                            <x-input-label for="meta_keyword" :value="__('Meta keyword')" />
                            <x-text-input id="meta_keyword" name="meta_keyword" type="text" class="form-input" :value="old('meta_keyword', $course->meta_keyword ?? null)" />
                            <x-input-error class="mt-2" :messages="$errors->get('meta_keyword')" />
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

    <style>
    /* CSS tùy chỉnh cho form và các thẻ input */
    .card {
        width: 100%; /* Rộng 100% của container cha */
        padding: 20px;
    }

    .form-input {
        width: 100%; /* Rộng 100% */
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc; /* Đường viền */
        border-radius: 5px; /* Góc bo tròn */
    }

    .form-label {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .radio-label {
        margin-right: 10px;
    }

    .file-input {
        margin-top: 10px;
    }

    .btn-save {
        background-color: #007bff; /* Màu nền nút Save */
        color: #fff; /* Màu chữ nút Save */
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>


</body>

</html>
