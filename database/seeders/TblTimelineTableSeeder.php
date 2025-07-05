<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblTimelineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_timeline')->delete();
        
        \DB::table('tbl_timeline')->insert(array (
            0 => 
            array (
                'timeLineId' => 1,
                'tourId' => 3,
                'title' => 'Du Lịch Côn Đảo [Khám Phá Côn Đảo – Bảo Vệ Rùa Biển]',
            'description' => 'Tour này có gì hay- Đến với Côn Đảo (hay với các tên khác như Côn Sơn, Côn Lôn) đã gợi cho người nghe hình ảnh mịt mù của một khu vực xa xôi, mờ mịt, có lúc được ví như địa ngục trần gian nổi tiếng từ thời Pháp thuộc đến giữa năm 1975. 
- Tham quan Hồ ấp trứng rùa nhân tạo, nghe giới thiệu về vòng đời rùa biển và công tác bảo tồn rùa biển thành công nhất Việt Nam của Vườn quốc gia Côn Đảo.
- Khởi hành Thứ 6 cách tuần.',
            ),
            1 => 
            array (
                'timeLineId' => 2,
                'tourId' => 4,
                'title' => 'TP. HCM – ĐÀ NẴNG – SƠN TRÀ',
            'description' => 'Đón Quý khách tại sân bay Tân Sơn Nhất, đáp chuyến bay khởi hành đi Đà Nẵng (các chuyến bay dự kiến chuyến bay từ 07:00 – 09:30). Đến Đà Nẵng, xe và HDV đón khách.

Ăn trưa đặc sản Đà Nẵng “Bánh tráng thịt heo 2 đầu da & mì Quảng”. Nhận phòng, nghỉ ngơi.

Buổi chiều, khởi hành tham quan bán đảo Sơn Trà ngắm phố biển từ trên cao.

Viếng Linh Ứng Tự – nơi có tượng Phật Bà cao 67 mét cao nhất Việt Nam.
Công viên kỳ quan thế giới Đà Nẵng – công trình thu nhỏ mô phỏng 9 kỳ quan thế giới và các địa danh nổi tiếng tại Việt Nam.
Tắm biển Mỹ Khê – từng được tạp chí Forbes bình chọn là bãi biển quyến rũ nhất hành tinh.
Ăn tối. Tự do thưởng ngoạn du thuyền sông Hàn ngắm cảnh Đà Thành về đêm. (chi phí tự túc)',
            ),
            2 => 
            array (
                'timeLineId' => 3,
                'tourId' => 4,
                'title' => 'ĐÀ NẴNG - PHỐ CỔ HỘI AN',
                'description' => 'Ăn sáng buffet tại khách sạn. Khởi hành tham quan:

Công viên vườn tượng Apec Đà Nẵng – công trình thể hiện tinh thần hội nhập quốc tế và khát vọng vươn xa của người dân Đà Nẵng.
Cầu Tình Yêu và check-in với biểu tượng Cá Chép Hóa Rồng, cầu Rồng Đà Nẵng…
Chùa Quan Thế Âm – tọa lạc tại chân núi Kim Sơn, một trong năm ngọn Ngũ Hành Sơn.
Làng nghề điêu khắc đá và mua sắm tại cửa hàng đặc sản Miền Trung.
Ăn trưa. Khởi hành tham quan:

Phố cổ Hội An – du khách tản bộ khám phá các công trình kiến trúc nổi tiếng: Chùa Cầu Nhật Bản, các ngôi nhà cổ hàng trăm tuổi, Hội Quán Phước Kiến, Xưởng thủ công mỹ nghệ. Phố cổ Hội An là quá khứ vàng son của một thương cảng sầm uất thời phong kiến.
Ăn tối. Khởi hành về lại Đà Nẵng. Tự do khám phá Đà Nẵng về đêm. Nghỉ đêm tại Đà Nẵng.',
            ),
            3 => 
            array (
                'timeLineId' => 4,
                'tourId' => 4,
                'title' => 'ĐÀ NẴNG – BÀ NÀ – HUẾ',
                'description' => 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:

Khu du lịch Bà Nà Hills – chinh phục Bà Nà bằng hệ thống cáp treo một dây dài nhất thế giới 5.801m và là một trong 10 tuyến cáp treo ấn tượng nhất thế giới. Bà Nà là nơi có những khoảnh khoắc giao mùa bất ngờ Xuân – Hạ – Thu – Đông trong một ngày.
(chi phí cáp treo Bà Nà tự túc)

Chùa Linh Ứng với tượng Phật Thích Ca cao 27m, đền thờ Bà Chúa Mẫu Thượng Ngàn.
Cầu Vàng – cây cầu độc đáo nằm trong vườn Thiên Thai, được xây dựng trên độ cao 1.400m so với mặt nước biển, được nâng đỡ bởi kiến trúc hình đôi bàn tay khổng lồ độc đáo.
Công viên Fantasy Park với hơn 100 trò chơi phiêu lưu hấp dẫn, mang đến cho quý khách nhiều cung bậc cảm xúc bất ngờ và thú vị.
Ăn trưa buffet tại Bà Nà (chi phí tự túc).

*Giá combo vé cáp treo Bà Nà Hills + vé buffet trưa tham khảo: 1,250,000VNĐ/ người.

(Nếu quý khách không tham quan Bà Nà thì tự túc ăn trưa và tự túc chi phí nhập đoàn tại điểm hẹn).

Khởi hành đi Huế đi xuyên hầm đường bộ đèo Hải Vân. Trên đường di chuyển, chụp hình lưu niệm tại Làng chài Lăng Cô. Đến Huế, nhận phòng khách sạn.

Ăn tối với đặc sản xứ Huế (Bánh bèo, lọc, nậm, khoái…). Xuống thuyền Rồng thưởng thức Ca Huế trên sông Hương – nét văn hóa độc đáo của xứ Huế. Nghỉ đêm tại Huế.',
            ),
            4 => 
            array (
                'timeLineId' => 5,
                'tourId' => 4,
                'title' => 'HUẾ – ĐÀ NẴNG – TP. HCM',
                'description' => 'Ăn sáng buffet tại khách sạn. Trả phòng. Khởi hành tham quan:

Đại Nội – Hoàng cung triều Nguyễn, được xây dựng từ đầu thế kỷ XIX đến nửa đầu thế kỷ XX, là một trong số các di tích thuộc cụm Quần thể di tích Cố đô Huế được công nhận là Di sản Văn hoá Thế giới UNESCO từ năm 1993. Toàn cảnh Đại Nội Huế còn lưu giữ nhiều dấu ấn đặc sắc của triều đình phong kiến nhà Nguyễn hàng trăm năm.
Chùa Thiên Mụ cổ kính là nơi lưu giữ nhiều cổ vật có giá trị về mặt lịch sử và nghệ thuật.
Ăn trưa. Tham quan:

Làng hương Thủy Xuân – Làng nghề làm hương truyền thống hơn 700 năm của xứ Huế.
Di chuyển ra sân bay đáp chuyến bay về lại TP. HCM. Chia tay đoàn và hẹn gặp lại!

Sân bay Huế (các chuyến bay dự kiến sau 14:30).
Sân bay Đà Nẵng (các chuyến bay dự kiến sau 17:00). 
Các mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.',
            ),
            5 => 
            array (
                'timeLineId' => 6,
                'tourId' => 5,
                'title' => 'TP. HCM – HÀ NỘI',
            'description' => 'Tập trung tại sân bay Tân Sơn Nhất đáp chuyến bay TP. HCM – HÀ NỘI. (Các chuyến bay dự kiến từ 06:00 – 09:00). Xe và HDV đón khách tại sân bay Nội Bài. Di chuyển về trung tâm Hà Nội.

Ăn trưa. Nhận phòng khách sạn. Khởi hành tham quan:

Chùa Trấn Quốc – Ngôi chùa cổ kính nhất miền Bắc với tuổi đời 1.500 năm, nằm trên bán đảo cồn Quy linh thiêng gắn liền với truyền thuyết về hồ Tây, hồ Trúc Bạch.
Đền Ngọc Sơn, cầu Thê Húc, hồ Hoàn Kiếm – chiêm ngưỡng tiêu bản cụ Rùa Hồ Gươm dài 2,1m, ngang 1,2m được trưng bày tại đền Ngọc Sơn.
Văn Miếu – Quốc Tử Giám – được xem là trường Đại học đầu tiên của Việt Nam.
Ăn tối. Tự do khám phá Hà Nội về đêm. Nghỉ đêm tại Hà Nội.',
            ),
            6 => 
            array (
                'timeLineId' => 7,
                'tourId' => 5,
                'title' => 'HÀ NỘI - NINH BÌNH - HẠ LONG',
                'description' => 'Ăn sáng. Trả phòng khách sạn. Khởi hành đi Ninh Bình. Đến Ninh Bình, tham quan:

Chùa Bái Đính – ngôi chùa lớn nhất Việt Nam với 500 pho tượng La Hán, tượng Phật đồng lớn nhất Việt Nam cao 10m nặng 100 tấn. 
Ăn trưa với đặc sản dê núi Ninh Bình. Tiếp tục chương trình tham quan:

Quần thể Danh thắng Tràng An – được UNESCO công nhận là di sản văn hóa và thiên nhiên thế giới. Lên thuyền xuôi dòng Sào Khê uốn lượn giữa những cánh đồng lúa được ví như “Vịnh Hạ Long trên cạn”.
Rời Ninh Bình, khởi hành đi Hạ Long. Đến Hạ Long, nhận phòng khách sạn.

Ăn tối. Tự do khám phá về đêm: Chợ đêm Hạ Long, cầu Bãi Cháy – cây cầu dây văng dài nhất Việt Nam. Nghỉ đêm tại Hạ Long.',
            ),
            7 => 
            array (
                'timeLineId' => 8,
                'tourId' => 5,
                'title' => 'VỊNH HẠ LONG – YÊN TỬ – HÀ NỘI',
                'description' => 'Ăn sáng. Trả phòng khách sạn. Khởi hành tham quan:

Vịnh Hạ Long – Di sản thiên nhiên thế giới được UNESSCO công nhận năm 1994, chiêm ngưỡng vẻ đẹp huyền bí của hàng ngàn đảo đá và các hang động kì thú: Động Thiên Cung, hang Đầu Gỗ, hòn Ấm, hòn Rùa, hòn Đỉnh Hương, hòn Chó Đá, hòn Gà Chọi…
Ăn trưa. Khởi hành tham quan:

Khu danh thắng đất Phật Yên Tử – đất tổ của Thiền Phái Trúc Lâm. Quý khách đi cáp treo tham quan chùa Hoa Yên. (Đã bao gồm vé cáp treo Yên Tử chặng Hoa Yên). Di chuyển xuống núi viếng Am thờ An Kỳ Sinh – nơi thờ vị đạo sĩ nổi tiếng từng đến đỉnh Yên Tử tìm cây thạch xương bồ luyện tiên đan và hóa đá.
Viếng những ngôi cổ tự nổi tiếng như: Chùa Bảo Sái và Chùa Một Mái.
Di chuyển về Hà Nội, dừng chân ở Hải Dương mua sắm đặc sản: bánh Đậu Xanh, bánh cốm…

Ăn tối. Nhận phòng. Tự do tham gia không gian văn hóa Hà thành, hòa nhịp với các ban nhạc đường phố và khám phá ẩm thực phố cổ Hà Nội. (chi phí tự túc) Nghỉ đêm tại Hà Nội.',
            ),
            8 => 
            array (
                'timeLineId' => 9,
                'tourId' => 5,
                'title' => 'HÀ NỘI - SAPA',
                'description' => 'Ăn sáng. Khởi hành đi SaPa – được người Pháp xưa gọi là “Kinh đô mùa hè của xứ Bắc Kỳ”, chạy theo đường cao tốc Nội Bài – Lào Cai dài 245 km. Ngắm phong cảnh tuyệt đẹp trên cung đường Tây Bắc, dừng chân nghỉ ngơi.

Ăn trưa. Khởi hành tham quan:

Khu du lịch Fansipan với hệ thống cáp treo 3 dây hiện đại được khánh thành năm 2016. Trải nghiệm đi cáp treo giữa biển mây, ngắm toàn cảnh Sapa và thung lũng Mường Hoa từ trên cao. Viếng chùa Bảo An với 639 bậc thang, chinh phục “Nóc nhà Đông Dương” – check-in đỉnh Fansipan ở độ cao 3.143m. (Chi phí cáp treo tự túc)
Ăn tối. Nhận phòng. Tự do khám phá SaPa về đêm hoặc thưởng thức các món ăn đặc trưng của đồng bào dân tộc vùng Tây Bắc: Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng…',
            ),
            9 => 
            array (
                'timeLineId' => 10,
                'tourId' => 5,
                'title' => 'SAPA - HÀ NỘI - TP.HCM',
                'description' => 'Ăn sáng. Trả phòng khách sạn. Khởi hành tham quan bản Cát Cát.

Tản bộ khám phá bản Cát Cát của người H’Mông, được người Pháp phát hiện và chọn làm khu nghỉ dưỡng cho các quan chức thuộc địa từ đầu thế kỷ XX. Đến với bản Cát Cát, du khách tham quan: trạm thủy điện Cát Cát, thác nước Cát Cát… Khởi hành về Lào Cai.
Ăn trưa. Tham quan và mua sắm tại chợ vùng biên Cốc Lếu, check-in với cửa khẩu Hà Khẩu nơi tiếp giáp với Trung Quốc. Khởi hành về Hà Nội.

Ăn tối. Di chuyển ra sân bay Nội Bài đáp chuyến bay trở lại TP. HCM.

(Các chuyến bay dự kiến sau 21:00). Kết thúc chương trình tham quan!

Các mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.',
            ),
            10 => 
            array (
                'timeLineId' => 11,
                'tourId' => 1,
                'title' => 'TP. HỒ CHÍ MINH - PHÚ QUỐC',
            'description' => 'Tập trung tại sân bay Tân Sơn Nhất, đáp chuyến bay TP. HCM – Phú Quốc. (Các chuyến bay dự kiến từ 09:45 – 11:00). Đến sân bay Phú Quốc, xe và hướng dẫn viên đón khách khởi hành tham quan: 

Cơ sở sản xuất Rượu Sim (loại vang riêng của đảo): Khám phá đặc sản vang Sim với hương vị độc đáo và tìm hiểu quy trình sản xuất.
Vườn Tiêu Phú Quốc: Tiêu Phú Quốc nổi tiếng với hương vị tiêu cay nồng, nổi tiếng.
Ăn trưa với ẩm thực địa phương. Nhận phòng khách sạn và nghỉ ngơi (Nhận phòng từ 14h00, hỗ trợ sớm nếu có phòng trống). Chiều, tiếp tục tham quan:

Trại rắn Đồng Tâm 2 – xứ sở các loài rắn: Trải nghiệm thế giới rắn với hơn 100 loài, từ rắn hiền lành đến những loài cực độc.
Dinh Cậu, Dinh Bà – nơi gửi gắm đức tin của người dân xứ đảo.
Tượng Đài Bác Hồ: Với chủ đề “Miền Nam trong trái tim tôi” cao 20,7 mét, nặng hơn 93 tấn và là biểu tượng về văn hóa, góp phần khẳng định chủ quyền biển, đảo của Tổ quốc.
Ăn tối tại nhà hàng. Tiếp tục chương trình:

Tham quan Tơ Lụa Việt thương hiệu chuyên cung cấp các sản phẩm: chăn, ga gối nệm…
Khám phá Grand World – Thành phố không ngủ. (Không tính phí vào cổng – Chi phí vui chơi tự túc) Tọa lạc tại vị trí trung tâm Phú Quốc United Center, diện tích lên đến 85ha với kiến trúc cảnh quan rực rỡ lấy cảm hứng từ châu Âu. Được xây dựng lộng lẫy tại 4 tiểu khu: Quảng trường, Shanghai, Indochine, Mallorca.
Show diễn “Tinh Hoa Việt Nam” – hàng ngày lúc 20:15 (chi phí vé tự túc).
Tận hưởng cảm hứng Châu Âu qua show diễn Sắc màu Venice: Show diễn miễn phí, tái hiện câu chuyện tình yêu lãng mạn trong không gian Châu Âu.
Trở về khách sạn, nghỉ đêm.',
            ),
            11 => 
            array (
                'timeLineId' => 12,
                'tourId' => 1,
                'title' => 'PHÚ QUỐC - KHÁM PHÁ ĐẢO NGỌC',
                'description' => 'Ăn sáng. Khởi hành tham quan Nam Đảo:
Cơ sở nuôi cấy Ngọc Trai: Khám phá quá trình nuôi trai lấy ngọc và quan sát trực tiếp quy trình mổ trai. Quý khách có thể mua trang sức ngọc trai làm quà lưu niệm.
Chương trình Tàu câu cá – lặn ngắm san hô: Khởi hành từ cảng biển, trải nghiệm câu cá và lặn ngắm san hô với đầy đủ trang thiết bị.
Trải nghiệm ăn trưa trên tàu với “chiến lợi phẩm” hải sản biển câu được.
Tàu đưa quý khách trở lại đất liền, tiếp tục tham quan:
Nhà tù Phú Quốc: Di tích quốc gia đặc biệt.
Chùa Hộ Quốc: Ngôi chùa đẹp nhất đảo ngọc với vị trí “tọa sơn hướng thủy”.
Cơ sở sản xuất nước mắm: Khám phá làng nghề truyền thống làm nên thương hiệu nước mắm Phú Quốc nổi tiếng thế giới.
Thị Trấn Hoàng Hôn: Địa điểm du lịch hàng đầu tại Phú Quốc, mang đậm phong cách Địa Trung Hải với các biểu tượng nổi bật: Cáp treo Hòn Thơm, Cầu Hôn, Tháp Đồng Hồ…
Ăn tối buffet tại nhà hàng. Xe đưa khách về lại khách sạn. Nghỉ đêm. 
***Nếu quý khách không tham quan theo lịch trên có thể tự túc với option tham quan sau:
Option tour: Tour Cano Tham quan 4 Đảo (chi phí tự túc từ: ~ 690,000VNĐ/khách)
8h00: Đón khách tại khách sạn, tham quan cơ sở nuôi cấy ngọc trai.
Hòn Mây Rút: Check-in và tham quan.
Hòn Gầm Ghì: Bơi ngắm san hô miễn phí.
Hòn Rõi: Trải nghiệm công viên san hô đi bộ dưới đáy biển (chi phí tự túc).
Hòn Móng Tay: Tắm biển, nghỉ ngơi, chụp ảnh, quay flycam (miễn phí)
Ăn trưa. Trở về khách sạn.
(Nếu quý khách chọn gói bao gồm thêm Cáp treo Hòn Thơm thì chương trình vẫn tiếp tục. Nếu quý khách không đi Cáp treo, cano đưa quý khách về lại cảng. Tuỳ vào tình hình thời tiết các hòn đảo sẽ được linh động nhưng vẫn đảm bảo đủ 4 đảo)',
            ),
            12 => 
            array (
                'timeLineId' => 13,
                'tourId' => 1,
                'title' => 'PHÚ QUỐC - TP.HỒ CHÍ MINH',
                'description' => 'Ăn sáng. Làm thủ tục trả phòng. Ra sân bay làm thủ tục đáp chuyến bay trở lại TP. HCM.

(Các chuyến bay dự kiến sau 12:00). Đến sân bay Tân Sơn Nhất, kết thúc chương trình tham quan!

*** Nếu quý khách book vé máy bay chặng về các chuyến tối có thể tự túc lựa chọn thêm các option tour sau:

1. Vinpearl Safari Phú Quốc (chi phí tự túc – giá tham khảo: 650,000VNĐ) – công viên bảo tồn động vật với mô hình bán hoang dã đầu tiên của Việt Nam có diện tích 380 ha với nhiều loài động vật quý hiếm.

2. Vinwonders (chi phí tự túc – giá tham khảo: 950,000VNĐ/khách) – là một khu giải trí tổng hợp với nhiều trò chơi trong nhà và ngoài trời như: tàu lượn siêu tốc, đu quay vòng xoay, đĩa quay siêu tốc, biểu diễn cá heo, công viên nước, thủy cung, lễ hội đường phố…

Các mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.',
            ),
            13 => 
            array (
                'timeLineId' => 14,
                'tourId' => 2,
                'title' => 'TP. HCM – HÀ NỘI',
            'description' => 'Tập trung tại sân bay Tân Sơn Nhất đáp chuyến bay TP. HCM – HÀ NỘI. (Các chuyến bay dự kiến từ 06:00 – 09:00). Xe và HDV đón khách tại sân bay Nội Bài, đoàn di chuyển về trung tâm Hà Nội.

Ăn trưa. Nhận phòng khách sạn. Khởi hành tham quan:

Hồ Tây – Hồ lớn nhất Hà Nội, chùa Trấn Quốc, Hồ Gươm, đền Ngọc Sơn, cầu Thê Húc, chụp hình lưu niệm tại Nhà Thờ Lớn, Nhà Hát Lớn thành phố.
Thưởng thức bánh cốm Hàng Than, kem Tràng Tiền – Nét văn hóa ẩm thực đặc trưng rất riêng của Hà Nội.
Ăn tối. Tự do khám phá Hà Nội về đêm. Nghỉ đêm tại Hà Nội.',
            ),
            14 => 
            array (
                'timeLineId' => 15,
                'tourId' => 2,
                'title' => 'HÀ NỘI – LÀO CAI – SAPA',
                'description' => 'Ăn sáng. Trả phòng. Tham quan Lăng Bác, thăm Phủ Chủ Tịch, nhà sàn, ao cá Bác Hồ, Chùa Một Cột, Văn Miếu – Quốc Tử Giám – trường đại học đầu tiên của Việt Nam.

Ăn trưa. Khởi hành đi SaPa – nơi mà người Pháp xưa gọi là “Kinh đô mùa hè của xứ Bắc Kỳ” theo tuyến đường cao tốc dài nhất Việt Nam 250km. Đến Lào Cai, dừng chân chụp ảnh lưu niệm tại cột mốc biên giới 102 – cửa khẩu Quốc tế Lào Cai. Đến SaPa, nhận phòng khách sạn.

Ăn tối. Thư giãn với liệu trình massage chân, mỗi khách được tặng 01 vé foot massage.

Tự do khám phá phố núi về đêm, tự do thưởng thức: Thắng Cố, cơm lam, lợn cắp nách, khoai nướng, bắp nướng… Nghỉ đêm tại thị trấn SaPa. ',
            ),
            15 => 
            array (
                'timeLineId' => 16,
                'tourId' => 2,
                'title' => 'SAPA – BẢN CÁT CÁT – FANSIPAN',
                'description' => 'Ăn sáng. Tham quan Bản Cát Cát – địa bàn cư trú của người H’Mông, ngắm cảnh hùng vĩ của núi rừng Tây Bắc, tham quan thác thuỷ điện Cát Cát do người Pháp xây dựng.

Ăn trưa. Di chuyển đến ga cáp treo Fansipan bắt đầu hành trình chinh phục Fansipan bằng hệ thống cáp treo 3 dây hiện đại nhất thế giới với cabin có sức chứa tới 35 khách. Vượt qua 639 bậc thang chinh phục đỉnh Fansipan trên độ cao 3.143m – nóc nhà của Đông Dương. (chi phí cáp treo tự túc)

Ăn tối. Tự do khám phá SaPa về đêm. Nghỉ đêm tại thị trấn SaPa.',
            ),
            16 => 
            array (
                'timeLineId' => 17,
                'tourId' => 2,
                'title' => 'SAPA – HÀ NỘI – TP. HCM',
                'description' => 'Ăn sáng. Trả phòng. Khởi hành về lại Hà Nội.
Ăn trưa. Di chuyển ra sân bay Nội Bài đáp chuyến bay Hà Nội – TP. HCM.
(Các chuyến bay dự kiến từ 16:30 – 17:30). Kết thúc chương trình tham quan!
Các mốc thời gian có giá trị tham khảo, tùy theo điều kiện thực tế mà lịch trình có thể thay đổi cho phù hợp.',
            ),
            17 => 
            array (
                'timeLineId' => 18,
                'tourId' => 7,
                'title' => 'HỒ CHÍ MINH - NHA TRANG',
                'description' => 'đoàn khởi hành đi Khánh Hòa theo cung đường cao tốc mới Dầu Giây - Phan Thiết - Vĩnh Hảo. Đoàn ăn sáng trên cung đường đi và dừng chân tham quan:
Bãi biển Cà Ná - một trong những bãi biển đẹp nhất miền Trung, vốn được mệnh danh là “Nàng công chúa ngủ quên” bởi vẻ đẹp hoang sơ của nó.
Sau khi ăn trưa, đoàn tiếp tục khởi hành hành trình đến với vùng đất được mệnh danh “Rừng trầm, biển yến”. Trên cung đường đi, đoàn dừng chân tại:
Cánh đồng điện gió Đầm Nại - gần nhà thờ Gò Sạn, đến đây du khách sẽ trông thấy những cánh quạt tuabin như những cối xay gió khổng lồ tạo nên khung cảnh hùng vĩ, đẹp đến nao lòng.
Làng nghề Trường Sơn - khám phá nơi lưu giữ hồn quê Việt giữa lòng phố biển, chiêm ngưỡng 10 kỷ lục Việt Nam về văn hóa và thủ công mỹ nghệ, khám phá các công đoạn tạo ra những sản phẩm thủ công: đan mây, dệt chiếu, chằm nón lá… Đặc biệt, đoàn còn được lắng nghe thanh âm của văn hoá qua màn hòa tấu nhạc cụ dân tộc với sự hiện diện của đàn tranh, đàn bầu, đàn đá, đàn t’rưng… 
Từ Cam Ranh xe đưa Quý khách đi theo cung đường tuyệt đẹp dẫn lối đến thành phố Nha Trang với đường bờ biển dài mênh mông, uốn lượn theo những sườn núi dọc biển. Đoàn ngắm cảnh hoàng hôn trên vịnh Nha Trang tất cả sẽ tạo nên một bức tranh đẹp và bình yên vô cùng.

Đoàn dùng bữa ăn đặc sản với Nem nướng trứ danh của xứ Trầm xinh đẹp. 
Buổi tối, Quý khách có thể tự do trải nghiệm dạo phố biển về đêm hoặc đến Vega City, check in Nhà Hát Đó, với lối kiến trúc được lấy cảm hứng từ chiếc đó - một ngư cụ rất phổ biến trong dân gian Việt dùng để đánh bắt thủy sản. Nhà hát mang dáng dấp của một chiếc đó khổng lồ nằm nổi bật bên vịnh Nha Trang là địa điểm check-in đầy hấp dẫn. Hoặc thỏa sức thưởng thức các loại hải sản tươi ngon của vùng biển Khánh Hòa (chi phí tự túc). Nghỉ đêm tại Nha Trang.',
            ),
            18 => 
            array (
                'timeLineId' => 19,
                'tourId' => 7,
                'title' => 'NHA TRANG - HÒN LAO - VINWONDERS NHA TRANG',
                'description' => 'Sau khi dùng buffet sáng tại khách sạn, xe đưa Quý khách đến bên cảng, đoàn xuống tàu du ngoạn và tham quan:

Hòn Lao - Đảo Khỉ - nơi có hơn 1000 chú khỉ đang được bảo tồn và sinh sống tự nhiên. Quý khách tự do tắm biển, thư giãn, tham quan xem chương trình biểu diễn xiếc Khỉ, đua chó, khỉ bơi lội hoặc trải nghiệm các môn thể thao trên bãi biển và trò chơi: canô kéo dù, mô tô nước, đua xe công thức 1, bắn súng sơn, cưỡi đà điểu … (chi phí tự túc).
Đoàn quay về lại khách sạn tự do nghỉ ngơi. Buổi chiều Quý khách tự do lựa chọn điểm tham quan như sau:

Lựa chọn 1: VinWonders Nha Trang (chi phí cáp treo & ăn chiều tự túc) - ngắm toàn cảnh vịnh Nha Trang từ đỉnh vòng xoay Mặt Trời lớn nhất Việt Nam, tham quan bộ sưu tập “kỳ hoa, dị thảo” tại đồi Vạn Hoa, khu vườn thú mở - vườn Quý Vương, tham gia các trò chơi tương tác và liên hoàn tại quảng trường Thần Thoại hay vùng đất Yêu Thương, xem phim 4D tại lâu đài Đại Dương, khám phá khu trò chơi cảm giác mạnh, khu trò chơi trong nhà hay tắm biển, tắm hồ bơi lớn nhất Đông Nam Á… và thưởng thức chương trình biểu diễn show ánh sáng nghệ thuật kỳ vĩ tại quảng trường Thần Thoại mỗi tối.
Lựa chọn 2: Du ngoạn trên du thuyền Emperor (chi phí tự túc) - tàu sẽ di chuyển dọc thành phố biển Nha Trang, du khách sẽ được ngắm cảnh hoàng hôn đẹp nhất trong khi thưởng thức tiệc cocktail, bữa tối tinh tế và nghệ sỹ ghi ta, violon chơi những bản nhạc du dương trong một khung cảnh lãng mạn dưới trời sao, ánh trăng và ánh đèn rực rỡ của thành phố.
Nghỉ đêm tại Nha Trang',
            ),
            19 => 
            array (
                'timeLineId' => 20,
                'tourId' => 7,
                'title' => 'NHA TRANG - LÀNG YẾN MAI SINH - ĐÀ LẠT',
                'description' => 'Quý khách dùng bữa sáng tại khách sạn và làm thủ tục trả phòng. Đoàn khởi hành tham quan: 

Làng Yến Mai Sinh - tận mắt chiêm ngưỡng mô hình hang Yến, tìm hiểu quá trình chim Yến làm tổ, quy trình thu hái, tinh chế, nếm thử các sản phẩm làm từ tổ Yến...
Tiếp tục hành trình xe và HDV đưa Quý khách tạm biệt phố biển để đến với nơi cao nguyên ngàn hoa. 

Đoàn ăn trưa trên đường đi. Đến Đà Lạt, đoàn dừng chân và tham quan:

Fresh Garden - một trong những khu du lịch có đồi hoa đẹp tại Đà Lạt với view rừng nguyên sinh. Đến đây, quý khách sẽ đắm chìm trong khung cảnh thiên nhiên rộng lớn đầy thơ mộng với ngàn hoa đua nở. Nổi bật giữa Fresh Garden là cánh đồng hoa bát ngát ngập sắc màu. Bên cạnh đó còn có các tiểu cảnh vô cùng độc đáo, mới lạ & duy nhất như: đường hầm nhiệt đới, đường hầm thời gian, hồ view rừng, cổng trời,...
Quý khách nhận phòng khách sạn nghỉ ngơi và dùng cơm chiều tại thành phố sương mù với các món ăn mang đậm bản sắc thuần Việt nhưng lại ghi dấu ấn với bạn bè quốc tế khi đã đạt nhưng giải thưởng về ẩm thực, cũng là những món ăn làm nên tên tuổi như: ba chỉ cháy cạnh, salad organic trộn, gà nướng da giòn và xôi chiên, lẩu bò,... và đặc biệt Quý khách sẽ được thưởng thức những món tráng miệng đặc sắc theo mùa. 

Buổi tối, đoàn tự do uống café quanh khu vực Hồ Xuân Hương hay thưởng thức ly sữa đậu nành nóng hổi, bánh tráng nướng đặc sản Đà Lạt khu vực Tăng Bạt Hổ.

Nghỉ đêm tại Đà Lạt',
            ),
            20 => 
            array (
                'timeLineId' => 21,
                'tourId' => 7,
                'title' => 'ĐÀ LẠT - THÀNH PHỐ NGÀN HOA',
                'description' => 'Sau khi dùng bữa sáng tại khách sạn, Quý khách khởi hành tham quan:
Nhà Thờ Domain de Marie - theo dòng nữ tu Bác Ái, tọa lạc trên đồi Mai Anh, nổi bật với màu hồng sáng rực. Quý khách có thể chọn cho mình những món đồ từ len trong khuôn viên phía sau nhà thờ. 
Núi Langbiang - nơi đây được mệnh danh là nóc nhà của cao nguyên Lâm Viên với chiều cao 2.167m so với mực nước biển. Đến nơi đây không chỉ được khám phá thiên nhiên, phóng tầm mắt ra xung quanh ngắm nhìn những mảng sắc hình đất phủ hoa, phủ màu rộn ràng, phơi phới, mà khi đến LangBiang là để được nghe một câu chuyện tình đắm say, đầy bi ai và thuần khiến như tình yêu với núi rừng Tây Nguyên. (Chi phí xe jeep tự túc)
Quý khách dùng bữa trưa tại nhà hàng Buffet rau và thoải mái thưởng thức các loại rau củ quả, nấm,...tươi ngon, là nông sản của vùng đất này. Sau đó, đoàn về khách sạn nghỉ ngơi. Buổi chiều tiếp tục tham quan:
Khám phá KDL thác Datanla nổi tiếng với vẻ đẹp hoang sơ, đặc trưng của đại ngàn Tây Nguyên. Quý khách sẽ có dịp được chinh phục những trò chơi như: hệ thống máng trượt Alpine Coaster hiện đại, đường zipline 1000m băng rừng, ... (Chi phí trò chơi tự túc).
Mua sắm đặc sản Đà Lạt tại cơ sở mứt Thanh Nhu - các loại trái cây sấy giòn, sấy dẻo, nước cốt dâu tằm – dâu tươi, trà atiso, trà hoa,...
Sau bữa tối tại nhà hàng địa phương. Quý khách tự do dạo phố thưởng thức ẩm thực nổi tiếng phố núi: Lẩu gà lá é Tao Ngộ, Lẩu bò quán Gỗ, Bánh ướt lòng gà, Ốc nhồi thịt, Xe lẩu buffet, Ngói BBQ … hoặc đến Nhạc Quán Diễm Xưa lắng nghe những tình khúc bất hủ của nhạc sỹ Trịnh Công Sơn … (chi phí tự túc)
Nghỉ đêm tại Đà Lạt',
            ),
            21 => 
            array (
                'timeLineId' => 22,
                'tourId' => 7,
                'title' => 'ĐÀ LẠT - NHÀ MÁY CHÈ CỔ 1927 - ĐÀ NẴNG',
                'description' => 'Sau khi dùng bữa sáng tại khách sạn và làm thủ tục trả phòng. Đoàn khởi hành tham quan 

Tìm hiểu về quy trình làm trà truyền thống xứ B’lao và thăm nhà máy chè cổ 1927 -  một trong những nhà máy chè cổ nhất của Việt Nam, với tuổi đời gần 100 năm tuổi.
Xe và HDV đưa Quý khách khởi hành về TP. Đà Nẵng. Đoàn dùng bữa trưa tại Bảo Lộc, xe đưa đoàn về lại điểm đón ban đầu và kết thúc hành trình nhiều trải nghiệm.

KẾT THÚC CHƯƠNG TRÌNH, TẠM BIỆT QUÝ KHÁCH!



Lưu ý:

Hành trình có thể thay đổi thứ tự điểm đến tùy vào điều kiện thực tế.
Lịch trình tham quan (tắm biển, ngắm hoa, trải nghiệm,...) rất dễ bị ảnh hưởng bởi thời tiết. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm.
Khách sạn có thể ở xa trung tâm thành phố vào các mùa Cao điểm. ',
            ),
            22 => 
            array (
                'timeLineId' => 26,
                'tourId' => 6,
                'title' => '"Trải nghiệm tuyến đường sắt Đà Nẵng - Diêu Trì" - Trung Tâm Khám Phá Khoa Học Và Đổi Mới Sáng Tạo Quy Nhơn',
            'description' => 'Chuyến tàu dự kiến Đà Nẵng - Diêu Trì (SE): dự kiến 06h00 - 13h00

Quý khách tập trung tại Ga Đà Nẵng, làm thủ tục khởi hành đi Quy Nhơn. Trên đường đi, Quý khách chiêm ngưỡng những vườn thanh long bạt ngàn sáng rực ánh đèn, đón ánh bình minh qua ô cửa sổ và chiêm ngưỡng cung đường tàu hỏa với những cánh đồng lúa xanh trải dài, tạo nên khung cảnh yên bình và thơ mộng. Xe và HDV đón đoàn tại Ga Diêu Trì, xe đưa đoàn tham quan Trung tâm Khám Phá Khoa Học và Đổi Mới Sáng Tạo Quy Nhơn - nơi chứa đựng cả vũ trụ thu nhỏ độc nhất vô nhị ở Việt Nam. Với 07 khu trưng bày tương tác, du khách sẽ được khám phá vũ trụ theo cách sinh động, trực quan và vô cùng độc đáo

Quý khách xem phim về vũ trụ, trải nghiệm phòng khám phá không gian với mô hình Omniglobe, quay ngược thời gian tại Giếng Ký Ức, du hành qua các thiên thể trong phòng chiếu vũ trụ, tham gia các mô hình khoa học tương tác, và tận mắt chứng kiến hiệu ứng Tesla Coil tạo ra những tia lửa điện ngoạn mục.
Buổi tối, Quý khách thưởng thức đặc sản Quy Nhơn đã gây thương nhớ biết bao du khách: Bánh xèo tôm nhảy, Lòng heo bánh hỏi, Chả ram tôm đất - một trong 121 món ẩm thực tiêu biểu của Việt Nam.

Nghỉ đêm tại Quy Nhơn',
            ),
            23 => 
            array (
                'timeLineId' => 27,
                'tourId' => 6,
                'title' => 'Tinh Hoa Văn Hóa Biển - Kỳ Co - Eo Gió - Làng Chài Nhơn Lý - Tịnh Xá Ngọc Hòa',
                'description' => 'Quý khách dùng bữa sáng tại khách sạn. Xe đưa đoàn tham quan:

Kỳ Co - với màu nước trong xanh, bãi cát trắng dài và mịn, những cơn sóng biển êm ái chính là điểm đến ấn tượng thu hút nhiều du khách. Ngoài tắm biển và thư giãn, Quý khách có thể chụp hình check-in nhiều góc cực đẹp.
Sau khi thưởng thức những món hải sản tươi ngon đậm đà hương vị miền biển, Quý khách khám phá tinh hoa văn hóa biển với:

Làng chài Nhơn Lý - nổi bật với vẻ đẹp hoang sơ và cuộc sống giản dị của người dân vùng biển; Quý khách thỏa sức check-in con đường bích họa mô tả vẻ đẹp thiên nhiên và văn hóa, con người Bình Định…
Eo Gió - nơi trời, mây, biển, núi hòa quyện tạo nên một bức tranh sơn thủy hữu tình.
Tịnh Xá Ngọc Hòa - chốn tâm linh thanh tịnh, nổi bật với tượng Phật đôi Quan Thế Âm lớn nhất Việt Nam, hướng ra biển cả bao la.
Buổi chiều, sau khi mua sắm các đặc sản Quy Nhơn như rượu Bàu Đá, nem Chợ Huyện, bánh hồng, tré Bình Định, bánh ít lá gai…,

Sau khi ăn tối, Quý khách tự do dạo phố biển, trải nghiệm phố ẩm thực Xuân Diệu hoặc check-in các quán café đẹp dọc biển như S - Blue hoặc Surf Bar ...

Nghỉ đêm tại Quy Nhơn',
            ),
            24 => 
            array (
                'timeLineId' => 28,
                'tourId' => 6,
                'title' => 'Bảo Tàng Quang Trung - Tiểu Chủng Viện Làng Sông - TP.Đà Nẵng',
            'description' => 'Chuyến tàu dự kiến Diêu Trì – Đà Nẵng (SE): dự kiến 16h30 - 23h30

Sau khi dùng bữa sáng và trả phòng khách sạn. Xe đưa Quý khách ngược dòng lịch sử “theo dấu Tây Sơn” kiên cường tham quan

Bảo tàng Quang Trung - viếng Điện thờ Tây Sơn Tam Kiệt, chiêm ngưỡng cây me 300 tuổi, giếng nước xưa… Quý khách sẽ có dịp thưởng thức màn trình diễn trống trận Tây Sơn hào hùng (chương trình có thể thay đổi tùy theo tình hình thực tế)
Khám phá hành trình hình thành chữ Quốc ngữ tại

Tiểu chủng viện Làng Sông - băng qua một đoạn đường thơm ngát mùi lúa trổ đồng, nhà thờ Làng Sông hiện ra giữa những tán cây sao hàng trăm năm tuổi trong gió. Mang vẻ ngoài cổ kính, đậm chất kiến trúc Gothic châu Âu với những đường nét kiểu vòm nhọn và nhiều cửa sổ hiền hòa mang vẻ đẹp vừa nên thơ, vừa cổ kính giữa thiên nhiên hữu tình.
Nhà in chữ Quốc Ngữ - một trong ba cơ sở in chữ quốc ngữ đầu tiên của Việt Nam, nơi đây còn lưu giữ lại những tư liệu quý giá về sự ra đời của những cuốn sách đầu tiên bằng chữ quốc ngữ.
Quý khách thưởng thức bữa trưa tại nhà hàng địa phương với đặc sản bò tơ và dé bò Tây Sơn.

15h00 Xe đưa Quý khách đến ga Diêu Trì đón chuyến tàu về TP. Đà Nẵng,chia tay Quý khách và hẹn gặp lại trong các chương trình trải nghiệm khác.',
            ),
            25 => 
            array (
                'timeLineId' => 29,
                'tourId' => 8,
                'title' => 'TP. Hồ Chí Minh - Mỹ Tho - Cù Lao Thới Sơn - Cồn Phụng - Bến Tre ',
            'description' => 'Quý khách tập trung tại Vietravel (190 Pasteur, phường Võ Thị Sáu, quận 3, thành phố Hồ Chí Minh), đoàn khởi hành đến Tiền Giang. Trên đường đi, đoàn dừng chân ăn sáng (tự túc chi phí) và tiếp tục hành trình đến tham quan chùa Vĩnh Tràng - ngôi chùa thờ phật lớn nhất tỉnh Tiền Giang, được xếp hạng di tích lịch sử - văn hóa cấp quốc gia năm 1984. Chùa mang dáng vẻ kiến trúc châu Á pha lẫn châu Âu, bên trong chùa vẫn mang đậm lối kiến trúc điêu khắc truyền thống Việt Nam.



Đoàn di chuyển đến bến tàu du lịch Mỹ Tho bắt đầu hành trình du ngoạn trên sông Mekong:

Chiêm ngưỡng cầu Rạch Miễu - cầu dây văng đầu tiên do kỹ sư Việt Nam thiết kế và xây dựng, nghe giới thiệu các cù lao Long - Lân - Quy - Phụng.
Đến cù lao Thới Sơn - tham quan trại nuôi ong, nghe người dân chia sẻ về nghề nuôi ong và cách chiết xuất những sản phẩm từ ong; thưởng thức trà mật ong và các sản phẩm kẹo mứt của địa phương;
Tiếp tục hành trình đến thăm nhà dân, nghe và giao lưu đờn ca tài tử Nam Bộ, thưởng thức trái cây theo mùa;
Khám phá kênh rạch miền tây bằng xuồng Ba lá len lỏi trong con rạch dừa nước rợp bóng mát, ngắm nhìn cảnh sinh hoạt thường ngày của người dân xứ cù lao;
Xuôi dòng sông Tiền đến Cồn Phụng – Bến Tre (cồn Đạo Dừa) - tham quan, tìm hiểu công trình kiến trúc Đạo Dừa, phòng trưng bày một số hình ảnh về danh nhân và các điểm di tích lịch sử của tỉnh Bến Tre;
Bảo tàng Dừa - trưng bày nhiều hình ảnh, hiện vật sinh động về cuộc sống, sinh hoạt và văn hoá của người dân xứ Dừa, tham quan gian hàng thủ công mỹ nghệ từ cây Dừa, cơ sở sản xuất kẹo dừa - đặc sản nổi tiếng của Bến Tre;
Tham quan khu CoCo Island ven sông thơ mộng bao quanh là thảm lục bình và hàng bần xanh mát; với những điểm check-in ảo diệu nấc thang thiên đường, tổ chim, khu Bến dừa…Ngoài ra, Quý khách có thể tham gia các dịch vụ vui chơi: câu cá sấu, câu cá giải trí, bóng nước (Zorbing), cá massage chân,…các dịch vụ khu trò chơi nước: cầu thăng bằng, đạp xe qua cầu ván, Zipline, đi dây qua hồ ...(chi phí tự túc).
',
            ),
            26 => 
            array (
                'timeLineId' => 30,
                'tourId' => 8,
                'title' => 'Bến Tre - TP. Hồ Chí Minh',
                'description' => 'Trở về bến tàu, Quý khách lên xe khởi hành về Thành phố Hồ Minh, xe đưa đoàn về điểm đón ban đầu, kết thúc chương trình du lịch.',
            ),
            27 => 
            array (
                'timeLineId' => 32,
                'tourId' => 9,
                'title' => 'Vườn Ca Cao - Đại Ngàn Nam Cát Tiên “Sống Trọn Với Thiên Nhiên”',
            'description' => '<p><strong>06g30&nbsp;</strong>Đo&agrave;n tập trung tại điểm hẹn&nbsp;<strong>trạm dừng ch&acirc;n Cao tốc Long Th&agrave;nh &ndash; Dầu Gi&acirc;y&nbsp;</strong>(định vị địa điểm BTC sẽ cung cấp cụ thể trong nh&oacute;m). Tự t&uacute;c ăn s&aacute;ng.</p>

<p><strong>07g30</strong>&nbsp;Qu&yacute; kh&aacute;ch l&agrave;m Lễ Xuất Ph&aacute;t &ndash; khởi h&agrave;nh chuyến Caravan về với thi&ecirc;n nhi&ecirc;n. Tr&ecirc;n đường đi Qu&yacute; kh&aacute;ch sử dụng bộ đ&agrave;m chia sẻ kinh nghiệm của c&aacute;c d&ograve;ng xe v&agrave; c&aacute;c c&acirc;u chuyện vui tr&ecirc;n đường.</p>

<p><strong>09g30&nbsp;</strong>Đo&agrave;n check-in tham quan&nbsp;<strong>vườn ca cao Trọng Đức&nbsp;</strong><strong>-&nbsp;</strong>t&igrave;m hiểu về qu&aacute; tr&igrave;nh xuất hiện c&acirc;y ca cao tại Việt Nam, chụp h&igrave;nh check-in v&agrave; thưởng thức ca cao.</p>

<p><strong>11g30&nbsp;</strong>Đo&agrave;nd&ugrave;ng bữa trưa tại nh&agrave; h&agrave;ng&nbsp;<strong>khu du lịch</strong>&nbsp;<strong>Suối Mơ, Định Qu&aacute;n.</strong></p>

<p><strong>13g30&nbsp;</strong>Qu&yacute; kh&aacute;ch nhận ph&ograve;ng, tự do nghỉ ngơi.</p>

<p><strong>16g00 - 17g30&nbsp;</strong>Đo&agrave;n trải nghiệm&nbsp;<strong>đạp xe&nbsp;</strong>kh&aacute;m ph&aacute; cung đường&nbsp;<strong>&ldquo;Đi t&igrave;m chốn b&igrave;nh y&ecirc;n của người d&acirc;n Nam C&aacute;t Ti&ecirc;n&rdquo;&nbsp;</strong>tham quan&nbsp;<strong>c&aacute;nh đồng l&uacute;a, vườn bưởi da xanh theo m&ugrave;a&nbsp;</strong>v&agrave;&nbsp;<strong>check-in c&acirc;y cầu treo kết nối 2 tỉnh Đồng Nai-L&acirc;m Đồng.</strong></p>

<p><strong>19g00&nbsp;</strong>Qu&yacute; kh&aacute;ch trải nghiệm&nbsp;<strong>BBQ</strong>, sum họp&nbsp;<strong>b&ecirc;n &aacute;nh lửa trại,&nbsp;</strong>c&ugrave;ng nhau ca h&aacute;t v&agrave; chia sẻ những c&acirc;u chuyện của một ng&agrave;y&nbsp;<strong>&ldquo;bỏ phố về rừng&rdquo;</strong></p>

<p>Qu&yacute; kh&aacute;ch nghỉ đ&ecirc;m tại&nbsp;<strong>khu vực Nam C&aacute;t Ti&ecirc;n.</strong></p>',
            ),
            28 => 
            array (
                'timeLineId' => 33,
                'tourId' => 9,
                'title' => 'Lắng Nghe Rừng Cát Tiên Kể Chuyện  ',
                'description' => '08g00 - 09g30 Đoàn dùng điểm tâm sáng và tự do thư giãn tại khách sạn.

09g30 - 11g30 Trải nghiệm hành trình xuyên Rừng Quốc Gia Cát Tiên - nơi được mệnh danh là “Lá Phổi Xanh Của Vùng Đông Nam Bộ”. Mở ra trước mắt chúng ta là những cánh rừng nguyên sinh xanh mướt, tiếng chim rừng hót, rì rào của dòng suối mơ. Những cảnh vật và âm thanh khiến những mệt mỏi tan biến, chỉ còn cảm giác thư thái, bình yên.

Quý khách khám phá những điểm nhấn độc đáo trong Vườn Quốc Gia như:

Cây Tung cổ thụ
Bằng Lăng 5 ngọn
Ghềnh Bến Cự
Cây Gõ Bác Đồng 700 năm tuổi
Cây Đa Lộc Giao
11g30 Đoàn quay về khách sạn làm thủ tục trả phòng

12g30 Quý khách dùng bữa trưa

14g00 – 18g30 Đoàn khởi hành về lại Thành phố Hồ Chí Minh. Kết thúc hành trình, Hướng dẫn viên chia tay đoàn và hẹn gặp lại Quý khách trong những chương trình đặc sắc khác!',
            ),
            29 => 
            array (
                'timeLineId' => 34,
                'tourId' => 10,
                'title' => 'Đà Nẵng - Quảng Ngãi - Vương quốc tỏi Lý Sơn - Đảo Lớn',
                'description' => 'Quý khách tập trung tại Công ty du lịch Travela, Đà Nẵng khởi hành đi Quảng Ngãi. Đến cảng Sa Kỳ, HDV đưa đoàn xuống tàu cao tốc ra đảo Lý Sơn. Quý khách thỏa thích ngắm những con sóng Biển Đông, cảm nhận sự lênh đênh của những con tàu đang lướt trên sóng để đánh bắt cá trên chủ quyền biển đảo của Tổ quốc.

Đến nơi. Đoàn dùng bữa trưa tại nhà hàng địa phương. Đoàn nhận phòng khách sạn và nghỉ ngơi.

Chiều: Đoàn bắt đầu tham quan Đảo lớn

Chùa Hang - nằm trong một hang đá lớn nhất trong hệ thống hang động ở Lý Sơn. Chùa Hang Lý Sơn là nơi vừa thờ Phật, vừa thờ các vị thần – người có công khai hoang, xây dựng và bảo vệ xóm làng trên đảo.

Hang Câu - với một bên là vách núi đá sừng sững, một bên lại là biển. Hang Câu được hình thành là do bởi sóng biển tạt mạnh, bị bào mòn bởi nước.

Cột cờ chủ quyền - nằm trên đỉnh núi Thới Lới. Cờ đỏ sao vàng tung bay phấp phới trên đỉnh tháp. Cột cờ hướng về biển, mang đến ý nghĩa đặc biệt với người dân cả nước và đặc biệt là người dân Lý Sơn.

Bảo tàng hải đội Hoàng Sa kiêm quản Bắc Hải - Ở đây trung bày hơn 100 hiện vật của người lính Hoàng Sa cùng nhiều bản đồ và tư liệu cổ để chứng minh Hoàng Sa - Trường Sa là của Việt Nam.

Chùa Đục - nằm sâu trong lớp đá hình thành từ ngọn núi lửa đã tắt hàng triệu năm, chùa Đục được biết đến là địa điểm du lịch Lý Sơn có ý nghĩa tâm linh.

Cổng Tò Vò - chiếc cổng hình vòm tròn cao đến 2,5m chính là món quà mà tạo hóa đã ban tặng cho mảnh đất này, chúng hoàn toàn không bị tác động của bàn tay con người. Từ sự phun trào núi lửa cách đây hàng triệu năm đã tạo nên chiếc cổng kỳ thú này.

Tối: Đoàn dùng bữa tối tại nhà hàng địa phương. Tự do dạo chợ đêm và nghỉ ngơi tại khách sạn.

Nghỉ đêm tại Lý Sơn.',
            ),
            30 => 
            array (
                'timeLineId' => 35,
                'tourId' => 10,
                'title' => 'Đảo Bé - Quảng Ngãi - Đà Nẵng',
                'description' => 'Sáng: Đoàn ăn sáng. Đoàn tự do mua đặc sản tươi sống, mua Vỏ Ốc, hành, tỏi Lý Sơn,… làm quà lưu niệm.

Sau đó, hướng dẫn viên đưa đoàn xuống cano cao tốc đi Đảo Bé. Quý khách tham quan:

Cầu Tình yêu
Cây phong ba cô đơn
Bãi Sau. Đoàn tự do tắm biển lặn ngắm san hô tại Bãi Sau.
Đoàn lên cano để về đảo lớn. Đoàn ăn trưa. Sau đó tiếp tục di chuyển về lại đất liền.

Xe khởi hành về lại Đà Nẵng. Đến Đà Nẵng, chia tay đoàn. Kết thúc chương trình tham quan./

Lưu ý:

Hành trình có thể thay đổi thứ tự điểm đến tùy vào điều kiện thực tế.
Lịch trình tham quan (tắm biển, ngắm hoa, trải nghiệm,...) rất dễ bị ảnh hưởng bởi thời tiết. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm.
Vì những yêu tố khách quan trong giai đoạn này, điểm tham quan có thể đóng cửa và được thay bằng điểm khác phù hợp với chương trình.
Trong trường hợp đoàn gom dưới 06 khách thì tour không khởi hành. Công ty sẽ tư vấn cho Qúy khách chuyển tour sang ngày khởi hành lân cận hoặc thông báo chi phí phát sinh để khởi hành được',
            ),
            31 => 
            array (
                'timeLineId' => 36,
                'tourId' => 11,
                'title' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
            'description' => '07:30-8:30 Xe và hướng dẫn đón quý khách tại điểm hẹn, khởi hành đi Mỹ Sơn (Quảng Nam).

09:30 Xe đưa quý khách tìm về với vẻ đẹp bí ẩn, huyền ảo của di sản văn hóa thế giới. Du khách có cơ hội khám phá Mỹ Sơn, tham quan khu Thánh địa lâu đời của Vương quốc Chăm Pa với những đền tháp rêu phong bí ẩn từ thế kỉ VII, thưởng thức chương trình ca múa Chăm đặc sắc, thăm Trung tâm Thánh Mẫu Trà Kiệu - đặt trên nền móng Kinh Thành xưa của người Chăm (Kinh thành Sư Tử). ( Nếu có )

11:30 Dùng bữa trưa tại nhà hàng.

14:00 Xe đưa khách về lại khách sạn. Kết thúc chương trình tour Đà Nẵng - Mỹ Sơn 1 ngày. Xin chào và hẹn gặp

*Lưu ý:

Hành trình có thể thay đổi thứ tự điểm đến tùy vào điều kiện thực tế.
Lịch trình tham quan (tắm biển, ngắm hoa, trải nghiệm,...) rất dễ bị ảnh hưởng bởi thời tiết. Đây là trường hợp bất khả kháng mong Quý khách hiểu và thông cảm.
Vì những yêu tố khách quan trong giai đoạn này, điểm tham quan có thể đóng cửa và được thay bằng điểm khác phù hợp với chương trình.
Trong trường hợp đoàn gom dưới 06 khách thì tour không khởi hành. Công ty sẽ tư vấn cho Qúy khách chuyển tour sang ngày khởi hành lân cận hoặc thông báo chi phí phát sinh để khởi hành được đoàn.',
            ),
            32 => 
            array (
                'timeLineId' => 37,
                'tourId' => 12,
                'title' => 'SB Nội Bài - Hà Nội',
            'description' => 'Quý khách tập trung tại sân bay Tân Sơn Nhất (Ga nội địa), hướng dẫn viên hỗ trợ khách làm thủ tục đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và HDV Vietravel đón Quý khách đi Hà Nội. Xe đưa Quý khách đi tham quan:
Hoàng thành Thăng Long - quần thể công trình kiến trúc đồ sộ được các triều vua xây dựng trong nhiều giai đoạn lịch sử và trở thành di tích quan trọng bậc nhất trong hệ thống các di tích Việt Nam.
Văn Miếu - nơi thờ Khổng Tử và các bậc hiền triết của Nho Giáo, Quốc Tử Giám - trường đại học đầu tiên của Việt Nam, tìm về cội nguồn lịch sử của các vị Nho học.
Quý khách nhận phòng khách sạn nghỉ ngơi hoặc tự do dạo 36 phố phường Hà Nội, trải nghiệm không gian sôi nổi, náo nhiệt tại Phố Tạ Hiện hay tìm một gốc với ly cà phê quan sát phố cổ hẳn cũng rất thú vị.
Nghỉ đêm tại Hà Nội ',
            ),
            33 => 
            array (
                'timeLineId' => 38,
                'tourId' => 12,
                'title' => 'Hà Nội - Hạ Long',
                'description' => 'Quý khách dùng bữa sáng và trả phòng khách sạn. Xe khởi hành đưa Quý khách đi tham quan Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.
Tiếp tục hành trình, xe khởi hành đưa Quý khách đến thành phố biển Hạ Long qua đường cao tốc Hải Phòng – Hạ Long, trên đường ngắm cảnh Bạch Đằng Giang. Đến nơi, Quý khách xuống thuyền đi du ngoạn Vịnh Hạ Long - thắng cảnh thiên nhiên tuyệt đẹp và vô cùng sống động, được UNESCO công nhận là di sản thiên nhiên Thế giới năm 1994.

Động Thiên Cung là một trong những động đẹp nhất ở Hạ Long. Vẻ đẹp nguy nga và lộng lẫy bởi những lớp thạch nhũ và những luồng ánh sáng lung linh.
Từ trên tàu ngắm nhìn các hòn đảo lớn nhỏ trong Vịnh Hạ Long: Hòn Gà Chọi, Hòn Lư Hương.
Tham quan mua sắm đặc sản tại Trung Tâm OCOP Central Hạ Long với nhiều mặt hàng hải sản tươi, khô, chả mực, … đạt chất lượng theo tiêu chuẩn OCOP.
Quý khách nhận phòng khách sạn nghỉ ngơi hay tự do khám phá nhiều hoạt động dịch vụ giải trí sôi nổi tại “phố cổ” Bãi Cháy - nằm cạnh công viên Sun World Hạ Long từ những ẩm thực đường phố đến các quán cà phê siêu dễ thương như Hòn Gai Coffee & Lounge hay thoải mái bung xõa tại The Mini Bar, Brothers Pub,..

Quý khách tự do nghỉ ngơi tại khu nghỉ hoặc lựa chọn tham gia vào một trong các hành trình sau (chi phí di chuyển và trải nghiệm tự túc):

Trải nghiệm dịch vụ Cáp Treo Nữ Hoàng tại Sun World Hạ Long Complex trên Núi Ba Đèo, chiêm ngưỡng cảnh đẹp về đêm của thành phố Hạ Long dưới ánh đèn lung linh (thời gian hoạt động cáp treo dự kiến từ 10h đến 18h các ngày thứ 7 và CN).
Nghỉ đêm tại Hạ Long',
            ),
            34 => 
            array (
                'timeLineId' => 39,
                'tourId' => 12,
                'title' => 'Hạ Long - Ninh Bình',
                'description' => 'Quý khách dùng bữa sáng tại khách sạn. Xe đưa Quý khách đi tham quan:

Bảo Tàng Quảng Ninh và chụp hình bên ngoài Cung Cá Heo - Cung Quy Hoạch, Hội Chợ, Triển Lãm Và Văn Hóa Quảng Ninh, dường như đã trở thành điểm đến ấn tượng trong du khách với lối kiến trúc độc đáo.

Tiếp tục hành trình, Quý khách khởi hành đi Ninh Bình - vùng đất mệnh danh là “Nơi mơ đến, chốn mong về” với nhiều di tích văn hóa, thiên nhiên vô cùng đặc sắc. Đến nơi, Quý khách tham quan:

Chùa Bái Đính - một quần thể chùa với nhiều kỷ lục Việt Nam như pho tượng phật Di Lặc bằng đồng nặng 80 tấn, hành lang với 500 tượng vị La Hán, tòa Bảo Tháp cao 99m…

Dùng cơm tối và nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do khám phá Phố cổ Hoa Lư, một không gian check-in cổ, đẹp, trầm mặc đẹp trở nên lung linh, huyền ảo hơn với sắc màu của những chiếc đèn lồng và Bảo Tháp trên Hồ Kỳ Lân; trải nghiệm nhiều hoạt động trò chơi dân gian và nhiều loại hình văn hóa nghệ thuật từ dân tộc như múa rối nước, nhảy múa Tắc Xình, hát xẩm,.. đến những buổi trình diễn acoustic sẽ được diễn ra vào các buổi tối ngày cuối tuần.

Nghỉ đêm tại Ninh Bình',
            ),
            35 => 
            array (
                'timeLineId' => 40,
                'tourId' => 12,
                'title' => 'Ninh Bình - SB Nội Bài',
                'description' => 'Quý khách dùng bữa sáng và trả phòng khách sạn. Xe đưa Quý khách đi tham quan:
Khu Du Lịch Tràng An - Quý khách lên thuyền truyền thống đi tham quan thắng cảnh hệ thống núi đá vôi hùng vĩ và các thung lũng ngập nước, thông với nhau bởi các dòng suối tạo nên các hang động ngập nước quanh năm. Điểm xuyến trong không gian hoang sơ, tĩnh lặng là hình ảnh rêu phong, cổ kính của các mái đình, đền, phủ nằm nép mình dưới chân các dãy núi cao.
Tuyệt Tịnh Cốc - nằm giữa mảnh đất cố đô Hoa Lư (Ninh Bình), động Am Tiên ẩn mình giữa lưng chừng núi được mệnh danh là “thiên đường nơi hạ giới” và được giới trẻ gọi là Tuyệt Tịnh Cốc Việt Nam.
Xe khởi hành đưa Quý khách ra sân bay Nội Bài làm thủ tục đón chuyến bay về TP.HCM. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Tân Sơn Nhất.',
            ),
            36 => 
            array (
                'timeLineId' => 42,
                'tourId' => 24,
                'title' => 'HÀNH TRÌNH CÂU MỰC ĐÊM',
                'description' => '16:00 - 17:00: Xe và hướng dẫn viên đón du khách tại các điểm hẹn trong khu vực Đông Dương, đưa đến bến cảng Đông Dương để bắt đầu hành trình.
17:00: Đến bến cảng, hướng dẫn viên hoàn tất thủ tục, du khách lên tàu khởi hành khám phá tour câu mực đêm.
17:30: Trên đường ra đảo, ngắm cảnh hoàng hôn rực rỡ trên biển Phú Quốc.
18:00: Tàu đến vùng nước sâu, bật đèn soi sáng. Du khách nhận dụng cụ, làm theo hướng dẫn và bắt đầu trải nghiệm câu mực.
19:00: Thưởng thức bữa tối trên tàu với các món ngon từ mực tươi như mì xào sản, cháo mực… cùng trái cây tráng miệng.
21:00: Tàu quay về bến cảng Đông Dương, xe đưa du khách về khách sạn. Kết thúc chương trình.',
            ),
            37 => 
            array (
                'timeLineId' => 43,
                'tourId' => 25,
            'title' => 'SB Cần Thơ - SB Nội Bài (Hà Nội) - Ba Bể (Bắc Cạn)',
                'description' => 'Quý khách tập trung tại sân bay Cần Thơ - ga đi trong nước. Hướng dẫn viên làm thủ tục cho đoàn đáp chuyến bay đi Hà Nội. Đến sân bay Nội Bài, xe và hướng dẫn viên Vietravel đón Quý khách khởi hành đến với vườn Quốc Gia Ba Bể. Đến nơi, Quý khách nhận phòng khách sạn và dùng bữa chiều. Buổi tối, Quý khách tự do nghỉ ngơi.

Nghỉ đêm tại Ba Bể',
            ),
            38 => 
            array (
                'timeLineId' => 44,
                'tourId' => 25,
            'title' => 'Ba Bể (Bắc Cạn) - Cao Bằng ',
                'description' => 'Quý khách dùng bữa sáng. Xe đưa Quý khách ra bến thuyền tham quan

Hồ Ba Bể: Khám phá bức tranh sơn thủy hữu tình vô cùng sống động, mặt nước hồ trong xanh như gương làm quyến rũ biết bao du khách làm quyến rũ biết bao du khách, thiên nhiên và con người như hòa quyện vào nhau, ngắm Ao Tiên, Đền An Mã, hòn Bà Góa. Thuyền dừng trên mặt hồ, Quý khách giao lưu hát then và đàn tính của người Tày, hoặc tham gia chèo thuyền kayak xung quanh đảo Bà Góa (chi phí tự túc).
Tiếp tục hành trình đến thành phố Cao Bằng, Quý khách nhận phòng khách sạn nghỉ ngơi và dùng cơm chiều. Vào buổi tối, Quý khách có thể tự do dạo chơi tại phố đi bộ Kim Đồng (mở cửa vào thứ 6 và thứ 7 hàng tuần), mua sắm các đặc sản như thạch đen, miến dong, hồng hương,... hoặc thư giãn với dịch vụ massage chân, cổ vai gáy.

Nghỉ đêm tại Cao Bằng',
            ),
            39 => 
            array (
                'timeLineId' => 45,
                'tourId' => 25,
                'title' => 'Cao Bằng - Động Ngườm Ngao - Thác Bản Giốc',
                'description' => 'Sau bữa sáng, xe đưa Quý khách khám phá Công viên địa chất Non nước Cao Bằng, di sản văn hóa thế giới được UNESCO công nhận năm 2018. Hành trình sẽ đưa Quý khách đến với những thắng cảnh nổi tiếng:

Động Ngườm Ngao: Chiêm ngưỡng vẻ đẹp kỳ ảo của động, được hình thành từ quá trình phong hóa đá vôi hàng triệu năm, với những dải thạch nhũ muôn hình vạn trạng, mang đậm dấu ấn văn hóa của đồng bào Tày.
Làng đá Khuổi Ky: Đắm mình trong không gian yên bình của ngôi làng đá cổ hơn 400 tuổi, nơi những nếp nhà sàn độc đáo được xây dựng từ những phiến đá tự nhiên.
Thác Bản Giốc: Tận mắt chiêm ngưỡng vẻ đẹp hùng vĩ của một trong những thác nước đẹp nhất Việt Nam, nơi dòng Quây Sơn hiền hòa chia đôi biên giới Việt - Trung.
Quý khách có thể lựa chọn trải nghiệm đi thuyền trên dòng sông Quây Sơn, ngắm nhìn cảnh sắc hữu tình hai bên bờ Việt Nam - Trung Quốc (chi phí tự túc).
Ghé thăm cơ sở sản xuất dao Phúc Sen, nơi nổi tiếng với những sản phẩm dao rèn thủ công tinh xảo.
Quý khách về khách sạn nghỉ ngơi và dùng bữa chiều. Buổi tối, Quý khách tự do nghỉ ngơi.

Nghỉ đêm tại Cao Bằng',
            ),
            40 => 
            array (
                'timeLineId' => 46,
                'tourId' => 25,
                'title' => 'Cao Bằng - Khu di tích Pác Bó - Kim Đồng - Lạng Sơn',
                'description' => 'Quý khách dùng bữa sáng và làm thủ tục trả phòng khách sạn. Xe khởi hành đưa Quý khách tham quan:

Khu di tích Pác Bó: nơi chủ tịch Hồ Chí Minh từng sống và làm việc với khung cảnh nên thơ, hữu tình. Dòng suối trong xanh, thơ mộng trước cửa hang được Bác đặt tên là Suối Lê Nin, ngọn núi hùng vĩ cạnh bên là Núi Các Mác.
Khu di tích Kim Đồng: nơi ghi nhớ anh hùng liệt sỹ có công bảo vệ cán bộ cách mạng trong thời kỳ kháng chiến.
Tiếp tục hành trình đến Lạng Sơn, Quý khách dừng chụp ảnh lưu niệm tại Đền Mẫu Đồng Đăng là một trong những ngôi chùa Lạng Sơn nổi tiếng, thu hút nhiều khách du lịch ghé thăm.

Đến nơi, đoàn nhận phòng khách sạn và thưởng thức các đặc sản nổi tiếng của Lạng Sơn như phở chua, vịt quay, …Buổi tối, Quý khách tự do dạo phố Chợ đêm Kỳ Lừa.

Nghỉ đêm tại Lạng Sơn',
            ),
            41 => 
            array (
                'timeLineId' => 47,
                'tourId' => 25,
                'title' => 'Lạng Sơn- Hà Nội',
                'description' => 'Quý khách dùng bữa sáng và làm thủ tục trả phòng khách sạn. Xe khởi hành đưa Quý khách tham quan:

Quần thể di tích Động Tam Thanh được mệnh danh là “Đệ nhất bát cảnh xứ Lạng” mà thiên nhiên đã ban tặng với những cảnh quan kỳ thú.
Chùa Tam Thanh, núi Nàng Tô Thị - Hình ảnh người đàn bà hóa đá đã đi vào văn hóa người Việt như một sự cảm thông và ngưỡng mộ sâu sắc.
Sau khi ăn trưa, đoàn khởi hành về Hà Nội. Trên đường đi, Quý khách được nghe giới tiệu về di tích Ải Chi Lăng, Núi Mặt Quỷ.
Đến nơi, Quý khách nhận phòng khách sạn và dùng cơm chiều. Buổi tối, Quý khách tự do dạo 36 phố phường Hà Nội, trải nghiệm không gian sôi nổi, náo nhiệt tại Phố Tạ Hiện hay tìm một gốc với ly cà phê quan sát phố cổ hẳn cũng rất thú vị.

Một số chương trình gợi ý: (các chương trình có ngày diễn ra cố định trong tuần, Quý khách tự túc phương tiện và chi phí).

Hành trình 1: “Giải Mã Hoàng Thành Thăng Long” (Thứ 6, Thứ 7)

Trải nghiệm không gian Hoàng Thành về đêm với nhiều hoạt động hấp dẫn:Lễ dâng hương, chụp ảnh cùng các cung nữ và lính canh trong trang phục cổ xưa; Chiêm ngưỡng trình diễn nghệ thuật trên sàn kính khảo cổ Đoan Môn; Tham gia trò chơi giải mã với hiệu ứng laze ấn tượng và nhận những phần quà ý nghĩa.
Hành trình 2: “Đêm Văn Miếu – Quốc Tử Giám” (Thứ 4, Thứ 7)

Trải nghiệm công nghệ trình chiếu hiện đại, tái hiện lịch sử và văn hóa một cách sống động; tạo cho du khách cảm giác đắm chìm trong không gian kỳ ảo và lung linh của Văn Miếu về đêm.
Hành trình 3: “Đêm Thiêng Liêng” tại Nhà Tù Hỏa Lò (Thứ 6, Thứ 7, Chủ Nhật)

Hành trình trở về quá khứ, sống lại những năm tháng hào hùng của dân tộc, và cảm nhận được tinh thần bất khuất của những chiến sĩ cách mạng qua những câu chuyện đầy xúc động.
Ngoài ra, nếu đi vào những ngày khác, Quý khách có thể lựa chọn:

Tour đêm Đền Ngọc Sơn – khám phá vẻ đẹp huyền bí của ngôi đền linh thiêng giữa lòng hồ Hoàn Kiếm.
Tour xe buýt 2 tầng – tận hưởng không khí về đêm, chiêm ngưỡng phố phường Hà Nội rực rỡ ánh đèn.
Check-in phố đường tàu, thưởng thức cà phê trứng – nét độc đáo của ẩm thực Hà Thành.
Thưởng thức đặc sản Hà Nội như: bún ốc nguội, chả rươi, kem Tràng Tiền…
Nghỉ đêm tại Hà Nội',
            ),
            42 => 
            array (
                'timeLineId' => 48,
                'tourId' => 25,
            'title' => 'Hà Nội - SB Nội Bài (Hà Nội) - Cần Thơ ',
                'description' => 'Quý khách ăn sáng và trả phòng khách sạn. Đoàn khởi hành tham quan:

Lăng Hồ Chủ Tịch: Tìm hiểu cuộc đời và sự nghiệp của vị cha già kính yêu của dân tộc (không viếng vào thứ 2, thứ 6 hàng tuần và giai đoạn bảo trì định kì hàng năm 15/6 – 15/8), Nhà Sàn Bác Hồ, Bảo Tàng Hồ Chí Minh, Chùa Một Cột.
Văn Miếu: Nơi thờ Khổng Tử và các bậc hiền triết của Nho Giáo, Quốc Tử Giám - trường đại học đầu tiên của Việt Nam, tìm về cội nguồn lịch sử của các vị Nho học.
Hồ Hoàn Kiếm ngắm bên ngoài Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc.
Đoàn dùng cơm trưa tại nhà hàng địa phương, tiếp tục khởi hành ra sân bay Nội Bài đáp chuyến bay về Tp.Cần Thơ. Chia tay Quý khách và kết thúc chương trình du lịch tại sân bay Cần Thơ.',
            ),
            43 => 
            array (
                'timeLineId' => 49,
                'tourId' => 26,
                'title' => 'TP.HCM - Phú Quốc - Grand World',
                'description' => '&lt;p&gt;Qu&amp;yacute; kh&amp;aacute;ch tập trung tại s&amp;acirc;n bay T&amp;acirc;n Sơn Nhất, ga quốc nội. Hướng dẫn vi&amp;ecirc;n sẽ hỗ trợ qu&amp;yacute; kh&amp;aacute;ch l&amp;agrave;m thủ tục khởi h&amp;agrave;nh chuyến bay đi&amp;nbsp;&lt;strong&gt;Ph&amp;uacute; Quốc&lt;/strong&gt;&amp;nbsp;. Đo&amp;agrave;n sẽ được xe đưa từ s&amp;acirc;n bay, thưởng thức bữa tối v&amp;agrave; nhận ph&amp;ograve;ng kh&amp;aacute;ch sạn nghỉ ngơi qua đ&amp;ecirc;m.&lt;/p&gt;

&lt;p&gt;Buổi tối, du kh&amp;aacute;ch c&amp;oacute; thể tự do kh&amp;aacute;m ph&amp;aacute; một số địa danh nổi bật tại&amp;nbsp;&lt;strong&gt;&amp;ldquo;Th&amp;agrave;nh phố kh&amp;ocirc;ng bao giờ ngủ&amp;rdquo; Grand World&lt;/strong&gt;&amp;nbsp;như:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Đến tham quan&amp;nbsp;&lt;strong&gt;Huyền thoại tre&lt;/strong&gt;&amp;nbsp;, c&amp;ocirc;ng tr&amp;igrave;nh bằng tre lớn nhất Việt Nam.&lt;/li&gt;
&lt;li&gt;H&amp;atilde;y đến thăm&amp;nbsp;&lt;strong&gt;Trung t&amp;acirc;m nghệ thuật đương đại Urban Park&lt;/strong&gt;&amp;nbsp;, nơi trưng b&amp;agrave;y những t&amp;aacute;c phẩm nghệ thuật độc đ&amp;aacute;o giữa thi&amp;ecirc;n nhi&amp;ecirc;n, mang đến sự kết hợp tuyệt vời giữa nghệ thuật đương đại v&amp;agrave; vẻ đẹp thi&amp;ecirc;n nhi&amp;ecirc;n của Đảo Ngọc.&lt;/li&gt;
&lt;li&gt;Tản bộ dọc theo&amp;nbsp;&lt;strong&gt;&amp;quot;K&amp;ecirc;nh đ&amp;agrave;o Venice&amp;quot;&lt;/strong&gt;&amp;nbsp;, chi&amp;ecirc;m ngưỡng những chiếc thuyền Gondola, những cửa h&amp;agrave;ng đầy m&amp;agrave;u sắc, những c&amp;aacute;nh cổng uy nghi v&amp;agrave; những c&amp;acirc;y cầu v&amp;ograve;m h&amp;igrave;nh b&amp;aacute;n nguyệt.&lt;/li&gt;
&lt;li&gt;Thưởng thức chương tr&amp;igrave;nh biểu diễn &amp;aacute;nh s&amp;aacute;ng ngoạn mục&amp;nbsp;&lt;strong&gt;&amp;quot;Venice Colors&amp;quot;&lt;/strong&gt;&amp;nbsp;.&lt;/li&gt;
&lt;li&gt;Gh&amp;eacute; thăm&amp;nbsp;&lt;strong&gt;Bảo t&amp;agrave;ng Gấu b&amp;ocirc;ng&lt;/strong&gt;&amp;nbsp;, nơi lưu giữ nhiều hiện vật c&amp;oacute; gi&amp;aacute; trị v&amp;agrave; sống lại những cuộc phi&amp;ecirc;u lưu h&amp;agrave;i hước của &amp;quot;nh&amp;agrave; th&amp;aacute;m hiểm uy&amp;ecirc;n th&amp;acirc;m&amp;quot; Teddy Jones. (Chi ph&amp;iacute; c&amp;aacute; nh&amp;acirc;n)&lt;/li&gt;
&lt;li&gt;Kết th&amp;uacute;c một ng&amp;agrave;y với chương tr&amp;igrave;nh biểu diễn nghệ thuật &amp;quot;Tinh hoa Việt Nam&amp;quot; với sự tham gia của hơn 200 nghệ sĩ. (Chi ph&amp;iacute; c&amp;aacute; nh&amp;acirc;n).&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;&lt;strong&gt;Nghỉ đ&amp;ecirc;m tại Ph&amp;uacute; Quốc&lt;/strong&gt;&lt;/p&gt;',
            ),
            44 => 
            array (
                'timeLineId' => 50,
                'tourId' => 26,
                'title' => 'Vui chơi tại Công viên chủ đề VinWonders Phú Quốc - Khu bảo tồn thiên nhiên Safari',
                'description' => '&lt;p&gt;Sau bữa s&amp;aacute;ng, du kh&amp;aacute;ch sẽ kh&amp;aacute;m ph&amp;aacute;&amp;nbsp;&lt;strong&gt;Vinpearl Safari Ph&amp;uacute; Quốc&lt;/strong&gt;&amp;nbsp;- c&amp;ocirc;ng vi&amp;ecirc;n động vật b&amp;aacute;n hoang d&amp;atilde; đầu ti&amp;ecirc;n của Việt Nam - rộng 180 ha v&amp;agrave; c&amp;oacute; hơn 130 lo&amp;agrave;i động vật qu&amp;yacute; hiếm. Du kh&amp;aacute;ch cũng c&amp;oacute; thể thưởng thức c&amp;aacute;c chương tr&amp;igrave;nh biểu diễn động vật, chụp ảnh với động vật v&amp;agrave; trải nghiệm vườn th&amp;uacute; rừng mở, nơi th&amp;acirc;n thiện v&amp;agrave; ch&amp;agrave;o đ&amp;oacute;n du kh&amp;aacute;ch.&lt;br /&gt;
&lt;br /&gt;
V&amp;agrave;o buổi chiều, du kh&amp;aacute;ch c&amp;oacute; thể tham quan v&amp;agrave; kh&amp;aacute;m ph&amp;aacute;&amp;nbsp;&lt;strong&gt;C&amp;ocirc;ng vi&amp;ecirc;n giải tr&amp;iacute; VinWonders&lt;/strong&gt;&amp;nbsp;- c&amp;ocirc;ng vi&amp;ecirc;n giải tr&amp;iacute; lớn nhất Việt Nam v&amp;agrave; l&amp;agrave; một trong những c&amp;ocirc;ng vi&amp;ecirc;n chủ đề h&amp;agrave;ng đầu ch&amp;acirc;u &amp;Aacute;. C&amp;ocirc;ng vi&amp;ecirc;n cung cấp c&amp;aacute;c trải nghiệm sau:&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Trải nghiệm 12 nền văn minh nh&amp;acirc;n loại từ thời cổ đại đến hiện đại&lt;/li&gt;
&lt;li&gt;Kh&amp;aacute;m ph&amp;aacute; 6 khu vực với hơn 100 hoạt động giải tr&amp;iacute; độc đ&amp;aacute;o&lt;/li&gt;
&lt;li&gt;Trải nghiệm c&amp;ocirc;ng vi&amp;ecirc;n nước lớn nhất Đ&amp;ocirc;ng Nam &amp;Aacute;&lt;/li&gt;
&lt;li&gt;Chinh phục 20 tr&amp;ograve; chơi cảm gi&amp;aacute;c mạnh ly kỳ nhất thế giới, như đường trượt nước nhanh nhất thế giới, &amp;quot;Zeus&amp;#39; Fury&amp;quot;; đường trượt kh&amp;ocirc; &amp;quot;Goblin War&amp;quot; cao 15 m&amp;eacute;t, đầu ti&amp;ecirc;n tại Việt Nam; v&amp;agrave; c&amp;aacute;c đường trượt tối trong nh&amp;agrave; &amp;quot;Great Eagle Warrior&amp;quot; v&amp;agrave; &amp;quot;The Dragon&amp;#39;s Curse&amp;quot; - c&amp;aacute;c tr&amp;ograve; chơi tương t&amp;aacute;c trong nh&amp;agrave; tối đầu ti&amp;ecirc;n tại Việt Nam, c&amp;ugrave;ng nhiều tr&amp;ograve; chơi kh&amp;aacute;c.&lt;/li&gt;
&lt;li&gt;H&amp;atilde;y ngạc nhi&amp;ecirc;n với chương tr&amp;igrave;nh biểu diễn ho&amp;agrave;nh tr&amp;aacute;ng của Once đẳng cấp thế giới&lt;/li&gt;
&lt;li&gt;Chi&amp;ecirc;m ngưỡng thế giới đại dương tr&amp;aacute;ng lệ với g&amp;oacute;c nh&amp;igrave;n to&amp;agrave;n cảnh qua cửa sổ acrylic khổng lồ 8x25m của Cung điện dưới nước &amp;ndash; bể c&amp;aacute; h&amp;igrave;nh con r&amp;ugrave;a lớn nhất thế giới&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;Du kh&amp;aacute;ch sẽ thưởng thức bữa tối tại VinWonders v&amp;agrave; trở về kh&amp;aacute;ch sạn nghỉ ngơi.&lt;/p&gt;

&lt;p&gt;&lt;strong&gt;Nghỉ đ&amp;ecirc;m tại Ph&amp;uacute; Quốc&lt;/strong&gt;&lt;/p&gt;',
            ),
            45 => 
            array (
                'timeLineId' => 51,
                'tourId' => 26,
                'title' => 'Phú Quốc - TP. Hồ Chí Minh',
                'description' => '&lt;p&gt;Sau bữa s&amp;aacute;ng, đo&amp;agrave;n sẽ tham quan&amp;nbsp;&lt;strong&gt;C&amp;ocirc;ng vi&amp;ecirc;n thi&amp;ecirc;n nhi&amp;ecirc;n H&amp;ograve;n Thơm:&lt;/strong&gt;&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Trải nghiệm tuyến c&amp;aacute;p treo đạt kỷ lục thế giới&amp;nbsp;&lt;strong&gt;&amp;quot;C&amp;aacute;p treo 3 d&amp;acirc;y vượt biển d&amp;agrave;i nhất thế giới - 7.899,9m&amp;quot;&lt;/strong&gt;&amp;nbsp;với tầm nh&amp;igrave;n 360 độ ra H&amp;ograve;n Rỏi, H&amp;ograve;n Dừa v&amp;agrave; dừng tại H&amp;ograve;n Thơm. Chỉ trong khoảng 15 ph&amp;uacute;t tr&amp;ecirc;n c&amp;aacute;p treo, bạn sẽ c&amp;oacute; những khoảnh khắc tuyệt vời với cảnh biển tuyệt đẹp tại Đảo Nam Ph&amp;uacute; Quốc.&lt;/li&gt;
&lt;li&gt;C&amp;ugrave;ng kh&amp;aacute;m ph&amp;aacute;&amp;nbsp;&lt;strong&gt;c&amp;ocirc;ng vi&amp;ecirc;n nước theo chủ đề hiện đại nhất Đ&amp;ocirc;ng Nam &amp;Aacute; - Aquatopia,&lt;/strong&gt;&amp;nbsp;trải nghiệm 6 khu vực check-in theo chủ đề hấp dẫn mang phong c&amp;aacute;ch d&amp;acirc;n gian huyền b&amp;iacute;.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;&lt;strong&gt;Dạo quanh thị trấn Ho&amp;agrave;ng H&amp;ocirc;n&lt;/strong&gt;&amp;nbsp;- được thiết kế với kiến ​​tr&amp;uacute;c độc đ&amp;aacute;o, m&amp;agrave;u sắc rực rỡ của một thị trấn cổ ch&amp;acirc;u &amp;Acirc;u:&amp;nbsp;&lt;strong&gt;check-in &amp;#39;1001&amp;#39; bậc thang, Quảng trường La M&amp;atilde;, &amp;#39;kỳ quan&amp;#39; Cổng Khai Ho&amp;agrave;ng, Th&amp;aacute;p đồng hồ cao 75m&lt;/strong&gt;&amp;nbsp;- lấy cảm hứng từ th&amp;aacute;p chu&amp;ocirc;ng St. Mark&amp;#39;s Campanile của &amp;Yacute;; chi&amp;ecirc;m ngưỡng&amp;nbsp;&lt;strong&gt;Cầu H&amp;ocirc;n&lt;/strong&gt;&amp;nbsp;- c&amp;acirc;y cầu vươn l&amp;ecirc;n như dải lụa giữa đại dương trong xanh, với hai m&amp;aacute;i v&amp;ograve;m &amp;ocirc;m lấy b&amp;atilde;i c&amp;aacute;t trắng, đối diện nhau, kết hợp th&amp;agrave;nh một thể thống nhất nhưng kh&amp;ocirc;ng chạm v&amp;agrave;o nhau.&lt;br /&gt;
&lt;br /&gt;
Tham quan v&amp;agrave; mua sắm c&amp;aacute;c đặc sản nổi tiếng tại&amp;nbsp;&lt;strong&gt;đặc sản Đức Th&amp;agrave;nh, nh&amp;agrave; m&amp;aacute;y nước mắm Hồng Đức 1/Khai Ho&amp;agrave;ng/Phụng Hưng, đặc sản kh&amp;ocirc; Ph&amp;uacute; Quốc, Cơ sở sản xuất ngọc trai Ph&amp;uacute; Quốc&lt;/strong&gt;&amp;nbsp;- trưng b&amp;agrave;y trang sức ngọc trai nu&amp;ocirc;i ch&amp;iacute;nh hiệu được sản xuất tại Ph&amp;uacute; Quốc.&lt;br /&gt;
&lt;br /&gt;
Xe đưa qu&amp;yacute; kh&amp;aacute;ch ra s&amp;acirc;n bay đ&amp;aacute;p chuyến bay về lại TP.HCM. Ch&amp;uacute;ng t&amp;ocirc;i chia tay qu&amp;yacute; kh&amp;aacute;ch v&amp;agrave; kết th&amp;uacute;c chuyến tham quan tại S&amp;acirc;n bay T&amp;acirc;n Sơn Nhất.&lt;/p&gt;',
            ),
            46 => 
            array (
                'timeLineId' => 52,
                'tourId' => 27,
                'title' => 'TP. Hồ Chí Minh - Nha Trang',
                'description' => '&lt;p&gt;&lt;strong&gt;S&amp;aacute;ng:&amp;nbsp;&lt;/strong&gt;Qu&amp;yacute; kh&amp;aacute;ch c&amp;oacute; mặt tại ga quốc nội, s&amp;acirc;n bay T&amp;acirc;n Sơn Nhất trước giờ bay &amp;iacute;t nhất hai tiếng&lt;strong&gt;.&lt;/strong&gt;&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Đại diện c&amp;ocirc;ng ty Du Lịch Việt đ&amp;oacute;n v&amp;agrave; hỗ trợ Qu&amp;yacute; Kh&amp;aacute;ch l&amp;agrave;m thủ tục đ&amp;oacute;n chuyến bay đi&amp;nbsp;&lt;strong&gt;Cam Ranh.&lt;/strong&gt;&lt;/li&gt;
&lt;li&gt;Đến&amp;nbsp;&lt;strong&gt;s&amp;acirc;n bay Cam Ranh&lt;/strong&gt;, Hướng Dẫn Vi&amp;ecirc;n đ&amp;oacute;n đo&amp;agrave;n khởi h&amp;agrave;nh đến th&amp;agrave;nh phố Nha Trang.&lt;/li&gt;
&lt;/ul&gt;

&lt;p&gt;&lt;strong&gt;Trưa:&amp;nbsp;&lt;/strong&gt;Đo&amp;agrave;n d&amp;ugrave;ng cơm trưa. Qu&amp;yacute; kh&amp;aacute;ch về kh&amp;aacute;ch sạn nhận ph&amp;ograve;ng nghỉ ngơi.&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Qu&amp;yacute; kh&amp;aacute;ch c&amp;oacute; thể chọn 1 trong 2 chương tr&amp;igrave;nh sau:&lt;br /&gt;
&lt;strong&gt;Chương tr&amp;igrave;nh 1 : Đi VinWonders chi ph&amp;iacute; tự t&amp;uacute;c (880.000 VND/ v&amp;eacute; người lớn + 660.000 VND/ v&amp;eacute; trẻ em )&lt;/strong&gt;Xe v&amp;agrave; HDV đưa qu&amp;yacute; kh&amp;aacute;ch xuống Cảng Cầu Đ&amp;aacute;. Qu&amp;yacute; kh&amp;aacute;ch vượt 3320m c&amp;aacute;p treo vượt biển d&amp;agrave;i nhất thế giới để sang đảo Ngọc Xinh Đẹp.Từ tr&amp;ecirc;n độ cao 60m so với mặt nước biển qu&amp;yacute; kh&amp;aacute;ch chi&amp;ecirc;n ngưỡng Vịnh Nha Trang v&amp;agrave; to&amp;agrave;n cảnh th&amp;agrave;nh phố thơ mộng. Qu&amp;yacute; kh&amp;aacute;ch thử sức m&amp;igrave;nh với c&amp;aacute;i tr&amp;ograve; chơi cảm gi&amp;aacute;c mạnh như : đu quay d&amp;acirc;y văng, đu quay lộn đầu, t&amp;agrave;u lượn si&amp;ecirc;u tốc, &amp;hellip;. Thỏa sức m&amp;igrave;nh với những tr&amp;ograve; chơi trong nh&amp;agrave; hay những bộ phim 4D đầy ấn tượng. Tham quan thế dưới đại dương đầy m&amp;agrave;u sắc c&amp;ugrave;ng với khoảng gần 10.000 sinh vật biển đang tung tăng bới lội tại Thủy cung VinWonders. Kh&amp;aacute;m ph&amp;aacute; c&amp;aacute;c tr&amp;ograve; chơi như trượt ống, trượt m&amp;aacute;ng, s&amp;oacute;ng thần, hố đen vũ trụ,&amp;hellip; hoặc lựa chọn ng&amp;acirc;m m&amp;igrave;nh dưới l&amp;agrave;n nước biển trong xanh tại khu c&amp;ocirc;ng vi&amp;ecirc;n nước.Qu&amp;yacute; kh&amp;aacute;ch c&amp;ograve;n được thưởng thức m&amp;agrave;n biểu diễn đặc sắc của c&amp;aacute;c ch&amp;uacute; c&amp;aacute; heo v&amp;agrave; hải cẩu rất th&amp;acirc;n thiện v&amp;agrave; h&amp;agrave;i hước. Đặc biệt đến đ&amp;acirc;y qu&amp;yacute; kh&amp;aacute;ch chi&amp;ecirc;n ngưỡng m&amp;agrave;n tr&amp;igrave;nh diễn lung linh đầy sắc m&amp;agrave;u của chương tr&amp;igrave;nh nhạc nước diễn ra v&amp;agrave;o l&amp;uacute;c 19h c&amp;aacute;c ng&amp;agrave;y trong tuần.&lt;br /&gt;
&lt;strong&gt;Tối:&lt;/strong&gt;&amp;nbsp;Qu&amp;yacute; kh&amp;aacute;ch l&amp;ecirc;n c&amp;aacute;p treo trở về đất liền. HDV v&amp;agrave; xe sẽ đ&amp;oacute;n qu&amp;yacute; kh&amp;aacute;ch tại khu vực xuống c&amp;aacute;p. Sau đ&amp;oacute; đưa qu&amp;yacute; kh&amp;aacute;ch d&amp;ugrave;ng cơm tối tại nh&amp;agrave; h&amp;agrave;ng. Về kh&amp;aacute;ch sạn nghĩ ngơi. Qu&amp;yacute; kh&amp;aacute;ch c&amp;oacute; thể tham gia khu chợ đ&amp;ecirc;m tại khu vực Quảng Trường trung t&amp;acirc;m th&amp;agrave;nh phố hoặc đi dạo bộ dọc bờ biển Nha Trang.&lt;br /&gt;
&lt;strong&gt;Chương tr&amp;igrave;nh 2: city tham tham quan Nha Trang v&amp;agrave; tắm biển Nha Trang.&lt;/strong&gt;&lt;br /&gt;
Xe v&amp;agrave; HDV đưa qu&amp;yacute; kh&amp;aacute;ch qu&amp;yacute; kh&amp;aacute;ch tham quan&amp;nbsp;&lt;strong&gt;Nh&amp;agrave; thờ Ch&amp;aacute;nh T&amp;ograve;a&lt;/strong&gt;&amp;nbsp;hay c&amp;ograve;n gọi l&amp;agrave;&amp;nbsp;&lt;strong&gt;Nh&amp;agrave; thờ N&amp;uacute;i&lt;/strong&gt;&amp;nbsp;tọa lạc ngay trung t&amp;acirc;m th&amp;agrave;nh phố được x&amp;acirc;y dựng tr&amp;ecirc;n một đỉnh đồi với diện t&amp;iacute;ch 4.500m2, với kiến tr&amp;uacute;c Gỗ &amp;ndash; t&amp;iacute;ch nổi bật v&amp;agrave; tường v&amp;aacute;ch được x&amp;acirc;y bằng tấp l&amp;ocirc; xi măng đ&amp;atilde; tạo cho nh&amp;agrave; thờ một kiến tr&amp;uacute;c độc đ&amp;aacute;o nếu ch&amp;acirc;n du kh&amp;aacute;ch phải dừng lại khi qua đ&amp;acirc;y.&lt;br /&gt;
Tham quan&amp;nbsp;&lt;strong&gt;Ch&amp;ugrave;a Long Sơn&lt;/strong&gt;&amp;nbsp;một trong 20 ng&amp;ocirc;i ch&amp;ugrave;a lớn tại th&amp;agrave;nh phố Nha Trang.Qu&amp;yacute; kh&amp;aacute;ch chi&amp;ecirc;m ngưỡng bức tượng Kim Th&amp;acirc;n Phật Tổ cao 24m ngự tr&amp;ecirc;n đồi Thủy Trại được x&amp;acirc;y đựng năm 1963. Về lại kh&amp;aacute;ch san. Tự do tắm biển Nha Trang.&lt;br /&gt;
&lt;strong&gt;Tối:&lt;/strong&gt;&amp;nbsp;HDV v&amp;agrave; xe sẽ đ&amp;oacute;n qu&amp;yacute; kh&amp;aacute;ch d&amp;ugrave;ng cơm tối tại nh&amp;agrave; h&amp;agrave;ng. Về kh&amp;aacute;ch sạn nghĩ ngơi. Qu&amp;yacute; kh&amp;aacute;ch c&amp;oacute; thể tham gia khu chợ đ&amp;ecirc;m tại khu vực Quảng Trường trung t&amp;acirc;m th&amp;agrave;nh phố hoặc đi dạo bộ dọc bờ biển Nha Trang.&lt;/li&gt;
&lt;/ul&gt;',
            ),
            47 => 
            array (
                'timeLineId' => 53,
                'tourId' => 27,
                'title' => 'Nha Trang- Du ngoạn vịnh',
                'description' => '&lt;p&gt;&lt;strong&gt;S&amp;aacute;ng:&lt;/strong&gt;&amp;nbsp;Đo&amp;agrave;n d&amp;ugrave;ng bữa s&amp;aacute;ng tại kh&amp;aacute;ch sạn&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Xe v&amp;agrave; hướng dẫn vi&amp;ecirc;n đến đ&amp;oacute;n kh&amp;aacute;ch tại kh&amp;aacute;ch sạn. Sau đ&amp;oacute; đưa qu&amp;yacute; kh&amp;aacute;ch xuống cảng&amp;nbsp;&lt;strong&gt;Cầu Đ&amp;aacute;.&lt;/strong&gt;&lt;/li&gt;
&lt;li&gt;Tiếp theo ca n&amp;ocirc; đưa qu&amp;yacute; kh&amp;aacute;ch đến&amp;nbsp;&lt;strong&gt;Vịnh San H&amp;ocirc; hoặc H&amp;ograve;n Mun&lt;/strong&gt;, qu&amp;yacute; kh&amp;aacute;ch ngắm l&amp;agrave;n nước biển trong xanh v&amp;agrave; vẻ đẹp tuyệt mỹ của vịnh Nha Trang. Đến Vịnh San H&amp;ocirc; qu&amp;yacute; kh&amp;aacute;ch l&amp;ecirc;n đảo nhận ghế nghỉ ngơi v&amp;agrave; tự do bơi lội để đắm m&amp;igrave;nh dưới l&amp;agrave;n nước trong xanh v&amp;agrave; chi&amp;ecirc;n ngưỡng hệ động vật san h&amp;ocirc; tại đ&amp;acirc;y.&amp;nbsp;&lt;/li&gt;
&lt;li&gt;Ngo&amp;agrave;i ra qu&amp;yacute; kh&amp;aacute;ch c&amp;oacute; thể tham gia c&amp;aacute;c tr&amp;ograve; chơi cảm gi&amp;aacute;c mạnh như : lặn biển kh&amp;aacute;m ph&amp;aacute; đại dương, moto nước, bay d&amp;ugrave;,&amp;hellip;.&amp;nbsp;&lt;em&gt;(tự t&amp;uacute;c chi ph&amp;iacute; c&amp;aacute;c tr&amp;ograve; chơi cảm gi&amp;aacute;c mạnh)&lt;/em&gt;&lt;/li&gt;
&lt;li&gt;Qu&amp;yacute; kh&amp;aacute;ch tiếp tục đến với&amp;nbsp;&lt;strong&gt;L&amp;agrave;ng Ch&amp;agrave;i&lt;/strong&gt;&amp;nbsp;tại đ&amp;acirc;y qu&amp;yacute; kh&amp;aacute;ch c&amp;oacute; thể chọn cho m&amp;igrave;nh c&amp;aacute;c loại hải sản tươi sống để l&amp;agrave;m phong ph&amp;uacute; thực đơn bữa trưa của m&amp;igrave;nh&amp;nbsp;&lt;em&gt;(chi ph&amp;iacute; hải sản tự t&amp;uacute;c)&lt;/em&gt;
&lt;p&gt;&lt;strong&gt;Trưa:&amp;nbsp;&lt;/strong&gt;Qu&amp;yacute; kh&amp;aacute;ch d&amp;ugrave;ng cơm trưa tại b&amp;egrave; với c&amp;aacute;c m&amp;oacute;n : c&amp;aacute; chi&amp;ecirc;n sốt c&amp;agrave;, t&amp;ocirc;m hấp sả, thịt ram ch&amp;aacute;y cạnh, rau x&amp;agrave;o, trứng chi&amp;ecirc;n, lẩu chua c&amp;aacute;, cơm trắng + tr&amp;aacute;ng miệng.&lt;/p&gt;
&lt;/li&gt;
&lt;li&gt;Ca n&amp;ocirc; đưa qu&amp;yacute; kh&amp;aacute;ch đến với khu du lịch&amp;nbsp;&lt;strong&gt;B&amp;atilde;i Tranh&lt;/strong&gt;. Qu&amp;yacute; kh&amp;aacute;ch nhận ghế d&amp;ugrave; nghĩ ngơi, tự do tắm biển tại đ&amp;acirc;y.&lt;/li&gt;
&lt;li&gt;Qu&amp;yacute; kh&amp;aacute;ch trở lại ca n&amp;ocirc;. Ca n&amp;ocirc; đưa qu&amp;yacute; kh&amp;aacute;ch về tới cảng. Xe v&amp;agrave; HDV đưa qu&amp;yacute; kh&amp;aacute;ch về kh&amp;aacute;ch sạn nghĩ ngơi.&lt;/li&gt;
&lt;li&gt;
&lt;p&gt;&lt;strong&gt;Tối:&lt;/strong&gt;&amp;nbsp;HDV đưa qu&amp;yacute; kh&amp;aacute;ch d&amp;ugrave;ng cơm tối tại nh&amp;agrave; h&amp;agrave;ng. Sau đ&amp;oacute; qu&amp;yacute; kh&amp;aacute;ch tự do kh&amp;aacute;m ph&amp;aacute; chợ đ&amp;ecirc;m Nha Trang.&lt;/p&gt;
&lt;/li&gt;
&lt;/ul&gt;',
            ),
            48 => 
            array (
                'timeLineId' => 54,
                'tourId' => 27,
                'title' => 'Nha Trang - TP. Hồ Chí Minh',
                'description' => '&lt;p&gt;&lt;strong&gt;S&amp;aacute;ng:&lt;/strong&gt;&amp;nbsp;D&amp;ugrave;ng bữa s&amp;aacute;ng tại kh&amp;aacute;ch sạn.&amp;nbsp;&lt;/p&gt;

&lt;ul&gt;
&lt;li&gt;Xe v&amp;agrave; HDV đưa qu&amp;yacute; kh&amp;aacute;ch đến&amp;nbsp;&lt;strong&gt;Nh&amp;agrave; Yến Nha Trang&lt;/strong&gt;, đến đ&amp;acirc;y qu&amp;yacute; kh&amp;aacute;ch t&amp;igrave;m hiểu về đặc sản Nha Trang cũng như t&amp;igrave;m hiểu ng&amp;agrave;nh nghề khai th&amp;aacute;c chế biến tổ yến s&amp;agrave;o.&lt;/li&gt;
&lt;li&gt;Qu&amp;yacute; kh&amp;aacute;ch tiếp tục h&amp;agrave;nh tr&amp;igrave;nh với&amp;nbsp;&lt;strong&gt;Th&amp;aacute;p B&amp;agrave; Ponagar&lt;/strong&gt;&amp;nbsp;một trong những th&amp;aacute;p cổ của người Chăm để lại, nằm cạnh bờ s&amp;ocirc;ng C&amp;aacute;i Nha Trang.Đến đ&amp;acirc;y qu&amp;yacute; kh&amp;aacute;ch c&amp;ograve;n c&amp;oacute; thể thưởng th&amp;uacute;c những điệu m&amp;uacute;a của người Chăm, t&amp;igrave;m hiểu về ng&amp;agrave;nh nghề l&amp;agrave;m gốm, dệt vải cổ truyền của d&amp;acirc;n tộc Chăm.
&lt;p&gt;&lt;strong&gt;Trưa:&lt;/strong&gt;&amp;nbsp;Qu&amp;yacute; kh&amp;aacute;ch d&amp;ugrave;ng bữa trưa với đặc sản&amp;nbsp;&lt;strong&gt;Nem Nướng v&amp;agrave; B&amp;uacute;n C&amp;aacute;&lt;/strong&gt;&amp;nbsp;-&lt;strong&gt;&lt;em&gt;&amp;nbsp;một n&amp;eacute;t văn h&amp;oacute;a ẩm thực của người d&amp;acirc;n Nha Trang.&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;
&lt;/li&gt;
&lt;li&gt;Hướng dẫn vi&amp;ecirc;n tiễn đo&amp;agrave;n ra s&amp;acirc;n bay Cam Ranh đ&amp;oacute;n chuyến bay về TP.HCM.Kết th&amp;uacute;c chương tr&amp;igrave;nh tham quan, chia tay v&amp;agrave; hẹn gặp lại.&lt;/li&gt;
&lt;li&gt;&lt;em&gt;Giờ bay c&amp;oacute; thể thay đổi theo quy định của h&amp;agrave;ng kh&amp;ocirc;ng. Du Lịch Việt sẽ thay đổi chương tr&amp;igrave;nh cho ph&amp;ugrave; hợp với giờ bay mới nhưng sẽ kh&amp;ocirc;ng chịu tr&amp;aacute;ch nhiệm về c&amp;aacute;c khoản chi ph&amp;iacute; ph&amp;aacute;t sinh.&lt;/em&gt;&lt;/li&gt;
&lt;/ul&gt;',
            ),
        ));
        
        
    }
}