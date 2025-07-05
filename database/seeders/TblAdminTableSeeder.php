<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblAdminTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_admin')->delete();
        
        \DB::table('tbl_admin')->insert(array (
            0 => 
            array (
                'adminId' => 1,
                'userName' => 'admin1',
                'password' => '123456',
                'email' => 'minhhoangse6@gmail.com',
                'fullName' => 'Trần Minh Hoàng',
                'address' => 'Đà Nẵng',
                'createdDate' => '2025-03-28 15:17:24',
            ),
        ));
        
        
    }
}