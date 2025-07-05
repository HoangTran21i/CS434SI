<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblContactTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_contact')->delete();
        
        \DB::table('tbl_contact')->insert(array (
            0 => 
            array (
                'contactId' => 1,
                'fullName' => 'Hoang Tran',
                'phoneNumber' => '123456789',
                'email' => 'minhhoangse6@gmail.com',
                'message' => 'good',
                'isReply' => 'y',
            ),
            1 => 
            array (
                'contactId' => 2,
                'fullName' => 'Hoang Tran',
                'phoneNumber' => '123456789',
                'email' => 'minhhoangse6@gmail.com',
                'message' => 'tư vấn giúp tôi',
                'isReply' => 'n',
            ),
            2 => 
            array (
                'contactId' => 3,
                'fullName' => 'Hoang Tran',
                'phoneNumber' => '123456789',
                'email' => 'minhhoangse6@gmail.com',
                'message' => 'Hello',
                'isReply' => 'n',
            ),
        ));
        
        
    }
}