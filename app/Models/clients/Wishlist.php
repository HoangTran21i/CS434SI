<?php

namespace App\Models\clients;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wishlist extends Model
{
    use HasFactory;

    protected $table = 'tbl_wishlists';

    /**
     * Add a tour to the wishlist.
     */
    public function addToWishlist($userId, $tourId)
    {
        return DB::table($this->table)->insert([
            'userId' => $userId,
            'tourId' => $tourId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Remove a tour from the wishlist.
     */
    public function removeFromWishlist($userId, $tourId)
    {
        return DB::table($this->table)
            ->where('userId', $userId)
            ->where('tourId', $tourId)
            ->delete();
    }

    /**
     * Check if a tour is in the user's wishlist.
     */
    public function isInWishlist($userId, $tourId)
    {
        return DB::table($this->table)
            ->where('userId', $userId)
            ->where('tourId', $tourId)
            ->exists();
    }

    /**
     * Get all wishlist items for a user.
     */
    public function getUserWishlist($userId)
    {
        $wishlistItems = DB::table($this->table)
            ->join('tbl_tours', 'tbl_wishlists.tourId', '=', 'tbl_tours.tourId')
            ->where('tbl_wishlists.userId', $userId)
            ->select(
                'tbl_tours.tourId',
                'tbl_tours.title',
                'tbl_tours.description',
                'tbl_tours.priceAdult',
                'tbl_tours.priceChild',
                'tbl_tours.time',
                'tbl_tours.destination',
                'tbl_tours.quantity'
            )
            ->get();

        // Add images and ratings for each tour
        foreach ($wishlistItems as $item) {
            $item->images = DB::table('tbl_images')
                ->where('tourId', $item->tourId)
                ->pluck('imageUrl');
            $item->rating = DB::table('tbl_reviews')
                ->where('tourId', $item->tourId)
                ->avg('rating');
        }

        return $wishlistItems;
    }

    /**
     * Get the count of wishlist items for a user.
     */
    public function getWishlistCount($userId)
    {
        return DB::table($this->table)
            ->where('user_id', $userId)
            ->count();
    }
}