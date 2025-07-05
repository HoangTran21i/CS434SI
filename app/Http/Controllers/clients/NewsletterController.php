<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Newsletter;
use App\Models\clients\Promotion;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:newsletters,email',
    ]);

    // Lưu email vào database
    $newsletter = Newsletter::create(['email' => $request->email]);

    // Lấy mã khuyến mãi mới nhất
    $promotion = Promotion::orderBy('created_at', 'desc')->first();

    // Lấy 2 tour ngẫu nhiên
    $toursModel = new Tours();
    $randomTours = $toursModel->getRandomTours(1);

    // Kiểm tra nếu có mã khuyến mãi hoặc tour thì mới gửi email
    if ($promotion || $randomTours->isNotEmpty()) {
        Mail::send('clients.mail.newsletter_thank_you', [
            'email' => $newsletter->email,
            'promotion' => $promotion,
            'randomTours' => $randomTours,
        ], function ($message) use ($newsletter) {
            $message->to($newsletter->email)
                ->subject('Cám ơn bạn đã đăng ký nhận bản tin từ Travela');
        });
    }

    return response()->json(['success' => true, 'message' => 'Cám ơn bạn đã đăng ký nhận bản tin!']);
}
}