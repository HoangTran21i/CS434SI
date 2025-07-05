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
                <span class="SubHead">Cam kết giữa người dùng và Travel - Tour du lịch Chất Lượng </span><br><br>
                Website Travel - Tour du lịch Chất Lượng bao gồm nhiều trang web được
                thực hiện bởi Travel .<br><br>
                Website Travel - Tour Chất Lượng được cung cấp đến bạn với điều
                kiện bạn đồng ý với mọi điều khoản ở đây. Việc bạn sử dụng Travel thể hiện sự chấp nhận của bạn với
                những điều khoản đó.<br><br>
                <span class="SubHead">Về việc sửa đổi những điều khoản cam kết này</span><br><br>
                Travel có quyền thay đổi những điều khoản liên
                quan đến những gì Travel đã cung cấp, bao gồm
                nhưng không giới hạn ở những chi phí liên quan đến việc sử dụng của website Travel .<br><br>
                <span class="SubHead">Liên kết đến những công ty thứ ba</span><br><br>
                Website Travel có thể chứa đựng những liên kết
                tới những website khác ("Các Trang Liên Kết"). Những Trang Liên Kết này không thuộc thẩm quyền của
                Travel và Travel không chịu trách nhiệm về nội dung của bất cứ Trang Liên Kết nào, bao gồm
                cả giới hạn của bất cứ liên kết nào bên trong mỗi Trang Liên Kết, hay bất cứ thay đổi hoặc cập nhật
                nào của mỗi Trang Liên Kết. Travel không chịu
                trách nhiệm về bất cứ một sự chuyển giao nào từ bất cứ một Trang Liên Kết nào. Travel đang cung cấp
                những liên kết này đến bạn chỉ như là một
                tiện nghi, và các thành phần bên trong của bất cứ liên kết nào không bao hàm sự chứng thực bởi Travel về
                tổ chức cũng như những hoạt động của
                nó.<br><br>
                <span class="SubHead">Không chấp nhận các hành vi sử dụng trái pháp luật hoặc bị cấm</span><br><br>
                Như là một điều kiện của việc sử dụng trang web Travel, bạn bảo đảm với Travel rằng bạn
                sẽ không sử dụng trang web Travel cho bất cứ
                mục đích trái pháp luật hoặc bị cấm bởi những điều khoản này. Bạn không thể sử dụng trang web Travel
                bằng bất cứ cách nào có thể gây tổn hại, gây
                quá tải hay gây ảnh hưởng tới sự vận hành của Travel hoặc gây trở ngại đến việc sử dụng của những người
                khác đối với Travel . Bạn không được lấy hoặc cố lấy bất cứ thành phần hoặc thông tin
                nào không được cung cấp có chủ đích bởi Travel dưới mọi hình thức.<br><br>
                <span class="SubHead">Sử dụng những dịch vụ thông tin</span><br><br>
                Trang web Travel có thể chứa những dịch vụ
                bảng thông báo, khu vực tán gẫu, nhóm tin, diễn đàn, các trang web cá nhân, lịch, và/hoặc những
                thông điệp hay những phương tiện thông tin được thiết kế cho phép bạn giao lưu với công chúng hoặc
                một nhóm người. Bạn đồng ý sử dụng những dịch vụ thông tin chỉ để thông báo, gửi và nhận các thông
                điệp, những thành phần phù hợp và liên quan đến một Dịch vụ Thông tin cụ thể. Bạn đồng ý là khi sử
                dụng một Dịch vụ Thông tin, bạn sẽ không:<br><br>
                <ul>
                    <li>
                        Phỉ báng, lăng mạ, quấy rối, đe doạ hoặc xâm phạm đến những quyền lợi hợp pháp (như quyền
                        riêng tư và quyền công khai) của người khác.<br><br>
                    </li>
                    <li>
                        Phổ biến, tải lên, truyền bá, gieo rắc bất cứ chủ đề, tên, thành phần hoặc thông tin không
                        phù hợp, mang tính báng bổ, xỉ nhục, tục tĩu, không đứng đắn hoặc trái pháp luật<br>
                        <br>
                    </li>
                    <li>
                        Tải lên những file bao gồm những phần mềm hoặc các thành phần khác được bảo vệ bởi luật sở
                        hữu trí tuệ (hoặc bởi quyền riêng tư) trừ khi bạn có tất cả những quyền đó hoặc đã nhận được
                        đủ sự đồng ý cần thiết.<br>
                        <br>
                    </li>
                    <li>
                        Tải lên những file chứa virus, file lỗi, hoặc bất cứ phần mềm hoặc chương trình tương tự nào
                        khác có thể gây tổn hại đến sự vận hành của các máy tính khác.<br>
                        <br>
                    </li>
                    <li>
                        Quảng cáo, rao bán hoặc mua bất cứ hàng hoá hoặc dịch vụ vì bất cứ mục đích thương mại nào
                        trừ khi những Dịch vụ Thông tin đó đặc biệt cho phép những thông điệp đó.<br>
                        <br>
                    </li>
                    <li>
                        Tải xuống bất cứ file nào được đưa lên bởi người sử dụng của Dịch vụ Thông tin khác mà bạn
                        biết hoặc đáng lẽ phải biết, là không thể được truyền bá một cách hợp pháp theo cách đó.<br>
                        <br>
                    </li>
                    <li>
                        Làm sai hoặc xoá thẩm quyền tác giả, thông cáo pháp luật hoặc dấu hiệu chủ quyền hoặc nhãn
                        mác của nguồn ban đầu của phần mềm hoặc những thành phần khác chứa đựng bên trong một file
                        được tải lên.<br>
                        <br>
                    </li>
                    <li>
                        Giới hạn hoặc ngăn cấm bất cứ người nào khác sử dụng những Dịch vụ Thông tin.<br>
                        <br>
                    </li>
                    <li>
                        Xâm phạm bất cứ chỉ số hạnh kiểm hoặc bất cứ nguyên tắc chỉ đạo nào khác có thể được áp dụng
                        cho một Dịch vụ Thông tin cụ thể.<br>
                        <br>
                    </li>
                    <li>
                        Thu thập những thông tin cá nhân của người khác như email, địa chỉ,... mà không được người
                        đó cho phép.<br>
                        <br>
                    </li>
                    <li>
                        Xâm phạm các quy tắc, điều lệ đang được áp dụng.</li>
                </ul>
                Travel không có nghĩa vụ giám sát các Dịch vụ
                Thông tin. Tuy nhiên, Travel có quyền xem xét
                các thành phần được đưa lên một Dịch vụ Thông tin và có quyền loại bỏ bất cứ thành phần nào tuỳ ý.
                Travel có quyền chấm dứt sự truy cập của bạn
                vào mỗi Dịch vụ Thông tin hoặc tất cả vào bất cứ lúc nào mà không cần thông báo vì bất cứ lí do
                gì.<br><br>
                Travel có quyền vào mọi lúc tiết lộ bất cứ
                thông tin nào nếu cần thiết để đáp ứng luật pháp, quy định hoặc những quá trình hợp pháp hoặc yêu
                cầu của nhà chức trách, hoặc sửa đổi, từ chối đưa lên hoặc loại bỏ bất cứ thông tin hoặc thành phần
                nào, toàn bộ hoặc một phần, tuỳ ý của Travel .<br><br>
                Luôn luôn cẩn trọng khi đưa ra bất cứ thông tin cá nhân nào về chính bạn hoặc con cái bạn ở bất cứ
                Dịch vụ Thông tin nào. Travel không kiểm soát
                hay chứng thực nội dung, các thông điệp hoặc thông tin tìm được ở bất cứ Dịch vụ Thông tin nào, vì
                thế, Travel từ chối bất cứ trách nhiệm pháp lý
                nào có liên quan đến các Dịch vụ Thông tin và bất cứ hành động nào là hệ quả từ sự tham gia của bạn
                vào bất cứ Dịch vụ Thông tin nào. Những người quản lý host không được uỷ quyền là người phát ngôn
                của Travel , vì thế quan điểm của họ không
                nhất thiết là sự phản ánh quan điểm của Travel .<br><br>
                Cách thành phần được tải lên một Dịch vụ Thông tin có thể bị giới hạn về chức năng sử dụng, sự sao
                chép và / hoặc sự phổ biến. Bạn chịu trách nhiệm tôn trọng những giới hạn đó nếu bạn tải xuống các
                thành phần.<br><br>
                <span class="SubHead">Các thành phần được cung cấp cho Travel hoặc được đưa lên các website của Travel
                </span><br><br>
                Travel không yêu cầu quyền sở hữu của các
                thành phần bạn cung cấp cho Travel (bao gồm cả
                những phản hồi và những đề nghị, gợi ý) hoặc đưa lên, tải lên, nhập vào bất cứ website
                Travel nào hoặc các dịch vụ liên quan. Tuy nhiên, bằng sự
                đưa lên, tải lên, nhập vào các thông tin bạn cho phép Travel, các công ty chi nhánh của nó được phép sử
                dụng những thông tin đó trong mối liên hệ với những hoạt động thương mại Internet bao gồm, mà không có
                giới hạn, quyền được: sao lưu, phân
                phối, chuyển giao, đưa lên công chúng, thi hành công khai, mô phỏng, biên tập, dịch và sắp xếp lại
                những thông tin đó, và phổ biến tên tuổi của bạn gắn liền với tài liệu.<br><br> Không có sự bồi hoàn
                nào liên quan đến việc sử dụng của những thông tin, như đã nói ở đây. Travel không chịu trách nhiệm đưa
                lên hoặc sử dụng những thông tin bạn
                cung cấp và có thể loại bỏ bất cứ thông tin nào vào bất cứ thời điểm nào Travel muốn.<br><br> Bằng việc
                đưa lên, tải lên, nhập vào những thông tin ấy bạn bảo đảm là bạn sở hữu hoặc kiểm soát mọi quyền liên
                quan đến thông tin của bạn như đã nói ở
                phần này bao gồm, mà không có giới hạn, mọi quyền cần thiết cho bạn để cung cấp, đưa lên, tải lên,
                nhập vào những thông tin đó.<br><br>
                <span class="SubHead">Sự từ bỏ trách nhiệm pháp lý</span><br><br>
                Những thông tin, phần mềm, sản phẩm và dịch vụ bao gồm bên trong hoặc sẵn có ở Travel có thể bao gồm
                những sự thiếu chính xác hoặc lỗi đánh máy,
                những thay đổi sẽ được định kỳ thêm vào những thông tin ở đây. Travel
                và những nhà cung cấp của nó có thể cải tiến và/hoặc thay đổi những nội
                dung bên trong Travel vào bất cứ lúc nào.
                Những lời khuyên nhận được từ Travel không nên
                được dựa vào để ra những quyết định cá nhân, y tế, luật pháp hoặc tài chính và bạn nên hỏi ý kiến
                của những chuyên gia thích hợp cho những lời khuyên về hoàn cảnh của bạn.<br><br> Travel và/hoặc những
                nhà cung cấp của nó không đại diện cho sự
                phù hợp, sự đáng tin cậy, sự có sẵn, hạn định và sự chính xác của những thông tin, phần mềm, sản
                phẩm, dịch vụ và những hình ảnh có liên quan chứa đựng bên trong Travel
                vì bất cứ mục đích nào. Mở rộng ra theo những luật lệ hiện hành, tất cả
                những thông tin phần mềm, sản phẩm, dịch vụ và những hình ảnh có liên quan được cung cấp “là chính
                nó” mà không có một sự bảo đảm hoặc điều kiện trên bất cứ hình thức nào. Travel và/hoặc những nhà cung
                cấp của nó do đó từ chối mọi bảo đảm và điều
                kiện liên quan đến những thông tin, phần mềm, sản phẩm, dịch vụ và những hình ảnh liên quan này, bao
                gồm tất cả những bảo đảm hoặc điều kiện mặc nhiên của tính có thể bán được của những thông tin, phần
                mềm, dịch vụ và những hình ảnh có liên quan.<br><br>Mở rộng ra theo những luật lệ hiện hành, trong
                bất cứ trường hợp nào Travel và/hoặc những nhà
                cung cấp của nó không chịu trách nhiệm cho bất cứ tổn hại trực tiếp, không trực tiếp, do sự trừng
                phạt, tổn hại do tai nạn, tổn hại vì một lý do đặc biết, tổn hại tự phát hay bất cứ tổn hại nào bao
                gồm cả tổn hại do mất mát về sử dụng, dữ liệu hay lợi nhuận, phát sinh bên ngoài hoặc bên trong bất
                cứ cách nào liên quan đến việc sử dụng hay thi hành của Travel . Nếu bạn không hài lòng với bất cứ điều
                khoản nào của Travel hoặc với bất cứ điều khoản nào sử dụng trong này, cách giải quyết
                duy nhất của bạn là ngừng sử dụng website này.<br><br>Liên hệ dịch vụ:
                minhhoangse6@gmail.com<br><br><span class="SubHead">Kết thúc/Giới hạn truy cập</span><br><br>
                Travel có quyền đơn phương chấm dứt hoặc hạn chế
                truy cập của bạn vào website của Travel và
                những dịch vụ có liên quan hoặc bất cứ phần nào trong đó vào bất cứ lúc nào, mà không cần thông báo.
                Việc sử dụng của Travel không được cho phép ở
                bất cứ quyền hạn nào không có hiệu lực cho tất cả các điều khoản này, bao gồm cả sự không giới hạn
                của văn bản này. Bạn đồng ý là không có bất kỳ một sự liều lĩnh tập thể, bè phái, tuyển dụng, hoặc
                quan hệ môi giới nào tồn tại giữa bạn và Travel
                như là một kết quả của bản thoả thuận này. Hoạt động của Travel
                phản ánh pháp luật hiện hành và những quá trình luật pháp, không có gì chứa
                đựng trong bản thoả thuận này cản trở quyền Travel tuân theo pháp luật hoặc các quá trình luật pháp liên
                quan đến việc sử dụng của bạn về Travel hoặc
                những thông tin được cung cấp cho hoặc được thu thập bởi Travel có liên quan đến việc
                sử dụng đó. Nếu phần nào của bản thoả thuận này được xác định là sai trái hoặc không thể thực hiện
                được trong pháp luật hiện hành bao gồm, nhưng không giới hạn ở, sự từ bỏ trách nhiệm pháp lý và
                những giới hạn pháp lý đã được thiết lập trước đó, thì những điều khoản sai trái hoặc không thể thực
                thi được sẽ được cho là được thay thế bởi những điều khoản đúng đắn, có thể thực thi gần nhất với dự
                định của những điều khoản cũ và những thoả thuận còn lại sẽ tiếp tục có hiệu lực. Trừ khi được chỉ
                rõ ở đây, bản thoả thuận này cấu thành tất cả những thoả thuận còn lại giữa người sử dụng và Travel với
                sự liên quan với Travel và nó thay thế tất cả những liên lạc và thoả thuận trước đó và
                đương thời, dù là điện tử, nói miệng hay viết tay, giữa người sử dụng và Travel trong mối liên quan với
                Travel . Một bản in của bản thoả thuận này và tất cả các chú ý dưới dạng điện tử sẽ được
                thừa nhận theo luật pháp hoặc những quá trình quản lý dựa vào hoặc liên quan đến bản thoả thuận này
                đưa ra trong cùng điều kiện như những văn bản thương mại khác và được ghi theo nguyên bản và duy trì
                trên bản in. Chính mong muốn của các bên là văn bản này và những tài liệu liên quan được in ở tiếng
                Việt.<br><br>
                <span class="SubHead">Những chú ý về bản quyền và thương hiệu:</span><br><br> Tất cả nội dung của
                Travel là: Copyright by Travel và /
                hoặc các nhà cung cấp của nó. All rights reserved.<br><br>
                <span class="SubHead">Thương hiệu</span><br><br> Tên của các công ty và các sản phẩm đề cập đến ở
                đây có thể là thương hiệu của từng chủ nhân của nó.<br><br> Những công ty, tổ chức, sản phẩm, người
                và sự kiện ví dụ được miêu tả ở đây là hư cấu. Không có sự liên quan nào với các công ty, tổ chức ,
                sản phẩm, cá nhân hoặc sự kiện là có chủ đích hoặc hàm ý.<br><br> Tất cả các quyền lợi không được
                trực tiếp công nhận ở đây đều được tôn trọng.<br>
            </div>
    </div>
    </section>
    <!-- page title area end -->
    @include('clients.blocks.footer')
