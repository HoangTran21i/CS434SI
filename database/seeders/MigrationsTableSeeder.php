<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2025_04_01_120520_create_tbl_admin_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2025_04_01_120520_create_tbl_booking_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2025_04_01_120520_create_tbl_chat_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2025_04_01_120520_create_tbl_checkout_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2025_04_01_120520_create_tbl_contact_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2025_04_01_120520_create_tbl_history_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2025_04_01_120520_create_tbl_images_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2025_04_01_120520_create_tbl_invoice_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2025_04_01_120520_create_tbl_promotion_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2025_04_01_120520_create_tbl_reviews_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2025_04_01_120520_create_tbl_timeline_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2025_04_01_120520_create_tbl_tours_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2025_04_01_120520_create_tbl_users_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2025_04_01_120520_create_tbl_wishlist_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_booking_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_chat_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_checkout_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_history_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_images_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_invoice_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_reviews_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_timeline_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2025_04_01_120523_add_foreign_keys_to_tbl_wishlist_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2019_12_14_000001_create_personal_access_tokens_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2025_04_02_103902_create_tbl_wishlists_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2025_04_02_103905_add_foreign_keys_to_tbl_wishlists_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2025_04_09_215233_create_tbl_travelguides_table',
                'batch' => 2,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2025_04_19_231025_create_chatbot_responses_table',
                'batch' => 3,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2025_04_22_162718_create_tbl_discount_table',
                'batch' => 4,
            ),
        ));
        
        
    }
}