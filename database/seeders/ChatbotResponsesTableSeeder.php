<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ChatbotResponsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chatbot_responses')->delete();
        
        \DB::table('chatbot_responses')->insert(array (
            0 => 
            array (
                'Id' => 1,
                'keyword' => 'chào',
                'response' => 'Xin chào! Tôi có thể hỗ trợ bạn điều gì hôm nay?',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'Id' => 2,
                'keyword' => 'Giá',
                'response' => 'Giá của chúng tôi phụ thuộc vào gói tour. Vui lòng truy cập vào tours để tham khảo.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'Id' => 3,
                'keyword' => 'Liên hệ',
                'response' => 'Bạn có thể liên hệ với chúng tôi qua email minhhoangse6@gmail.com hoặc gọi số +84 905 530 635.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'Id' => 4,
                'keyword' => 'hỗ trợ',
                'response' => 'Chúng tôi luôn sẵn sàng 24/7. Vui lòng cho chúng tôi biết cách chúng tôi có thể giúp bạn.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'Id' => 5,
                'keyword' => 'cám ơn',
                'response' => 'Không có gì! Hãy cho tôi biết nếu có bất kỳ điều gì khác tôi có thể hỗ trợ.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'Id' => 6,
                'keyword' => 'tạm biệt',
                'response' => 'Tạm biệt! Chúc bạn một ngày tốt lành!',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'Id' => 7,
                'keyword' => 'thanh toán',
                'response' => 'Chúng tôi chấp nhận PayPal, Momo và thanh toán trực tiếp tại văn phòng. Hãy cho tôi biết nếu bạn cần trợ giúp.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'Id' => 8,
                'keyword' => 'tư vấn',
                'response' => 'Bạn cần mình tư vấn gì? Bạn có thể thêm thông tin cụ thể hoặc liên hệ qua gmail: minhhoangse6@gmail.com hoặc hotline: 0905530635 để được tư vấn ngay nhé!
',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}