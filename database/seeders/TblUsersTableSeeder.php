<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_users')->delete();
        
        \DB::table('tbl_users')->insert(array (
            0 => 
            array (
                'userId' => 9,
                'google_id' => '112398291410005865756',
                'fullName' => 'Minh Hoang Tran',
                'username' => 'user-google',
                'password' => '$2y$10$7MQFz90..IkefzNZyjXSB.EwJB451uYQd.QWJetmNQftjT2jXnd4C',
                'email' => 'minhhoangse6@gmail.com',
                'avatar' => '1742460162.png',
                'phoneNumber' => '123456789',
                'address' => '120 Hoàng Minh Thảo',
                'ipAdress' => NULL,
                'isActive' => 'y',
                'status' => NULL,
                'createdDate' => '2025-03-18 21:58:33',
                'updatedDate' => '2025-03-18 21:58:33',
                'activation_token' => NULL,
            ),
            1 => 
            array (
                'userId' => 12,
                'google_id' => NULL,
                'fullName' => 'Hoang Tran',
                'username' => 'hoang',
                'password' => 'e10adc3949ba59abbe56e057f20f883e',
                'email' => 'tranminhhoang6@dtu.edu.vn',
                'avatar' => '1742478616.jpg',
                'phoneNumber' => '123456789',
                'address' => '120 Hoàng Minh Thảo',
                'ipAdress' => NULL,
                'isActive' => 'y',
                'status' => NULL,
                'createdDate' => '2025-03-20 15:34:47',
                'updatedDate' => '2025-03-20 15:34:47',
                'activation_token' => NULL,
            ),
            2 => 
            array (
                'userId' => 14,
                'google_id' => NULL,
                'fullName' => NULL,
                'username' => 'minhhoang123',
                'password' => 'e10adc3949ba59abbe56e057f20f883e',
                'email' => 'tranminhhoanght21@gmail.com',
                'avatar' => NULL,
                'phoneNumber' => NULL,
                'address' => NULL,
                'ipAdress' => NULL,
                'isActive' => 'y',
                'status' => NULL,
                'createdDate' => '2025-04-24 23:43:04',
                'updatedDate' => '2025-04-24 23:43:04',
                'activation_token' => 'fF1BgOxKk1E8K7ein7l3vdpb1oGs5T49u5ib7dAmCyORZ8ANgwoFx4b0RzpS',
            ),
        ));
        
        
    }
}