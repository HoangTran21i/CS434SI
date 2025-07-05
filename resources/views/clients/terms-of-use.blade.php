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

        <!-- Tiêu đề Điều khoản sử dụng -->
        <h2 style="text-align: center; font-weight: bold; margin-top: 20px;">Điều khoản sử dụng</h2>

        <!-- page title area start -->
        <section class="page-title-area bg-overlay bg-parallax">
            <div class="container">
                <h3><strong>ĐIỀU KHOẢN SỬ DỤNG</strong></h3>
                <p>Xác lập một thỏa thuận giữa NGƯỜI SỬ DỤNG website và Công ty.</p>
                <p>Trách nhiệm của Công ty là đảm bảo các tính hợp pháp cho các nội dung trên Website.</p>
                <p>Trách nhiệm của NGƯỜI SỬ DỤNG là tuân thủ các điều khoản và điều kiện sử dụng theo quy định của Công
                    ty khi truy cập và/hoặc sử dụng bất kỳ tiện ích nào từ website TRAVEL</p>
                <p>TRAVEL chịu trách nhiệm đảm bảo tính hợp pháp của việc cung cấp Website đến NGƯỜI SỬ DỤNG, các thông
                    tin, hình ảnh và toàn bộ các nội dung được đưa lên Website không vi phạm các quy định pháp luật cấm,
                    các quy định về thuần phong mỹ tục .</p>
                <p>NGƯỜI SỬ DỤNG đồng ý có trách nhiệm tuân thủ các điều kiện, điều khoản sử dụng website như được nêu
                    bên dưới;</p>
                <p>NGƯỜI SỬ DỤNG đồng ý có trách nhiệm đọc cẩn thận các điều khoản sử dụng và cam kết ràng buộc. Trường
                    hợp không đồng ý NGƯỜI SỬ DỤNG chấm dứt việc sử dụng;</p>
                <p>-Điều khoản sử dụng có hiệu lực kể từ thời điểm NGƯỜI SỬ DỤNG bắt đầu truy cập vào website</p>
                <h3><strong>BẢN QUYỀN VÀ THƯƠNG HIỆU</strong></h3>
                <p>Tuyên bố các quyền Sở hữu trí tuệ của Công ty đối với các đối tượng quyền thể hiện trên website</p>
                <p>- Trang web này và tất cả nội dung của trang web, bao gồm nhưng không giới hạn các văn bản, thiết kế,
                    đồ họa, giao diện, hình ảnh và mã code đều thuộc bản quyền của TRAVEL hoặc bên thứ ba cấp
                    phép cho TRAVEL. Bản quyền của TRAVEL được thể hiện trên trang web bằng dòng chữ
                    tiếng Anh “© 2025 - Travel | Tours”.</p>
                <p>- Bất kỳ nội dung nào thuộc trang Web này về nhãn hiệu, tên thương mại,… đều thuộc quyền sở hữu của
                    TRAVEL và được bảo hộ theo quy định của Luật Sở hữu trí tuệ Việt Nam và các văn bản liên
                    quan.</p>
                <p>- Mọi hành vi sao chép, sửa đổi, phân phối, xuất bản, lưu thông … vì mục đích thương mại mà không
                    được sự cho phép trước bằng văn bản của TRAVEL là xâm phạm quyền của TRAVEL.
                    TRAVEL có quyền yêu cầu NGƯỜI SỬ DỤNG chấm dứt việc sử dụng và bồi thường thiệt hại (nếu
                    có).</p>
                <h3><strong>NỘI DUNG</strong></h3>
                <h4><strong>Mục đích:</strong></h4>
                <p>-Các thông tin được đăng tải trên website với mục đích làm lợi cho khách hàng về các dịch vụ du lịch.
                </p>
                <h4><strong>Quyền và trách nhiệm của TRAVEL:</strong></h4>
                <p>– TRAVEL có quyền thay đổi và/hoặc chấm dứt các nội dung, tính năng của website mà không
                    cần thông báo trước với NGƯỜI SỬ DỤNG, NGƯỜI SỬ DỤNG có trách nhiệm thường xuyên cập nhật các điều
                    kiện và điều khoản trong thông báo này.</p>
                <p>– TRAVEL có quyền thực hiện các biện pháp an ninh để bảo vệ và chống các truy cập trái phép
                    hoặc sửa đổi trái phép, tiết lộ hoặc phá hủy thông tin.</p>
                <p>– TRAVEL không tuyên bố hoặc không có trách nhiệm chứng thực tính chính xác hay độ tin cậy
                    của bất kỳ lời khuyên, ý kiến, phát biểu hoặc các thông tin từ các nguồn khác hoặc từ bất kỳ NGƯỜI
                    SỬ DỤNG nào tại Website này.</p>
                <p>– Khi sử dụng các trang web, thông tin sẽ được truyền qua một phương tiện nằm ngoài sự kiểm soát
                    TRAVEL. Theo đó, TRAVEL không chịu trách nhiệm cho hoặc liên quan đến bất kỳ sự
                    chậm trễ, thất bại, bị gián đoạn của bất kỳ dữ liệu hoặc các thông tin khác được truyền trong kết
                    nối với việc sử dụng của trang web.</p>
                <p>– Thông tin cá nhân như địa chỉ, email và cookie của NGƯỜI SỬ DỤNG có thể được sử dụng nội bộ để duy
                    trì hồ sơ thành viên, cho mục đích tiếp thị và cảnh báo các khách hàng/thành viên các dịch vụ bổ
                    sung. Số điện thoại cũng có thể được sử dụng bởi TRAVEL khi các câu hỏi liên quan đến sản
                    phẩm được đề nghị giải đáp. TRAVEL không tiết lộ bất kỳ thông tin về người dùng cá nhân
                    cho bên thứ ba ngoại trừ việc tuân theo pháp luật hoặc các quy trình pháp lý hợp lệ</p>
                <p>– Tất cả các thông tin, tài liệu không mang tính chất riêng tư được NGƯỜI SỬ DỤNG đưa lên trang trang
                    web đều không được xem là thông tin mật, và TRAVEL được phép toàn quyền sử dụng hay chuyển
                    tải cho bất kỳ mục đích nào. Đặc biệt, TRAVEL được phép sử dụng bất kỳ ‎ý tưởng hay khái
                    niệm nào mà NGƯỜI SỬ DỤNG đã đưa lên trang web cho tất cả các mục đích không giới hạn, bao gồm cả
                    việc phát triển, sản xuất, quảng cáo hay tiếp thị sản phẩm. TRAVEL không có trách nhiệm
                    phải bồi thường hay thưởng cho người cung cấp.</p>
                <p>– NGƯỜI SỬ DỤNG phải ‎ý thức và bảo đảm những thông tin, tài liệu mà NGƯỜI SỬ DỤNG gửi phải nằm trong
                    quyền hạn sử dụng của NGƯỜI SỬ DỤNG ; điều đó có nghĩa TRAVEL sẽ không vi phạm bất cứ
                    quyền lợi nào của bên thứ ba.</p>
                <p>– TRAVEL không nhất thiết phải chấp nhận tất cả tài liệu NGƯỜI SỬ DỤNG gửi.</p>
                <h4><strong>Quyền và trách nhiệm của NGƯỜI SỬ DỤNG:</strong></h4>
                <p>– TRAVEL cho phép NGƯỜI SỬ DỤNG xem, chiết xuất thông tin trên webisite (in, tải,…) hoặc
                    chia sẻ cho người khác nhưng chỉ cho mục đích sử dụng cá nhân và phi thương mại với điều kiện phải
                    trích dẫn thông báo bản quyền sau đây: “© 2024 – Travel | Nha Trang Day Tours.”</p>
                <p>– NGƯỜI SỬ DỤNG đảm bảo tuân theo pháp luật và các quy định liên quan đến việc sử dụng website; không
                    can thiệp, gây ảnh hưởng đến việc sử dụng website của những NGƯỜI SỬ DỤNG khác; không can thiệp vào
                    hoạt động và quản lý website của TRAVEL.</p>
                <p>– NGƯỜI SỬ DỤNG nhận thức rõ và chấp nhận rằng TRAVEL/các đơn vị trực thuộc/ NPP /nhân viên
                    TRAVEL không chịu trách nhiệm đối với bất kỳ tổn thất, thiệt hại, chi phí phát sinh từ bất
                    kỳ quyết định nào của NGƯỜI SỬ DỤNG khi sử dụng bất kỳ thông tin nào trên website với bất kỳ nguyên
                    nhân gì.</p>
                <p>– Nếu NGƯỜI SỬ DỤNG không bằng lòng với bất kỳ thông tin nào trên Website hoặc với bất kỳ điều khoản
                    và điều kiện sử dụng thông tin trên Website này thì phương thức duy nhất NGƯỜI SỬ DỤNG nên thực hiện
                    là chấm dứt sử dụng thông tin trên Website.</p>
                <h3><strong>ĐIỀU KHOẢN CUỐI:</strong></h3>
                <p>Điều khoản sử dụng được điều chỉnh bởi pháp luật Việt Nam</p>
                <p>Một điều khoản sử dụng bị vô hiệu theo quyết định của tòa án có thẩm quyền sẽ không ảnh hưởng đến
                    tính hiệu lực của các điều khoản còn lại.</p>
                <p>Thông báo này và tất cả các điều khoản sử dụng tạo thành toàn bộ thỏa thuận giữa TRAVEL và
                    NGƯỜI SỬ DỤNG liên quan đến việc sử dụng các thông tin trên website. TRAVEL có thể điều
                    chỉnh nội dung thông báo này bất cứ lúc nào bằng cách cập nhật lên trang web. NGƯỜI SỬ DỤNG nên
                    thường xuyên truy cập để theo dõi các quy định ràng buộc này khi sử dụng.</p>
            </div>
        </section>
        <!-- page title area end -->
        @include('clients.blocks.footer')
