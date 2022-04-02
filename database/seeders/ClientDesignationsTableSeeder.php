<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientDesignationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_designations')->delete();
        
        \DB::table('client_designations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'client_name' => 'asdfdfgv',
                'mobile' => '123412345',
                'status' => 1,
                'is_deleted' => 'Y',
                'created_at' => '2022-02-23 15:33:17',
                'updated_at' => '2022-02-23 15:33:40',
            ),
            1 => 
            array (
                'id' => 2,
                'client_name' => 'utama',
                'mobile' => '1234569',
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => '2022-03-11 06:10:16',
                'updated_at' => '2022-03-11 06:10:16',
            ),
        ));
        
        
    }
}