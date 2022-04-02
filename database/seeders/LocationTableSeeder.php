<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location')->delete();
        
        \DB::table('location')->insert(array (
            0 => 
            array (
                'id' => 1,
                'location' => 'sdfgaa',
                'status' => 1,
                'is_deleted' => 'Y',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-02-23 20:17:58',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'location' => 'aaaabb',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-02-23 20:26:18',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'location' => 'Dexter Mooney',
                'status' => 2,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-02-24 12:41:23',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'location' => 'cuttack',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-03-21 11:23:34',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'location' => 'BBSR',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-03-21 11:24:10',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'location' => 'Jajpur',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-03-21 11:24:29',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'location' => 'puri',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-03-21 11:24:50',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'location' => 'kendrapada',
                'status' => 1,
                'is_deleted' => 'N',
                'modified_at' => NULL,
                'modified_by' => NULL,
                'created_by' => NULL,
                'created_at' => '2022-03-21 11:25:11',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}