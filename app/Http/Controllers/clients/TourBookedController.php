<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Booking;
use App\Models\clients\Tours;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourBookedController extends Controller
{
    private $tour;
    private $booking;

    public function __construct()
    {
        $this->tour = new Tours();
        $this->booking = new Booking();
    }
    public function index(Request $req)
    {
        $title = "Tour đã đặt";

        $bookingId = $req->input('bookingId');
        $checkoutId = $req->input('checkoutId');
        $tour_booked = DB::table('tbl_booking')
    ->join('tbl_tours', 'tbl_booking.tourId', '=', 'tbl_tours.tourId')
    ->select(
        'tbl_booking.*', 
        'tbl_tours.title',
        'tbl_tours.priceAdult',
        'tbl_tours.priceChild'
    )
    ->where('tbl_booking.bookingId', $bookingId)
    ->first();
    // dd($tour_booked);
    $hide = '';
    if ($tour_booked && !empty($tour_booked->startDate)) {
        $today = Carbon::now();
        $startDate = Carbon::parse($tour_booked->startDate);

        // Calculate the difference in days
        $diffInDays = $startDate->diffInDays($today);

        // Set 'hide' based on the condition
        $hide = $diffInDays < 7 ? 'hide' : '';
    }

    return view("clients.tour-booked", compact('title', 'tour_booked', 'hide', 'bookingId'));

        // dd($tour_booked);
        return view("clients.tour-booked", compact('title', 'tour_booked', 'bookingId'));
    }

    public function cancelBooking(Request $req)
    {
        $bookingId = $req->input('bookingId');

        // Retrieve the booking record
        $booking = DB::table('tbl_booking')
            ->select('start_date', 'tourId', 'numAdults', 'numChildren')
            ->where('bookingId', $bookingId)
            ->first();
        // dd($booking);
        if (!$booking || empty($booking->start_date)) {
            toastr()->error('Đặt chỗ không hợp lệ hoặc thiếu ngày bắt đầu.');
        }

        // Check if the booking can be canceled
        $startDate = Carbon::parse($booking->start_date);
        $today = Carbon::now();
        $diffInDays = $startDate->diffInDays($today, false);
        // dd($startDate, $today, $diffInDays);
        if ($diffInDays < 3 && $diffInDays >= 0) {
            toastr()->error('Không thể hủy tour trước ngày khởi hành ít nhất 3 ngày.');
            return redirect()->back();
        }

        // Update the booking status to canceled
        DB::table('tbl_booking')
            ->where('bookingId', $bookingId)
            ->update(['bookingStatus' => 'c']); // 'c' for canceled

        // Optionally, update the tour's available quantity
        DB::table('tbl_tours')
            ->where('tourId', $booking->tourId)
            ->increment('quantity', $booking->numAdults + $booking->numChildren);
            toastr()->success('Hủy tour thành công!');
        return redirect()->route('my-tours');
    }
}