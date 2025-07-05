<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('admin.dashboard') }}" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('admin/assets/images/user-profile/avt_admin.jpg') }}" alt="..."
                    class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin chào,</span>
                <h2>{{ session('admin', 'Admin') }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Tổng quan</h3>
                <ul class="nav side-menu">
                    <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a> </li>
                    <li><a href="{{ route('admin.admin') }}"><i class="fa fa-table"></i> Quản lý Admin</a> </li>
                    <li><a href="{{ route('admin.users') }}"><i class="fa fa-table"></i> Quản lý người dùng</a> </li>
                    <li><a><i class="fa fa-table"></i> Quản lý Tours<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('admin.page-add-tours') }}">Thêm Tours</a></li>
                            <li><a href="{{ route('admin.tours') }}">Danh sách Tours</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('admin.booking') }}"><i class="fa fa-home"></i> Quản lý Booking</a> </li>
                    <li><a href="{{ route('admin.contact') }}"><i class="fa fa-envelope-o"></i> Liên hệ </a> </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <!-- Settings - Open modal -->
            <a href="javascript:void(0);" 
                title="Settings" 
                data-placement="top" 
                data-toggle="modal" 
                data-target="#sidebarColorModal">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <!-- Fullscreen -->
            <a href="javascript:void(0);" id="toggleFullscreen" data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <!-- Lock sidebar -->
            <a href="javascript:void(0);" id="lockSidebar" data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <!-- Logout -->
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('admin.logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
<!-- Modal Đổi màu sidebar -->
<div class="modal fade" id="sidebarColorModal" tabindex="-1" role="dialog" aria-labelledby="sidebarColorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đổi màu Sidebar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Đóng">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>Chọn màu nền:</label>
                <input type="color" id="sidebarColorPicker" value="#2A3F54" class="form-control" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="applySidebarColor">Áp dụng</button>
            </div>
        </div>
    </div>
</div>
<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                        data-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('admin/assets/images/user-profile/avt_admin.jpg') }}" alt="">
                        @if (session()->has('admin'))
                            {{ session('admin') }}
                        @endif
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.admin') }}"> Thông tin cá nhân</a>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"><i
                                class="fa fa-sign-out pull-right"></i> Đăng xuất</a>
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">{{ $unreadCount }}</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        @foreach ($unreadContacts->take(3) as $item)
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{ route('admin.contact') }}">
                                    <span>
                                        <b><span>{{ $item->fullName }}</span></b>
                                        <span class="time">{{ $item->phoneNumber }}</span>
                                    </span>
                                    <span class="message text-contact-truncate" >{{ $item->message }} </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
