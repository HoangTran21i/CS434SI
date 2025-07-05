<?php

namespace App\Http\Controllers\clients;

use Illuminate\Http\Request;
use App\Models\clients\Tours;
use App\Models\clients\ChatbotResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http; 


class ChatbotController extends Controller
{
    public function getResponse(Request $request)
{
    $message = strtolower($request->input('message')); // Get the user's message
    $response = '';

    if (str_contains($message, 'gợi ý') || str_contains($message, 'bất kỳ')) {
        $response = $this->suggestRandomTour();
    } elseif (str_contains($message, 'thời tiết')) {
        $response = $this->getWeatherInfo($message);
    } elseif (str_contains($message, 'tour') || str_contains($message, 'tours')) {
        $response = $this->listAllTours();
    } elseif (str_contains($message, 'mã giảm giá') || str_contains($message, 'discount')) {
        $response = __("Chúng tôi gửi bạn mã 'DISCOUNT10' giảm 10% và 'DISCOUNT20' giảm 20% cho các tour du lịch.");
    } elseif ($this->isCityKeyword($message)) {
        // \Log::info("City keyword detected in message: {$message}");
        $response = $this->getCityIntroduction($message);
    } elseif ($this->getGeneralInfo($message)) {
        $response = $this->getGeneralInfo($message);
    } elseif ($this->getServiceInfo($message)) {
        $response = $this->getServiceInfo($message);
    } elseif ($this->getCompanyInfo($message)) {
        $response = $this->getCompanyInfo($message);
    } else {
        // Kiểm tra phản hồi được định nghĩa trước trong cơ sở dữ liệu
        $chatbotResponse = ChatbotResponse::where('keyword', 'LIKE', "%{$message}%")->first();
    
        if ($chatbotResponse) {
            $response = $chatbotResponse->response;
        } else {
            $response = __("Xin lỗi, tôi không hiểu. Bạn có thể diễn đạt lại được không?");
        }
    }
    // \Log::info("User message: {$message}");
    // \Log::info("Chatbot response: {$response}");
    return response()->json(['response' => $response]);
}

    // Hàm hiển thị tất cả các tour
    private function listAllTours()
    {
        $tours = Tours::select('tourId', 'title', 'destination', 'priceAdult')->get();

        if ($tours->isEmpty()) {
            return __('Rất tiếc, hiện tại chúng tôi không có tour nào.');
        }

        $response = __("Sau đây là một số tour du lịch hiện có của chúng tôi:") . "<br>";
        foreach ($tours as $tour) {
            $response .= "<div style='margin-bottom: 10px;'>
                            <strong>{$tour->title}</strong><br>
                            " . __("Điểm đến") . ": {$tour->destination}<br>
                            " . __("Giá") . ": {$tour->priceAdult} VND<br>
                            <a href='/tour-detail/{$tour->tourId}' class='btn btn-primary'>" . __("Xem chi tiết") . "</a>
                        </div>";
        }

        return $response;
    }

    // Hàm gợi ý một tour ngẫu nhiên
    private function suggestRandomTour()
    {
        $tour = Tours::inRandomOrder()->first();

        if (!$tour) {
            return __('Rất tiếc, hiện tại chúng tôi không có tour nào.');
        }

        return __("Chúng tôi gợi ý bạn tour:") . "<br>
                <strong>{$tour->title}</strong><br>
                " . __("Điểm đến") . ": {$tour->destination}<br>
                " . __("Giá") . ": {$tour->priceAdult} VND<br>
                <a href='/tour-detail/{$tour->tourId}' class='btn btn-primary'>" . __("Xem chi tiết") . "</a>";
    }

    // Hàm lấy thông tin thời tiết
    private function getWeatherInfo($message)
    {
        // Giả sử người dùng nhập "thời tiết tại Hà Nội"
        preg_match('/thời tiết tại (.+)/', $message, $matches);
        $location = $matches[1] ?? 'Hà Nội';

        $apiKey = '0cab6ec6144bf6bf37f30036e368227b';
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$location}&appid={$apiKey}&units=metric&lang=vi";

        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            return __("Thời tiết tại") . " {$location}: " . $data['weather'][0]['description'] . ", " . 
                   __("nhiệt độ") . ": " . $data['main']['temp'] . "°C.";
        }

        return __("Xin lỗi, tôi không thể lấy thông tin thời tiết tại địa điểm này.");
    }

    // Hàm kiểm tra xem có từ khóa thành phố trong tin nhắn không
    private function isCityKeyword($message)
    {
        $message = strtolower($message); // Chuyển tin nhắn về chữ thường
        $cities = ['hà nội', 'đà nẵng', 'hồ chí minh', 'nha trang', 'phú quốc', 'huế', 'đà lạt', 'cần thơ', 'hạ long', 'quy nhơn'];

        foreach ($cities as $city) {
            if (preg_match("/\b" . preg_quote($city, '/') . "\b/i", $message)) {
                return true;
            }
        }

        return false;
    }
    
    // Hàm lấy thông tin về thành phố
    private function getCityIntroduction($message)
    {
        $message = strtolower($message); // Chuyển tin nhắn về chữ thường
        $cityIntroductions = [
            'hà nội' => 'Hà Nội là thủ đô của Việt Nam, nổi tiếng với lịch sử lâu đời và các địa danh như Hồ Gươm, Lăng Bác.',
            'đà nẵng' => 'Đà Nẵng là thành phố biển xinh đẹp, nổi tiếng với cầu Rồng và bãi biển Mỹ Khê.',
            'hồ chí minh' => 'Hồ Chí Minh là trung tâm kinh tế lớn nhất Việt Nam, nổi tiếng với chợ Bến Thành và Dinh Độc Lập.',
            'nha trang' => 'Nha Trang là thành phố biển nổi tiếng với các bãi biển đẹp và Vinpearl Land.',
            'phú quốc' => 'Phú Quốc là hòn đảo lớn nhất Việt Nam, nổi tiếng với bãi Sao và nước mắm Phú Quốc.',
            'huế' => 'Huế là cố đô của Việt Nam, nổi tiếng với Đại Nội và các lăng tẩm của vua Nguyễn.',
            'đà lạt' => 'Đà Lạt là thành phố ngàn hoa, nổi tiếng với khí hậu mát mẻ và hồ Xuân Hương.',
            'cần thơ' => 'Cần Thơ là trung tâm của miền Tây, nổi tiếng với chợ nổi Cái Răng và bến Ninh Kiều.',
            'hạ long' => 'Hạ Long nổi tiếng với Vịnh Hạ Long, một trong bảy kỳ quan thiên nhiên thế giới.',
            'quy nhơn' => 'Quy Nhơn là thành phố biển yên bình, nổi tiếng với Eo Gió và Kỳ Co.',
        ];

        foreach ($cityIntroductions as $city => $introduction) {
            if (preg_match("/\b" . preg_quote($city, '/') . "\b/i", $message)) {
                return $introduction;
            }
        }

        return __("Xin lỗi, tôi không có thông tin về thành phố này.");
    }
    
    // Hàm lấy thông tin chung
    private function getGeneralInfo($message)
    {
        $message = strtolower($message); // Chuyển tin nhắn về chữ thường
        $generalInfo = [
            'giờ làm việc' => 'Chúng tôi làm việc từ 8:00 sáng đến 6:00 chiều, từ thứ Hai đến thứ Sáu.',
            'địa chỉ' => 'Địa chỉ của chúng tôi là: 120 Hoàng Minh Thảo, TP Đà Nẵng.',
            'liên hệ' => 'Bạn có thể liên hệ với chúng tôi qua email: minhhoangse6@gmail.com hoặc hotline: 0905530635.',
            'hỗ trợ' => 'Chúng tôi luôn sẵn sàng hỗ trợ bạn. Vui lòng liên hệ qua email: minhhoangse6@gmail.com hoặc hotline: 0905530635 để được tư vấn ngay.',
        ];

        foreach ($generalInfo as $keyword => $response) {
            if (str_contains($message, $keyword)) {
                return $response;
            }
        }

        return __("Xin lỗi, tôi không có thông tin phù hợp với yêu cầu của bạn.");
    }

    // Hàm lấy thông tin dịch vụ
    private function getServiceInfo($message)
    {
        $message = strtolower($message); // Chuyển tin nhắn về chữ thường
        $serviceInfo = [
            'dịch vụ' => 'Chúng tôi cung cấp các dịch vụ như: đặt tour du lịch, tư vấn lịch trình.',
            'thanh toán' => 'Chúng tôi hỗ trợ các phương thức thanh toán như: chuyển khoản ngân hàng, thanh toán qua paypal, và ví điện tử Momo.',
            'hủy tour' => 'Chính sách hủy tour: Bạn có thể hủy tour trước 7 ngày để được hoàn tiền 100%. Sau thời gian này, phí hủy sẽ được áp dụng.',
            'bảo hiểm' => 'Tất cả các tour của chúng tôi đều bao gồm bảo hiểm du lịch để đảm bảo an toàn cho bạn.',
        ];

        foreach ($serviceInfo as $keyword => $response) {
            if (str_contains($message, $keyword)) {
                return $response;
            }
        }

        return __("Xin lỗi, tôi không có thông tin phù hợp với yêu cầu của bạn.");
    }
    private function getCompanyInfo($message)
    {
        $message = strtolower($message); // Chuyển tin nhắn về chữ thường
        $companyInfo = [
            'giới thiệu công ty' => 'Công ty chúng tôi là đơn vị hàng đầu trong lĩnh vực du lịch, chuyên cung cấp các tour du lịch chất lượng cao và dịch vụ khách hàng tận tâm.',
            'tầm nhìn' => 'Tầm nhìn của chúng tôi là trở thành công ty du lịch hàng đầu khu vực, mang đến những trải nghiệm tuyệt vời nhất cho khách hàng.',
            'sứ mệnh' => 'Sứ mệnh của chúng tôi là kết nối mọi người với những điểm đến tuyệt vời, mang lại niềm vui và sự hài lòng trong mỗi chuyến đi.',
            'giá trị cốt lõi' => 'Giá trị cốt lõi của chúng tôi bao gồm: Chất lượng, Uy tín, và Sự hài lòng của khách hàng.',
        ];

        foreach ($companyInfo as $keyword => $response) {
            if (str_contains($message, $keyword)) {
                return $response;
            }
        }

        return __("Xin lỗi, tôi không có thông tin phù hợp với yêu cầu của bạn.");
    }
    
}