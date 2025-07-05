<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clients\Wishlist;
use App\Models\clients\Tours;

class WishlistController extends Controller
{
    /**
     * Toggle a tour in the wishlist (add/remove).
     */
    public function toggleWishlist(Request $request)
    {
        $userId = $this->getUserId(); // Get the user ID from the session
        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'Bạn phải đăng nhập để tạo wishlist.']);
        }

        $tourId = $request->input('tourId');
        $action = $request->input('action');

        $wishlist = new Wishlist();

        if ($action === 'add') {
            // Add to wishlist
            $wishlist->addToWishlist($userId, $tourId);

            return response()->json(['success' => true, 'message' => 'Tour đã được thêm vào wishlist của bạn.']);
        } elseif ($action === 'remove') {
            // Remove from wishlist
            $wishlist->removeFromWishlist($userId, $tourId);

            return response()->json(['success' => true, 'message' => 'Tour đã được xóa khỏi wishlist của bạn.']);
        }

        return response()->json(['success' => false, 'message' => 'Invalid action.']);
    }

    /**
     * Display the wishlist page.
     */
    public function index()
{
    $title = 'Tours yêu thích'; // Define the title
    $userId = $this->getUserId(); // Get the user ID from the session
    if (!$userId) {
        return redirect()->route('login')->with('error', 'Bạn phải đăng nhập để tạo wishlist.');
    }

    $wishlist = new Wishlist();
    $wishlists = $wishlist->getUserWishlist($userId);

    // Pass both $title and $wishlists to the view
    return view('clients.wishlist', compact('title', 'wishlists'));
}
}