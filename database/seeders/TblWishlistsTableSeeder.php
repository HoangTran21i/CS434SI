<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblWishlistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_wishlists')->delete();
        
        \DB::table('tbl_wishlists')->insert(array (
            0 => 
            array (
                'wishlistId' => 18,
                'userId' => 12,
                'tourId' => 4,
                'created_at' => '2025-04-05 23:22:13',
                'updated_at' => '2025-04-05 23:22:13',
            ),
            1 => 
            array (
                'wishlistId' => 19,
                'userId' => 12,
                'tourId' => 1,
                'created_at' => '2025-04-21 15:49:58',
                'updated_at' => '2025-04-21 15:49:58',
            ),
        ));
        
        
    }
}