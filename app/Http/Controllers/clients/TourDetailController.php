<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Tours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TourDetailController extends Controller
{

    private $tours;

    public function __construct()
    {
        parent::__construct(); // Gọi constructor của Controller để khởi tạo $user
        $this->tours = new Tours();
    }
    public function index($id = 0)
    {
        $title = 'Chi tiết tours';
        $userId = $this->getUserId();

        $tourDetail = $this->tours->getTourDetail($id);
        $getReviews = $this->tours->getReviews($id);
        $reviewStats = $this->tours->reviewStats($id);

        $avgStar = round($reviewStats->averageRating);
        $countReview = $reviewStats->reviewCount;

        $checkReviewExist = $this->tours->checkReviewExist($id, $userId);
        if (!$checkReviewExist) {
            $checkDisplay = '';
        } else {
            $checkDisplay = 'hide';
        }

        // Check if the tour is in the user's wishlist
        $isInWishlist = false;
        if ($userId) {
            $wishlist = new \App\Models\clients\Wishlist();
            $isInWishlist = $wishlist->isInWishlist($userId, $id);
        }

        // Lấy danh sách các tour tương tự từ cơ sở dữ liệu
    $tourRecommendations = $this->tours->getSimilarTours($id);

    // Pass all variables to the view
    return view('clients.tour-detail', compact(
        'title',
        'tourDetail',
        'getReviews',
        'avgStar',
        'countReview',
        'checkDisplay',
        'isInWishlist',
        'tourRecommendations'
    ));
    }

    public function reviews(Request $req)
    {
        // dd($req);
        $userId = $this->getUserId();
        $tourId = $req->tourId;
        $message = $req->message;
        $star = $req->rating;

        $dataReview = [
            'tourId' => $tourId,
            'userId' => $userId,
            'comment' => $message,
            'rating' => $star
        ];

        $rating = $this->tours->createReviews($dataReview);
        if (!$rating) {
            return response()->json([
                'error' => true
            ], 500);
        }
        $tourDetail = $this->tours->getTourDetail($tourId);
        $getReviews = $this->tours->getReviews($tourId);
        $reviewStats = $this->tours->reviewStats($tourId);

        $avgStar = round($reviewStats->averageRating);
        $countReview = $reviewStats->reviewCount;

        // Trả về phản hồi thành công
        return response()->json([
            'success' => true,
            'message' => 'Đánh giá của bạn đã được gửi thành công!',
            'data' => view('clients.partials.reviews', compact('tourDetail', 'getReviews', 'avgStar', 'countReview'))->render()
        ], 200);
    }
}