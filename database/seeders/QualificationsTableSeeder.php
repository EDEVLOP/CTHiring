<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifications')->delete();
        
        \DB::table('qualifications')->insert(array (
            0 => 
            array (
                'id' => 1,
                'qualification_name' => 'mca',
                'status' => 1,
                'is_deleted' => 'Y',
                'created_at' => '2022-02-24 05:55:47',
                'updated_at' => '2022-02-24 06:27:43',
            ),
            1 => 
            array (
                'id' => 2,
                'qualification_name' => 'mca',
                'status' => 1,
                'is_deleted' => 'Y',
                'created_at' => '2022-02-24 05:56:37',
                'updated_at' => '2022-02-24 06:27:52',
            ),
            2 => 
            array (
                'id' => 3,
                'qualification_name' => 'mba',
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => '2022-02-24 05:58:07',
                'updated_at' => '2022-02-24 05:58:07',
            ),
            3 => 
            array (
                'id' => 4,
                'qualification_name' => 'Bed',
                'status' => 1,
                'is_deleted' => 'N',
                'created_at' => '2022-02-24 06:24:51',
                'updated_at' => '2022-02-24 06:24:51',
            ),
        ));
        
        
    }
}