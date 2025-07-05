<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_reviews')->delete();
        
        \DB::table('tbl_reviews')->insert(array (
            0 => 
            array (
                'reviewId' => 1,
                'tourId' => 8,
                'userId' => 9,
                'rating' => 5.0,
                'comment' => 'good',
                'timestamp' => '2025-03-24 00:42:31',
            ),
            1 => 
            array (
                'reviewId' => 2,
                'tourId' => 6,
                'userId' => 12,
                'rating' => 5.0,
                'comment' => 'Điểm đến đáng nhớ',
                'timestamp' => '2025-03-25 17:23:29',
            ),
            2 => 
            array (
                'reviewId' => 3,
                'tourId' => 9,
                'userId' => 12,
                'rating' => 5.0,
                'comment' => 'very good !',
                'timestamp' => '2025-03-25 23:26:58',
            ),
            3 => 
            array (
                'reviewId' => 4,
                'tourId' => 1,
                'userId' => 12,
                'rating' => 5.0,
                'comment' => 'nice',
                'timestamp' => '2025-04-02 23:49:36',
            ),
        ));
        
        
    }
}