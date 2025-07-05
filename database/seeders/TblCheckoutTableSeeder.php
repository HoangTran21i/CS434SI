<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblCheckoutTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_checkout')->delete();
        
        \DB::table('tbl_checkout')->insert(array (
            0 => 
            array (
                'checkoutId' => 1,
                'bookingId' => 4,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-20 22:44:55',
                'amount' => 5990000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            1 => 
            array (
                'checkoutId' => 2,
                'bookingId' => 5,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-20 22:44:32',
                'amount' => 669000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            2 => 
            array (
                'checkoutId' => 3,
                'bookingId' => 6,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-23 18:11:26',
                'amount' => 11680000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            3 => 
            array (
                'checkoutId' => 4,
                'bookingId' => 7,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-23 23:01:48',
                'amount' => 7970000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            4 => 
            array (
                'checkoutId' => 5,
                'bookingId' => 8,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-25 17:20:27',
                'amount' => 7185000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            5 => 
            array (
                'checkoutId' => 6,
                'bookingId' => 9,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-25 17:20:22',
                'amount' => 14370000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            6 => 
            array (
                'checkoutId' => 7,
                'bookingId' => 10,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-25 17:20:39',
                'amount' => 6580000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            7 => 
            array (
                'checkoutId' => 8,
                'bookingId' => 11,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-26 00:08:39',
                'amount' => 16175000.0,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
            8 => 
            array (
                'checkoutId' => 9,
                'bookingId' => 12,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-27 13:06:43',
                'amount' => 16950000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            9 => 
            array (
                'checkoutId' => 10,
                'bookingId' => 13,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-03-27 15:02:13',
                'amount' => 15020000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            10 => 
            array (
                'checkoutId' => 11,
                'bookingId' => 14,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-22 17:34:32',
                'amount' => 11800000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            11 => 
            array (
                'checkoutId' => 12,
                'bookingId' => 15,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-03 00:08:56',
                'amount' => 8580000.0,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
            12 => 
            array (
                'checkoutId' => 13,
                'bookingId' => 16,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-22 17:34:38',
                'amount' => 8580000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            13 => 
            array (
                'checkoutId' => 14,
                'bookingId' => 17,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-22 17:34:43',
                'amount' => 11800000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            14 => 
            array (
                'checkoutId' => 15,
                'bookingId' => 18,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-03 12:49:33',
                'amount' => 11800000.0,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
            15 => 
            array (
                'checkoutId' => 16,
                'bookingId' => 19,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-03 12:59:31',
                'amount' => 11800000.0,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
            16 => 
            array (
                'checkoutId' => 17,
                'bookingId' => 20,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-03 13:02:36',
                'amount' => 7510000.0,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
            17 => 
            array (
                'checkoutId' => 18,
                'bookingId' => 21,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-03 13:25:25',
                'amount' => 7510000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            18 => 
            array (
                'checkoutId' => 19,
                'bookingId' => 22,
                'paymentMethod' => 'momo-payment',
                'paymentDate' => '2025-04-15 20:47:07',
                'amount' => 10730000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            19 => 
            array (
                'checkoutId' => 20,
                'bookingId' => 23,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-15 21:18:53',
                'amount' => 7980000.0,
                'paymentStatus' => 'n',
                'transactionId' => NULL,
            ),
            20 => 
            array (
                'checkoutId' => 21,
                'bookingId' => 24,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-22 16:48:54',
                'amount' => 7970000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            21 => 
            array (
                'checkoutId' => 22,
                'bookingId' => 25,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-22 16:48:48',
                'amount' => 1200000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            22 => 
            array (
                'checkoutId' => 23,
                'bookingId' => 26,
                'paymentMethod' => 'momo-payment',
                'paymentDate' => '2025-04-23 17:06:09',
                'amount' => 17500000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
            23 => 
            array (
                'checkoutId' => 24,
                'bookingId' => 27,
                'paymentMethod' => 'office-payment',
                'paymentDate' => '2025-04-24 17:16:02',
                'amount' => 29000000.0,
                'paymentStatus' => 'y',
                'transactionId' => NULL,
            ),
        ));
        
        
    }
}