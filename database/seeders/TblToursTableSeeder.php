<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblToursTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_tours')->delete();
        
        \DB::table('tbl_tours')->insert(array (
            0 => 
            array (
                'tourId' => 1,
                'title' => 'BIỂN ĐẢO 3N2Đ | PHÚ QUỐC',
                'time' => '3 ngày 2 đêm',
                'description' => '',
                'quantity' => 38,
                'priceAdult' => 4290000.0,
                'priceChild' => 3220000.0,
                'destination' => 'Rạch Giá',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-03-24',
                'endDate' => '2025-04-30',
                'weatherDestination' => 'Phú Quốc',
            ),
            1 => 
            array (
                'tourId' => 2,
                'title' => 'MIỀN BẮC 4N3Đ | HÀ NỘI – LÀO CAI – SA PA',
                'time' => '4 ngày 3 đêm',
                'description' => '',
                'quantity' => 49,
                'priceAdult' => 5990000.0,
                'priceChild' => 4195000.0,
                'destination' => 'Hà Nội',
                'domain' => 'b',
                'availability' => 1,
                'startDate' => '2025-03-26',
                'endDate' => '2025-03-30',
                'weatherDestination' => 'Lào Cai',
            ),
            2 => 
            array (
                'tourId' => 3,
                'title' => 'BIỂN ĐẢO 3N2Đ | CÔN ĐẢO',
                'time' => '3 ngày 2 đêm',
                'description' => '',
                'quantity' => 50,
                'priceAdult' => 4250000.0,
                'priceChild' => 3180000.0,
                'destination' => 'Bà Rịa',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-03-23',
                'endDate' => '2025-04-30',
                'weatherDestination' => NULL,
            ),
            3 => 
            array (
                'tourId' => 4,
                'title' => 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ',
                'time' => '4 ngày 3 đêm',
                'description' => '',
                'quantity' => 43,
                'priceAdult' => 3990000.0,
                'priceChild' => 2990000.0,
                'destination' => 'Đà Nẵng',
                'domain' => 't',
                'availability' => 1,
                'startDate' => '2025-03-18',
                'endDate' => '2025-04-23',
                'weatherDestination' => 'Huế',
            ),
            4 => 
            array (
                'tourId' => 5,
                'title' => 'MIỀN BẮC 5N4Đ | HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA',
                'time' => '5 ngày 4 đêm',
                'description' => '',
                'quantity' => 50,
                'priceAdult' => 6190000.0,
                'priceChild' => 4650000.0,
                'destination' => 'Hạ Long',
                'domain' => 'b',
                'availability' => 1,
                'startDate' => '2025-03-18',
                'endDate' => '2025-04-21',
                'weatherDestination' => 'Ninh Bình',
            ),
            5 => 
            array (
                'tourId' => 6,
                'title' => 'Quy Nhơn - Kỳ Co - Eo Gió - Làng Chài Nhơn Lý - Trung Tâm Khám Phá Khoa Học - Bảo Tàng Quang Trung - Thưởng Thức Trống Trận',
                'time' => '3 ngày 2 đêm',
                'description' => '',
                'quantity' => 28,
                'priceAdult' => 3290000.0,
                'priceChild' => 2290000.0,
                'destination' => 'Quy Nhơn ',
                'domain' => 't',
                'availability' => 1,
                'startDate' => '2025-03-20',
                'endDate' => '2025-03-22',
                'weatherDestination' => NULL,
            ),
            6 => 
            array (
                'tourId' => 7,
                'title' => '“Biển nắng Nha Trang - Sắc hoa Đà Lạt” - Làng nghề Trường Sơn - Làng Yến - Fresh Garden',
                'time' => '5 ngày 4 đêm',
                'description' => '',
                'quantity' => 44,
                'priceAdult' => 4790000.0,
                'priceChild' => 2395000.0,
                'destination' => 'Nha Trang',
                'domain' => 't',
                'availability' => 1,
                'startDate' => '2025-03-20',
                'endDate' => '2025-03-31',
                'weatherDestination' => 'Đà Lạt',
            ),
            7 => 
            array (
                'tourId' => 8,
                'title' => 'Mỹ Tho - Thới Sơn - Cồn Phụng - Bến Tre',
                'time' => '2 ngày 1 đêm',
                'description' => '',
                'quantity' => 29,
                'priceAdult' => 669000.0,
                'priceChild' => 469000.0,
                'destination' => 'Bến Tre',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-03-20',
                'endDate' => '2025-03-21',
                'weatherDestination' => NULL,
            ),
            8 => 
            array (
                'tourId' => 9,
                'title' => 'Caravan Sinh Thái: Vườn quốc gia Nam Cát Tiên - Thiên nhiên vẫy gọi',
                'time' => '2 ngày 1 đêm',
            'description' => '<p><strong>Vườn quốc gia Cát Tiên</strong> là một khu bảo tồn thiên nhiên nằm trên địa bàn 3 huyện: Vĩnh Cửu , Bình Phước cách Thành phố Hồ Chí Minh 150 km về phía bắc. Đặc trưng của vườn quốc gia này là rừng đất thấp ẩm ướt nhiệt đới. Được thành lập theo quyết định số 01/CT ngày 13 tháng 1 năm 1992 của Thủ tướng chính phủ Việt Nam trên cơ sở kết nối khu rừng cấm Nam Cát Tiên (được thành lập theo quyết định số 360/TTg, ngày 7 tháng 7 năm 1978 của Thủ tướng chính phủ) và khu bảo tồn thiên nhiên Tây Cát Tiên (được thành lập theo quyết định số 194/CT, ngày 9 tháng 8 năm 1986 của Chủ tịch Hội đồng Bộ trưởng). Vườn quốc gia Cát Tiên nằm ở khu vực có toạ độ từ 11°20′50" tới 11°50′20" vĩ bắc, và từ 107°09′05" tới 107°35′20" kinh đông, trên địa bàn của ba tỉnh Lâm Đồng, Đồng Nai và Bình Phước với tổng diện tích là 71.920 ha. Hiện nay, VQG Cát Tiên là một trong những khu dự trữ sinh quyển thế giới ở Việt Nam.</p>

<p>VQG là " ngôi nhà" của 300 loài chim chiếm gần 50% số loài tại Việt Nam. Hơn 450 loài bướm chiếm hơn 50% số loài tại Việt Nam.</p>

<p>Nơi đây còn có trạm cứu hộ linh trưởng nguy cấp Đảo Tiên ( Đảo Tiên có diện tích là 57 ha ) có nhiều loài động vật quý hiếm như : vượn đen má vàng, voọc bạc, voọc chà vá chân đen, cu li nhỏ...</p>',
                'quantity' => 17,
                'priceAdult' => 2790000.0,
                'priceChild' => 2390000.0,
                'destination' => 'Biên Hòa',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-03-24',
                'endDate' => '2025-03-25',
                'weatherDestination' => NULL,
            ),
            9 => 
            array (
                'tourId' => 10,
                'title' => 'Đà Nẵng - Quảng Ngãi - đảo Lý Sơn - 2 ngày 1 đêm',
                'time' => '2 ngày 1 đêm',
                'description' => '',
                'quantity' => 27,
                'priceAdult' => 2990000.0,
                'priceChild' => 1990000.0,
                'destination' => 'Đà Nẵng',
                'domain' => 't',
                'availability' => 1,
                'startDate' => '2025-04-21',
                'endDate' => '2025-05-14',
                'weatherDestination' => 'Quãng Ngãi',
            ),
            10 => 
            array (
                'tourId' => 11,
                'title' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
                'time' => '1 ngày',
                'description' => '',
                'quantity' => 49,
                'priceAdult' => 1500000.0,
                'priceChild' => 700000.0,
                'destination' => 'Đà Nẵng',
                'domain' => 't',
                'availability' => 1,
                'startDate' => '2025-04-20',
                'endDate' => '2025-05-24',
                'weatherDestination' => 'Tam Kỳ',
            ),
            11 => 
            array (
                'tourId' => 12,
                'title' => 'Hà Nội - Vịnh Hạ Long - Chùa Bái Đính - Tràng An - Tuyệt Tịnh Cốc',
                'time' => '4 ngày 3 đêm',
                'description' => '<ul>
<li>Đặt ch&acirc;n đến&nbsp;<strong>Quảng Ninh</strong>&nbsp;- tỉnh đầu ti&ecirc;n c&oacute; 4 th&agrave;nh phố: Hạ Long, M&oacute;ng C&aacute;i, U&ocirc;ng B&iacute; v&agrave; Cẩm Phả tạo n&ecirc;n th&agrave;nh phố du lịch kh&ocirc;ng chỉ nổi tiếng về biển như Vịnh Hạ Long với h&agrave;ng ngh&igrave;n đảo đ&aacute; nhấp nh&ocirc; tr&ecirc;n s&oacute;ng nước lung linh huyền ảo, những hang động tuyệt đẹp, những b&atilde;i tắm hoang sơ, l&agrave;n nước m&aacute;t lạnh trong veo đặc trưng của v&ugrave;ng đảo C&ocirc; T&ocirc;, Soi Sim, ... Kh&ocirc;ng những thế, Quảng Ninh c&ograve;n hấp dẫn du kh&aacute;ch về kh&ocirc;ng kh&iacute; m&aacute;t mẻ của v&ugrave;ng n&uacute;i thi&ecirc;ng Y&ecirc;n Tử nơi hội tụ t&acirc;m linh, văn h&oacute;a v&agrave; kh&ocirc;ng gian nghỉ dưỡng đỉnh cao. Nếu bạn y&ecirc;u sự hoang sơ của thi&ecirc;n nhi&ecirc;n, kh&ocirc;ng gian tho&aacute;ng m&aacute;t th&igrave; h&atilde;y thử một lần gh&eacute; thăm cao nguy&ecirc;n B&igrave;nh Li&ecirc;u, được v&iacute; von như &ldquo;Sapa v&ugrave;ng đất than&rdquo;, với c&aacute;c cột mốc bi&ecirc;n giới v&agrave; d&atilde;y &ldquo;cờ cỏ lau&rdquo; hay con đường &ldquo;Sống lưng khủng long&rdquo; chạy dọc đường tuần bi&ecirc;n lu&ocirc;n l&agrave; điểm dừng y&ecirc;u th&iacute;ch của du kh&aacute;ch trong v&agrave; ngo&agrave;i tỉnh.&nbsp;</li>
<li><strong>Ninh Bình</strong>&nbsp;- vùng đ&acirc;́t &ldquo;Nơi mơ đ&ecirc;́n, ch&ocirc;́n mong v&ecirc;̀&rdquo; ghi d&acirc;́u &acirc;́n với Qu&acirc;̀n th&ecirc;̉ danh thắng Tràng An - Di sản văn hóa thi&ecirc;n nhi&ecirc;n th&ecirc;́ giới, đi thuy&ecirc;̀n chèo tham quan h&ecirc;̣ th&ocirc;́ng thạch nhũ trong hang động v&agrave; di t&iacute;ch Đền Trần; uy nghi&ecirc;m trầm mặc với quần thể ch&ugrave;a B&aacute;i Đ&iacute;nh, ẩn m&igrave;nh thanh tịnh sau hang động với Tuyệt tịnh cốc, &hellip;</li>
</ul>',
                'quantity' => 40,
                'priceAdult' => 9590000.0,
                'priceChild' => 9090000.0,
                'destination' => 'Hà Nội',
                'domain' => 'b',
                'availability' => 1,
                'startDate' => '2025-04-22',
                'endDate' => '2025-05-31',
                'weatherDestination' => 'Ninh Bình',
            ),
            12 => 
            array (
                'tourId' => 24,
                'title' => 'Trải Nghiệm Câu Mực Đêm Phú Quốc',
                'time' => '1 ngày 1 đêm',
                'description' => '<p>Điểm nhấn của chương tr&igrave;nh</p>

<p>- Gi&aacute; hấp dẫn cho kh&aacute;ch h&agrave;ng muốn trải nghiệm</p>

<p>- Đắm ch&igrave;m trong kh&ocirc;ng gian ho&agrave;ng h&ocirc;n rực rỡ tr&ecirc;n đảo Ph&uacute; Quốc v&agrave; thưởng thức bữa tối l&atilde;ng mạn trong bầu trời đ&ecirc;m huyền ảo.</p>

<p>-&nbsp;Những bức ảnh check in tuyệt đẹp khiến bạn b&egrave; kh&ocirc;ng khỏi ganh tỵ trước h&igrave;nh ảnh cuộc sống về đ&ecirc;m của c&aacute;c ngư phủ vẫn đang hối hả với những &aacute;nh đ&egrave;n lung linh ngo&agrave;i khơi xa; du kh&aacute;ch trải nghiệm buổi học kỹ thuật c&acirc;u mực từ ngư d&acirc;n v&agrave; c&oacute; cơ hội ch&iacute;nh tay c&acirc;u được những con mực đang săn mồi dưới biển.</p>

<p>- Thưởng thức chiến lợi phẩm vừa c&acirc;u được.</p>',
                'quantity' => 30,
                'priceAdult' => 350000.0,
                'priceChild' => 300000.0,
                'destination' => 'Rạch Giá',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-04-22',
                'endDate' => '2025-05-22',
                'weatherDestination' => 'Phú Quốc',
            ),
            13 => 
            array (
                'tourId' => 25,
                'title' => 'Hà Nội - Bắc Cạn - Ba Bể - Cao Bằng - Thác Bản Giốc - Lạng Sơn',
                'time' => '6 ngày 5 đêm',
                'description' => '<p>H&agrave; Nội - Bắc Cạn - Ba Bể - Cao Bằng - Th&aacute;c Bản Giốc - Lạng Sơn</p>',
                'quantity' => 50,
                'priceAdult' => 12500000.0,
                'priceChild' => 11500000.0,
                'destination' => 'Hà Nội',
                'domain' => 'b',
                'availability' => 1,
                'startDate' => '2025-04-24',
                'endDate' => '2025-05-22',
                'weatherDestination' => 'Lạng Sơn',
            ),
            14 => 
            array (
                'tourId' => 26,
                'title' => 'Phu Quoc: Vinwonder Entertainment Paradise - Safari World - Hon Thom Nature Park - Coastal Cable Car - Aquatopia Water Park',
                'time' => '3 ngày 2 đêm',
                'description' => '<h2>Phu Quoc: Vinwonder Entertainment Paradise - Safari World - Hon Thom Nature Park - Coastal Cable Car - Aquatopia Water Park</h2>',
                'quantity' => 50,
                'priceAdult' => 6500000.0,
                'priceChild' => 6000000.0,
                'destination' => 'Rạch Giá',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-04-23',
                'endDate' => '2025-06-23',
                'weatherDestination' => 'Phú Quốc',
            ),
            15 => 
            array (
                'tourId' => 27,
                'title' => 'Du lịch Nha Trang mùa Xuân - Tháp Bà Ponagar - Chùa Long Sơn - Vinwonders',
                'time' => '3 ngày 2 đêm',
                'description' => '<p><em><strong>Du lịch Nha Trang m&ugrave;a Xu&acirc;n - Th&aacute;p B&agrave; Ponagar - Ch&ugrave;a Long Sơn - Vinwonders từ S&agrave;i G&ograve;n 2025</strong>.&nbsp;M&ugrave;a xu&acirc;n 2025, h&atilde;y c&ugrave;ng ch&uacute;ng t&ocirc;i kh&aacute;m ph&aacute; vẻ đẹp quyến rũ của Nha Trang với h&agrave;nh tr&igrave;nh xuất ph&aacute;t từ S&agrave;i G&ograve;n. Tham quan Th&aacute;p B&agrave; Ponagar cổ k&iacute;nh, nơi lưu giữ n&eacute;t văn h&oacute;a Chăm độc đ&aacute;o, gh&eacute; thăm Ch&ugrave;a Long Sơn thanh tịnh với tượng Phật trắng nổi tiếng. Đặc biệt, trải nghiệm kh&ocirc;ng gian giải tr&iacute; đẳng cấp tại VinWonders &ndash; thi&ecirc;n đường vui chơi giải tr&iacute; h&agrave;ng đầu. Một chuyến đi hứa hẹn sẽ mang đến những kỷ niệm kh&oacute; qu&ecirc;n v&agrave; những gi&acirc;y ph&uacute;t thư gi&atilde;n tuyệt vời b&ecirc;n gia đ&igrave;nh, bạn b&egrave;!</em></p>',
                'quantity' => 32,
                'priceAdult' => 6000000.0,
                'priceChild' => 5500000.0,
                'destination' => 'Nha Trang',
                'domain' => 'n',
                'availability' => 1,
                'startDate' => '2025-04-23',
                'endDate' => '2025-05-30',
                'weatherDestination' => 'Hồ Chí Minh',
            ),
        ));
        
        
    }
}