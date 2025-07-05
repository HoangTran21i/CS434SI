<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_images')->delete();
        
        \DB::table('tbl_images')->insert(array (
            0 => 
            array (
                'imageId' => 1,
                'tourId' => 3,
                'imageURL' => 'bien-dao-3n2d-con-dao-1.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | CÔN ĐẢO',
                'uploadDate' => '2025-03-18 22:58:03',
            ),
            1 => 
            array (
                'imageId' => 2,
                'tourId' => 3,
                'imageURL' => 'bien-dao-3n2d-con-dao-2.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | CÔN ĐẢO',
                'uploadDate' => '2025-03-18 22:58:59',
            ),
            2 => 
            array (
                'imageId' => 3,
                'tourId' => 3,
                'imageURL' => 'bien-dao-3n2d-con-dao-3.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | CÔN ĐẢO',
                'uploadDate' => '2025-03-18 22:58:59',
            ),
            3 => 
            array (
                'imageId' => 4,
                'tourId' => 3,
                'imageURL' => 'bien-dao-3n2d-con-dao-4.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | CÔN ĐẢO',
                'uploadDate' => '2025-03-18 22:58:59',
            ),
            4 => 
            array (
                'imageId' => 5,
                'tourId' => 3,
                'imageURL' => 'bien-dao-3n2d-con-dao-5.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | CÔN ĐẢO',
                'uploadDate' => '2025-03-18 22:58:59',
            ),
            5 => 
            array (
                'imageId' => 6,
                'tourId' => 4,
                'imageURL' => 'mien-trung-4n3d-da-nang-hoi-an-ba-na-hue-1.png',
                'description' => 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            6 => 
            array (
                'imageId' => 7,
                'tourId' => 4,
                'imageURL' => 'mien-trung-4n3d-da-nang-hoi-an-ba-na-hue-2.png',
                'description' => 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ ',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            7 => 
            array (
                'imageId' => 8,
                'tourId' => 4,
                'imageURL' => 'mien-trung-4n3d-da-nang-hoi-an-ba-na-hue-3.png',
                'description' => 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ ',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            8 => 
            array (
                'imageId' => 9,
                'tourId' => 4,
                'imageURL' => 'mien-trung-4n3d-da-nang-hoi-an-ba-na-hue-4.png',
                'description' => 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ ',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            9 => 
            array (
                'imageId' => 10,
                'tourId' => 4,
                'imageURL' => 'mien-trung-4n3d-da-nang-hoi-an-ba-na-hue-5.png',
                'description' => 'MIỀN TRUNG 4N3Đ | ĐÀ NẴNG – HỘI AN – BÀ NÀ – HUẾ ',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            10 => 
            array (
                'imageId' => 14,
                'tourId' => 5,
                'imageURL' => 'tour-mien-bac-4n3d-ha-noi-ninh-binh-ha-long-yen-tu-sapa-1.png',
                'description' => 'HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            11 => 
            array (
                'imageId' => 15,
                'tourId' => 5,
                'imageURL' => 'tour-mien-bac-4n3d-ha-noi-ninh-binh-ha-long-yen-tu-sapa-2.png',
                'description' => 'HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            12 => 
            array (
                'imageId' => 16,
                'tourId' => 5,
                'imageURL' => 'tour-mien-bac-4n3d-ha-noi-ninh-binh-ha-long-yen-tu-sapa-3.png',
                'description' => 'HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            13 => 
            array (
                'imageId' => 17,
                'tourId' => 5,
                'imageURL' => 'tour-mien-bac-4n3d-ha-noi-ninh-binh-ha-long-yen-tu-sapa-4.png',
                'description' => 'HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            14 => 
            array (
                'imageId' => 18,
                'tourId' => 5,
                'imageURL' => 'tour-mien-bac-4n3d-ha-noi-ninh-binh-ha-long-yen-tu-sapa-5.png',
                'description' => 'HÀ NỘI – NINH BÌNH – HẠ LONG – YÊN TỬ – SAPA',
                'uploadDate' => '2025-03-18 23:54:07',
            ),
            15 => 
            array (
                'imageId' => 19,
                'tourId' => 1,
                'imageURL' => 'bien-dao-3n2d-phu-quoc-1.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | PHÚ QUỐC',
                'uploadDate' => '2025-03-18 23:37:42',
            ),
            16 => 
            array (
                'imageId' => 20,
                'tourId' => 1,
                'imageURL' => 'bien-dao-3n2d-phu-quoc-2.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | PHÚ QUỐC',
                'uploadDate' => '2025-03-18 23:37:42',
            ),
            17 => 
            array (
                'imageId' => 21,
                'tourId' => 1,
                'imageURL' => 'bien-dao-3n2d-phu-quoc-3.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | PHÚ QUỐC',
                'uploadDate' => '2025-03-18 23:37:42',
            ),
            18 => 
            array (
                'imageId' => 22,
                'tourId' => 1,
                'imageURL' => 'bien-dao-3n2d-phu-quoc-4.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | PHÚ QUỐC',
                'uploadDate' => '2025-03-18 23:37:42',
            ),
            19 => 
            array (
                'imageId' => 23,
                'tourId' => 1,
                'imageURL' => 'bien-dao-3n2d-phu-quoc-5.jpg',
                'description' => 'BIỂN ĐẢO 3N2Đ | PHÚ QUỐC',
                'uploadDate' => '2025-03-18 23:37:42',
            ),
            20 => 
            array (
                'imageId' => 24,
                'tourId' => 2,
                'imageURL' => 'mien-bac-4n3d-ha-noi-lao-cai-sa-pa-4.png',
                'description' => 'HÀ NỘI – LÀO CAI – SA PA',
                'uploadDate' => '2025-03-19 15:10:40',
            ),
            21 => 
            array (
                'imageId' => 25,
                'tourId' => 2,
                'imageURL' => 'mien-bac-4n3d-ha-noi-lao-cai-sa-pa-2.png',
                'description' => 'HÀ NỘI – LÀO CAI – SA PA',
                'uploadDate' => '2025-03-19 15:03:04',
            ),
            22 => 
            array (
                'imageId' => 26,
                'tourId' => 2,
                'imageURL' => 'mien-bac-4n3d-ha-noi-lao-cai-sa-pa-3.jpg',
                'description' => 'HÀ NỘI – LÀO CAI – SA PA',
                'uploadDate' => '2025-03-19 15:03:04',
            ),
            23 => 
            array (
                'imageId' => 27,
                'tourId' => 2,
                'imageURL' => 'mien-bac-4n3d-ha-noi-lao-cai-sa-pa-1.png',
                'description' => 'HÀ NỘI – LÀO CAI – SA PA',
                'uploadDate' => '2025-03-19 15:10:49',
            ),
            24 => 
            array (
                'imageId' => 28,
                'tourId' => 2,
                'imageURL' => 'mien-bac-4n3d-ha-noi-lao-cai-sa-pa-5.png',
                'description' => 'HÀ NỘI – LÀO CAI – SA PA',
                'uploadDate' => '2025-03-19 15:03:04',
            ),
            25 => 
            array (
                'imageId' => 29,
                'tourId' => 7,
                'imageURL' => 'bien-nang-nha-trang-sac-hoa-da-lat-hon-lao-vinwonders-langbiang-nha-may-che-co-100-nam-tuoi-1.jpg',
                'description' => '"Biển nắng Nha Trang - Sắc hoa Đà Lạt" ',
                'uploadDate' => '2025-03-20 18:10:43',
            ),
            26 => 
            array (
                'imageId' => 30,
                'tourId' => 7,
                'imageURL' => 'bien-nang-nha-trang-sac-hoa-da-lat-hon-lao-vinwonders-langbiang-nha-may-che-co-100-nam-tuoi-2.jpg',
                'description' => '"Biển nắng Nha Trang - Sắc hoa Đà Lạt" ',
                'uploadDate' => '2025-03-20 18:10:43',
            ),
            27 => 
            array (
                'imageId' => 31,
                'tourId' => 7,
                'imageURL' => 'bien-nang-nha-trang-sac-hoa-da-lat-hon-lao-vinwonders-langbiang-nha-may-che-co-100-nam-tuoi-3.jpg',
                'description' => '"Biển nắng Nha Trang - Sắc hoa Đà Lạt" ',
                'uploadDate' => '2025-03-20 18:10:43',
            ),
            28 => 
            array (
                'imageId' => 32,
                'tourId' => 7,
                'imageURL' => 'bien-nang-nha-trang-sac-hoa-da-lat-hon-lao-vinwonders-langbiang-nha-may-che-co-100-nam-tuoi-4.jpg',
                'description' => '"Biển nắng Nha Trang - Sắc hoa Đà Lạt" ',
                'uploadDate' => '2025-03-20 18:10:43',
            ),
            29 => 
            array (
                'imageId' => 33,
                'tourId' => 7,
                'imageURL' => 'bien-nang-nha-trang-sac-hoa-da-lat-hon-lao-vinwonders-langbiang-nha-may-che-co-100-nam-tuoi-5.jpg',
                'description' => '"Biển nắng Nha Trang - Sắc hoa Đà Lạt" ',
                'uploadDate' => '2025-03-20 18:10:43',
            ),
            30 => 
            array (
                'imageId' => 34,
                'tourId' => 6,
                'imageURL' => 'quy-nhon-eo-gio-lang-chai-nhon-ly-bao-tang-quang-trung-1.jpg',
                'description' => 'Quy Nhơn',
                'uploadDate' => '2025-04-23 12:06:25',
            ),
            31 => 
            array (
                'imageId' => 35,
                'tourId' => 6,
                'imageURL' => 'quy-nhon-eo-gio-lang-chai-nhon-ly-bao-tang-quang-trung-2.jpg',
                'description' => 'Quy Nhơn',
                'uploadDate' => '2025-04-23 12:06:53',
            ),
            32 => 
            array (
                'imageId' => 36,
                'tourId' => 6,
                'imageURL' => 'quy-nhon-eo-gio-lang-chai-nhon-ly-bao-tang-quang-trung-3.jpg',
                'description' => 'Quy Nhơn',
                'uploadDate' => '2025-04-23 12:06:59',
            ),
            33 => 
            array (
                'imageId' => 37,
                'tourId' => 6,
                'imageURL' => 'quy-nhon-eo-gio-lang-chai-nhon-ly-bao-tang-quang-trung-4.jpg',
                'description' => 'Quy Nhơn',
                'uploadDate' => '2025-03-20 18:23:12',
            ),
            34 => 
            array (
                'imageId' => 38,
                'tourId' => 6,
                'imageURL' => 'quy-nhon-eo-gio-lang-chai-nhon-ly-bao-tang-quang-trung-5.jpeg',
                'description' => 'Quy Nhơn',
                'uploadDate' => '2025-03-20 18:23:12',
            ),
            35 => 
            array (
                'imageId' => 39,
                'tourId' => 8,
                'imageURL' => 'mien-tay-tien-giang-my-tho-cu-lao-thoi-son-ben-tre-con-phung-pid-1.jpeg',
                'description' => 'Mỹ Tho - Thới Sơn - Cồn Phụng - Bến Tre',
                'uploadDate' => '0000-00-00 00:00:00',
            ),
            36 => 
            array (
                'imageId' => 40,
                'tourId' => 8,
                'imageURL' => 'mien-tay-tien-giang-my-tho-cu-lao-thoi-son-ben-tre-con-phung-pid-2.jpg',
                'description' => 'Mỹ Tho - Thới Sơn - Cồn Phụng - Bến Tre',
                'uploadDate' => '0000-00-00 00:00:00',
            ),
            37 => 
            array (
                'imageId' => 41,
                'tourId' => 8,
                'imageURL' => 'mien-tay-tien-giang-my-tho-cu-lao-thoi-son-ben-tre-con-phung-pid-3.jpg',
                'description' => 'Mỹ Tho - Thới Sơn - Cồn Phụng - Bến Tre',
                'uploadDate' => '2025-03-20 20:46:09',
            ),
            38 => 
            array (
                'imageId' => 42,
                'tourId' => 8,
                'imageURL' => 'mien-tay-tien-giang-my-tho-cu-lao-thoi-son-ben-tre-con-phung-pid-4.jpg',
                'description' => 'Mỹ Tho - Thới Sơn - Cồn Phụng - Bến Tre',
                'uploadDate' => '2025-04-23 12:08:03',
            ),
            39 => 
            array (
                'imageId' => 43,
                'tourId' => 8,
                'imageURL' => 'mien-tay-tien-giang-my-tho-cu-lao-thoi-son-ben-tre-con-phung-pid-5.jpg',
                'description' => 'Mỹ Tho - Thới Sơn - Cồn Phụng - Bến Tre',
                'uploadDate' => '2025-03-20 20:46:09',
            ),
            40 => 
            array (
                'imageId' => 49,
                'tourId' => 9,
                'imageURL' => 'caravan-kham-pha-nam-cat-tien-1.jpg',
                'description' => 'Caravan Sinh Thái: Vườn quốc gia Nam Cát Tiên - Thiên nhiên vẫy gọi',
                'uploadDate' => '2025-03-23 22:59:08',
            ),
            41 => 
            array (
                'imageId' => 50,
                'tourId' => 9,
                'imageURL' => 'caravan-kham-pha-nam-cat-tien-2.jpg',
                'description' => 'Caravan Sinh Thái: Vườn quốc gia Nam Cát Tiên - Thiên nhiên vẫy gọi',
                'uploadDate' => '2025-03-23 22:59:08',
            ),
            42 => 
            array (
                'imageId' => 51,
                'tourId' => 9,
                'imageURL' => 'caravan-kham-pha-nam-cat-tien-3.jpg',
                'description' => 'Caravan Sinh Thái: Vườn quốc gia Nam Cát Tiên - Thiên nhiên vẫy gọi',
                'uploadDate' => '2025-03-23 22:59:08',
            ),
            43 => 
            array (
                'imageId' => 52,
                'tourId' => 9,
                'imageURL' => 'caravan-kham-pha-nam-cat-tien-4.jpg',
                'description' => 'Caravan Sinh Thái: Vườn quốc gia Nam Cát Tiên - Thiên nhiên vẫy gọi',
                'uploadDate' => '2025-03-23 22:59:08',
            ),
            44 => 
            array (
                'imageId' => 53,
                'tourId' => 9,
                'imageURL' => 'caravan-kham-pha-nam-cat-tien-5.jpg',
                'description' => 'Caravan Sinh Thái: Vườn quốc gia Nam Cát Tiên - Thiên nhiên vẫy gọi',
                'uploadDate' => '2025-03-23 22:59:08',
            ),
            45 => 
            array (
                'imageId' => 54,
                'tourId' => 10,
                'imageURL' => 'danang-quangngai-daolyson-1.jpg',
                'description' => 'Đà Nẵng - Quảng Ngãi - đảo Lý Sơn',
                'uploadDate' => '2025-04-23 12:08:43',
            ),
            46 => 
            array (
                'imageId' => 55,
                'tourId' => 10,
                'imageURL' => 'danang-quangngai-daolyson-2.jpg',
                'description' => 'Đà Nẵng - Quảng Ngãi - đảo Lý Sơn',
                'uploadDate' => '2025-04-22 14:14:19',
            ),
            47 => 
            array (
                'imageId' => 56,
                'tourId' => 10,
                'imageURL' => 'danang-quangngai-daolyson-3.jpg',
                'description' => 'Đà Nẵng - Quảng Ngãi - đảo Lý Sơn',
                'uploadDate' => '2025-04-23 12:08:47',
            ),
            48 => 
            array (
                'imageId' => 57,
                'tourId' => 10,
                'imageURL' => 'danang-quangngai-daolyson-4.jpg',
                'description' => 'Đà Nẵng - Quảng Ngãi - đảo Lý Sơn',
                'uploadDate' => '2025-04-23 12:08:52',
            ),
            49 => 
            array (
                'imageId' => 58,
                'tourId' => 10,
                'imageURL' => 'danang-quangngai-daolyson-5.jpg',
                'description' => 'Đà Nẵng - Quảng Ngãi - đảo Lý Sơn',
                'uploadDate' => '2025-04-22 14:14:19',
            ),
            50 => 
            array (
                'imageId' => 59,
                'tourId' => 11,
                'imageURL' => 'danang-thanh-dia-my-son-1.jpg',
                'description' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
                'uploadDate' => '2025-04-22 16:13:17',
            ),
            51 => 
            array (
                'imageId' => 60,
                'tourId' => 11,
                'imageURL' => 'danang-thanh-dia-my-son-2.jpg',
                'description' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
                'uploadDate' => '2025-04-22 16:13:17',
            ),
            52 => 
            array (
                'imageId' => 61,
                'tourId' => 11,
                'imageURL' => 'danang-thanh-dia-my-son-3.jpg',
                'description' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
                'uploadDate' => '2025-04-22 16:13:17',
            ),
            53 => 
            array (
                'imageId' => 62,
                'tourId' => 11,
                'imageURL' => 'danang-thanh-dia-my-son-4.jpg',
                'description' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
                'uploadDate' => '2025-04-23 12:09:29',
            ),
            54 => 
            array (
                'imageId' => 63,
                'tourId' => 11,
                'imageURL' => 'danang-thanh-dia-my-son-5.jpg',
                'description' => 'Đà Nẵng - Thánh địa Mỹ Sơn',
                'uploadDate' => '2025-04-22 16:13:17',
            ),
            55 => 
            array (
                'imageId' => 64,
                'tourId' => 12,
                'imageURL' => 'hanoi-halong-trangan-1.jpg',
                'description' => 'Hà Nội - Vịnh Hạ Long - Chùa Bái Đính - Tràng An - Tuyệt Tịnh Cốc',
                'uploadDate' => '2025-04-22 19:02:28',
            ),
            56 => 
            array (
                'imageId' => 65,
                'tourId' => 12,
                'imageURL' => 'hanoi-halong-trangan-2.jpg',
                'description' => 'Hà Nội - Vịnh Hạ Long - Chùa Bái Đính - Tràng An - Tuyệt Tịnh Cốc',
                'uploadDate' => '2025-04-22 19:02:28',
            ),
            57 => 
            array (
                'imageId' => 66,
                'tourId' => 12,
                'imageURL' => 'hanoi-halong-trangan-3.jpg',
                'description' => 'Hà Nội - Vịnh Hạ Long - Chùa Bái Đính - Tràng An - Tuyệt Tịnh Cốc',
                'uploadDate' => '2025-04-22 19:02:28',
            ),
            58 => 
            array (
                'imageId' => 67,
                'tourId' => 12,
                'imageURL' => 'hanoi-halong-trangan-4.jpg',
                'description' => 'Hà Nội - Vịnh Hạ Long - Chùa Bái Đính - Tràng An - Tuyệt Tịnh Cốc',
                'uploadDate' => '2025-04-22 19:02:28',
            ),
            59 => 
            array (
                'imageId' => 68,
                'tourId' => 12,
                'imageURL' => 'hanoi-halong-trangan-5.jpg',
                'description' => 'Hà Nội - Vịnh Hạ Long - Chùa Bái Đính - Tràng An - Tuyệt Tịnh Cốc',
                'uploadDate' => '2025-04-22 19:02:28',
            ),
            60 => 
            array (
                'imageId' => 69,
                'tourId' => 24,
                'imageURL' => 'cau-ca-muc-phu-quoc-1.jpg',
                'description' => 'Câu Mực Đêm Phú Quốc',
                'uploadDate' => '2025-04-22 22:45:47',
            ),
            61 => 
            array (
                'imageId' => 70,
                'tourId' => 24,
                'imageURL' => 'cau-ca-muc-phu-quoc-2.jpg',
                'description' => 'Câu Mực Đêm Phú Quốc',
                'uploadDate' => '2025-04-23 12:09:35',
            ),
            62 => 
            array (
                'imageId' => 71,
                'tourId' => 24,
                'imageURL' => 'cau-ca-muc-phu-quoc-3.jpg',
                'description' => 'Câu Mực Đêm Phú Quốc',
                'uploadDate' => '2025-04-22 22:45:47',
            ),
            63 => 
            array (
                'imageId' => 72,
                'tourId' => 24,
                'imageURL' => 'cau-ca-muc-phu-quoc-4.jpg',
                'description' => 'Câu Mực Đêm Phú Quốc',
                'uploadDate' => '2025-04-22 22:45:47',
            ),
            64 => 
            array (
                'imageId' => 73,
                'tourId' => 24,
                'imageURL' => 'cau-ca-muc-phu-quoc-5.jpg',
                'description' => 'Câu Mực Đêm Phú Quốc',
                'uploadDate' => '2025-04-22 22:45:47',
            ),
            65 => 
            array (
                'imageId' => 74,
                'tourId' => 25,
                'imageURL' => 'hanoi-backan-babe-caobang-langson-1.jpg',
                'description' => 'Hà Nội - Bắc Cạn - Ba Bể - Cao Bằng - Thác Bản Giốc - Lạng Sơn',
                'uploadDate' => '2025-04-23 12:54:13',
            ),
            66 => 
            array (
                'imageId' => 75,
                'tourId' => 25,
                'imageURL' => 'hanoi-backan-babe-caobang-langson-2.jpg',
                'description' => 'Hà Nội - Bắc Cạn - Ba Bể - Cao Bằng - Thác Bản Giốc - Lạng Sơn',
                'uploadDate' => '2025-04-23 12:54:13',
            ),
            67 => 
            array (
                'imageId' => 76,
                'tourId' => 25,
                'imageURL' => 'hanoi-backan-babe-caobang-langson-3.jpg',
                'description' => 'Hà Nội - Bắc Cạn - Ba Bể - Cao Bằng - Thác Bản Giốc - Lạng Sơn',
                'uploadDate' => '2025-04-23 12:54:13',
            ),
            68 => 
            array (
                'imageId' => 77,
                'tourId' => 25,
                'imageURL' => 'hanoi-backan-babe-caobang-langson-4.jpg',
                'description' => 'Hà Nội - Bắc Cạn - Ba Bể - Cao Bằng - Thác Bản Giốc - Lạng Sơn',
                'uploadDate' => '2025-04-23 12:54:13',
            ),
            69 => 
            array (
                'imageId' => 78,
                'tourId' => 25,
                'imageURL' => 'hanoi-backan-babe-caobang-langson-5.jpg',
                'description' => 'Hà Nội - Bắc Cạn - Ba Bể - Cao Bằng - Thác Bản Giốc - Lạng Sơn',
                'uploadDate' => '2025-04-23 12:54:13',
            ),
            70 => 
            array (
                'imageId' => 79,
                'tourId' => 26,
                'imageURL' => 'phuquoc-vinwonder-safariworld-honthom-coastoalcable-1.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 14:24:25',
            ),
            71 => 
            array (
                'imageId' => 80,
                'tourId' => 26,
                'imageURL' => 'phuquoc-vinwonder-safariworld-honthom-coastoalcable-2.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 14:24:25',
            ),
            72 => 
            array (
                'imageId' => 81,
                'tourId' => 26,
                'imageURL' => 'phuquoc-vinwonder-safariworld-honthom-coastoalcable-3.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 14:24:25',
            ),
            73 => 
            array (
                'imageId' => 82,
                'tourId' => 26,
                'imageURL' => 'phuquoc-vinwonder-safariworld-honthom-coastoalcable-4.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 14:24:25',
            ),
            74 => 
            array (
                'imageId' => 83,
                'tourId' => 26,
                'imageURL' => 'phuquoc-vinwonder-safariworld-honthom-coastoalcable-5.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 14:24:25',
            ),
            75 => 
            array (
                'imageId' => 84,
                'tourId' => 27,
                'imageURL' => 'Du-lich-Nha-Trang-Thap-Ba-Ponagar-Chua-Long-Son-1.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 17:03:25',
            ),
            76 => 
            array (
                'imageId' => 85,
                'tourId' => 27,
                'imageURL' => 'Du-lich-Nha-Trang-Thap-Ba-Ponagar-Chua-Long-Son-2.jpg',
                'description' => '',
                'uploadDate' => '2025-04-23 17:03:25',
            ),
            77 => 
            array (
                'imageId' => 86,
                'tourId' => 27,
                'imageURL' => 'Du-lich-Nha-Trang-Thap-Ba-Ponagar-Chua-Long-Son-3.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 17:03:25',
            ),
            78 => 
            array (
                'imageId' => 87,
                'tourId' => 27,
                'imageURL' => 'Du-lich-Nha-Trang-Thap-Ba-Ponagar-Chua-Long-Son-4.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 17:03:25',
            ),
            79 => 
            array (
                'imageId' => 88,
                'tourId' => 27,
                'imageURL' => 'Du-lich-Nha-Trang-Thap-Ba-Ponagar-Chua-Long-Son-5.jpg',
                'description' => NULL,
                'uploadDate' => '2025-04-23 17:03:25',
            ),
        ));
        
        
    }
}