<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('clients/assets/images/logos/favicon.png') }}" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/flaticon.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/fontawesome-5.14.0.min.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/bootstrap.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/magnific-popup.min.css') }}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/nice-select.min.css') }}">
    <!-- jQuery UI -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/jquery-ui.min.css') }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/aos.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/slick.min.css') }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/style.css') }}">

    {{-- boxicons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    {{-- Login  --}}
    <!-- Font Icon -->
    <link rel="stylesheet"
        href="{{ asset('clients/assets/css/css-login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('clients/assets/css/css-login/style.css') }}">
    {{-- custom css by Dien --}}
    <link rel="stylesheet" href="{{ asset('clients/assets/css/custom-css.css') }}" />

    {{-- User Profile  --}}
    <link rel="stylesheet" href="{{ asset('clients/assets/css/user-profile.css') }}" />

    <!-- Import CSS for Toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="custom-loader"></div>
        </div>

        <!-- main header -->
        <header class="main-header header-one">
            <!--Header-Upper-->
            <div class="header-upper bg-white py-30 rpy-0">
                <div class="container-fluid clearfix">

                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('clients/assets/images/logos/logo-two.png') }}" alt="Logo"
                                        title="Logo"></a></div>
                        </div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <div class="mobile-logo">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('clients/assets/images/logos/logo-two.png') }}"
                                                alt="Logo" title="Logo">
                                        </a>
                                    </div>

                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                        data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{ Request::url() == route('home') ? 'active' : '' }}"><a
                                                href="{{ route('home') }}">Trang chủ</a></li>
                                        <li class="{{ Request::url() == route('about') ? 'active' : '' }}"><a
                                                href="{{ route('about') }}">Giới thiệu</a></li>
                                        <li
                                            class="dropdown {{ Request::is('tours') || Request::is('team') || Request::is('tour-detail/*') ? 'active' : '' }}">
                                            <a href="#">Tours</a>
                                            <ul>
                                                <li><a href="{{ route('tours') }}">Tours</a></li>
                                                <li><a href="{{ route('team') }}">Hướng dẫn viên</a></li>
                                            </ul>
                                        </li>
                                        <li class="{{ Request::url() == route('destination') ? 'active' : '' }}"><a
                                                href="{{ route('destination') }}">Điểm đến</a></li>
                                        <li class="{{ Request::url() == route('contact') ? 'active' : '' }}"><a
                                                href="{{ route('contact') }}">Liên Hệ</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <!-- Menu Button -->
                        <div class="menu-btns py-10">
                            <a href="{{ route('tours') }}" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Đặt Ngay">Book Now</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                            <!-- menu sidbar -->
                            <div class="menu-sidebar">
                                <li class="drop-down">
                                    <button class="dropdown-toggle bg-transparent" id="userDropdown"
                                        style="color: black">
                                        @if (session()->has('avatar'))
                                            @php
                                                $avatar = session()->get('avatar', 'user_avatar.jpg');
                                            @endphp
                                            <img id="avatarPreview" class="img-account-profile rounded-circle"
                                                src="{{ asset('admin/assets/images/user-profile/' . $avatar) }}"
                                                style="width: 36px; height: 36px;">
                                        @else
                                            <i class='bx bxs-user bx-tada' style="font-size: 36px; color: black;"></i>
                                        @endif
                                    </button>

                                    <ul class="dropdown-menu" id="dropdownMenu">
                                        @if (session()->has('username'))
                                            <li><a href="{{ route('user-profile') }}">Thông tin cá nhân</a></li>
                                            <li><a href="{{ route('my-tours') }}">Tour đã đặt</a></li>
                                            <li><a href="{{ route('logout') }}">Đăng xuất</a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Đăng nhập</a></li>
                                        @endif
                                    </ul>

                                </li>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>

        <!-- Ngăn cách bằng dấu gạch ngang dài -->
        <hr style="border: 1px solid #000; margin: 20px 0;">

        <!-- Tiêu đề Chính Sách Bảo Mật -->
        <h2 style="text-align: center; font-weight: bold; margin-top: 20px;">Chính Sách Bảo Mật</h2>

        <!-- page title area start -->
        <section class="page-title-area bg-overlay bg-parallax">
            <div class="container">
                <p>Chính sách bảo mật cho bạn biết chúng tôi sử dụng thông tin cá nhân của bạn thu thập được tại trang
                    web này như thế nào. Xin vui lòng đọc chính sách bảo mật trước khi sử dụng trang web hoặc gửi bất kỳ
                    thông tin cá nhân nào.</p>
                <p>Khi sử dụng trang web, bạn đang chấp nhận những điều được mô tả trong chính sách bảo mật. Những điều
                    này có thể thay đổi, nhưng bất kỳ thay đổi nào cũng đều sẽ&nbsp;được đăng lên và thay đổi sẽ chỉ áp
                    dụng cho các hoạt động và thông tin trên cơ sở tịnh tiến, chứ không phải hồi tố. Bạn nên xem lại
                    chính sách bảo mật bất cứ khi nào bạn truy cập trang web để đảm bảo rằng mình hiểu các thông tin cá
                    nhân mà bạn cung cấp sẽ được sử dụng như thế nào. Chính sách của chúng tôi là giữ kín thông tin cá
                    nhân nhận được từ trang web hoàn toàn bí mật và chỉ dùng cho mục đích nội bộ. Chúng tôi sẽ không
                    chia sẻ thông tin cá nhân của bạn với bất kỳ bên nào khác. Hãy yên tâm rằng chúng tôi tôn trọng sự
                    riêng tư của bạn và xử lý dữ liệu cá nhân của bạn với sự cẩn trọng tối đa.</p>
                <p><strong>THU THẬP THÔNG TIN CÁ NHÂN CỦA BẠN</strong></p>
                <p>Chúng tôi thu thập các thông tin định danh cá nhân như tên, địa chỉ bưu điện, địa chỉ email, số điện
                    thoại, v.v… khi khách truy cập tự nguyện gửi cho chúng tôi. Thông tin này chỉ được sử dụng để đáp
                    ứng yêu cầu cụ thể của bạn, trừ khi bạn cho phép sử dụng nó theo cách khác, ví dụ thêm bạn vào danh
                    sách gửi email của chúng tôi. Thông tin chúng tôi thu thập có thể bao gồm tên, chức danh, tên công
                    ty hay tổ chức, e-mail, điện thoại và ngày sinh nhật của bạn. Chúng tôi có thể thu thập một số thông
                    tin nhất định về chuyến thăm của bạn, chẳng hạn như loại trình duyệt bạn sử dụng; ngày và thời gian
                    bạn truy cập vào trang web; các trang bạn truy cập khi mở trang web và địa chỉ trang web mà từ đó
                    bạn kết nối trực tiếp đến trang web của chúng tôi. Thông tin này được sử dụng để giúp cải thiện và
                    quản lý trang web.</p>
                <p><strong>CHÍNH SÁCH BẢO MẬT</strong></p>
                <p><strong>COOKIE / CÔNG NGHỆ THEO DÕI</strong></p>
                <p>Trang web có thể sử dụng cookie và công nghệ theo dõi tùy thuộc vào các tính năng được cung cấp.
                    Cookie và công nghệ theo dõi rất hữu ích cho việc thu thập thông tin như loại trình duyệt và hệ điều
                    hành, theo dõi số lượng khách truy cập vào trang web, và hiểu biết khách truy cập sử dụng trang web
                    như thế nào. Cookie cũng có thể giúp tùy chỉnh trang web cho khách. Không thể thu thập được thông
                    tin cá nhân thông qua cookie và công nghệ theo dõi khác, tuy nhiên, nếu trước đó bạn đã cung cấp
                    thông tin cá nhân định danh, cookie có thể gắn với các thông tin đó. Cookie và thông tin theo dõi
                    thu thập được có thể được chia sẻ với bên thứ ba. Chúng tôi cũng sử dụng mã tái tiếp thị đăng nhập
                    khi khách truy cập xem các trang cụ thể, cho phép chúng tôi đưa ra các quảng cáo mục tiêu trong
                    tương lai.</p>
                <p><strong>PHÂN PHỐI THÔNG TIN</strong></p>
                <p>Chúng tôi xử lý tất cả dữ liệu khách hàng phù hợp với Pháp lệnh dữ liệu cá nhân (Riêng tư) ở Việt
                    Nam. Chúng tôi sẽ không bao giờ bán, chia sẻ hoặc sử dụng bất kỳ thông tin cá nhân nào bạn cung cấp
                    cho chúng tôi vì bất kỳ mục đích nào khác hơn là trao đổi với bạn về các sản phẩm, việc đặt chỗ hoặc
                    thư mời đến các sự kiện của chúng tôi. Chúng tôi có thể chia sẻ thông tin với các cơ quan chính phủ
                    hoặc các công ty khác hỗ trợ chúng tôi trong việc phòng chống gian lận hoặc điều tra.</p>
                <p><strong>Chúng tôi có thể làm như vậy khi:</strong> (1) được pháp luật cho phép hoặc theo yêu cầu của
                    pháp luật; (2) cố gắng để bảo vệ hoặc ngăn chặn gian lận thực tế hoặc tiềm năng hoặc giao dịch trái
                    phép; (3) điều tra gian lận đó đã xảy ra. Các thông tin không được cung cấp cho các công ty này vì
                    mục đích tiếp thị.</p>
                <p>Thông tin cá nhân của bạn được lưu giữ an toàn. Chỉ các nhân viên, các đại lý và nhà thầu được ủy
                    quyền (người đã đồng ý giữ thông tin an toàn và bảo mật) có quyền tiếp cận các thông tin này. Tất cả
                    email và bản tin từ trang web này cho phép bạn chọn không tiếp tục nhận thư.</p>
                <p><strong>CÂU HỎI</strong></p>
                <p>Nếu bạn có bất kỳ câu hỏi, mối quan tâm, hoặc ý kiến gì về chính sách bảo mật của chúng tôi, xin vui
                    lòng liên hệ với chúng tôi qua form Liên hệ với chúng tôi.</p>
                <p>Chúng tôi giữ quyền thực hiện các thay đổi trong chính sách này. Tất cả thay đổi sẽ được phản ánh
                    trên trang web này.</p>
                <p><strong>THỜI GIAN ÁP DỤNG</strong></p>
                <p>Chính sách này được áp dụng xuyên suốt thời gian trang web này hoạt động.</p>
            </div>
        </section>
        <!-- page title area end -->
        @include('clients.blocks.footer')
