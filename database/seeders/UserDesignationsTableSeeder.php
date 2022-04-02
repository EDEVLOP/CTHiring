<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDesignationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_designations')->delete();
        
        \DB::table('user_designations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'userdesig_name' => 'uttam',
                'mobile' => '9583722121',
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => '2022-03-16 07:12:09',
                'updated_at' => '2022-03-16 09:19:16',
            ),
            1 => 
            array (
                'id' => 2,
                'userdesig_name' => 'puspa',
                'mobile' => '7008582042',
                'status' => 1,
                'is_deleted' => 'Y',
                'created_at' => '2022-03-16 07:29:20',
                'updated_at' => '2022-03-16 07:31:06',
            ),
        ));
        
        
    }
}