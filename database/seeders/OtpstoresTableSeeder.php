<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OtpstoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('otpstores')->delete();
        
        \DB::table('otpstores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'otp' => '163901',
                'mobile_no' => '8895274919',
                'is_deleted' => 'N',
                'created_at' => '2022-03-28 05:47:01',
                'updated_at' => '2022-04-02 09:43:59',
            ),
            1 => 
            array (
                'id' => 2,
                'otp' => '299226',
                'mobile_no' => '4455778899',
                'is_deleted' => 'N',
                'created_at' => '2022-03-28 11:51:55',
                'updated_at' => '2022-03-28 11:51:55',
            ),
        ));
        
        
    }
}