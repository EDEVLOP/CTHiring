<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientLocationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_location')->delete();
        
        \DB::table('client_location')->insert(array (
            0 => 
            array (
                'id' => 1,
                'location' => 'BBSR',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-02-23 19:33:36',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'location' => 'Anugul',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-02-23 20:08:51',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'location' => 'jajpurrrr',
                'status' => 1,
                'is_deleted' => 'Y',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-02-24 11:59:33',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}